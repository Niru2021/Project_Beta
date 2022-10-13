<?php

function ajout_emploi()
{
    echo '<form action="emploi.php" method="post">';
    echo '<input id="site" name="site" type="hidden">';
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
                    Service :
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
                        Signature :
                </td>
                <td>
                    <div>
                        <input type='radio' id='signature_mail_change_remise_telephone_stock' name='signature'  value='1' checked>
                        <label for='Mail'>Mail</label>
                    </div>
                    <div>
                        <input type='radio' id='signature_immediat_change_remise_telephone_stock' name='signature' value='2' >
                        <label for='Immediat'>Immédiat</label>
                    </div>
                </td>
            </tr>
            <tr>  
                <td>
                        Confirmer la saisie :
                </td>
                <td>
                    <input type='checkbox' required>
                </td>
            </tr>
            <tr>
                <td colspan='2' class='change_3_3'>
                    <input type='submit' class='change_3_2' value='Valider'/>
                </td>
            </tr>
        </table>
        </form>" ;  
}