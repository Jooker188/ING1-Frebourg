class User{
    constructor(email,password){
        this.email = email;
        this.password = password;
    }

    get_email(){
        return $("#email").val();
    }

    set_email(){
        this.email = this.get_email();
    }

    get_password(){
        return $("#password").val();
    }

    set_password(){
        this.password = this.get_password();
    }
}

let user = new User();
user.set_email();
user.set_password();

$("#regisB").click(function(){ 
    sessionStorage.setItem('email', user.email);
    sessionStorage.setItem('password', user.password);
    console.log("Email : " + sessionStorage.getItem('email'));
    console.log("Password : " +sessionStorage.getItem('password'));
});

$(document).ready(function () {
    $("#ajax").click(function(){ 
        $.ajax("http://localhost/bonjour.php",
        {
            type : "GET",
            succes:{
                function(res){
                    console.log(res);
                    $("#response").html(res);
                }
            }
        })
    });
});