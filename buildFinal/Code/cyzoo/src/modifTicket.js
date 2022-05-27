
//Changes ticket status using ajax call to modifierTicket.php
function changeStatusTicket(){
           var id = $("#id").val();
           var status = $("#status-select").val().trim();
            
                $.ajax({
                    url:'https://cyzoo.remydionisio.fr/src/modifierTicket.php',
                    type:'post',
                    data:{id:id,status:status},
                    success:function(response){
                        var msg = "";
                
                        if(response == 1){
                            msg = "Ticket doesn\'t exist or status already modified !";
                            $("#refresh").attr("class","error");
                        }
                        else{
                            $("#"+id).html(status);
                            msg = "Successful Operation !";
                            $("#refresh").attr("class","good");
                        }
                        $("#refresh").html(msg);
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