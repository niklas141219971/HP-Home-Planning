<?php

Class db_connect{
    /* Database connection start */
    protected $servername = 'localhost';
    protected $username = 'root';
    protected $password = "";
    protected $dbname = 'homeplanning';
    protected $conn;
     function __construct()  {
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
$db = new db_connect();
$sql = "SELECT id FROM  users";
if (mysqli_query($db, $sql)) {
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
foreach ($db->query($sql) as $row) {
    $userId = $row['id'];
    $sql = "select * from users where id = " . $userId;
    mysqli_set_charset($db, "utf8");
    if (mysqli_query($db, $sql)) {
        foreach ($db->query($sql) as $row1) {
        }
        echo $row1['name'];

    }
}
?>
