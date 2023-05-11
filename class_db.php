<?php
class Db {

    private $db ;

    function __construct ($hostname, $dbname, $username,$password )
    {
  
        $this->db = new PDO ("mysql:host=".$hostname.";dbname=".$dbname, $username, $password);
    }

    public function delete ($table, $id)
    {
        // $this->db->prepare ....
        echo "delete";
    }

}

$db = new Db("localhost", "projet_annonces", "root", "") ;
$db->delete("users", 1);
?>