<?php
function ajout_emploi()
{
    echo '<form action="emploi.php" method="post">';
    echo '<input id="site" name="site" type="hidden">';
    echo "<table class='emploi_2_1' id='change_canvas'>  
            <tr>
                <td>
                    Identifiant :
                </td>
                <td>
                    <input type='text' class='change_3_4' id='Search_ID' maxlength='10'> <button class='change_3_1' onclick='change_recherche_id()'>Recherche</button>
                </td>
            </tr>
            <tr>  
                <td>
                </td>
                <td>
                    <select name='resultat_id' required class='change_3_5' id='resultat_search_id'>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Numéro de Série :
                </td>
                <td>
                    <input type='text' class='change_3_4' id='sn_change_remise_telephone_stock' maxlength='20'> <button class='change_3_1' onclick='change_recherche_tel()'>Recherche</button>
                </td>
            </tr>
            <tr>  
                <td>
                </td>
                <td>
                    <select name='resultat_sn' required class='change_3_5' id='resultat_search_sn'>
                    </select>
                </td>
            </tr>
            <tr>  
                <td>
                        Numéro :
                </td>
                <td>
                    <input type='text' name='num_iphone_change_remise_telephone_stock' required class='change_3_4' id='num_change_remise_telephone_stock' minlenght='10' maxlength='10' onchange='change_verif_num()'> <div id='change_verif_num'></div>
                </td>
            </tr>
            <tr>  
                <td>
                        Mot de passe iCloud :
                </td>
                <td>
                    <input type='text' name ='mdp_icloud_change_remise_telephone_stock' required class='change_3_4' id='mdp_icloud_change_remise_telephone_stock' maxlength='20'>
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