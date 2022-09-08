var attemp=3;
function validate(){
    var usuar=document.getElementById("usuar").value;
    var password=document.getElementById("password").value;
    if(usuar=="LCP"&& password=="123"){
        alert("Usuario & Contraseña Correctos");
        window.location="home.php";
        return false;
    }
    else{
        attemp--;
    } 
    alert("Usuario & Contraseña Incorrectos")
    if(attemp==0){
        document.getElementById("usuar").disable=true;
        document.getElementById("password").disable=true;
        document.getElementById("sumbit").disable=true;
    }
}