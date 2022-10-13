/****choix 1 ou 2 pour les RH ********/
function ajout_emploi()
{
    document.getElementById("corps_emploi").innerHTML ='<div class="loader"></div>';
    var http = new XMLHttpRequest();
    http.onreadystatechange = function()
    {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("corps_emploi").innerHTML = this.responseText;
        }
    };
    http.open("POST", "ajax.php", true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("ajout_emploi='0'");
}
function voir_emploi()
{
    document.getElementById("corps_emploi").innerHTML ='<div class="loader"></div>';
    var http = new XMLHttpRequest();
    http.onreadystatechange = function()
    {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("corps_emploi").innerHTML = this.responseText;
        }
    };
    http.open("POST", "ajax.php", true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send('voir_emploi="0"');
}