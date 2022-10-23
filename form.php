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
?>
<html>
<body>
  <div class="col-md-6 offset-md-3 mt-5">
    <br>
    <!-- <a target="_blank" href="https://getform.io?ref=codepenHTML" class="mt-3 d-flex">Getform.io | Get your free endpoint now</a> -->
    <h1>Simple Form</h1>
    <form action="insert.php" method="POST">
      <div class="form-group">
        <label for="exampleInputName">Full Name</label>
        <input type="text" name="fullname" class="form-control" id="exampleInputName" placeholder="Enter your full name" required="required">
      </div>
      <div class="form-group">
        <p>What is your current title: </p> 
        <p>
            <label><textarea name="title" id="title" cols="45" rows="2"></textarea></label>
        </p>
        <div class="form-group">
            <p>Short description about yourself: </p> 
            <p>
                <label><textarea name="desc" id="title" cols="45" rows="5"></textarea></label>
            </p> 
        <label for="exampleInputEmail1" required="required">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
      </div>
      <div class="form-group">
        <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
        <div class="col-10">
          <input class="form-control" name="tel" type="tel" placeholder="1-(555)-555-5555" id="example-tel-input">
        </div>
      </div>
      <p>Education: </p>
      <div class="form-group"> 
        <label for="inputUniv">University Name</label>
        <input type="text" name="univ1" class="form-control" id="inputUniv" placeholder="University...">
      </div>
        <div class="form-group">
            <label for="example-date-input" class="col-3 col-form-label">Start Date</label>
            <div class="col-10">
              <input class="form-control" name="univ_starting_date1" type="text" placeholder="Month Year" id="example-date-input">
            </div>
          </div>
          <div class="form-group">
            <label for="example-date-input" class="col-3 col-form-label">End Date</label>
            <div class="col-10">
              <input class="form-control" name="univ_ending_date1" type="text" placeholder="Month Year" id="example-date-input">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputField">Field</label>
              <input type="text" name="univ_field1" class="form-control" id="inputField" placeholder="Computer Science">
            </div>
            <br>
            <div class="form-group"> 
                <label for="inputUniv">University Name</label>
                <input type="text" name="univ2" class="form-control" id="inputUniv1" placeholder="University...">
              </div>
                <div class="form-group">
                    <label for="example-date-input" class="col-3 col-form-label">Start Date</label>
                    <div class="col-10">
                      <input class="form-control" name="univ_starting_date2" type="text" placeholder="Month Year" id="example-date-input1">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="example-date-input" class="col-3 col-form-label">End Date</label>
                    <div class="col-10">
                      <input class="form-control" name="univ_ending_date2" type="text" placeholder="Month Year" id="example-date-input1">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputField">Field</label>
                      <input type="text" name="univ_field2" class="form-control" id="inputField" placeholder="Computer Science">
                    </div>
                    <p>Work Experience: </p>

                    <div class="form-group"> 
                        <label for="inputWrk1">Employer</label>
                        <input type="text" name="Employer1" class="form-control" id="inputEmp1" placeholder="CompanyName...">
                      </div>
                        <div class="form-group">
                            <label for="example-date-input" class="col-3 col-form-label">Start Date</label>
                            <div class="col-10">
                              <input class="form-control" name="emp_starting_date1" type="text" placeholder="Month Year" id="strt-date-inputExp1">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="example-date-input" class="col-3 col-form-label">End Date</label>
                            <div class="col-10">
                              <input class="form-control" name="emp_ending_date1" type="text" placeholder="Month Year" id="end-date-inputExp1">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputField">Role</label>
                              <input type="text" name="Role1" class="form-control" id="inputRole1" placeholder="Software Engineer">
                            </div>
                            <p>Duties: </p> 
            <p>
                <label><textarea name="Duties1" id="title" cols="45" rows="5"></textarea></label>
            </p> 

            <div class="form-group"> 
                <label for="inputWrk1">Employer</label>
                <input type="text" name="Employer2" class="form-control" id="inputEmp2" placeholder="CompanyName...">
              </div>
                <div class="form-group">
                    <label for="example-date-input" class="col-3 col-form-label">Start Date</label>
                    <div class="col-10">
                      <input class="form-control" name="emp_starting_date2" type="text" placeholder="Month Year" id="strt-date-inputExp2">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="example-date-input" class="col-3 col-form-label">End Date</label>
                    <div class="col-10">
                      <input class="form-control" name="emp_ending_date2" type="text" placeholder="Month Year" id="end-date-inputExp2">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputField">Role</label>
                      <input type="text" name="Role2" class="form-control" id="inputRole2" placeholder="Software Engineer">
                    </div>
                    <p>Duties: </p> 
    <p>
        <label><textarea name="Duties2" id="title" cols="45" rows="5"></textarea></label>
    </p> 
    <div class="form-group"> 
        <label for="inputWrk1">Employer</label>
        <input type="text" name="Employer3" class="form-control" id="inputEmp3" placeholder="CompanyName...">
      </div>
        <div class="form-group">
            <label for="example-date-input" class="col-3 col-form-label">Start Date</label>
            <div class="col-10">
              <input class="form-control" name="emp_starting_date3" type="text" placeholder="Month Year" id="strt-date-inputExp3">
            </div>
          </div>
          <div class="form-group">
            <label for="example-date-input" class="col-3 col-form-label">End Date</label>
            <div class="col-10">
              <input class="form-control" name="emp_ending_date3" type="text" placeholder="Month Year" id="end-date-inputExp3">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputField">Role</label>
              <input type="text" name="Role3" class="form-control" id="inputRole3" placeholder="Software Engineer">
            </div>
            <p>Duties: </p> 
<p>
<label><textarea name="Duties3" id="title" cols="45" rows="5"></textarea></label>
</p> 
                            <br>
                            
        <p>Skills: </p>

        <div class="form-group">
            <label for="example-skill-input" class="col-2 col-form-label">Technical</label>
            <div class="col-10">
              <input class="form-control" name="Technical" type="skill" placeholder="Skills.." id="example-skill-input">
            </div>
          </div>
          <div class="form-group">
            <label for="example-certi-input" class="col-2 col-form-label">Certifications and Trainings</label>
            <div class="col-10">
              <input class="form-control" name="certi" type="tel" placeholder="certifications.." id="example-certi-input">
            </div>
          </div>
          <br>
  
      <div class="form-group mt-3">
        <label class="mr-4">Upload your CV:</label>
        <input type="file" name="file">
      </div>
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>