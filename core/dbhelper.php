<?
class DbHelper{

    private $mysql_server_name;
    private $mysql_username;
    private $mysql_password;
    private $mysql_database;

    private $conn;
    function __construct($mysql_server_name,$mysql_username,$mysql_password,$mysql_database){
        $this->mysql_server_name=$mysql_server_name;
        $this->mysql_username=$mysql_username;
        $this->mysql_password=$mysql_password;
        $this->mysql_database=$mysql_database;
        
        $this->conn=mysql_connect($this->mysql_server_name,$this->mysql_username,$this->mysql_password); //连接数据库
        mysql_query("set names 'utf8'"); 
        mysql_select_db($this->mysql_database);
        if(!$this->conn){
            echo "error:conn";
            exit;
        }
    }
}
?>