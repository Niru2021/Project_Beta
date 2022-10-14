<?php
require_once('function/function.php');
if(isset($_POST['ajout_emploi']))
{
    ajout_emploi();
}
else if(isset($_POST['voir_emploi']))
{
    echo'test2';
}
else if(isset($_POST['competence_emploi']))
{
    competence_emploi($_POST['competence_emploi']);
}