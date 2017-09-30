<?php
class question extends Controller{
    function def($req,$res){
        //$res->send("hello!");
        $res->render("hello");
    }
    function get($req,$res,$id){
        $res->json_mode();
		$json=$this->dbHelper->get_json("select * from questions where id='$id'");
		$res->send($json);
	}
}
?>