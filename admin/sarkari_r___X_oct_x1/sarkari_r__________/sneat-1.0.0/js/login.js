let loginBtn = document.getElementById('loginbtn');
loginBtn.addEventListener('click', (e) => {
  e.preventDefault();
  //var username=$(#username).val(); 
  var username = jQuery("#username").val();
  var password = jQuery("#password").val();
  //jQuery('').html('');


  var is_error = '';
  if (username == "") {
    jQuery('#login_error').html('Please enter username');
    is_error = 'yes';
  }
  if (password == "") {
    jQuery('#login_error').html('Please enter password');
    if (is_error=='yes') {
       jQuery('#login_error').html('Please enter username and password');

    }
    is_error = 'yes';
  }else if(is_error!='yes'){
    jQuery('#login_error').html('');
  }
  

  
  if (is_error == '') {
    jQuery.ajax({
      url: '../mydasbord_/login.php',
      type: "POST",
      data: {username:username,password:password},
      success: function(result) {
        result = result.trim();
        if (result == 'wrong') {
          jQuery('#login_error').html('Please enter valid login details');
        }
        if (result == 'valid') {
          jQuery('#login_error').html('login success');
          window.location.href = "../mydasbord_/index.php";

        }
      }
    });
  }


});