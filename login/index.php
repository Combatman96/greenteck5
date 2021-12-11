<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập quản lý: GreenTeck</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <section class="login py-5 bg-light">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-5">
                    <img src="../img/crop/greenplug.png" class="img-fluid" alt="side image very noise">
                </div>
                <div class="col-lg-7 text-center py-5">
                    <h1 class="fw-bold"><span class="text-dark">Green</span><span class="text-success">Teck</span></h1>
                    <h3 class="pt-2 text-secondary">Quản lí hội thảo</h3>
                    
                    <!---Form Login-->
                    
                    <form method="post" action="login.php">
                        <div class="form-row py-3 pt-5">
                            <div class="offset-1 col-lg-10">
                                <input id="username-input" type="text" class="input px-3 " placeholder="Username" required="required"/>
                            </div>
                        </div>
                        <div class="form-row py-3 pt-4">
                            <div class="offset-1 col-lg-10">
                                <input id="password-input" type="password" class="input px-3 " placeholder="Password" required="required"/>
                            </div>
                        </div>
                        <div class="form-row py-3 pt-4">
                            <div class="offset-1 col-lg-10">
                                <input class="loginbtn" type="button" value="Đăng nhập" id="login">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#login").click(function(){
                var username = $("#username-input").val();
                var password = $('#password-input').val();
                
                //Send the data
                $.ajax(
                    {
                        url:'login.php',
                        method: 'POST',
                        data:{
                            login: 1,
                            usernamePHP: username,
                            passwordPHP: password
                        },
                        success: function(response){
                            console.log(response);
                            if(response.indexOf('success') >= 0){
                                window.location = '../admin/index.php';
                            }
                            if(response.indexOf('failed') >= 0){
                                alert("Kiểm tra lại tên người dùng hoặc mật khẩu!");
                            }
                        },
                        dataType: 'text'
                    }
                );
            });
        });
    </script>

</body>
</html>

<?php
        include('../config/constant.php');
        session_start();
        //If we already logged in
        if(isset($_SESSION['logged_in']))
        {
            header('location:'.SITEURL.'admin/index.php');
            exit();
        }
?>