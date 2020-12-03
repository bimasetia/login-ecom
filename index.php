<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Transcript Online</title>
  </head>

  <body>
    <header>
    <nav>
      <div class="container">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </div>
    </div>
    </nav> 
  </header>


  <section>
    <div class="container">
    <div class="row">
      <div class="col s7"><br><br>
        <h5>Sign In</h5>
        <form action="login.php" method="post">
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate" name="email">
            <label for="email">Email Address</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password" type="password" class="validate" name="password">
            <label for="password">Password</label>
          </div>
        </div>
        <button type="submit" class="waves-effect waves-light btn-small">Sign In</button>
        <label>
          <input type="checkbox" />
          <span>Remember this account.</span>
        </label> <br>
        <a href="#">Forgot your password?</a>
      </form>
      </div><br><br><br><br>
      <div class="col s5">
        <h5>Create an Account</h5>
        <p>Keuntungan Mendaftar:</p>
        <ul>Faster Checkout <br><span>Menyimpan contact dan payment info</span></ul>
        <ul>Save Preferences <br><span>Document dan formatting types</span></ul>
        <ul>Stay Informed <br><span>Detailed order history</span></ul>
        <a class="waves-effect waves-light btn-large" href="register.html">CREATE ACCOUNT</a><br>
        <a href="#">Want to be our freelancer? Visit here.</a>
      </div>
    </div>
  </div>
  </section>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
  </body>
</html>
      