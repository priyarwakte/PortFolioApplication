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
if(isset($_POST['submit'])){

    $fullname=$_POST['fullname'];
    $title=$_POST['title'];
    $desc=$_POST['desc'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $univ1=$_POST['univ1'];
    $univ_starting_date1=$_POST['univ_starting_date1'];
    $univ_ending_date1=$_POST['univ_ending_date1'];
    $univ_field1=$_POST['univ_field1'];
    $univ2=$_POST['univ2'];
    $univ_starting_date2=$_POST['univ_starting_date2'];
    $univ_ending_date2=$_POST['univ_ending_date2'];
    $univ_field2=$_POST['univ_field2'];
    $Employer1=$_POST['Employer1'];
    $emp_starting_date1=$_POST['emp_starting_date1'];
    $emp_ending_date1=$_POST['emp_ending_date1'];
    $Role1=$_POST['Role1'];
    $Duties1=$_POST['Duties1'];
    $Employer2=$_POST['Employer2'];
    $emp_starting_date2=$_POST['emp_starting_date2'];
    $emp_ending_date2=$_POST['emp_ending_date2'];
    $Role2=$_POST['Role2'];
    $Duties2=$_POST['Duties2'];
    $Employer3=$_POST['Employer3'];
    $emp_starting_date3=$_POST['emp_starting_date3'];
    $emp_ending_date3=$_POST['emp_ending_date3'];
    $Role3=$_POST['Role3'];
    $Duties3=$_POST['Duties3'];
    $Technical=$_POST['Technical'];
    $certi=$_POST['certi'];
    $email1=$_POST['email'];

    $insertQuery="INSERT INTO Portfolio(FULL_NAME,CURRENT_TITLE,DESCRIPTION,EMAIL,TELEPHONE,UNIV_NAME1,UNIV_START_DATE1,UNIV_END_DATE1,UNIV_FIELD1,UNIV_NAME2,UNIV_START_DATE2,UNIV_END_DATE2,UNIV_FIELD2,EMPLOYER1,EMPLOYER1_STARTDATE,EMPLOYER1_ENDDATE,EMPLOYER1_ROLE,EMPLOYER1_DUTIES,EMPLOYER2,EMPLOYER2_STARTDATE,EMPLOYER2_ENDDATE,EMPLOYER2_ROLE,EMPLOYER2_DUTIES,EMPLOYER3,EMPLOYER3_STARTDATE,EMPLOYER3_ENDDATE,EMPLOYER3_ROLE,EMPLOYER3_DUTIES,TECH_SKILLS,CERTIFICATION,RESUME) VALUES ('$fullname','$title','$desc','$email','$tel','$univ1','$univ_starting_date1','$univ_ending_date1','$univ_field1','$univ2','$univ_starting_date2','$univ_ending_date2','$univ_field2','$Employer1','$emp_starting_date1','$emp_ending_date1','$Role1','$Duties1','$Employer2','$emp_starting_date2','$emp_ending_date2','$Role2','$Duties2','$Employer3','$emp_starting_date3','$emp_ending_date3','$Role3','$Duties3','$Technical','$certi','$email1')";
    $result=mysqli_query($conn, $insertQuery);
    $count=mysqli_num_rows($result);
    if($count==0){
       echo "<div class='listcourses'>";
       echo "<form action='index.php' method='POST'>"; 
       echo "<input name='email' value='$email' readonly/></br>";
        echo "<button style='cursor:pointer' name='submit'>Submit</button>";
           echo"</form>";
            echo "</div>";

    }
}

$conn->close();
?>
