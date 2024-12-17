<?php
require 'config.php';
$id=$_GET['updateid'];

if (isset($_POST['submit'])) {
   
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $ques = $_POST['subject'];

    $sql = "UPDATE `details1` SET userid = $id, Fname = '$fname', Lname = '$lname', email = '$email', question = '$ques' WHERE userid = $id";



if ($conn->query($sql)) {
      
     header("Location:history.php");
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
};
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sing-Off voting platform</title>
    <link rel="stylesheet" href="contact2.css">
    <link rel= "stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
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
            <td id="logo_img"><img src="My project-1 (1).png" id = "logo_img"></td>
            <td id="header_text">
            <h1 style="font-size: 50px;">SING-OFF!!</h1>
            <h2 style="font-size: xx-large;"> Online voting platform</h2>
            </td>
            </tr>
        </div>
        </table>
    </header>
    <body>  
     


        <div class="allContent">
            <table >
          <td>

       
            <form  method="post" >
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                
                    <label for="country">Country</label>
                    <select id="country" name="country">
                    <option value="SL">Sri Lanka</option>
                    <option value="india">India</option>
                      <option value="australia">Australia</option>
                      <option value="canada">Canada</option>
                      <option value="usa">USA</option>
                    </select>
                    
                        <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your email..">
                
                
                    <label for="subject">your question...</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>
                
                    <input type="submit" name="submit" value="update" style="background-color: rgb(175, 185, 223); color: rgb(11, 11, 70)">
                  </form>   </td>
                  
                  <td style="empty-cells:hide; width: 600px;"></td>
                  </table>
                  <table>
    <tr>
    <tr> <td style="empty-cells:hide; width: 600px;"></td>
        <td>
        <button  style="color:white; background-color: rgb(73, 71, 185); border-radius:10px; padding:10px;padding-left:20px; padding-right:20px; font-size:15px">
  <a href="history.php" style="text-decoration:none; color:white;">  Back</a> 
</button> 
    </tr>
</table>
                  <footer>
            <div class="footer_container">
                <div class = "footer_row">
                <img class="footer_logo" src="../header/My project-1 (1).png">
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
                <td><a href="../user account,rules & regulations/rules.html">Privacy policy</a></td>
                <td><a href="../user account,rules & regulations/rules.html">Terms and Conditions</a></td>
                <td><a href="../contactus,faq,vote/finalfaq.html">FAQs</a></td>
                </div>
                </tr>
               </table>
            </div>
            </div>
        </footer>
    </body>
</html>