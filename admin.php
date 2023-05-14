<?php
require 'db_conn.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Personal Information</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <style type="text/css">
    section
    {
      margin-top: -20px;
    }
  </style>   
</head>
<body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active">Personal Information</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="admin.php">Information</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">

            <li><a href=""><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
            <li><a href=""><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
            <li><a href=""><span class="glyphicon glyphicon-user">SIGN UP</span></a></li>
          </ul>

      </div>
    </nav>
    <br><br>
    <h2 style="text-align: center;">Personal Information</h2><br><br><br><br>

    <?php
         
        $res=mysqli_query($conn,"SELECT * FROM details");

        echo "<table class='table table-bordered table-hover'>";
        echo "<tr style='background-color: white;'>";
            echo "<th>"; echo "Last Name"; echo "</th>";
            echo "<th>"; echo "Middle Name"; echo "</th>";
            echo "<th>"; echo "First Name"; echo "</th>";
            echo "<th>"; echo "Gender"; echo "</th>";
            echo "<th>"; echo "Birth Date"; echo "</th>";
            echo "<th>"; echo "Marital Status"; echo "</th>";
            echo "<th>"; echo "Nationality"; echo "</th>";
            echo "<th>"; echo "Blood Group"; echo "</th>";
            echo "<th>"; echo "Nominee name"; echo "</th>";
            echo "<th>"; echo "Relation"; echo "</th>";
            echo "<th>"; echo "Permanent Address"; echo "</th>";
            echo "<th>"; echo "Current Address"; echo "</th>";
            echo "<th>"; echo "Mobile Number"; echo "</th>";
            echo "<th>"; echo "Other Number"; echo "</th>";
            echo "<th>"; echo "ID Number"; echo "</th>";
            echo "<th>"; echo "PAN"; echo "</th>";
            echo "<th>"; echo "Licence Number"; echo "</th>";
            echo "<th>"; echo "Email"; echo "</th>";
            echo "<th>"; echo "Emergency Last name"; echo "</th>";
            echo "<th>"; echo "Emergency first name"; echo "</th>";
            echo "<th>"; echo "Emergency Address"; echo "</th>";
            echo "<th>"; echo "Emergency Phone"; echo "</th>";
            echo "<th>"; echo "Emergency Mobile"; echo "</th>";
            echo "<th>"; echo "Nominee name"; echo "</th>";
            echo "<th>"; echo "School name"; echo "</th>";
            echo "<th>"; echo "year Attended"; echo "</th>";
            echo "<th>"; echo "Institute name"; echo "</th>";
            echo "<th>"; echo "year Attended"; echo "</th>";
            echo "<th>"; echo "Institute name"; echo "</th>";
            echo "<th>"; echo "subject & degree"; echo "</th>";
            echo "<th>"; echo "year Attended"; echo "</th>";
            echo "<th>"; echo "Institute name"; echo "</th>";
            echo "<th>"; echo "subject & degree"; echo "</th>";
            echo "<th>"; echo "year Attended"; echo "</th>";
            echo "<th>"; echo "school"; echo "</th>";
            echo "<th>"; echo "UG"; echo "</th>";
            echo "<th>"; echo "PG"; echo "</th>";
            echo "<th>"; echo "Certificate"; echo "</th>";
            echo "<th>"; echo "Diploma"; echo "</th>";
            echo "<th>"; echo "Others"; echo "</th>";
            echo "<th>"; echo "Emp name"; echo "</th>";
            echo "<th>"; echo "Birth date"; echo "</th>";
            echo "<th>"; echo "Nick name"; echo "</th>";
            echo "<th>"; echo "Family background"; echo "</th>";
            echo "<th>"; echo "Personal Interest"; echo "</th>";
            echo "<th>"; echo "Goals"; echo "</th>";
            echo "<th>"; echo "Introduction"; echo "</th>";
        echo "</tr>";

        while($row=mysqli_fetch_assoc($res))
        {
            echo "<tr>";
            echo "<td>"; echo $row['lastname']; echo "</td>";
            echo "<td>"; echo $row['middlename']; echo "</td>";
            echo "<td>"; echo $row['firstname']; echo "</td>";
            echo "<td>"; echo $row['gender']; echo "</td>";
            echo "<td>"; echo $row['birthdate']; echo "</td>";
            echo "<td>"; echo $row['maritalstatus']; echo "</td>";
            echo "<td>"; echo $row['nationality']; echo "</td>";
            echo "<td>"; echo $row['bloodgroup']; echo "</td>";
            echo "<td>"; echo $row['noname']; echo "</td>";
            echo "<td>"; echo $row['relation']; echo "</td>";
            echo "<td>"; echo $row['peraddress']; echo "</td>";
            echo "<td>"; echo $row['curaddress']; echo "</td>";
            echo "<td>"; echo $row['monumber']; echo "</td>";
            echo "<td>"; echo $row['othernumber']; echo "</td>";
            echo "<td>"; echo $row['idnumber']; echo "</td>";
            echo "<td>"; echo $row['pan']; echo "</td>";
            echo "<td>"; echo $row['licnumber']; echo "</td>";
            echo "<td>"; echo $row['email']; echo "</td>";
            echo "<td>"; echo $row['emerlastname']; echo "</td>";
            echo "<td>"; echo $row['emerfirstname']; echo "</td>";
            echo "<td>"; echo $row['emeraddress']; echo "</td>";
            echo "<td>"; echo $row['emerphnumber']; echo "</td>";
            echo "<td>"; echo $row['emermonumber']; echo "</td>";
            echo "<td>"; echo $row['nomname']; echo "</td>";
            echo "<td>"; echo $row['scname']; echo "</td>";
            echo "<td>"; echo $row['yeara']; echo "</td>";
            echo "<td>"; echo $row['instiname']; echo "</td>";
            echo "<td>"; echo $row['yearat']; echo "</td>";
            echo "<td>"; echo $row['instituname']; echo "</td>";
            echo "<td>"; echo $row['subname']; echo "</td>";
            echo "<td>"; echo $row['yearatt']; echo "</td>";
            echo "<td>"; echo $row['institutename']; echo "</td>";
            echo "<td>"; echo $row['subdname']; echo "</td>";
            echo "<td>"; echo $row['yearatten']; echo "</td>";
            echo "<td>"; echo $row['school']; echo "</td>";
            echo "<td>"; echo $row['ug']; echo "</td>";
            echo "<td>"; echo $row['pg']; echo "</td>";
            echo "<td>"; echo $row['certi']; echo "</td>";
            echo "<td>"; echo $row['diploma']; echo "</td>";
            echo "<td>"; echo $row['others']; echo "</td>";
            echo "<td>"; echo $row['empname']; echo "</td>";
            echo "<td>"; echo $row['datebirth']; echo "</td>";
            echo "<td>"; echo $row['nickname']; echo "</td>";
            echo "<td>"; echo $row['famback']; echo "</td>";
            echo "<td>"; echo $row['perinterest']; echo "</td>";
            echo "<td>"; echo $row['goals']; echo "</td>";
            echo "<td>"; echo $row['intro']; echo "</td>";
            echo "</tr>";
        }
        echo "</table>";

    ?>
</body>
</html>