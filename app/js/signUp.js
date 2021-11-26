function checkPass() {

    const pass1 = document.querySelector('#signupPass1').value;
    const pass2 = document.querySelector('#signupPass2').value;

    if (pass1 == pass2) {
        return true;
    }
    else {
        alert('Passwords do NOT match!');
        return false;
    }

}