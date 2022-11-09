import {validarCampos} from '../js/validate.js'

const reg_btn = document.querySelector('.reg-submit');
const input_nodelist = document.querySelectorAll('.input-field')

reg_btn.addEventListener('click',()=>{
    validarCampos(input_nodelist)
})