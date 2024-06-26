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

                        const btnAbrirModalCoti = document.querySelectorAll(".producto-mas-info");
                        const modalCoti = document.querySelector("#modal-coti");
                        
                        
                        btnAbrirModalCoti.forEach(btn=>{
                            btn.addEventListener("click",()=>{
                            modalCoti.showModal()
                          })
                        })
                      
                      
                      
                        window.onclick = function(event) {
                            if (event.target == modalCoti) {
                              modalCoti.close()
                            }
                        }
                        
                        const cerrarModal = document.getElementById("cerrar")

                        cerrarModal.onclick = function(event){
                            modalCoti.close()
                          }
                          

                        const openModalButtons = document.querySelectorAll('.btn-abrir-modal-coti');

                        openModalButtons.forEach(button => {
                            button.addEventListener('click', () => {
                                const productName = button.dataset.productName;
                                const modalTitle = modalCoti.querySelector('h3');
                                modalTitle.textContent = `Producto a cotizar: ${productName}`;
                            });
                        });
                    


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




