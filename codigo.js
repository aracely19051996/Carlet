function change(){
if (document.frm1.habilitarDeshabilitar[1].checked===true){

document.getElementById("retorno").disabled = true;

}else{
document.getElementById("retorno").disabled = false;
}
}
	


function mostrar(){
        document.getElementById("cont2").style.display="block";
    }
function ocultar(){
        document.getElementById("cont2").style.display="none";
    }

function mostrar_ocultar(){
            var cont2=document.registerElementById("cont2");
            if(cont2.style.display=="none"){
                mostrar();
                document.getElementById("boton").value="ocultar";
                
            }
            else{
                ocultar();
                document.getElementById("boton").value="Mostrar";
            }
        }
function mostrar(id){
    if(document.getElementById(id).style.display=="block"){
      document.getElementById(id).style.display=="none"  ;
    }else {document.getElementById(id).style.display=="block"}
}

function myFunction() {
    var x = document.getElementById("n1").value;
    document.getElementById("demo").innerHTML = x;
}
