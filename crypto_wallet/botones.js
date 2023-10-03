var i;
function contadormas(iddeinput){ 
    var cant = document.getElementById(iddeinput); 
        if(cant.value>=1){
            i = cant.value;
        }else{
            if(cant.value == "0"){i = 0;}
        }
    i++; 
    cant.value = i;
}
function contadormenos(iddeinput){
    var cant = document.getElementById(iddeinput); 
    if(cant.value>1){
        i = cant.value;
        i--;
        cant.value = i;
    }else{
        cant.value="0";
    }
}