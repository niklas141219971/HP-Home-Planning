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
$coun = new db_connect();
$db = $coun->getConnstring();

$suche = $db->prepare("SELECT service_company_id, service_company_name,phone_nr,email,description FROM service_company");
$suche->execute();
$suche->bind_result($service_company_id,$service_company_name,$phone_nr,$email,$description);

$data = [];

while ($suche->fetch()) {

    $data_arr = array("id" => $service_company_id,
                    "service_company_name" => $service_company_name,
                    "phone_nr" => $phone_nr ,
                    "email" => $email ,
                    "description" => $description );
    array_push($data, $data_arr);
}

echo json_encode($data);
?>
