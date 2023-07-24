<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Register and Login Pages</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    </head>
    <body>
        <div class="mt-5 container">
            <div class="row">
                <div class="col-md-6 col-xm-12">
                    <h1 class="fs-4 fw-bolder text-white bg-danger text-center w-75">Sign Up</h1>
                    <form action="signup.php" method="post">
                        <label for="name">UserName</label>
                        <input 
                            type="text"
                            name="name" 
                            id="name"
                            class="w-75 mb-3 form-control"
                            placeholder="Enter Your Name" 
                        />
                        
                        <label for="password">Password</label>
                        <input 
                            type="password" 
                            name="password"
                            class="mb-3 w-75 form-control"
                            placeholder="Enter Your Password"
                            id="password"
                        />

                        <label for="c_password">Confirme Password</label>
                        <input 
                            type="password"
                            name="c_password" 
                            class="mb-3 w-75 form-control"
                            placeholder="ConfirmPassword"
                            id="c_password"
                        />

                        <button class="w-50 offset-1 mb-5 btn btn-success">Submit</button>
                    </form>
                </div>
                <div class="col-md-6 col-xm-12">
                    <h1 class="w-75 text-center text-white fw-bold fs-4 bg-primary">Login</h1>
                    <form action="login.php" method="post">
                        <label for="username">UserName</label>
                        <input 
                            type="text" 
                            name="username"
                            class="w-75 mb-3 form-control"
                            placeholder="Enter username"
                            id="username"
                        />

                        <label for="password">Password</label>
                        <input 
                            type="password" 
                            name="password"
                            class="mb-3 w-75 form-control"
                            placeholder="Enter Your Password"
                            id="password"
                        />
 
                        <button class="btn w-25 offset-3 mt-4 mb-5 btn-primary">login</button>
                    </form>
                </div>
            </div>
        </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
</html>