var email = $('#email').val();
var username = $('#username').val();
var password = $('#password').val();
var rgx_password = /[a-z][0-9]/;
var rgx_email = 
/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
var rgx_username = /^[a-z0-9_-]{3,15}$/;
var email_test = rgx_email.exec(email);

function loginuser() {
	var username = $('#username').val();
	var password = $('#password').val();
	$.post('/authuser', 
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

function showDialog(id){
        var dialog = $(id).data('dialog');
        dialog.open();
    }

function apply () {
	var appid = $('#app-value').html();
	$.post('/applications/apply', 
		{appid: appid}, function(markup) 
			{
				if(markup == 'applied') {
					showDialog('#dialog');
					$('.button').html('Applied');
				}else{
					showDialog('#dialog2');
					$('.button').html('Applied');
				}
			});
}