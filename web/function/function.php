<?php
function conn_bdd()
{
	echo "test";

    // SQL Server Extension Sample Code:
    $connectionInfo = array("UID" => "admin_hr_grp_dev", "pwd" => 'spn+3443,2Pqf#2qU=N=E7Y$Y', "Database" => "DB_RH_Analytic", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:epsi-i1.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    
    $sql = "select lb_domaine from tb_competences GROUP BY lb_domaine";
    $result = sqlsrv_query($conn, $sql);
    if($result === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    #Fetching Data by array
    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
        print_r($row);
    }

}
require_once('./commun/variable.php');
require_once('function_emploi.php');
?>