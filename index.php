<!DOCTYPE HTML>
<html lang="en_US">
    <head>
        <meta charset="UTF-8">
        <title>Student Management System</title>
    </head>
    <body>
    <h3 align="right" style="margin-right:20px;"><a href="login.php">Admin Login</a></h5>
    <h1 align="center">Welcome to Student Management System </h1>
    <form method="post" action="index.php">
      <table style="width:30%;padding: 2px;" align="center" border="1">
        <tr>
          <td colspan="2" align="center"><b>Student Information</b></td>
        </tr>
        <tr>
          <td align="left">Choose Standard</td>
            <td>
            <select name="std">
              <option value="1">1st</option>
              <option value="2">2nd</option>
              <option value="3">3rd</option>
                <option value="4">4th</option>
                <option value="5">5th</option>
                <option value="6">6th</option>
                <option value="7">7th</option>  
            </select>
            </td>
        </tr>
        <tr>
          <td align="left"> Enter Rollno</td>
           <td><input type="text" name="rollno"></td>
        </tr>
          <tr>
          <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info" required></td>
          </tr>
        
    </table>  
        
        </form>
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
    include('dbcon.php');
    include('function.php');
    $std=$_POST['std'];
    $rollno=$_POST['rollno'];
    showdetails($std,$rollno);
    
}
?>