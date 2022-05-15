$(document).ready(function(){
                $(“#sub”).click(function(){
                var firstname = $(“#firstname”).val();
                var lastname = $(“#lastname”).val();
                if($.trim(firstname).length >0 & $.trim(lastname).length >0) {
                    $.ajax({
                        type:”POST”,  //Request type
                        url: “http://localhost/firstname.php”,
                        data:{firstname:firstname, lastname:lastname},
                        cache:false,
                        success:function(data) {
                            alert(data);
                        }
                    })
                }
                else {
                    alert(‘Input fields are empty’);
                }
            })
        })