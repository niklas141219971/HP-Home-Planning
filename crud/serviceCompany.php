<?php
require_once "../database/mysqli.construct.php";
$coun = new db_connect();
$db = $coun->getConnstring();

class serviceCompany
{
function read(){
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
    $db->close();
    return json_encode($data);

}
    function create($service_company_name, $phone_nr, $email, $description)
    {
        $coun = new db_connect();
        $db = $coun->getConnstring();
        // prepare and bind
        $stmt = $db->prepare("INSERT INTO `service_company`(`service_company_name`, `phone_nr`, `email`, `description`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $service_company_name, $phone_nr, $email,$description );
//        mysqli_set_charset($db, "utf8");
        $stmt->execute();
        echo "New records created successfully";

        $stmt->close();
        $db->close();
    }
}
$serviceCompany = new serviceCompany();
echo $serviceCompany->read();
if(isset($_POST['createCommpany']))
{
    $serviceCompany->create($_POST["name"],$_POST["phone_number"],$_POST["email"],$_POST["description"]);
//    echo '<script type="text/javascript">window.location.href = "../src/index.php";</script>';
}
