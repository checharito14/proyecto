document.addEventListener('DOMContentLoaded', function() {
    const categorias = document.querySelectorAll('.categoria');
    const titulo = document.getElementById('titulo');
  
    categorias.forEach(function(categoria) {
      categoria.addEventListener('click', function(event) {
        event.preventDefault();
        const categoriaSeleccionada = this.dataset.categoria;
        cambiarTitulo(categoriaSeleccionada);
      });
    });
  
    function cambiarTitulo(categoria) {
      // Aquí puedes definir los títulos correspondientes a cada categoría
      let nuevoTitulo;
      switch (categoria) {
        case 'categoria1':
          nuevoTitulo = 'Todos los productos';
          break;
        case 'categoria2':
          nuevoTitulo = 'Malacates';
          break;
        case 'categoria3':
          nuevoTitulo = 'Bombas';
          break;
        default:
          nuevoTitulo = 'Poleas';
          break;
      }
      // Cambiar el contenido del título
      titulo.textContent = nuevoTitulo;
    }
  });
  