var comentarioInv = document.querySelectorAll(".comentario-inv-row");

mostrar3Comentarios();

function mostrar3Comentarios(){
    for(var i = 0; i < 3; i++){
        comentarioInv[i].classList.remove("comentario-inv");
    }        
    return true;
}

function mostrarMais(){
    for(var i = 3; i < 6 ; i++){
        var comentario = comentarioInv[i];    
        comentario.classList.remove("comentario-inv");
        comentario.classList.add("fade-in");
    }
    return true;
}





