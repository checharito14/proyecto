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