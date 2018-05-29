function check(input) {

  if (input.value != document.getElementById('password').value) {
    input.setCustomValidity('Les deux mots de passe ne correspondent pas');
  } else {
    input.setCustomValidity('');
  }
  
}
