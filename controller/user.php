<?php
class user extends Controller{
    function def_GET($req,$res){
        //$res->send("hello!");
        $res->render("hello");
    }
    function reg_POST($req,$res){
        //$res->send("hello!");
        var_dump($_POST['user_name']);
        //$res->render("user_reg");
    }
    function reg_GET($req,$res){
        //$res->send("hello!");
        $res->render("user_reg");
    }
    function get_GET($req,$res,$id){
        $res->json_mode();
		$json=$this->dbHelper->get_json("select * from users where id='$id'");
		$res->send($json);
	}
}
?>