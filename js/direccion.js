const dep = document.querySelector('.select-dept')
const prov = document.querySelector('.select-prov')
const dist = document.querySelector('.select-dist')
import provincias from '../utils/provincias.json' assert{type: 'json'}
import distritos from '../utils/distritos.json' assert{type: 'json'}

dep.addEventListener('change', e => {
    const provincias_array = activarProvincia(e.target.value)
    let html = '<option value="" selected disabled>Seleccione la Provincia</option>';
    provincias_array.forEach(elem =>{
        html+=
        `
            <option value="${elem.key}">${elem.value}</option>
        `
    })
    prov.innerHTML = html;
})

prov.addEventListener('change',e=>{
    const distritos_array = activarDistritos(e.target.value)
    let html1 = '<option value="" selected disabled>Seleccione el Distrito</option>'
    distritos_array.forEach(elem =>{
        html1+=
        `
            <option value="${elem.key}">${elem.value}</option>
        `
    })
    dist.innerHTML = html1;
})


const activarProvincia = dep_id => {
    let provs = [];
    provincias.forEach(prov => {
        if(prov.department_id == dep_id){
            provs.push({
                key: prov.id,
                value: prov.name
            })
        }
    })
    return provs;
}

const activarDistritos = prov_id => {
    let dists = [];
    distritos.forEach(dist => {
        if(dist.province_id == prov_id){
            dists.push({
                key: dist.id,
                value: dist.name
            })
        }
    })
    return dists;
}
