const btnAbrirModal = document.querySelector(".btn-modal");
const modal = document.querySelector("#modal");

btnAbrirModal.addEventListener("click",()=>{
    modal.showModal()
})


window.onclick = function(event) {
    if (event.target == modal) {
      modal.close()
    }
  }