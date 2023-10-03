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
        } else {
            echo "Database connected successfully";
        }
    }

    // Select or Read data
    public function select($query)
    {
        $result = $this->link->query($query) or die($this->link->error . __LINE__);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    // Insert data
    public function insert($query)
    {
        $insert_row = $this->link->query($query) or
            die($this->link->error . __LINE__);
        if ($insert_row) {
            return $insert_row;
        } else {
            return false;
        }
    }

    // Update data
    public function update($query)
    {
        $update_row = $this->link->query($query) or
            die($this->link->error . __LINE__);
        if ($update_row) {
            return $update_row;
        } else {
            return false;
        }
    }

    // Delete data
    public function delete($query)
    {
        $delete_row = $this->link->query($query) or
            die($this->link->error . __LINE__);
        if ($delete_row) {
            return $delete_row;
        } else {
            return false;
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