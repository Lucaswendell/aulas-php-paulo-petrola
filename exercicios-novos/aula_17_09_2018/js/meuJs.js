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
    var arraye = new Array();
    //senha
    if(pass1 == ""){
        document.getElementById("pass1S").innerHTML = "campo vazio"; 
        erro++;
    }else{
        document.getElementById("pass1S").innerHTML = ""; 
    }
    //usr
    if(urs == ""){
        document.getElementById("usrS").innerHTML = "Campo usuario vazio";
        erro++;
    }else if(urs.length < 5){
        document.getElementById("usrS").innerHTML = "Usuário com no minimo 5 caracteres";
        erro ++;
    }else{
        document.getElementById("usrS").innerHTML = "";
    }
    //check
    if(!agree){
        document.getElementById("agreeS").innerHTML = "Aceite os termos";
        erro++;
    }else{
       document.getElementById("agreeS").innerHTML = "";
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
    }else{
        document.getElementById("sexoS").innerHTML = "";
    }
    //data
    if(date == ""){
        document.getElementById("dateS").innerHTML = "Selecione a sua data de nacimento";
        erro++;
    }else{
        document.getElementById("dateS").innerHTML = "";
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
function senhaCaractere(){
    var span = document.getElementById("pass1S");
    var pass1 = document.getElementById("pass");
    if(pass1.value.length < 8){  
        span.innerHTML = "senha com no minimo 8 caracteres. Falta "+(8-pass1.value.length)+" caracteres";
        pass1.style.borderColor = "#ff0000";
    }else{
        span.innerHTML = "";
        pass1.style.borderColor = "#02fc2c";
    }
}
function igualSenha(){
    var span2 = document.getElementById("pass2S");
    var pass1 = document.getElementById("pass").value;
    var pass2 = document.getElementById("pass2");
    if(pass1 !== pass2.value){
        span2.innerHTML = "senhas diferentes";
        pass2.style.borderColor = "#ff0000";
    }else{
        span2.innerHTML = "";
        pass2.style.borderColor = "#02fc2c";
    }
}