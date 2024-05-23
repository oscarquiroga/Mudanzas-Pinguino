var contador = 0;
document.getElementById("bt-menus").onclick=deslisar;
function deslisar(){
    if(contador=1){
        documentget.ElementsByClassName("navH").style.top="-100%"
        contador=0;
    }else{
        document.getElementsByClassName("navH").style.top="100%"
        contador=0;
    }
}