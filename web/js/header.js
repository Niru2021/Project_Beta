function type_compte()
{
    var type_compte = document.getElementById('type_compte').value;
    if(type_compte==1)
    {
        document.location.href="mon_profil.php"
    }
    else if(type_compte==2)
    {
        document.location.href="emploi.php"
    }
    else if(type_compte==3)
    {
        document.location.href="formation.php"
    }
    else
    {
        document.location.href="analyse.php"
    }
}