<?php
session_start();
    if(isset($_SESSION["current_user"]))
        {
          $facid=$_SESSION["current_user"];
        }
    else{
        header("location:"."/attendanceapp/login.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/attendance.css">
    <title>Document</title>
</head>
<body>
    
     <div class="page">
        <div class="header-area">
            <div class="logo-area"> <h2 class="logo">ATTENDANCE APP</h2></div>
            <div class="logout-area"><button class="btnlogout" id="btnLogout">LOGOUT</button></div>
        </div>
        <div class="session-area">
              <div class="label-area"><label>SESSION</label></div>
              <div class="dropdown-area">
                <select class="ddlclass" id="ddlclass">
                   <!-- <option>SELECT ONE</option>
                    <option>2020 5 </option>
                    <option>2020 6 </option> -->
                </select>
              </div>
        </div>

        <div class="classlist-area" id="classlistarea">
          <!--<div class="classcard">CSE 3101</div>
          <div class="classcard">CSE 3101</div>
          <div class="classcard">CSE 3101</div>
          <div class="classcard">CSE 3101</div>
          <div class="classcard">CSE 3101</div>
          <div class="classcard">CSE 3101</div>
          <div class="classcard">CSE 3101</div> -->
        </div>

        <div class="classdetails-area" id="classdetailsarea">
            <!--<div class="classdetails">
                <div class="code-area">CSE 3101</div>
                <div class="title-area">DATABASE SYSTEM </div>
                <div class="ondate-area">
                    <input type="datetime-local">
                </div>
            </div>-->
        </div>
        
        <div class="studentlist-area" id="studentlistarea">
            <!--<div class="studenttlist"><label>STUDENT LIST</label></div>
           
            <div class="studentdetails">
                <div class="slno-area">001</div>
                <div class="rollno-area">2003124</div>
                <div class="name-area">Marzuka Zannat</div>
                <div class="checkbox-area">
                    <input type="checkbox">
                </div>
            </div>

            <div class="studentdetails">
                <div class="slno-area">001</div>
                <div class="rollno-area">2003124</div>
                <div class="name-area">Marzuka Zannat</div>
                <div class="checkbox-area">
                    <input type="checkbox">
                </div>
            </div>

           -->
           
        </div>
     </div>
     <input type="hidden" id="hiddenFacId" value=<?php echo($facid) ?>>
     <input type="hidden" id="hiddenSelectedCourseID" value=-1>
    <script src="js/jquery.js"></script>
    <script src="js/attendance.js"></script>
 
</body>
</html>