function verifica(){
    document.getElementById("img").value = null;
    document.getElementById("img").onchange = function(){
        document.getElementById("imgname").innerHTML=document.getElementById("img").value;
    }
}

