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