<?php
if (isset($_POST['signup-button'])) {
    // Perform any necessary actions or validations before redirecting
    
    // Redirect to the desired page
    header("Location: new_page.php");
    exit(); // Make sure to exit the script after the redirect
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sing-Off voting platform</title>
    <link rel= "stylesheet" href='header/header.css'>
    <link rel="stylesheet" href="header/footer.css">
    <link rel="stylesheet" href="log.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <header>
        <table style="width: 100%;">
         <div class="div2" >
            <tr style="height: 150px;">
            <td id="logo_img"><img src="header/My project-1 (1).png" id = "logo_img"></td>
            <td id="header_text">
            <h1 style="font-size: 50px;">SING-OFF!!</h1>
            <h2 style="font-size: xx-large;"> Online voting platform</h2>
            </td>
            </tr>
        </div>
        </table>
      
        <div id="navbar" style="font-family: Arial, Helvetica, sans-serif;">
            <table width="100%">
                <tr>
                <td class="td1"><a href="../homepage/homepage.html"> <b>HOME</b></a></td>
                <td class="td1"> <a href="../contactus,faq,vote/finalcontactus.html"><b>CONTACT US</b></a></td>
                <td class="td1">
                    <div class="dropdown">
                        <button class="dropbtn"><b>ACCOUNTS</b></button>
                    <div class="dropdown-content">
                    <ul>
                       <li><a href="../login,contestant profile/contestant profile .html">Contestant</a></li>
                       <li><a href="../user account,rules & regulations/user account.php">My Profile</a></li>
                       <li><a href="../Admin acc/admin.php">Admin</a></li>
                    </ul>
                    </div>
                    </div> 
                </td>
                <td class="td1">
                    <div class="dropdown">
                        <button class="dropbtn"><b>MORE</b></button>
                        <div class="dropdown-content">
                            <ul>
                                <li><a href="../contactus,faq,vote/finalvote.html">Vote now!</a></li>
                                <li><a href="../Results page/results.php">View Results</a></li>
                                <li><a href="../contactus,faq,vote/finalfaq.html">FAQ's</a></li>
                                <li><a href="../user account,rules & regulations/rules.html">Rules and Regulations</a></li>
                                <li><a href="../registration,time schedule/Time shedule.html">What's next?</a></li>
                            </ul>
                        </div>
                    </div> 
                </td>
                <td style="empty-cells:hide; width: 600px;"></td>
                <td><button class="btn3"><b>LOGIN</b></button></td>
                </tr>
            </table>
        </div>
    </header>
    

<body>
    <script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction(){
        if(window.pageYOffset >= sticky){
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>

<div class="allContent">

    <table width="100%" border="1">
        <tr>
          <td>
            <div class="container">
              <form data-jsv-form="true" data-jsv-submit-handler="customSubmitHandler"
                data-jsv-disable-icons="false" data-jsv-disable-invalid="true"
                data-jsv-form-valid-callback="formValidCallback" data-jsv-form-invalid-callback="formInvalidCallback"
                data-jsv-form-invalid-message="Please correct the errors below"
                data-jsv-form-incomplete-tooltip="Please complete all fields"
                method="post" action="login.php">
                <h1>Log in</h1>
                <input type="text" style="width: 410px; height: 26px;" id="username" name="username"
                  placeholder="User Name"><br><br>
                <input type="password" id="password" name="password" placeholder="Password"><br><br>
                <div class="remember-me">
                  <input type="checkbox" id="remember" name="remember">
                  <label for="remember">Remember me</label>
                  <a class="forgot-password" href="#">Forgot my password</a>
                </div>
                <button type="submit" id="loginButton" class="login-button">Log in</button>
                </form>
                <p>Still don't have an account? <button id="signupButton" class="signup-button" name="signup-button">Sign up</button></p>
                <div class="terms-privacy">
                  <a href="#">Terms & Conditions</a> | <a href="#">Privacy</a>
                </div>
              
            </div>
          </td>
          <td class="sel">
            <div class="container1">
              <p>Our Online Voting System for Reality Shows allows viewers to securely vote for their favorite
                contestants, influencing the cast and crew of popular reality shows.<br><br>
                <div class="sign"> Sign in now! <br><br>let your voice be heard.</div>
              </p>
            </div>
          </td>
        </tr>
      </table>
      <script>
        // Get the username input element
        function handleSignUp(event) {
          window.location.href = "../registration,time%20schedule/Registration%20form.html";
       
      }
      signupButton.addEventListener('click', handleSignUp);
      </script>
      <script>
        // Get the username input element
        function handleLogin(event) {
        var usernameInput = document.getElementById('username');
        localStorage.setItem('username', usernameInput.value);
       
      }
        loginButton.addEventListener('click', handleLogin);
      </script>
</div>

<footer>
    <div class="footer_container">
        <div class = "footer_row">
        <img class="footer_logo" src="header/My project-1 (1).png">
        <table class="footer_table">
        <tr><td rowspan="3"><b>Contacts</b><br><br>
            <i class="fa fa-phone"></i>&nbsp;&nbsp;+94 112312459<br><br>
            <i class="fa fa-envelope"></i>&nbsp;&nbsp;theSingOff@mail.com</td>
            <td colspan="4"><center><b style="font-size: larger;">Follow us on</b></center></td>
        </tr>
        <tr height="30px">
            <td colspan="4"><center>
                <div class="social_icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-google-plus"></i></a>
                </div></center>
                </td>
        </tr>
        <tr>
            <div class="footer-links">
        <td><a href="#">Copyright</a></td>
        <td><a href="#">Privacy policy</a></td>
        <td><a href="#">Terms and Conditions</a></td>
        <td><a href="#">FAQs</a></td>
        </div>
        </tr>
       </table>
    </div>
    </div>
</footer>
</body>

</html>