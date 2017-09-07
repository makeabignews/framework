<?php
class Controller{
    function def($req,$res){
        $res->send("hello");
    }
    function get($req,$res,$id){
        $res->send($id);
    }
}
?>