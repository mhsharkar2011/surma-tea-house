<?php
include_once "Config.php";
class Database
{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $password = DB_PASS;
    public $dbname = DB_NAME;

    public $link;
    public $error;

    public function __construct()
    {
        $this->getConnection();
    }

    private function getConnection()
    {
        $this->link = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        if (!$this->link) {
            $this->error = "Connection Fail " . $this->link->connect_error;
            die($this->error);
        }
    }

}

?>




<?php 
 $db = new Database();
 $query = "SELECT * FROM tbl_testimonial";
 $read = $db->select($query);
?>

<?php 
if(isset($_GET['msg'])){
 echo "<span style='color:green'>".$_GET['msg']."</span>";
}
?>