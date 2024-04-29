document.addEventListener("DOMContentLoaded", function() {
    const botonesCategorias = document.querySelectorAll(".boton-categoria");

    botonesCategorias.forEach(boton => {
        boton.addEventListener("click", function() {
            const id = this.id; 
           
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        const response = xhr.responseText;
                        if (response.startsWith("ID de categoría")) {
                            alert(response);
                        } else {
                            document.getElementById("contenedor-productos").innerHTML = response;
                            botonesCategorias.forEach(b => b.classList.remove("active"));
                            boton.classList.add("active");
                        }
                    } else {
                        console.error("Error al obtener los productos")
                    }
                }
            };
            xhr.open("GET", "index.php?id="+id, true);
            xhr.send();
        });
    });
});
