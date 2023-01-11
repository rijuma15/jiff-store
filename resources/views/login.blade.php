<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login - Jiffstore</title>
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
        <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               <p>Login</p>
            </div>
         </div>
         <div class="form-container">
            <div class="form-inner">
               <form action="login" method="POST" class="login"><br>
                  @csrf
                  <div class="field">
                     <input type="text" name="email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div><br>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="/register">Register now</a>
                  </div>
               </form>
               </div>
         </div>
      </div>
</body>
</html>