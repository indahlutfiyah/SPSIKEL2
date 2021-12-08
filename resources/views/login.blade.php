@extends('layout.navbar')

@section('login')

<section>
<div class="intro-section" id="home-section">
    <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="sign">
              <!--sign-->
              <div class="container <?php echo (isset($_GET['errorp']) || isset($_GET['signup']))? 'right-panel-active':''; ?>" id="container">
                <div class="form-container sign-up-container">
                  <form action="includes/signup1.inc.php" method="post" id="signup_form">
                    <h1 class="title">Sign Up</h1>
                    <br>
                    <?php
                    if (isset($_GET['errorp'])){
                      if ($_GET['errorp']=="emptyfields"){
                        echo '<div style="color:red;">Fill in all fields !</div>';
                      }else if ($_GET['errorp']=="invalidmailuid"){
                        echo '<div style="color:red;">Invalid username and e-mail !</div>';
                      }else if ($_GET['errorp']=="invaliduid"){
                        echo '<div style="color:red;">Invalid username !</div>';
                      }else if ($_GET['errorp']=="invalidmail"){
                        echo '<div style="color:red;">Invalid e-mail !</div>';
                      }else if ($_GET['errorp']=="passwordcheck"){
                        echo '<div style="color:red;">Passwords don\'t match!</div>';
                      }else if ($_GET['errorp']=="usertaken"){
                        echo '<div style="color:red;">Username is already taken!</div>';
                      }
                    }elseif (isset($_GET['signup']) ) {
                      if ($_GET['signup']=="success")
                        echo '<div style="color:green;">Signup Successful ! Feel free to login !</div>';
                    }
                     ?>
                    <div id="error_signup_name"></div>
                    <input type="text" id="name_signup" name="uid" placeholder="Name" value="<?php if (isset($_GET['errorp'])){
                      if ($_GET['errorp']=='invalidmail' || $_GET['errorp']=='passwordcheck' || $_GET['errorp']=='emptyfields'){
                        echo  isset($_GET['uid']) ? $_GET['uid']:'';
                      }else {
                        echo '';
                      }
                    }  ?>" />
                    <div id="error_signup_email"></div>
                    <input type="email" id="mail_signup" name="mail" placeholder="E-mail"
                      value="<?php if (isset($_GET['errorp'])){
                      if ($_GET['errorp']=='invaliduid' || $_GET['errorp']=='passwordcheck' || $_GET['errorp']=='emptyfields' || $_GET['errorp']=='usertaken'){
                        echo  isset($_GET['mail']) ? $_GET['mail']:'';
                      }else {
                        echo '';
                      }
                    }  ?>" />
                    <div id="error_signup_pwd1"></div>
                    <input type="password" id="pwd1_signup" name="pwd" placeholder="Password" />
                    <div id="error_signup_pwd2"></div>
                    <input type="password" id="pwd2_signup" name="pwd-repeat" placeholder="Repeat Password" />
                    <button>Sign Up</button>
                  </form>

                </div>
                <div class="form-container sign-in-container">
                  <form action="includes/login.inc.php" method="post" id="signin_form">
                    <h1 class="title">Login</h1>
                    <br>
                    <?php
                    if (isset($_GET['error'])){
                      if ($_GET['error']=="emptyfields"){
                        echo '<div style="color:red;">Fill in all fields !</div>';
                      }else if ($_GET['error']=="wrongpwd"){
                        echo '<div style="color:red;">Wrong password!</div>';
                      }else if ($_GET['error']=="nomatch"){
                        echo '<div style="color:red;">There\'s no match for your email !</div>';

                    }elseif (isset($_GET['login']) ) {
                      if ($_GET['signup']=="success")
                        echo '<div style="color:green;">Sign in Successful !</div>';
                    }
                }?>
                    <div id="error_signin_mail"></div>
                    <input type="email" id="mailsignin" placeholder="Email" name="mailuid" placeholder="Username/E-mail"
                      value="<?php if (isset($_GET['error'])){
                                      if ($_GET['error']=="wrongpwd" || $_GET['error']=="emptyfields"){
                                            echo  isset($_GET['mail'])?$_GET['mail']:'';
                                      }else {
                                            echo '';
                                           }
                  }  ?>" />
                    <div id="error_signin_pwd"></div>
                    <input type="password" id="pwdsignin" name="pwd" placeholder="Password" />
                    <a href="mail_input.php">Forgot your password?</a>
                    <button>Masuk</button>
                  </form>
                </div>
                <div class="overlay-container">
                  <div class="overlay">
                  <div id="overlay-left" class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                      </div>
                      <div class="overlay-panel overlay-right">
                        <h1>Pengajuan Surat Honor</h1><br>
                        <h1>PKL/MAGANG D3 SI UNAIR</h1>
                        <p>Ajukan Surat Pengajuan Honor Lebih Mudah dan Efisien</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                      </div>
                  </div>
                </div>
            </div>
          </div>
          <!--end-->
        </div>
        </div>
        </div>
        </div>
      </div>
    </div>
  </div> 
</section>
 
@endsection