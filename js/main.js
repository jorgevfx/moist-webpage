import { sublista } from "../utils/sublist.js"

const opciones = document.querySelectorAll('.sub-menu li')
const lista_menu = document.getElementById('sublist')
const backdrop = document.getElementById('backdrop')
const aux = document.getElementById('sublist-wr')

opciones.forEach((item)=>{
    item.addEventListener('click',()=>{
        let title = item.textContent
        lista_menu.classList.toggle('active')
        backdrop.classList.toggle('active')
        if(lista_menu.classList.contains('active')){
            switch(title.toUpperCase()){
                case "OFERTAS":
                    aux.innerHTML = mostrarProductos(title,sublista.OFERTAS)
                    break
                case "ROPA":
                    aux.innerHTML = mostrarProductos(title,sublista.ROPA)
                    break  
                case "ZAPATILLAS":
                    aux.innerHTML = mostrarProductos(title,sublista.ZAPATILLAS)
                    break
                case "ACCESORIOS":
                    aux.innerHTML = mostrarProductos(title,sublista.ACCESORIOS)
                    break  
                case "PRIMAVERA":
                    aux.innerHTML = mostrarProductos(title,sublista.PRIMAVERA)
                    break  
                case "TENDENCIAS":
                    aux.innerHTML = mostrarProductos(title,sublista.TENDENCIAS)
                    break  
            }
        }
    })
})

const mostrarProductos = (title, array) =>{
    let acu = `<h4 id="list-title">${title}</h4>`
    array.forEach(element => {
        acu += 
        `
            <li><a href="#">${element}</a></li>
        `
    });
    return acu
}

