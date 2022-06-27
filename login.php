<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="utils.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    .btn-color{
  background-color: #0e1c36;
  color: #fff;
  
}

.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}



.cardbody-color{
  background-color: #ebf2fa;
}
</style>

</head>
<body class='overflow-x-hidden'>
    <div class="Container mx-auto">

    <header>
            <nav class="Flex justify-between">
                <div class="logo font-bold Flex items-center text-blue">Faysol Fitness</div>
                <ul class="navbar Flex items-center">
                    <li><a class="anchor" href="index.html"> Home </a></li>
                    <li><a class="anchor" href="about.html"> About </a></li>
                    <li><a class="anchor" href="services.html"> Services </a></li>
                    <li><a class="anchor" href="contractUs.html"> Contact Us </a></li>
                    <li><a class="anchor" href="registration.php"> Registration </a></li>
                    <li><a class="anchor Btn" href="login.php">Login</a></li>
                </ul>
            </nav>
            <hr>
        </header>
    </div>

<main>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login Form</h2>
       
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5">

            <div class="text-center">
              <img src="dumbell.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="User Name">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="registration.php" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</main>

    <footer>
        <h1 class="line-height-1"> <span class="text-blue">Faysol</span> Fitness</h1>
        <p style="line-height: 30px;">Copyright &copy; <span class="text-orange">FaysolFitness.com</span></p> 
         <p>All rights reserved</p>
    </footer>
</body>
</html>