<?php
function conn_bdd()
{
    // SQL Server Extension Sample Code:
    $connectionInfo = array("UID" => "admin_hr_grp_dev", "pwd" => 'spn+3443,2Pqf#2qU=N=E7Y$Y', "Database" => "DB_RH_Analytic", "CharacterSet" => "UTF-8", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:epsi-i1.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
    }
    else 
    {
        return $conn;
    }

}
require_once('./commun/variable.php');
require_once('function_emploi.php');
require_once('function_data_analyse.php');
?>