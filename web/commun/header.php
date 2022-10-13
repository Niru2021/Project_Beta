<?php
require_once('variable.php');
require_once('./function/function.php');
?>
<!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <link rel="stylesheet" href="style/style.css">
            <link rel="icon" href="image/favicon.png" />
            <script type="text/javascript" src="js/header.js"></script>
            <title>RH Analytics</title>
        </head>
        <body>  
        <div class="barre_du_haut">    
            <div class="barre_gauche">
                <img src="image/logo.png" onclick='document.location.href = "index.php"'></img>
            </div>
            <div class="barre_droit">  
                <table>
                    <tr>
                    <td>
                    <select name="type_compte" id="type_compte" onchange='type_compte()'>
                        <option value="0">Navigation</option>
                        <option value="1">Mon profil</option>
                        <option value='2'>Emploie</option>
                        <option value='3'>Formation</option>
                        <option value='4'>Analyse</option>
                    </select>
                    </td>
                    <td>
                    <div id="nom_prenom">Victor MOHANDI</div>
                    </td>
                    <td>
                        <a href="deconnexion.php">
                            <div class="log-out">
                            </div>
                        </a>
                    </td>
                    </tr>
                </table>
            </div>
        </div>