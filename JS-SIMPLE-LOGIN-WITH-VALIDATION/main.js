// dom events
const myform= document.querySelector('.myform');
const button = document.querySelector('#btn');
const username = document.querySelector('#username');
const password = document.querySelector('#password');
const msg = document.querySelector('.msg');


button.addEventListener('click', function(e){
    e.preventDefault();
    
if(username.value.length === 0 || password.value.length === 0){
    username.style.border="1px solid red";
    password.style.border="1px solid red";
    msg.innerHTML= 'Please input the following fileds';
    
    setTimeout(() => 
    (
    msg.innerHTML='',
    username.value='',
    password.value=''
    )
    , 3000);
}else{
    console.log('login success');
    myform.submit();
}
});

function rBorder(){
    username.style.border="1px solid black";
    password.style.border="1px solid black";
}


