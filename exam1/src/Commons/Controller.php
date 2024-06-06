<?php 

namespace Hp\Exam1\Commons;

use eftec\bladeone\BladeOne;

class Controller{
    public function __renderView($view, $data=[]){
        $templatePath = __DIR__ . '/../Views';
        $compiledPath = __DIR__ . '/../Views/compiles';
        $blade=new BladeOne($templatePath,  $compiledPath); 
        echo $blade->run($view, $data); 
}
}