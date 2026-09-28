const finger=document.getElementById("finger");

const user=document.getElementById("user");

const pass=document.getElementById("pass");

const btn=document.getElementById("loginBtn");

const username="REJOWAN AL SHADID";

const password="12345678";

function moveTo(element){

let rect=element.getBoundingClientRect();

finger.style.left=rect.left+rect.width+15+"px";

finger.style.top=rect.top+"px";

}

function typeUser(){

let i=0;

let interval=setInterval(()=>{

user.value+=username[i];

i++;

if(i==username.length){

clearInterval(interval);

setTimeout(step2,700);

}

},170);

}

function step2(){

moveTo(pass);

pass.focus();

setTimeout(typePass,900);

}

function typePass(){

let i=0;

let interval=setInterval(()=>{

pass.type="text";

pass.value+=password[i];

i++;

if(i==password.length){

clearInterval(interval);

pass.type="password";

setTimeout(step3,700);

}

},170);

}

function step3(){

moveTo(btn);

setTimeout(()=>{

btn.click();

},1200);

}

btn.onclick=function(){

btn.innerHTML="Logging in...";

btn.style.background="orange";

setTimeout(()=>{

btn.innerHTML="✔ Welcome";

btn.style.background="green";

finger.style.transform="scale(0)";

},1800);

}

window.onload=function(){

moveTo(user);

user.focus();

setTimeout(typeUser,1000);

}