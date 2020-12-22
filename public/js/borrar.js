function borrar(id){
    let fila = "registro_" + id;
    ocultar(fila);
  }

  function ocultar(fila){
    let elemento = document.getElementById(fila);
    elemento.style.display = "none";
  }
