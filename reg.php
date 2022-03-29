<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form action="reg_sub.php" method="POST" class="register-form" id="register-form">

                        <div class="form-group">
                            <label for="name"><i class="fas fa-user"></i></label>
                            <input type="text" name="name" id="name" placeholder="Name" />
                        </div>

                        <div class="form-group">
                            <label for="uname"><i class="fas fa-user"></i></label>
                            <input type="text" name="uname" id="uname" placeholder="Username" />
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i></label>
                            <input type="email" name="email" id="email" placeholder="Email" />
                        </div>

                        <div class="form-group">
                            <label for="mobile"><i class="fas fa-phone-alt"></i></label>
                            <input type="text" name="mob" id="mobile" placeholder="Mobile" />
                        </div>

                        <div class="form-group">
                            <label for="edu"><i class="fas fa-user"></i></label>
                            <input type="text" name="edu" id="edu" placeholder="Education" />
                        </div>

                        <div class="form-group">
                            <label for="pass"><i class="fas fa-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="Password" />
                        </div>



                        <div class="form-group form-button">
                            <input type="submit" name="submit" id="signup" class="form-submit" value="Register" />
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                    <a href="login.php" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>