let signinbtn = document.querySelector("#signinbtn");
let signupbtn = document.querySelector("#signupbtn");
// let fields = document.querySelectorAll(".rem"); 
let title = document.querySelector("#title");
let name = document.querySelector("#name");
let email = document.querySelector("#email");
let conpas = document.querySelector("#conpas");
let mobile = document.querySelector("#mob");
let pass = document.querySelector("#pass");
let box = document.querySelector(".box")
let p = document.querySelector("p");
let form=document.querySelector(".form");

p.style.display="none";
signinbtn.onclick = ()=>{
    title.innerHTML="LOGIN";
    // mobile.style.position="absolute";
    // name.style.position="absolute";
    // conpas.style.position="absolute";
    box.style.height ="400px";
    signupbtn.classList.add("disable");
    signinbtn.classList.remove("disable");
    name.style.display="none";
    email.style.display="none";
    conpas.style.display="none";
    p.style.display="inline";
    
   
}
signupbtn.onclick = function (){
    title.innerText = "Sign Up";
    mobile.style.position = "relative";
    box.style.height ="600px";
    p.style.display="none";
    signinbtn.classList.add("disable");
    signupbtn.classList.remove("disable");
    name.style.display="block";
    email.style.display="block";
    conpas.style.display="block";
}