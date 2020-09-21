<?php

Class db_connect{
    /* Database connection start */
    protected $servername = 'localhost';
    protected $username = 'root';
    protected $password = "";
    protected $dbname = 'homeplanning';
    protected $conn;
     function getConnstring(){
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        } else {
            $this->conn = $con;
        }
        return $this->conn;
    }
}
?>
