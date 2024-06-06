<?php 

namespace Hp\Exam1\Controllers;

use Hp\Exam1\Commons\Controller;

use Hp\Exam1\Models\Hotels;

class HotelsController extends Controller{
    public function index(){

        $data['hotels']=(new Hotels)->getAll();

        return $this-> __renderView('hotels.index',$data);

    }
    public function add(){
        if(!empty($_POST)){
            (new Hotels)->insert(
                $_POST['name'],
                $_POST['address'],
                $_POST['price_avg']
            );
            header('location: /hotels/');
            exit();
        }
        return $this-> __renderView('hotels.add');
        
    }
    public function updateByID($id){
        $hotels=(new Hotels)->getByID($id);
        if(empty($hotels)){
            e404();
        }
        if(!empty($_POST)){
            (new Hotels)->updateByID(
                $id,
                $_POST['name'],
                $_POST['address'],
                $_POST['price_avg']
            );

        }
        return $this->__renderView('hotels.update',['hotels'=>$hotels]);
        
    }
    public function delete($id){
        (new Hotels)->deleteById($id);
        header('location: /hotels/');
        exit();
        
    }

}