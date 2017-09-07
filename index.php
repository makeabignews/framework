<?
require_once './core/res.php';
require_once './core/controller.php';

if(isset($_REQUEST['controller'])){
    $controller=$_REQUEST['controller'];
}else{
    $controller="index";
}

if(isset($_REQUEST['function'])){
    $function=$_REQUEST['function'];
}else{
    $function="def";
}



$controller_file="./controller/$controller.php";
if(file_exists($controller_file)){
    require_once $controller_file;

    if(is_callable(array($controller,$function))){
        $controller->$function($_REQUEST,$res);
    }else{
        $controller->get($_REQUEST,$res,$function);
    }
    
    
}else{
    require_once "./core/404.php";
}
?>