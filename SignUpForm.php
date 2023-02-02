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
    <section class="vh-100" style="background-color: #c0deed;">
        <div class="container h-100">
            <div class="row h-100 d-flex justify-content-center align-items-center">
                <div class="col-xl-12 col-lg 12 col-md-12">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body pb-3 pt-3 mb-1 ">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2">

                                    <p class="text-center h2 fw-bold mb-3 mx-1 mx-md-4 mt-1">Sign up</p>

                                    <form class="mx-1 mx-md-4">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-1 fa-fw" style="height:35px"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="form3Example1c" class="form-control" />
                                            <label class="form-label" for="form3Example1c">Your Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-1 fa-fw" style="height:35px"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <input type="email" id="form3Example3c" class="form-control" />
                                            <label class="form-label" for="form3Example3c">Your Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-1 fa-fw" style="height:35px"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4c" class="form-control" />
                                            <label class="form-label" for="form3Example4c">Password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-1 fa-fw" style="height:35px"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4cd" class="form-control" />
                                            <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                            </div>
                                        </div>

                                        <div class="form-check mb-5" style="padding-left: 35px;">
                                            <input type="checkbox" class="form-check-input" id="same-address">
                                            <label class="form-check-label" for="same-address">I agree all statements in <a href="#!">Terms of Service</a></label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-0 mb-lg-0">
                                            <button type="button" class="btn btn-primary btn-lg">Register</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1">

                                    <img src="image/SignUpForm.jpg"
                                    class="img-fluid" alt="SignUp">

                                </div>
                            
                            </div>
                            
                            <footer class="mx-auto text-muted text-center text-small">
                                <p class="mb-0">&copy;<?php echo date("Y"); ?>- MorbeusDesign - Coded with <i class="fa-regular fa-heart" style="font-size:18px;color:red"></i></p>
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
</body>
</html>

