<?php
session_start();
$name=$_SESSION['user'];
$servername = @"localhost"; 
$username = "prw0878_Portfolio";
$password = "Vinni@1204";
$dbname = "prw0878_Portfolio";
$port = "3306";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
// Check connection    
if (mysqli_connect_errno()) {
echo "Error occured while connecting to database ".mysqli_connect_errno();
}
 $email=$_POST['email'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset ="UTF -8">
        <meta name ="viewport" content="width=dvice-width, initial-scale=1.0">
        <title>Personal Portfolio website</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <nav class="navbar">
            <!-- <div class="nav_logo">
            <a href="index.html" class="nav__logo-text">PW</a>
            </div> -->
            <div class="max-width">
                <ul class="menu">
                    <li><a href="#home" class="menu-btn">Home</a></li>
                    <li><a href="#about" class="menu-btn">About</a></li>
                    <li><a href="#education" class="menu-btn">Education</a></li>
                    <li><a href="#Exp" class="menu-btn">Work Experience</a></li>
                    <li><a href="#skills" class="menu-btn">Skills</a></li>
                    <!-- <li><a href="#">"Projects" class="menu-btn"</a></li> -->
                    <li><a href="#contact" class="menu-btn">Contact</a></li>
                </ul>
                
            </div>
        </nav>

        <section class="home" id="home">
            <div class= "max-width">
                <div class="home-content">
                    <div class="column right">
                        <img src="images/priya.jpg" alt="">
                    </div>
                    <div class="text-1">
                    <?php
                     $email=$_POST['email'];
                    $sql = "SELECT FULL_NAME FROM Portfolio WHERE EMAIL='$email'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {
                    
                    echo "<p> $row[FULL_NAME] </p>"; 
                    
                    } 
                    ?>
                    </div>
                    <div class="text-2"><?php
                    $sql = "SELECT CURRENT_TITLE FROM Portfolio WHERE EMAIL='$email'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {                   
                    echo "<p> $row[CURRENT_TITLE] </p>";                   
                    } 
                    ?></div>                   
                </div>
            </div>
        </section>

        <section class="about" id="about">
            <div class= "max-width">
                <h2 class="title">About me</h2>
                <div class="about-content">            
                <div class="column right">
                    <!-- <div class="text">vhvhghjgcvhbvgcvbv hggfhj</div> -->
                    <p><?php
                    $sql = "SELECT DESCRIPTION FROM Portfolio WHERE EMAIL='$email'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {                   
                    echo "<p> $row[DESCRIPTION] </p>";                   
                    } 
                    ?></p> 
                    <a href="#">Download Resume</a>                 
                </div>
            </div>
            </div>
        </section>

        <section class="education" id="education">
            <div class= "max-width">
                <h2 class="title">Education</h2>
                <div class="education-content">
                    <div class="card">
                        <div class="box">  
                             <div class="text"><?php
                    $sql = "SELECT UNIV_NAME1 FROM Portfolio WHERE EMAIL='$email'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {                   
                    echo "<p> $row[UNIV_NAME1] </p>";                   
                    } 
                    ?></div>
                             <p><?php
                    $sql = "SELECT UNIV_START_DATE1,UNIV_END_DATE1 FROM Portfolio WHERE EMAIL='$email'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {                   
                    echo "<p> $row[UNIV_START_DATE1] To $row[UNIV_END_DATE1] </p>";                   
                    } 
                    ?></p>
                             <p><?php
                    $sql = "SELECT UNIV_FIELD1 FROM Portfolio WHERE EMAIL='$email'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {                   
                    echo "<p> $row[UNIV_FIELD1] </p>";                   
                    } 
                    ?></p>
                             <!-- <p>Cumulative GPA: 3.8/4</p> -->
                        </div>
                    </div>
                    <div class="card">
                        <div class="box"> 
                            <div class="text"><?php
                    $sql = "SELECT UNIV_NAME2 FROM Portfolio WHERE EMAIL='$email'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {                   
                    echo "<p> $row[UNIV_NAME2] </p>";                   
                    } 
                    ?></div>
                            <p><?php
                    $sql = "SELECT UNIV_START_DATE2,UNIV_END_DATE2 FROM Portfolio WHERE EMAIL='$email'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {                   
                    echo "<p> $row[UNIV_START_DATE2] To $row[UNIV_END_DATE2] </p>";                   
                    } 
                    ?></p>
                            <p><?php
                    $sql = "SELECT UNIV_FIELD2 FROM Portfolio WHERE EMAIL='$email'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {                   
                    echo "<p> $row[UNIV_FIELD2] </p>";                   
                    } 
                    ?></p> 
                        </div>
                     </div>     
                </div>
            </div>

        </section>

        <section class="Exp" id="Exp">
            <div class= "max-width">
                <h2 class="title">Work Experience</h2>
                <div class="timeline">
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                            <h3 class="timeline_title"><?php
                    $sql = "SELECT EMPLOYER1 FROM Portfolio WHERE EMAIL='$email'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {                   
                    echo "<p> $row[EMPLOYER1] </p>";                   
                    } 
                    ?></h3> 
                            <p class="timeline_text"><?php
                    $sql = "SELECT EMPLOYER1_ROLE FROM Portfolio WHERE EMAIL='$email'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {                   
                    echo "<p> $row[EMPLOYER1_ROLE] </p>";                   
                    }?></p>
                            <span class="timeline_date"><i class="uil uil-calendar-alt"></i><?php
                    $sql = "SELECT EMPLOYER1_STARTDATE,EMPLOYER1_ENDDATE FROM Portfolio WHERE EMAIL='$email'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {                   
                    echo "<p> $row[EMPLOYER1_STARTDATE] To $row[EMPLOYER1_ENDDATE] </p>";                   
                    } 
                    ?></span>
                             <div class="text"><?php
                             $sql = "SELECT EMPLOYER1_DUTIES FROM Portfolio WHERE EMAIL='$email'";
                             $result = $conn->query($sql);
                             while($row = $result->fetch_assoc()) {                   
                             echo "<p> $row[EMPLOYER1_DUTIES] </p>";                   
                             }?>
                                </div>
                       
                    </div> 
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                            <h3 class="timeline_title"><?php
                            $sql = "SELECT EMPLOYER2 FROM Portfolio WHERE EMAIL='$email'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {                   
                            echo "<p> $row[EMPLOYER2] </p>";                   
                            }?></h3> 
                            <p class="timeline_text"><?php
                            $sql = "SELECT EMPLOYER2_ROLE FROM Portfolio WHERE EMAIL='$email'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {                   
                            echo "<p> $row[EMPLOYER2_ROLE] </p>";                   
                            }?></p>
                            <span class="timeline_date"><i class="uil uil-calendar-alt"></i><?php
                    $sql = "SELECT EMPLOYER2_STARTDATE,EMPLOYER2_ENDDATE FROM Portfolio WHERE EMAIL='$email'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {                   
                    echo "<p> $row[EMPLOYER2_STARTDATE] To $row[EMPLOYER2_ENDDATE] </p>";                   
                    } 
                    ?></span>
                             <div class="text"><?php
                             $sql = "SELECT EMPLOYER2_DUTIES FROM Portfolio WHERE EMAIL='$email'";
                             $result = $conn->query($sql);
                             while($row = $result->fetch_assoc()) {                   
                             echo "<p> $row[EMPLOYER2_DUTIES] </p>";                   
                             }?>
                                </div>
                       
                    </div>
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                            <h3 class="timeline_title"><?php
                            $sql = "SELECT EMPLOYER3 FROM Portfolio WHERE EMAIL='$email'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {                   
                            echo "<p> $row[EMPLOYER3] </p>";                   
                            }?></h3> 
                            <p class="timeline_text"><?php
                            $sql = "SELECT EMPLOYER3_ROLE FROM Portfolio WHERE EMAIL='$email'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {                   
                            echo "<p> $row[EMPLOYER3_ROLE] </p>";                   
                            }?></p>
                            <span class="timeline_date"><i class="uil uil-calendar-alt"></i><?php
                    $sql = "SELECT EMPLOYER3_STARTDATE,EMPLOYER3_ENDDATE FROM Portfolio WHERE EMAIL='$email'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {                   
                    echo "<p> $row[EMPLOYER3_STARTDATE] To $row[EMPLOYER1_ENDDATE] </p>";                   
                    } 
                    ?></span>
                             <div class="text"><?php
                             $sql = "SELECT EMPLOYER3_DUTIES FROM Portfolio WHERE EMAIL='$email'";
                             $result = $conn->query($sql);
                             while($row = $result->fetch_assoc()) {                   
                             echo "<p> $row[EMPLOYER3_DUTIES] </p>";                   
                             }?>
                                </div>                      
                    </div>
                     
                </div>
            </div>

        </section>

        <section class="skills" id="skills">
            <div class= "max-width">
                <h2 class="title">Skills</h2>
                <div class="skills-content">
                    <div class="card1">
                        <div class="info">  
                             <div class="text">Technical</div>
                             <div class="text-1"><?php
                             $sql = "SELECT TECH_SKILLS FROM Portfolio WHERE EMAIL='$email'";
                             $result = $conn->query($sql);
                             while($row = $result->fetch_assoc()) {                   
                             echo "<p> $row[TECH_SKILLS] </p>";                   
                             } 
                             ?></div>
                        </div>
                    </div>  
                    <div class="card1">
                        <div class="info">  
                             <div class="text">Certifications & Training</div>
                             <div class="text-1"><?php
                             $sql = "SELECT CERTIFICATION FROM Portfolio WHERE EMAIL='$email'";
                             $result = $conn->query($sql);
                             while($row = $result->fetch_assoc()) {                   
                             echo "<p> $row[CERTIFICATION] </p>";                   
                             } 
                             ?>
                                </div>
                        </div>
                    </div>  
                </div>
            </div>
        </section>
        <section class="contact" id="contact">
            <div class="max-width">
                <h2 class="title">Contact me</h2>
                <div class="contact-content">
                    <div class="column left">
                        <div class="text">Get in Touch</div>
                        <div class="icons">
                            <div class="row">
                                <i class="fas fa-envelope"></i>
                                <div class="info">
                                    <div class="head">Email</div>
                                    <div class="sub-title"><?php
                                    $sql = "SELECT EMAIL FROM Portfolio WHERE EMAIL='$email'";
                                    $result = $conn->query($sql);
                                    while($row = $result->fetch_assoc()) {                   
                                    echo "<p> $row[EMAIL] </p>";                   
                                    } 
                                    ?></div>
                                     <!-- <div class="sub-title1">prwakte291@gmail.com</div> -->
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-phone"></i>
                                <div class="info">
                                    <div class="head">Number</div>
                                    <div class="sub-title"><?php
                                    $sql = "SELECT TELEPHONE FROM Portfolio WHERE EMAIL='$email'";
                                    $result = $conn->query($sql);
                                    while($row = $result->fetch_assoc()) {                   
                                    echo "<p> $row[TELEPHONE] </p>";                   
                                    } 
                                    ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column right">
                        <div class="text">Message me</div>
                        <form action="#">
                            <div class="fields">
                                <div class="field name">
                                    <input type="text" placeholder="Name" required>
                                </div>
                                <div class="field email">
                                    <input type="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="field">
                                <input type="text" placeholder="Subject" required>
                            </div>
                            <div class="field textarea">
                                <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                            </div>
                            <div class="button-area">
                                <button type="submit">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </section>
        <script  src="script.js"></script>
    </body>
</html>