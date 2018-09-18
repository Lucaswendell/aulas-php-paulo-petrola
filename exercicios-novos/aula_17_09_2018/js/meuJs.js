//verificar todos os elementos
function verificarForm(event){
    var pass1 = document.getElementById("pass").value;
    var pass2 = document.getElementById("pass2").value;
    var urs = document.getElementById("usr").value;
    var email = document.getElementById("email").value;
    var sexo = document.getElementsByName("sexo");
    var sexo2 = false;
    var agree = document.getElementById("agree").checked;
    var date = document.getElementById("date").value;
    var erro=0;
    var arrays = new Array();
    var arraye = new Array();
    //senha
    if(pass1 == ""){
        arrays.push("Campo senha vazio")
        erro++;
    }
    if(pass1.length < 8){  
        arrays.push("Senha com no minimo 8 caracteres");
        erro++;
    }
    if(pass1 != pass2){
        document.getElementById("pass2S").innerHTML = "Senhas diferentes";
        erro++;
    }
    document.getElementById("pass1S").innerHTML = arrays; 
    //usr
    if(urs == ""){
        document.getElementById("usrS").innerHTML = "Campo usuario vazio";
        erro++
    }
    //check
    if(!agree){
        document.getElementById("agreeS").innerHTML = "Aceite os termos";
        erro++;
    }
    //sexo
    for(var i=0;i<sexo.length;i++){
        if(sexo[i].checked == true){
            sexo2 = sexo[i].value;
            break;
        }
    }
    if(sexo2 == false){
        document.getElementById("sexoS").innerHTML = "Selecione o sexo";
        erro++;
    }
    //data
    if(date == ""){
        document.getElementById("dateS").innerHTML = "Selecione a sua data de nacimento";
        erro++;
    }
    //email
    if(email == ""){
        arraye.push("Campo E-mail vazio");
        erro++;
    }
    if(email.indexOf("@") == -1 || email.indexOf(".") == -1){
        arraye.push("E-mail invalido");
        erro++;
    }
    document.getElementById("emailS").innerHTML = arraye;
    if(erro > 0){
        return false;
    }else{
        return true;
    }
}   