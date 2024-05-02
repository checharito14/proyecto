
const modal = document.getElementById('modal');
const imagenProducto = document.querySelector('#modal img');
const botonEspecificaciones = document.querySelector('.btn-modal');
const botonesCategoria = document.querySelectorAll('.boton-categoria');


botonEspecificaciones.addEventListener('click', () => {
 
    modal.showModal();
});


  // Escuchar el clic en cada botón de categoría
botonesCategoria.forEach(boton => {
  boton.addEventListener('click', () => {
    // Obtener la categoría seleccionada
    const categoria = boton.textContent.trim().toLowerCase();
    // Construir la ruta de la imagen de acuerdo a la categoría seleccionada
    const rutaImagen = `../../images/especificaciones/especificaciones_${categoria}.png`;
    // Cambiar la imagen en el modal
    imagenProducto.src = rutaImagen;
    // Mostrar el modal
 
  });
});


window.onclick = function(event) {
  if (event.target == modal) {
    modal.close()
  }
}



