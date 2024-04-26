const botonesCategorias = document.querySelectorAll(".boton-categoria");


botonesCategorias.forEach(boton =>{
    boton.addEventListener("click", (e)=>{

        botonesCategorias.forEach(boton => boton.classList.remove("active"));

        e.currentTarget.classList.add("active");
    })
})