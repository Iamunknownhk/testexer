const USER_INPUT = document.getElementById('i0116');
const USER_ERROR = document.getElementById('usernameError');


function checkData(){
    if(USER_INPUT.value.length == 0){
        event.preventDefault();
        USER_ERROR.style.display = 'block';
        USER_INPUT.classList.add('has-error');
    }
    else{
        USER_ERROR.style.display = 'none';
        USER_INPUT.classList.remove('has-error');
    }
}