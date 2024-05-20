<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Brain Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="Alternate stylesheet" href=".././css/signup.css">
    <link rel="Alternate stylesheet" href=".././css/cursers.css">
    <link rel="Alternate stylesheet" href=".././css/styles.css">

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    />
    <!-- Template with main css file -->
    <link href="css/styles.css" rel="stylesheet0" />

    <link href="css/cursers.css" rel="stylesheet1" />

    <link href="css/signup.css" rel="stylesheet2" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet"
    />
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet"
    />
    <style>
      .brand-section img{
    height: 40vw;
    max-height: 300px;
    padding: 10px;
    }
    .login-container h1 p{
    color: black;
    }

    </style>
    
</head>
<body>
    <div class="login-container">
        <div class="brand-section">
          <img src=".././src/logoBlack.png" alt="mlinkLogo" >
            <h1>MediLink</h1>
            <p>We make digital products that drive you to stand out.</p>
        </div>
        <div class="form-section">
            <form class="form-signin">
                <h2>Sign in</h2>
                <label for="inputEmail">Email</label>
                <input type="email" id="inputEmail" class="form-control" required autofocus>
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" required>
                
                <label for="roleSelect">Role</label>
                <select id="roleSelect" class="form-control mb-3" required>
                    <option value="" disabled selected>Select your role</option>
                    <option value="patient">Medi Seeker</option>
                    <option value="pharmacist">Pharma</option>
                    <option value="drug_dealer"><i class="bi bi-truck"></i>Distributors</option>
                </select>
                
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Keep me logged in
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block cursor-pointer" type="submit">Log in now</button>
                <a href="#" class="cursor-pointer">Forgot password?</a>
                <p>Or continue with:</p>
                <button class="btn btn-outline-primary cursor-pointer">Google</button>
                <button class="btn btn-outline-primary cursor-pointer">Facebook</button>
                <hr>
                <p>Don't have an account? <a href="#" class="cursor-pointer">Sign up</a></p>
            </form>
        </div>
    </div>
    
    <div class="cursers">
      <div></div>
    </div>

    <footer>
    <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>MediLink</span></strong
            >. All Rights Reserved
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </footer>
    
    <script src=".././js/cursers.js"></script>
</body>
</html>
