const options = document.querySelectorAll(".options-item");

options.forEach(e => {
    e.addEventListener('click', item => {
        let box = item.target;
        if(box.classList.contains("options-item")){
            changeLocation(box.classList[1]);
        } else {
            changeLocation(box.parentElement.classList[1]);
        }  
    })
})

const changeLocation = name =>{
    switch(name.toUpperCase()){
        case "ORDENES": document.location = './usuario-ordenes.php';break;
        case "DATOS": document.location = './usuario-datos.php';break;
        case "DIRECCION": document.location = './usuario-direccion.php';break;
        case "TARJETAS": document.location = './usuario-tarjetas.php';break;
        case "GIFTCARDS": document.location = './usuario-giftcards.php';break;
        case "AYUDA": document.location = './usuario-ayuda.php';break;
    }
}




