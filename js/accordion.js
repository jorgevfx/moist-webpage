let tyc_list = document.querySelectorAll('.tyc-title')
let tyc_sublist = document.querySelectorAll('.tyc-list dd')

tyc_list.forEach(item =>{
    item.addEventListener('click',()=>{
        item.classList.toggle('active')
        tyc_sublist.forEach(sl => {
            if(sl.classList.contains(item.id) && !sl.classList.contains('active')){
                sl.style =  `height: ${sl.firstElementChild.clientHeight+20}px;`
            } else {
                sl.style = `height: 0px`
            }
            sl.classList.toggle('active')
        })
    })
})