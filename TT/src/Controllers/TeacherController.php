<?php 

namespace Hp\Tt\Controllers;

use Hp\Tt\Commons\Controller;

use Hp\Tt\Models\Teacher;

class TeacherController extends Controller{

   
    public function index(){
        $data['teacher']=(new Teacher)->getALL();

        return $this-> __renderView('teacher.index',$data);

    }
    public function add(){
        if(!empty($_POST)){
            (new Teacher)->insert(
                $_POST['name'],
                $_POST['email'],
                $_POST['phone'],
            );
            header('location: /teacher/');
            exit();

        }
        return $this->__renderView('teacher.add');
        
    }
    public function update($id){
        $teacher=(new Teacher)->getByID($id);

        if(empty($teacher)){
            e404();
        }

        if(!empty($_POST)){
            (new Teacher)->updateByID(
                $id,
                $_POST['name'],
                $_POST['email'],
                $_POST['phone'],
            );
        }
        return $this->__renderView('teacher.update',['teacher'=>$teacher]);
    }
    public function delete($id){
        (new Teacher)->deleteByID($id);
        header('location: /teacher/');
        exit();
    }
    
}