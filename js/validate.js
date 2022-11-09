const alert = document.querySelector('.alert')

export const validarCampos = (input_nodelist) => {
    if(camposVacios(input_nodelist)){
        alert_details("Campos vacíos","alert-warning")
    } else {
        const email = buscarEmail(input_nodelist)
        email.forEach(e => {
            if(emailValido(e)){
                alert_details("Información correcta","alert-success")
            } else {
                alert_details("Formato de correo incorrecto","alert-warning")
            }
        })
        
    }

}

const camposVacios = input_nodelist => {
    let inputs_text = []
    input_nodelist.forEach(input => {
        if(input.value != "")
            inputs_text.push(input)
    })
    return inputs_text.length < 2
}

const buscarEmail = input_nodelist => {
    let email = []
    input_nodelist.forEach(input => {
        if(input.id == "input-email"){
            email.push(input.value)
        }  
    })
    return email
}

const alert_details = (msg, type) => {
    alert.classList = ""
    alert.style.display = "block";
    alert.classList.add("alert",type);
    alert.textContent = msg;
}

const emailValido = txt => {
    let regex = 
    new 
    RegExp("([!#-'*+/-9=?A-Z^-~-]+(\.[!#-'*+/-9=?A-Z^-~-]+)*|\"\(\[\]!#-[^-~ \t]|(\\[\t -~]))+\")@([!#-'*+/-9=?A-Z^-~-]+(\.[!#-'*+/-9=?A-Z^-~-]+)*|\[[\t -Z^-~]*])");
    return regex.test(txt);
}




