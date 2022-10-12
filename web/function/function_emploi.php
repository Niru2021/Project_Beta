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
                        Mot de passe iPhone :
                </td>
                <td>
                    <input type='text' name = 'mdp_iphone_change_remise_telephone_stock' required class='change_3_4' id='mdp_iphone_change_remise_telephone_stock' maxlength='20'>
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