const btn = document.querySelectorAll(".toggle-btn");
const login = document.getElementById("login");
const regs = document.getElementById("register");
const line = document.getElementById("underline");
const login_submit_btn = document.querySelector('.log-submit');
const reg_submit_btn = document.querySelector('.reg-submit')
const login_inputs = document.querySelectorAll('.log-input')
const register_inputs = document.querySelectorAll('.reg-input')
const msg = document.querySelectorAll(".error-message")
const msg1 = document.querySelectorAll('.error-message-2')
import {limpiarInputs,validarCampos} from './validation.js'

btn.forEach(elem => {
    elem.addEventListener("click",(e)=>{
        limpiarInputs([login_inputs,register_inputs,msg,msg1]);
        indicator(e.target);
        if(e.target.id === "rbtn"){
            login.style.transform = "translateX(-100%)";
            regs.style.transform = "translateX(0)";
        } else {
            regs.style.transform = "translateX(100%)";
            login.style.transform = "translateX(0)"
        }
    })
})

const indicator = e => {
    line.style.left = e.offsetLeft+"px";
    line.style.width = e.offsetWidth+"px";
}

login_submit_btn.addEventListener('click',()=>{
    validarCampos(msg, login_inputs, [0])
})

reg_submit_btn.addEventListener('click',()=>{
    validarCampos(msg1,register_inputs, [2,3])
})





