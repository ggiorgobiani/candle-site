import './styles/account.css';

let loginForm = document.getElementById("loginForm");
let regForm = document.getElementById("regForm");
let indicator = document.getElementById("indicator");


function register(){
    regForm.style.transform = "translateX(0px)";
    loginForm.style.transform =  "translateX(0px)";
    indicator.style.transform =  "translateX(100px)";
}

function login (){
    regForm.style.transform = "translateX(300px)";
    loginForm.style.transform =  "translateX(300px)";
    indicator.style.transform =  "translateX(0px)";
}