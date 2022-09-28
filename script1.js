const username = document.getElementById('username');
const password = document.getElementById('password');
const form = document.getElementById('form');

form.addEventListener('submit',e =>
{
   e.preventDefault();
   validateInputs();
});

const setError = (element,message)=>{
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}
 
const setSuccess = element =>{
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
}

const isValidEmail = email =>{
    const re =
}

const validateInputs = ()=>{
const usernameValue = username.value.trim();
const passwordValue = password.value.trim();
if(username ===''){
    setError(username,'Username is required');
}
else{
   setSuccess(username);
}
if(passwordValue==='')
{

}
};