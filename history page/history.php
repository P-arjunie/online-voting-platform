<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sing-Off voting platform</title>
    <link rel= "stylesheet" href='../header/header.css'>
    <link rel="stylesheet" href="../header/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
     .btn4{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 15px;
      background-color: #17a17f;
      color: white;

      border-radius: 7px;
      border-color: #17a17f;
      padding: 5px;
      text-align: center;
}
.aaa1 {
  text-decoration: none;
  color: black;
}   
    </style>
</head>
    <header>
        <table style="width: 100%;">
         <div class="div2" >
            <tr style="height: 150px;">
            <td id="logo_img"><img src="../header/My project-1 (1).png" id = "logo_img"></td>
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
            <h1>Contact us page responses</h1>
            <table border='1' width=80%  style="background-color:#8f97c0;">
    <tr>
        <th><b>User ID</b></th>
        <th><b>First name</b></th>
        <th><b>Last name</b></th>
        <th><b>Email</b></th>
        <th><b>Question</b></th>
        <th><b>update</b></th>
        <th><b>delete</b></th>
    </tr>
<?php

// contact us responses
$sql = "SELECT * FROM details1";
$result = $conn->query($sql);
if($result->num_rows > 0){
   
$row_count = $result->num_rows ;
        for ($i=0; $i<$row_count; $i++){
while($_row = $result->fetch_assoc()){
   
echo "<tr>
<td>".$_row['userid']."</td>
<td>".$_row['Fname']."</td>
<td>".$_row['Lname']."</td>
<td>".$_row['email']."</td>
<td>".$_row['question']."</td>
<td>
   
<button class='btn4'><a class='aaa1' href='update.php? updateid=".$_row['userid']."'>update</a></button></td>
<td>
<button class='btn4'><a class='aaa1' href='delete.php? deleteid=".$_row['userid']."'>delete</a></button> 
</td>
</tr>";
    
}
}

}
else{
    echo"empty rows";
}
?>
</table>
<br><br>

<table>
    <tr>
    <tr> <td style="empty-cells:hide; width: 500px;"></td>
        <td>
        <button  style="color:white; background-color: rgb(73, 71, 185); border-radius:10px; padding:10px">
  <a href="../Admin acc/admin.php" style="text-decoration:none; color:white;">  Back to admin page</a> 
</button> 
    </tr>
</table>

        </div>

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