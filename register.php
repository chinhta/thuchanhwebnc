<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background-color: #17a2b8;
            height: 100vh;
        }

        #login .container #login-row #login-column #login-box {
            margin-top: 30px;
            max-width: 600px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }

        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }

        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
        }

        #login-err-msg {
            width: 540px;
            margin: 30px auto;
        }
    </style>
    <title>dang ky</title>
</head>

<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="register_submit.php" method="post">
                            <h3 class="text-center text-info">Register</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" value="">
                            </div>
							<div class="form-group">
                                <label for="password" class="text-info">Retype Password:</label><br>
                                <input type="password" name="repassword" id="repassword" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <input type="hidden" id="action" name="action" value="dangky" />
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Register">
                                <a href="login.php" class="text-info">Already have an account?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>