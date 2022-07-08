function adicionarTinta(){     
    var novaTinta = $("#tintas").children().first().clone();   
    $("#tintas").append(novaTinta);   
}

function removerTinta(botao){    
   var quantidadeTintas= document.getElementById("tintas").childElementCount;
   if(quantidadeTintas==1){
        alert("A última tinta não pode ser removida");
    }else{
        $(botao).parent().remove();
    }    
}
