<!DOCTYPE html>
<html>
<head>
    <title>Sing-Off voting platform</title>
    <link rel= "stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="../header/footer.css">
    <link rel="stylesheet" href="results.css">
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
                <td><i class='far fa-user-circle' style="color: white; font-size: 50px;"></i></td>
                </tr>
            </table>
        </div>
   
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
            <center><h1 class="topic">Final Results of Last Round</h1>
            <i class="sub">Results of last round held on 03.05.2023</i></center>
            <br><br><br>
            <div class="flexbox_container">
                <div class="card shadow_1"><ul>
                    <li><img src="2nd.jpeg" class="img2"></li>
                    <li>2nd Place</li>
                </ul><div class="over">Hazeena Ahmed</div>
                </div>
                <div class="card active"><ul>
                    <li><img src="1st.jpeg" class="img1"></li>
                    <li>1st Place</li>
                </ul><div class="over">Shevin Gomez</div>
                </div>
                <div class="card shadow_2"><ul>
                    <li><img src="3rd.jpg" class="img3"></li>
                    <li>3rd Place</li>
                </ul><div class="over">Anushka Agrawal</div>
                </div>

            </div>
            <?php
$conn = new mysqli('localhost', 'root', '', 'votingsystem');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database for vote counts
$sql = "SELECT v.CanidateId, f.Name, COUNT(*) AS VoteCount
FROM vote v
INNER JOIN finalist_master f ON v.CanidateId = f.Id
GROUP BY v.CanidateId, f.Name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $voteCounts = array(); // Array to store the vote counts

    // Fetch the vote counts into an associative array
    while ($row = $result->fetch_assoc()) {
        $candidateId = $row['CanidateId'];
        $name = $row['Name'];
        $voteCount = $row['VoteCount'];
        $voteCounts[$candidateId] = array('name' => $name, 'voteCount' => $voteCount); // Store both name and vote count
    }

    $conn->close();
} else {
    echo "No results found.";
    $conn->close();
    exit;
}
?>
            <br><br><br><br>
            <center class="link">Wanna watch contestants' previous performances!!<br><i class='far fa-hand-point-down'></i>&nbsp;<i class='far fa-hand-point-down'></i><br>
            <a href="../login,contestant profile/contestant profile .html" class="click">CLICK HERE</a></center>

            <br><br><br><br>
            <div class="winner">
            <table width="100%">
            <tr><td width="40%" class="">
            <table width="100%" border="1" class="w_table"><caption><h1 class="t_topic">Results Table</h1></caption>
            <tr>
            <th>Place</th>
            <th width="50%">Contestant</th>
            <th>Number of Votes</th>
        </tr>
        <tr class="t_row">
            <td>1</td>
            <td><?php echo htmlspecialchars($voteCounts[1]['name']); ?></td>
            <td><?php echo isset($voteCounts[1]) ? $voteCounts[1]['voteCount'] : 0; ?></td>
        </tr>
        <tr class="t_row">
            <td>2</td>
            <td><?php echo htmlspecialchars($voteCounts[2]['name']); ?></td>
            <td><?php echo isset($voteCounts[2]) ? $voteCounts[2]['voteCount'] : 0; ?></td>
        </tr>
        <tr class="t_row">
            <td>3</td>
            <td><?php echo htmlspecialchars($voteCounts[3]['name']); ?></td>
            <td><?php echo isset($voteCounts[3]) ? $voteCounts[3]['voteCount'] : 0; ?></td>
        </tr>
        <tr class="t_row">
            <td>4</td>
            <td><?php echo htmlspecialchars($voteCounts[4]['name']); ?></td>
            <td><?php echo isset($voteCounts[4]) ? $voteCounts[4]['voteCount'] : 0; ?></td>
        </tr>
        <tr class="t_row">
            <td>5</td>
            <td><?php echo htmlspecialchars($voteCounts[5]['name']); ?></td>
            <td><?php echo isset($voteCounts[5]) ? $voteCounts[5]['voteCount'] : 0; ?></td>
        </tr>
        <tr class="t_row">
            <td>6</td>
            <td><?php echo htmlspecialchars($voteCounts[6]['name']); ?></td>
            <td><?php echo isset($voteCounts[6]) ? $voteCounts[6]['voteCount'] : 0; ?></td>
        </tr>
            </table>
            </td>
            <td>
            <table width="100%">
            <div>
            <tr><td class="announce">
                <div class="v_container">
                <video width="550" height="420" controls>
                    <source src="d-GKNxBeHBulsyb3.mp4" type="video/mp4">
                </video>
                <div class="overlay">
                   <h2> Winner Performance<br><br></h2>
                </div>
                </div>
            </td></tr>
            </div>
            </table>
            </td>
            </tr>
            </table>
            </div>
            
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