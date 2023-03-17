// Obtenemos el elemento de el boton y le agregamos un evento al darle click y al dar clic ejecutara la funcion scroolUp

document.getElementById("button-up").addEventListener("click", scroolUp);

function scroolUp() {

  // Obtiene la posicion de el scrool

  var currentScrool = document.documentElement.scrollTop;

  // Si es mayor a 0 el scrool agrega animacion

  if (currentScrool > 0) {
    window.requestAnimationFrame(scroolUp);

    // Esto hace que se vaya hasta arriba 

    window.scrollTo(0, currentScrool - currentScrool / 15);
  }
}

buttonUp = document.getElementById("button-up");

// Si el scroll es mayor a 800 mse mostrara si no, se ocultara

window.onscroll = function () {
  var scroll = document.documentElement.scrollTop;

  if (scroll > 800) {
    buttonUp.style.transform = "scale(1)";
  } else if (scroll < 800) {
    buttonUp.style.transform = "scale(0)";
  }
};