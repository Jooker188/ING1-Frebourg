 // ************************************** AUTHENTIFICATION AJAX FUNCTIONS ************************************** 
 
 //Inscription function using ajax : tests the validity email, password strength and the occurence user then redirects to home page if no problem (0) is returned by the ajax call to inscription.php
 function inscription(){
        
        var regexLogin = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var regexPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,64}$/;

        var username = $("#email").val().trim();
        var password = $("#password").val().trim();
        
        var msg = "";
        
        if(regexLogin.test(username)){
            if(regexPassword.test(password)){
                if( username != "" && password != "" ){
                    $.ajax({
                        url:'https://cyzoo.remydionisio.fr/src/inscription.php',
                        type:'post',
                        data:{email:username,password:password},
                        success:function(response){
                            if(response == 1){
                                msg = "You already have an account !";
                                $("#error").html(msg);
                            }else{
                                window.location = "https://cyzoo.remydionisio.fr/index.php";
                            }
                        },
                        error:function(jqXHR, exception){
                            var msgErr = '';
                            if (jqXHR.status === 0) {
                                msgErr = 'Not connect.\nVerify Network.';
                            } else if (jqXHR.status == 404) {
                                msgErr = 'Requested page not found. [404]';
                            } else if (jqXHR.status == 500) {
                                msgErr = 'Internal Server Error [500].';
                            } else if (exception === 'parsererror') {
                                msgErr = 'Requested JSON parse failed.';
                            } else if (exception === 'timeout') {
                                msgErr = 'Time out error.';
                            } else if (exception === 'abort') {
                                msgErr = 'Ajax request aborted.';
                            } else {
                                msgErr = 'Uncaught Error.\n' + jqXHR.responseText;
                            }
                            console.log(msgErr);
                        }
                    });
                }
            }
            else{
                msg = "Password too weak ! (boooooooh)";
            }
        }
        else{
            msg = "Please enter a valid email adress !";
        }
        $("#error").html(msg);
    
}

//Connexion function using ajax : if 0 is returned by ajax call to verification.php -> redirects to home page ; if not it appears an error message
function connexion(){

        var username = $("#emailC").val();
        var password = $("#passwordC").val().trim();
        
        if( username != "" && password != "" ){
            console.log(username);
            $.ajax({
                url:'https://cyzoo.remydionisio.fr/src/verification.php',
                type:'post',
                data:{email:username,password:password},
                success:function(response){
                    var msg = "";
            
                    if(response == 1){
                        msg = "Invalid login !";
                    }else if(response == 2){
                        msg = "Invalid password !";
                    }
                    else{
                        window.location.href = "https://cyzoo.remydionisio.fr/index.php";
                    }
                    $("#errorC").html(msg);
                },
                error:function(jqXHR, exception){
                        var msg = '';
                        if (jqXHR.status === 0) {
                            msg = 'Not connect.\nVerify Network.';
                        } else if (jqXHR.status == 404) {
                            msg = 'Requested page not found. [404]';
                        } else if (jqXHR.status == 500) {
                            msg = 'Internal Server Error [500].';
                        } else if (exception === 'parsererror') {
                            msg = 'Requested JSON parse failed.';
                        } else if (exception === 'timeout') {
                            msg = 'Time out error.';
                        } else if (exception === 'abort') {
                            msg = 'Ajax request aborted.';
                        } else {
                            msg = 'Uncaught Error.\n' + jqXHR.responseText;
                        }
                        console.log(msg);
                }
            });
        }
}