<?php
include "Config.php";

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
        if ($this->link->connect_error) {
            $this->error = "Connection Fail " . $this->link->connect_error;
            die($this->error); // Terminate the script if the connection fails
        } else {
            echo "Database connected successfully";
        }
    }

    // Rest of your class methods...
}

?>
<?php $db = new Database();?>
