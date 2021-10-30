//Variables
const success = document.querySelector('.success');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const message = document.getElementById('message');
//Make the inputs emty if success happen
if (success) {
  name.value = erase(name);
  email.value = erase(email);
  password.value = erase(password);
  password2.value = erase(password2);
  message.value = erase(message);
}
function erase(data) {
  data = '';
  return data;
}
console.log('Hi Fellows');
console.log(success);
//Remove success message
success.addEventListener('click', () => {
  success.remove();
});
