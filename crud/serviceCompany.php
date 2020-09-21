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
}
$serviceCompany = new serviceCompany();
 echo $serviceCompany->read();
