<?php
require 'db_conn.php';


            if(isset($_POST['submit'])){
                $lastname = $_POST['lastname'];
                $middlename = $_POST['middlename'];
                $firstname = $_POST['firstname'];
                $gender = $_POST['gender'];
                $birthdate = $_POST['birthdate'];
                $maritalstatus = $_POST['maritalstatus'];
                $nationality = $_POST['nationality'];
                $bloodgroup = $_POST['bloodgroup'];
                $noname = $_POST['noname'];
                $relation = $_POST['relation'];
                $peraddress = $_POST['peraddress'];
                $curaddress = $_POST['curaddress'];
                $monumber = $_POST['monumber'];
                $othernumber = $_POST['othernumber'];
                $idnumber = $_POST['idnumber'];
                $pan = $_POST['pan'];
                $licnumber = $_POST['licnumber'];
                $email = $_POST['email'];
                $emerlastname = $_POST['emerlastname'];
                $emerfirstname = $_POST['emerfirstname'];
                $emeraddress = $_POST['emeraddress'];
                $emerphnumber = $_POST['emerphnumber'];
                $emermonumber = $_POST['emermonumber'];
                $nomname = $_POST['nomname'];
                $scname = $_POST['scname'];
                $yeara = $_POST['yeara'];
                $instiname = $_POST['instiname'];
                $yearat = $_POST['yearat'];
                $instituname = $_POST['instituname'];
                $subname = $_POST['subname'];
                $yearatt = $_POST['yearatt'];
                $institutename = $_POST['institutename'];
                $subdname = $_POST['subdname'];
                $yearatten = $_POST['yearatten'];
                $school = $_POST['school'];
                $ug = $_POST['ug'];
                $pg = $_POST['pg'];
                $certi = $_POST['certi'];
                $diploma = $_POST['diploma'];
                $others = $_POST['others'];
                $empname = $_POST['empname'];
                $datebirth = $_POST['datebirth'];
                $nickname = $_POST['nickname'];
                $famback = $_POST['famback'];
                $perinterest = $_POST['perinterest'];
                $goals = $_POST['goals'];
                $intro = $_POST['intro'];


                $sql="INSERT INTO details values('$lastname','$middlename','$firstname','$gender','$birthdate','$maritalstatus','$nationality','$bloodgroup','$noname','$relation','$peraddress','$curaddress','$monumber','$othernumber','$idnumber','$pan','$licnumber','$email','$emerlastname','$emerfirstname','$emeraddress','$emerphnumber','$emermonumber','$nomname','$scname','$yeara','$instiname','$yearat','$instituname','$subname','$yearatt','$institutename','$subdname','$yearatten','$school','$ug','$pg','$certi','$diploma','$others','$empname','$datebirth','$nickname','$famback','$perinterest','$goals','$intro')";
                $result=mysqli_query($conn,$sql);

                echo "<script> alert('successfully saved.')</script>";

                // if($result){
                //     echo "<script> alert('successfully saved.')</script>";
                // }else{
                //     echo "<script> alert('not saved.')</script>";
                // }  
            }
 ?>
    
<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  /* background-color: blue; */
  /* align: 10; */
  padding: 10;
}
.eduback{
    margin-left:150px;
}

* {
  box-sizing: border-box;
}
form{
    align-items: center;
}

/* Add padding to containers */
.container {
  padding: 20px;
  background-color: white;
  margin: 80px 80px 80px 80px;
  margin-left: 100px;
  margin-right: 100px;
  border: 1px solid black;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  /* width: 100%; */
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #0439aa;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="admin.php">Admin</a></li>
          </ul>
      </div>
    </nav>

<form class="" action="" method="post" autocomplete="off">
    <div class="container">
      <h2>Personal Information</h2>
        
         <label for="">Last Name : </label>
         <input type="text" name="lastname" placeholder="Enter your last name" required>
       
          <label for="">Middle Name :</label>
          <input type="text" name="middlename" placeholder="Enter your middle name" required>
        
          <label for="">First Name :</label>
          <input type="text" name="firstname" placeholder="Enter your first name" required>

          <label for="">Gender : </label>
          <input type="radio" name="gender" value="Male" required>Male
          <input type="radio" name="gender" value="Female">Female
          <hr>

           <label for="">Date of Birth :</label>
           <input type="text" name="birthdate" placeholder="(dd/mm/yy)" required>

           <label for="">Marital status : </label>
           <input type="text" name="maritalstatus" placeholder="Marital status" required>
    
            <label for="">Nationality : </label>
            <input type="text" name="nationality" placeholder="Enter nationality" required>
            <hr>

            <label for="">Blood Group :</label>
            <input type="text" name="bloodgroup" placeholder="Enter Blood Group" required>
            <hr>

            <h4>Nominee for full & final settlement amount & PF<h4><br>
            <label for="">Name : </label>
            <input type="text" name="noname" placeholder="Enter Nominee" required>
            
            <label for="">Relationship : </label>
            <input type="text" name="relation" placeholder="Enter Relationship" required><br>
            <h4>Preferred - (Parent/Spouse)<h4><hr>

            <label for="">Permanent Address</label>
            <input type="text" name="peraddress" placeholder="Enter Permanent Address" required><hr>

            <label for="">Current Address</label>
            <input type="text" name="curaddress" placeholder="Enter Current Address" required><hr>

            <label for="">Mobile Number : </label>
            <input type="text" name="monumber" placeholder="Enter Mobile Number" required>

            <label for="">Other contact Number : </label>
            <input type="text" name="othernumber" placeholder="Enter Other contact Number" required><hr>

            <label for="">ID No : </label>
            <input type="text" name="idnumber" placeholder="Enter ID Number" required><br>

            <label for="">PAN : </label>
            <input type="text" name="pan" placeholder="Enter pan Number" required>

            <label for="">Driver's License No. (if any) : </label>
            <input type="text" name="licnumber" placeholder="Enter License No." required><hr>

            <label for="">Email Address : </label>
            <input type="text" name="email" placeholder="Enter Email Address" required>
    </div>

    <div class="container">
        <h2>EMERGENCY CONTACT INFORMATION</h2>
           <h4>Please provide information on whom to contact in the case of an emergency.</h4>
          
           <label for="">Last Name : </label>
           <input type="text" name="emerlastname" placeholder="Enter last name" required>
       
          <label for="">First Name :</label>
          <input type="text" name="emerfirstname" placeholder="Enter first name" required><hr>

           <label for="">Relationship To You:</label>
           <input type="text" name="emerrelation" placeholder="Relationship" required><hr>

            <label for="">Address</label>
            <input type="text" name="emeraddress" placeholder="Enter Address" required><hr>

            <label for="">Phone Number : </label>
            <input type="text" name="emerphnumber" placeholder="Enter Number" required>

            <label for="">Mobile Number : </label>
            <input type="text" name="emermonumber" placeholder="Enter Mobile Number" required><hr>

            <label for="">Nominee name (For PF): </label>
            <input type="text" name="nomname" placeholder="Enter name" required><hr>

            <h4><b>Secondary education</b></h4>
            <label for="">School Name & Location : </label>
            <input type="text" name="scname" placeholder="Enter" required>

            <label for="">Years Attended : </label>
            <input type="text" name="yeara" placeholder="Enter" required><hr>

            <h4><b>Post-Secondary education</b></h4>
            <label for="">Institute Name & Location : </label>
            <input type="text" name="instiname" placeholder="Enter" required>

            <label for="">Years Attended : </label>
            <input type="text" name="yearat" placeholder="Enter" required><hr>

            <label for="">Institute Name & Location : </label>
            <input type="text" name="instituname" placeholder="Enter" required><br>

            <label for="">Subject & Degree : </label>
            <input type="text" name="subname" placeholder="Enter" required>

            <label for="">Years Attended : </label>
            <input type="text" name="yearatt" placeholder="Enter" required><hr>

            <label for="">Institute Name & Location : </label>
            <input type="text" name="institutename" placeholder="Enter"><br>

            <label for="">Subject & Degree : </label>
            <input type="text" name="subdname" placeholder="Enter">

            <label for="">Years Attended : </label>
            <input type="text" name="yearatten" placeholder="Enter">
    </div>

    <h2 style="margin-left:100px;">EDUCATIONAL BACKGROUND</h2>
    <div class="eduback">
            <label for="">1. School : </label>
            <input type="text" name="school" required><br>
            <label for="">2. UG : </label>
            <input type="text" name="ug"  required><br>
            <label for="">3. PG : </label>
            <input type="text" name="pg" required><br>
            <label for="">4. Certification : </label>
            <input type="text" name="certi" required><br>
            <label for="">5. Diploma : </label>
            <input type="text" name="diploma" required><br> 
            <label for="">6. Others : </label>
            <input type="text" name="others"><br>
    </div>

    <h2 style="margin-left:100px; text-align:center;">EMPLOYEE PROFILE</h2>
    <h3 style="margin-left:100px;">As a league of vehement & enterprising wizards, Medicaljagat takes pride in our incredible network 
    of talented staff who live and work together & remain strongly united through a common mission and passion for education. 
    We would really appreciate it if you could help us increase connections betwwen our teams, by taking the time to share with 
    us some information about your family background and personal interests. Thank you!</h3>

    <div class="eduback">
    <label for="">Name : </label>
    <input type="text" name="empname" placeholder="Enter name">

    <label for=""> Birth Date:</label>
    <input type="text" name="datebirth" placeholder="(dd/mm/yy)"><br>

    <label for="">NickName (Preferred name): </label>
    <input type="text" name="nickname" placeholder="Enter name">
    </div>

    <h2 style="margin-left:100px;">Family Background</h2><br>
    <div class="eduback">
    <label for=""><h3>Please tell us about your family background. Where were you born? Do you have siblings or any children of your own? What was your chilhood environment like?</h3></label><br>
    <textarea name="famback"></textarea>
    </div><br>

    <h2 style="margin-left:100px;">Personal Interests</h2><br>
    <div class="eduback">
    <label for=""><h3> What do you enjoy doing in your free time? what skills or talents are you most proud of?</h3></label><br>
    <textarea name="perinterest"></textarea><br><br><br><br>

    <label for=""><h3> What are your long-term career goals & persoanl Goals?</h3></label><br>
    <textarea name="goals"></textarea><br><br><br><br>

    <label for=""><h3> Please write a small brief about yourself (as we might use this to write an introduction to others)</h3></label><br>
    <textarea name="intro"></textarea><br><br><br><br>
    </div>

    <div class="eduback">
    <input type="submit" name="submit" value="submit">
    </div>

</form>
</body>
</html>