<?php

function ajout_emploi()
{
    echo "<div class='emploi_2_5'>Ajouter une offre <button class='emploi_2_6' onclick='retour_emploi()'>Retour</button></div>";
    echo '<form action="emploi.php" method="post">';
    
    echo "<table class='emploi_2_1' id='change_canvas'>  
            <tr>  
                <td>
                        Nom du poste :
                </td>
                <td>
                    <input type='text' name='nom_du_poste' required >
                </td>
            </tr>
            <tr>  
                <td>
                        Service :
                </td>
                <td>
                    <select name='service_du_poste' required >";
                for($i=0;$i<sizeof(service);$i++)
                {
                    echo "<option value='".service[$i]."'>".service[$i]."</option>";
                }
                echo"</select>
                </td>
            </tr>
            <tr>  
                <td>
                    Domaine :
                </td>
                <td>
                    <select name='domaine_du_poste' required >";
                    $sql = "select lb_domaine from tb_competences GROUP BY lb_domaine";
                    $conn = conn_bdd();
                    $result = sqlsrv_query($conn, $sql);
                    if($result === false) {
                        die(print_r(sqlsrv_errors(), true));
                    }
                    $i=1;
                    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        echo "<option value='".$i."'>".$row['lb_domaine']."</option>";
                    }
                    echo"</select>
                </td>
            </tr>
            <tr>  
                <td>
                        Salaire Brut annuel :
                </td>
                <td>
                    <input type='number' name='salaire_du_poste'  value='1' requiered>
                </td>
            </tr>      
            <tr>  
                <td>
                        Compétence du poste :
                </td>
                <td >
                    <select class='emploi_2_2' name='competence_0' required >";
                    echo "<option value='null'>---</option>";
                    $sql = "select id_competence, lb_nom_competence from tb_competences";
                    $conn = conn_bdd();
                    $result = sqlsrv_query($conn, $sql);
                    if($result === false) {
                        die(print_r(sqlsrv_errors(), true));
                    }
                    $i=1;
                    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        echo "<option value='".$row['id_competence']."'>".$row['lb_nom_competence']."</option>";
                    }
                    echo"</select>
                    
                    <select class='emploi_2_2' name='competence_1' required >";
                    echo "<option value='null'>---</option>";
                    $sql = "select id_competence, lb_nom_competence from tb_competences";
                    $conn = conn_bdd();
                    $result = sqlsrv_query($conn, $sql);
                    if($result === false) {
                        die(print_r(sqlsrv_errors(), true));
                    }
                    $i=1;
                    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        echo "<option value='".$row['id_competence']."'>".$row['lb_nom_competence']."</option>";
                    }
                    echo"</select>
                    
                    <select class='emploi_2_2' name='competence_2' required >";
                    echo "<option value='null'>---</option>";
                    $sql = "select id_competence, lb_nom_competence from tb_competences";
                    $conn = conn_bdd();
                    $result = sqlsrv_query($conn, $sql);
                    if($result === false) {
                        die(print_r(sqlsrv_errors(), true));
                    }
                    $i=1;
                    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        echo "<option value='".$row['id_competence']."'>".$row['lb_nom_competence']."</option>";
                    }
                    echo"</select>
                    
                    <select class='emploi_2_2' name='competence_3' required >";
                    echo "<option value='null'>---</option>";
                    $sql = "select id_competence, lb_nom_competence from tb_competences";
                    $conn = conn_bdd();
                    $result = sqlsrv_query($conn, $sql);
                    if($result === false) {
                        die(print_r(sqlsrv_errors(), true));
                    }
                    $i=1;
                    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        echo "<option value='".$row['id_competence']."'>".$row['lb_nom_competence']."</option>";
                    }
                    echo"</select>
                    
                    <select class='emploi_2_2' name='competence_4' required >";
                    echo "<option value='null'>---</option>";
                    $sql = "select id_competence, lb_nom_competence from tb_competences";
                    $conn = conn_bdd();
                    $result = sqlsrv_query($conn, $sql);
                    if($result === false) {
                        die(print_r(sqlsrv_errors(), true));
                    }
                    $i=1;
                    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        echo "<option value='".$row['id_competence']."'>".$row['lb_nom_competence']."</option>";
                    }
                    echo"</select>
                    
                    <select class='emploi_2_2' name='competence_5' required >";
                    echo "<option value='null'>---</option>";
                    $sql = "select id_competence, lb_nom_competence from tb_competences";
                    $conn = conn_bdd();
                    $result = sqlsrv_query($conn, $sql);
                    if($result === false) {
                        die(print_r(sqlsrv_errors(), true));
                    }
                    $i=1;
                    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        echo "<option value='".$row['id_competence']."'>".$row['lb_nom_competence']."</option>";
                    }
                    echo"</select>
                    
                    <select class='emploi_2_2' name='competence_6' required >";
                    echo "<option value='null'>---</option>";
                    $sql = "select id_competence, lb_nom_competence from tb_competences";
                    $conn = conn_bdd();
                    $result = sqlsrv_query($conn, $sql);
                    if($result === false) {
                        die(print_r(sqlsrv_errors(), true));
                    }
                    $i=1;
                    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        echo "<option value='".$row['id_competence']."'>".$row['lb_nom_competence']."</option>";
                    }
                    echo"</select>
                    
                    <select class='emploi_2_2' name='competence_7' required >";
                    echo "<option value='null'>---</option>";
                    $sql = "select id_competence, lb_nom_competence from tb_competences";
                    $conn = conn_bdd();
                    $result = sqlsrv_query($conn, $sql);
                    if($result === false) {
                        die(print_r(sqlsrv_errors(), true));
                    }
                    $i=1;
                    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        echo "<option value='".$row['id_competence']."'>".$row['lb_nom_competence']."</option>";
                    }
                    echo"</select>
                    
                    <select class='emploi_2_2' name='competence_8' required >";
                    echo "<option value='null'>---</option>";
                    $sql = "select id_competence, lb_nom_competence from tb_competences";
                    $conn = conn_bdd();
                    $result = sqlsrv_query($conn, $sql);
                    if($result === false) {
                        die(print_r(sqlsrv_errors(), true));
                    }
                    $i=1;
                    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        echo "<option value='".$row['id_competence']."'>".$row['lb_nom_competence']."</option>";
                    }
                    echo"</select>
                    
                    <select class='emploi_2_2' name='competence_9' required >";
                    echo "<option value='null'>---</option>";
                    $sql = "select id_competence, lb_nom_competence from tb_competences";
                    $conn = conn_bdd();
                    $result = sqlsrv_query($conn, $sql);
                    if($result === false) {
                        die(print_r(sqlsrv_errors(), true));
                    }
                    $i=1;
                    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                        echo "<option value='".$row['id_competence']."'>".$row['lb_nom_competence']."</option>";
                    }
                    echo"</select>
                </td>
            </tr>        
            <tr>
                <td colspan='2' class='emploi_2_3'>
                    <input type='submit' class='emploi_2_4' value='Valider'/> 
                </td>
            </tr>
        </table>
        </form>" ;  
}

function home_emploi()
{
    echo "<div class='emploi_1_2'>Les offres disponibles <button class='emploi_1_3' onclick='ajout_emploi()'>Ajouter une offre</button></div>";
    echo "<table class='emploi_1_1' id='change_canvas'>  
            <tr class='emploi_1_5'>  
                <td>
                    N°Poste
                </td>
                <td>
                    Nom de poste
                </td>
                <td>
                    Service
                </td>
                <td>
                    Domaine
                </td>
                <td>
                    Salaire brut
                </td>
                <td>
                    Modifier
                </td>
            </tr>";
            $sql = "select * from tb_emploi";
            $conn = conn_bdd();
            $result = sqlsrv_query($conn, $sql);
            if($result === false) {
                die(print_r(sqlsrv_errors(), true));
            }
            $i=1;
            while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                echo "<tr><td>";
                echo $row['id_emploi']."</td>";
                echo "<td>".$row['lb_nom_du_poste']."</td>";
                echo "<td>".$row['lb_service']."</td>";
                echo "<td>".$row['lb_domaine']."</td>";
                echo "<td>".$row['lb_brut_annuel']."</td>";
                echo "<td><button class='emploi_1_4'>Modifier</button></td>";
                echo "</tr>";
            }
            echo "</table>";
}