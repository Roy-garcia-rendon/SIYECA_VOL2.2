let celular = document.getElementById("num_tel")

celular.addEventListener('keypress', (event) => {
  event.preventDefault()
  let valorTecla = String.fromCharCode(event.keyCode)
  let valorParsed = parseInt(valorTecla)
  
  if (valorParsed || valorParsed === 0) {
    celular.value = celular.value + valorParsed
  }
})