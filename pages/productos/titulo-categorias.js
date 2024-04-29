const todosProductos = document.getElementById("todosProductos")
const malacates = document.getElementById("malacates")
const bombas = document.getElementById("bombas")
const poleas = document.getElementById("poleas")
const titulo = document.getElementById("titulo-principal")

todosProductos.addEventListener("click",()=>{
  titulo.textContent = "Todos los productos"
})

malacates.addEventListener("click",()=>{
  titulo.textContent = "Malacates"
})


bombas.addEventListener("click",()=>{
  titulo.textContent = "Bombas"
})


poleas.addEventListener("click",()=>{
  titulo.textContent = "Poleas"
})