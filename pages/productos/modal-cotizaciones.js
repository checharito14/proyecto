const btnAbrirModalCoti = document.querySelectorAll(".producto-mas-info");
const modalCoti = document.getElementById('modal-coti');
const cerraModal = document.getElementById('cerrar')

btnAbrirModalCoti.forEach(btn => {
  btn.addEventListener("click", () => {
    modalCoti.showModal()
  })
})



window.onclick = function (event) {
  if (event.target == modalCoti) {
    modalCoti.close()
  }
}

cerraModal.onclick = function (event) {
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


