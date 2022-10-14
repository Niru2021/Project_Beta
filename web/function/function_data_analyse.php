<?php

    function getCollaborateurs(){
        $sql = "select count(*) as countOfCollaborateurs from tb_collaborateurs";
        $conn = conn_bdd();
        $result = sqlsrv_query($conn, $sql);
        if($result === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
            return $row;
        }
    }

    function getCollaborateursAbs(){
        $sql = "select count(*) as countOfCollaborateursAbs from tb_collaborateurs where lb_presence = 'AT' or lb_presence='AM'";
        $conn = conn_bdd();
        $result = sqlsrv_query($conn, $sql);
        if($result === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
            return $row;
        }
    }

    function getCollaborateursTt(){
        $sql = "select count(*) as countOfCollaborateursTt from tb_collaborateurs where lb_presence = 'TT'";
        $conn = conn_bdd();
        $result = sqlsrv_query($conn, $sql);
        if($result === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
            return $row;
        }
    }

    function getCollaborateursPresentSurSite(){
        $sql = "select count(*) as countOfCollaborateursPresentSurSite from tb_collaborateurs where lb_presence = 'SG'";
        $conn = conn_bdd();
        $result = sqlsrv_query($conn, $sql);
        if($result === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
            return $row;
        }
    }
    function getEmploi(){
        $sql = "select count(*) as countOfEmploi from tb_emploi";
        $conn = conn_bdd();
        $result = sqlsrv_query($conn, $sql);
        if($result === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
           return $row;
        }
    }

    function calcPourcent($value1, $value2){
        $valeur_p = 100;
        $result = ($value1/$value2) * $valeur_p;
        return round($result);
    }




