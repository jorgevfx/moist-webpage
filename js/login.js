const btn = document.querySelectorAll(".toggle-btn");
const login = document.getElementById("login");
const regs = document.getElementById("register");

btn.forEach(elem => {
    elem.addEventListener("click",(e)=>{
        if(e.target.id === "rbtn"){
            login.style.left = "-200%";
            regs.style.left = "44px";
        } else {
            regs.style.left = "200%";
            login.style.left = "44px"
        }
    })
})