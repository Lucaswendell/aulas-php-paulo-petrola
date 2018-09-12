//aula de Ajax
function iniciandoAjax(){ //iniciando Ajax
	var objAjax = false; //variavel que vai receber o objeto ajax
	if(window.XMLHttpRequest){// Firefox e demais browsers
		objAjax = new XMLHttpRequest();
	}else if(window.ActiveXObject){ //verifica se é o IE                                         
		try{// versão mais atualizada da Microsoft
			objAjax = new ActiveXObject("Msxml.XMLHTTP");
		}catch(e){
			try{
				objAjax = new ActiveXObject("Microsoft.XMLHTTP");
			}catch(e){
				objAjax = false;
			}
		}
	}else{
		alert("Seu browser não suporta AJAX.");
	}
	return objAjax;
}
function mostraResposta(ajax, elemento){//passando o elemento como parâmetro e o ajax
	if(ajax.readyState != 3){
		elemento.innerHTML = "carregando...";
	}
	if(ajax.readyState == 4){
		if(ajax.status == 200){
			elemento.innerHTML= ajax.responseText;
		}else{
			alert("Erro no servidor");
		}
	}
};
function requisitarArquivo(elemento, arquivo, arquivo2){
	var ajax = iniciandoAjax();
	var url = "login.php?nome="+arquivo+"&pass="+arquivo2;
    if(ajax){
		ajax.onreadystatechange = function(){ //é executado quando o estado da requisição muda
			mostraResposta(ajax, elemento);
		}
	}
	ajax.open("GET", url);
	ajax.send(null); 
}