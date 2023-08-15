<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/forgot-password/forgot-password.css') }}">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        
        <h3>Forgot Password</h3>
      
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter Email" id="email">
      
        <button>Link Send</button>
        <div class="social">
          <a href="{{ route('login') }}"><div class="go"><i class="fab fa-google"></i> Login</div></a>
          <a href="{{ route('register') }}"><div class="fb"><i class="fab fa-facebook"></i>Registration</div></a>
        </div>
    </form>
</body>
</html>