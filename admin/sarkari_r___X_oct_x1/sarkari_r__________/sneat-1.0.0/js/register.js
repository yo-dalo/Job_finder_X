$(document).ready(function() {
  const registerBtn = document.getElementById('register_btn');
  registerBtn.addEventListener('click', (e) => {
   e.preventDefault();
    const re_form = document.getElementById('Re_form');
    const reUsername = document.getElementById('Re_username').value;
    const rePassword = document.getElementById('Re_password').value;
    const accountExists = document.getElementById('Account_exists');
    const reSmg = document.getElementById('re_smg');
        //  var formData = new FormData(re_form);
    if (reUsername !== '' && rePassword !== '') {
      $.ajax({
        url: '../mydasbord_/register.php',
        type: 'POST',
        data: {re_username:reUsername,re_password:rePassword},
        success: function(data) {
          //console.log(data);
          if (data == 1) {
            reSmg.innerHTML = 'Registration successful';
            reSmg.style.display = 'block';
            accountExists.innerHTML = '';
            let formAuthentication = document.getElementById('Re_form');
            formAuthentication.reset();
            setTimeout(() =>{
               reSmg.style.display='none'
               window.location.href='../mydasbord_/login.html';
            } ,4000)
            
          } else if (data == 2) {
            accountExists.innerHTML = 'Account already exists';
            accountExists.style.color = 'red';
          } else {
            accountExists.innerHTML = 'Error during registration';
            accountExists.style.color = 'red';
          }
        },
        error: function() {
          accountExists.innerHTML = 'Error during AJAX request';
          accountExists.style.color = 'red';
        }
      });
    } else {
      accountExists.innerHTML = 'Please fill in all details';
      accountExists.style.color = 'red';
    }
  });
});
