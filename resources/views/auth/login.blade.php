<!doctype html>
<html lang="en">

<head>
  <title>Admin Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('backend/assets/login/login.css') }}">

</head>

<body>
  <main>
    <section>
        <div class="box">
          
          <div class="square" style="--i:0;"></div>
          <div class="square" style="--i:1;"></div>
          <div class="square" style="--i:2;"></div>
          <div class="square" style="--i:3;"></div>
          <div class="square" style="--i:4;"></div>
          <div class="square" style="--i:5;"></div>
          
          {{-- Change something --}}
         <div class="container"> 
          <div class="form text-center"> 
            <a href="{{ route('frontend.home') }}"><img src="{{ asset('backend/assets/login/logo.png') }}" width="200" alt=""></a>
            <h2>LOGIN</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
        
              <div class="inputBx">
                <input id="email" type="email" name="email" required="required">
                <span>Login</span>
                <i class="fas fa-user-circle"></i>
              </div>
              <div class="inputBx password">
                <input id="password-input" type="password" name="password" required="required">
                <span>Password</span>
                <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
                <i class="fas fa-key"></i>
              </div>
              <label class="remember">
                <input id="remember_me" type="checkbox" name="remember">Remember
              </label>
              <div class="inputBx">
                <input type="submit" value="Log in"> 
              </div>
            </form>
            <p>Forgot password? <a href="{{ route('password.request') }}">Click Here</a></p>
            <p>Don't have an account <a href="{{ route('register') }}">Sign up</a></p>
          </div>
        </div>
          
        </div>
    </section>
  </main>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script>
    function show_hide_password(target){
        var input = document.getElementById('password-input');
        if (input.getAttribute('type') == 'password') {
            target.classList.add('view');
            input.setAttribute('type', 'text');
        } else {
            target.classList.remove('view');
            input.setAttribute('type', 'password');
        }
        return false;
    }
  </script>
</body>

</html>