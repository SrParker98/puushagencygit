const btnexpand = document.querySelectorAll('.btn-expandir');
const textexpanded = document.querySelectorAll('.text-expanded');
let indiceAbierto = null;

btnexpand.forEach((Elemento, clave)=>{
    Elemento.addEventListener('click',()=>{
        
        /* antes de enseñar ocultarlos*/
        if (indiceAbierto !== null) {
          textexpanded.forEach((item, index) => {
            if (index !== clave) {
              item.classList.remove("text-open");
            }
          });
        }
        textexpanded[clave].classList.toggle("text-open");
        indiceAbierto = clave;
    }) 
})