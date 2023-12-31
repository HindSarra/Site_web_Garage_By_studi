document.addEventListener('DOMContentLoaded', function () {
  var loginButton = document.querySelector('#btn-login');
  var loginForm = document.querySelector('.modal-body');
  var loginCancelButton = document.getElementById('login-cancel');

  if (loginButton) {
    loginButton.addEventListener('click', function (e) {
      e.preventDefault();
      loginForm.style.display = 'block';
    });
  }

  if (loginCancelButton) {
    loginCancelButton.addEventListener('click', function (e) {
      e.preventDefault();
      loginForm.style.display = 'none';
    });
  }
});

  