

<?php

define('REQUIRED_FIELD_ERROR', 'This field is required');

$errors = [];
$username = '';
$email = '';
$password = '';
$password_confirm = '';
$postData = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = post_data('username');
    $email = post_data('email');
    $password = post_data('password');
    $password_confirm = post_data('password_confirm');

    if (!$username) {
        $errors['username'] = REQUIRED_FIELD_ERROR;
    } else if (strlen($username) < 6 || strlen($username) > 16){
        $errors['username'] = 'Username must be less than 16 and more than 6 chars';
    }
    if (!$email) {
        $errors['email'] = REQUIRED_FIELD_ERROR;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Please enter valid email address';
    }
    if (!$password) {
        $errors['password'] = REQUIRED_FIELD_ERROR;
    }
    if (!$password_confirm) {
        $errors['password_confirm'] = REQUIRED_FIELD_ERROR;
    }
    if ($password && $password_confirm && strcmp($password, $password_confirm) !== 0){
        $errors['password_confirm'] = 'Please repeat the password correctly';
    }

}

function post_data($field)
{
    if (!isset($_POST[$field])) {
        return false;
    }
    $data = $_POST[$field];
    return htmlspecialchars(stripslashes(trim($data)));
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp-Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <section  style="background-color: #c0deed;">
        <div class="container-lg">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-12 col-lg 12 col-md-12">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body pb-3 pt-3 mb-1 ">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2">

                                    <p class="text-center h2 fw-bold mb-3 mx-1 mx-md-4 mt-1">Sign up</p>
                                 
                                    <form class="mx-1 mx-md-4 needs-validation" novalidate action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-group form-outline flex-fill mb-0">
                                                <label type="text" class="control-label"><span class="asteriskField">*</span>Username</label>
                                                <input class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : '' ?>"
                                                    name="username" value="<?php echo $username ?>">
                                                 <small class="form-text text-muted">Min: 6 and max 16 characters</small>
                                                <div class="invalid-feedback">
                                                    <?php echo $errors['username'] ?? '' ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label type="email" class="form-label"><span class="asteriskField">*</span>Email</label>
                                                <input type="email" class="form-control <?php echo isset($errors['email']) ? 'is-invalid' : '' ?>"
                                                    name="email" value="<?php echo $email ?>">
                                                <div class="invalid-feedback">
                                                    <?php echo $errors['email'] ?? '' ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control <?php echo isset($errors['password']) ? 'is-invalid' : '' ?>"
                                                    name="password" value="<?php echo $password ?>">
                                                <div class="invalid-feedback">
                                                    <?php echo $errors['password'] ?? '' ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label">Repeat your password</label>
                                                    <input type="password"
                                                    class="form-control <?php echo isset($errors['password_confirm']) ? 'is-invalid' : '' ?>"
                                                    name="password_confirm" value="<?php echo $password_confirm ?>">
                                                <div class="invalid-feedback">
                                                    <?php echo $errors['password_confirm'] ?? '' ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-check mb-5" style="padding-left: 25px;">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                            <label class="form-check-label" for="invalidCheck" >Agree to our <a href="#!"> Terms and Conditions</a></label>
                                            <div class="invalid-feedback fw-bold fs-5 bg-danger text-dark">
                                                 -> You must agree before submitting!
                                            </div>
                                        </div>

                                        <div class="form-group d-flex justify-content-center mx-4 mb-0 mb-lg-0">
                                            <button class="btn btn-primary btn-lg">Register</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1">

                                    <img src="image/SignUpForm.jpg"
                                    class="img-fluid" alt="SignUp">

                                </div>
                            
                            </div>
                            
                            <footer class="mx-auto text-muted text-center text-small">
                                <p class="mb-0">&copy <?php echo date("Y"); ?>- MorbeusDesign - Coded with <i class="fa-regular fa-heart" style="font-size:18px;color:red"></i></p>
                                <ul class="list-inline mb-3">
                                <li class="list-inline-item"><a href="#">Privacy</a></li>
                                <li class="list-inline-item"><a href="#">Terms</a></li>
                                <li class="list-inline-item"><a href="#">Support</a></li>
                                </ul>
                            </footer>
                    
                        </div>
                 

                </div>
            </div>   
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html> 

