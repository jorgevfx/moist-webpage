const login_btn = document.querySelector('.log-submit');
const input_nodelist = document.querySelectorAll('.input-field')
import {validarCampos} from '../js/validate.js'

login_btn.addEventListener('click',()=>{
    validarCampos(input_nodelist)
})


