<?php

class DB {
    //connection properties

    //localhost mysql db:
    // protected $host = '127.0.0.1';
    // protected $user = 'root';
    // protected $password = '';
    // protected $database = 'web_assignment';

    //new remote mysql db:
    protected $host = 'remotemysql.com';
    protected $user = 'IgsDXkyUxz';
    protected $password = 'M2GPkbmRAo';
    protected $database = 'IgsDXkyUxz';
    //goto: https://remotemysql.com/phpmyadmin/index.php?db=IgsDXkyUxz 
    //and login with: username= IgsDXkyUxz / pass = M2GPkbmRAo

    //note: "You must update or insert data in your database at least once ever 30 days to remain active."

    //connection prop
    public $con = null;

    public function __construct() {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error) {
            echo "Fail" .$this->con->connect_error;
        }
        // echo 'Connection successfully!';
    }

    public function __destruct() {
        $this->closeConnection();
    }

    protected function closeConnection() {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }
}
