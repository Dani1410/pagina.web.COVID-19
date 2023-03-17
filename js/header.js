// Si el scroll es mayor a 620 se le agregara una clase a el header y en css se agregaran los estilos a esa clase

window.addEventListener("scroll", function(){
    var header = this.document.querySelector("header");
    header.classList.toggle("abajo", this.window.scrollY>620);
})