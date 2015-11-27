var email = $('#email').val();
var username = $('#username').val();
var password = $('#password').val();
var rgx_password = /[a-z][0-9]/;
var rgx_email = 
/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
var rgx_username = /^[a-z0-9_-]{3,15}$/;
var email_test = rgx_email.exec(email);

function loginuser() {
	
	$.post('http://localhost:8000/authuser', 
		{username: username, password: password}, function(markup) 
			{
				if(markup == 'loggedin') {
					window.location.assign('/portal');
				}else{
				$('#errorlog').html(markup);
			}
			});
		}
	
function registerUser() {
	if(email_test = false) {
		$('#emailErr').html("Invalid email, Please Check")
	}
}