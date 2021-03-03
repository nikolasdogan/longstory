<script>
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('g-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>
<script type="text/javascript">
        // set initially button state hidden
        // use keyup event on email field
        $("#email_2").keyup(function(){
            if(validateEmail()){
                // if the email is validated
                // set input email border green
                $("#email_2").removeClass("is-invalid");
                $("#email_2").addClass("is-valid");
                // and set label
            }else{
                // if the email is not validated
                // set border red
                $("#email_2").removeClass("is-valid");
                $("#email_2").addClass("is-invalid");
            }
        });
        // use keyup event on password

    function validateEmail(){
        // get value of input email
        var email=$("#email_2").val();
        // use reular expression
        var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
        if(reg.test(email)){
            return true;
        }else{
            return false;
        }

    }


</script>
<script type="text/javascript">


    		// use keyup event on password
		$("#password_2").keyup(function(){
			// check
			if(validatePassword()){
                // set input password border green
                $("#password_2").removeClass("is-invalid");
				$("#password_2").addClass("is-valid");
				//set passMsg 
			}else{
					// set input password border red
                $("#password_2").removeClass("is-valid");
				$("#password_2").addClass("is-invalid");
			}
		});
	

    	function validatePassword(){
		//get input password value
		var pass=$("#password_2").val();
		// check it s length
		if(pass.length > 7){
			return true;
		}else{
			return false;
		}

	}

</script>
