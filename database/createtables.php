<?php

$path=$_SERVER['DOCUMENT_ROOT'];
require_once $path."/attendanceapp/database/database.php";
function clearTable($dbo,$tabName)
{
    $c="delete from :tabname";
    $s=$dbo->conn->prepare($c);
    try{
    $s->execute([":tabname"=>$tabName]);
    }
    catch(PDOException $oo)
    {

    }
}
$dbo=new Database();
$c="create table student_details
(
    id int auto_increment primary key,
    roll_no varchar(20) unique,
    name varchar(50)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>student_details created");
}
catch(PDOException $o)
{
echo("<br>student_details not created");
}

$c="create table course_details
(
    id int auto_increment primary key,
    code varchar(20) unique,
    title varchar(50),
    credit int
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>course_details created");
}
catch(PDOException $o)
{
echo("<br>course_details not created");
}


$c="create table faculty_details
(
    id int auto_increment primary key,
    user_name varchar(20) unique,
    name varchar(100),
    password varchar(50)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>faculty_details created");
}
catch(PDOException $o)
{
echo("<br>faculty_details not created");
}


$c="create table session_details
(
    id int auto_increment primary key,
    year int,
    term int,
    unique (year,term)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>session_details created");
}
catch(PDOException $o)
{
echo("<br>session_details not created");
}


$c="create table course_registration
(
    student_id int,
    course_id int,
    session_id int,
    primary key (student_id,course_id,session_id)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>course_registration created");
}
catch(PDOException $o)
{
echo("<br>course_registration not created");
}

$c="create table course_allotment
(
    faculty_id int,
    course_id int,
    session_id int,
    primary key (faculty_id,course_id,session_id)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>course_allotment created");
}
catch(PDOException $o)
{
echo("<br>course_allotment not created");
}

$c="create table attendance_details
(
    faculty_id int,
    course_id int,
    session_id int,
    student_id int,
    on_date date,
    status varchar(10),
    primary key (faculty_id,course_id,session_id,student_id,on_date)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>attendance_details created");
}
catch(PDOException $o)
{
echo("<br>attendance_details not created");
}

$c="insert into student_details
(id,roll_no,name)
values
(1, '2003001', 'MD. HASIBUJJAMAN CHOWDHURY EMON'),
(2, '2003002', 'TAKI TAMIM'),
(3, '2003003', 'YAFIZ IBNE RAHMAN'),
(4, '2003004', 'FAZLE RABBY'),
(5, '2003005', 'NAFIS RAIHAN'),
(6, '2003006', 'RAIHAN-UL-ISLAM'),
(7, '2003007', 'SOSCHO SHAMUEL GREGORY'),
(8, '2003008', 'NAHID NIYAZ SHOVON'),
(9, '2003009', 'SADIA RAHMAN SHARNA'),
(10, '2003010', 'MD. TAJBIR HASAN SHUVO'),
(11, '2003011', 'ZABED IQBAL CHOWDHURY'),
(12, '2003012', 'MOLOY KUMAR DAS'),
(13, '2003013', 'REZWANA SIDDIKA'),
(14, '2003014', 'SHIHAB SARAR ISLAM RAFID'),
(15, '2003015', 'MD. NAIM PARVEZ'),
(16, '2003016', 'JOBAYER MANSUR MUFTI'),
(17, '2003017', 'MST. JEASMIN KHATUN'),
(18, '2003018', 'RAKIBUL HASAN DURJOY'),
(19, '2003019', 'MD. SHAKIBUL HASAN'),
(20, '2003020', 'SHARIYAR HOSSAIN DURJOY'),
(21, '2003021', 'MD. BASARATUL FERDAUS'),
(22, '2003022', 'ANIKA MAHBUBA'),
(23, '2003023', 'MD. RASHEDUL ISLAM'),
(24, '2003024', 'MD. AL-ZAMI ASHRAF'),
(25, '2003025', 'MAISHA FARZANA'),
(26, '2003026', 'FARZANA HAIDER'),
(27, '2003027', 'TONMOY'),
(28, '2003028', 'MD. ABDULLAH AL MAMUN'),
(29, '2003029', 'MD. SHAJU HOSSAIN'),
(30, '2003030', 'TANJIM MOHAMMAD MUBARRAT')";

  $s=$dbo->conn->prepare($c);
  try{
    $s->execute();
  }
  catch(PDOException $o)
  {
    echo("<br>duplicate entry");
  }


  $c="insert into faculty_details
(id,user_name,password,name)
values
(1,'A','123','A'),
(2,'B','123','B'),
(3,'C','123','C'),
(4,'D','123','D'),
(5,'E','123','E'),
(6,'F','123','F')";

  $s=$dbo->conn->prepare($c);
  try{
    $s->execute();
  }
  catch(PDOException $o)
  {
    echo("<br>duplicate entry");
  }


  $c="insert into session_details
(id,year,term)
values
(1,2020,5),
(2,2020,6),
(3,2020,7),
(4,2020,8),
(5,2021,1),
(6,2021,2)";

  $s=$dbo->conn->prepare($c);
  try{
    $s->execute();
  }
  catch(PDOException $o)
  {
    echo("<br>duplicate entry");
  }


  $c="insert into course_details
(id,title,code,credit)
values
  (1,'Web Based Application','CSE3100',0.75),
  (2,'Database System ','CSE3101',3.00),
  (3,'Theory of Computation','CSE3103',3.00),
  (4,'Computer Interfacing and Embedded System',CSE3105',3.00),
  (5,'Computer Architecture ','CSE3107',3.00),
  (6,'Applied Statistics and Queing Theory','CSE3109',3.00)";
  $s=$dbo->conn->prepare($c);
  try{
    $s->execute();
  }
  catch(PDOException $o)
  {
    echo("<br>duplicate entry");
  }

  clearTable($dbo, "course_registration");

  $c = "insert into course_registration
  (student_id, course_id, session_id)
  values
  (:sid, :cid, :sessid)";
  $s = $dbo->conn->prepare($c);
  
 
  for ($i = 1; $i <= 30; $i++) {
      
      for ($cid = 1; $cid <= 6; $cid++) {
          try {
              $s->execute([":sid" => $i, ":cid" => $cid, ":sessid" => 1]);
          } catch (PDOException $pe) {
           
          }
      }
  
   
      for ($cid = 7; $cid <= 11; $cid++) {
          try {
              $s->execute([":sid" => $i, ":cid" => $cid, ":sessid" => 2]);
          } catch (PDOException $pe) {
              
          }
      }
  }


  
clearTable($dbo, "course_allotment");

$c = "insert into course_allotment
(faculty_id, course_id, session_id)
values
(:fid, :cid, :sessid)";
$s = $dbo->conn->prepare($c);

// Iterate over all 6 teachers
for ($i = 1; $i <= 6; $i++) {
    // For Session 1
    for ($j = 0; $j < 2; $j++) {
       
        $cid = rand(1, 6);

        // Insert into course_allotment for Session 1
        try {
            $s->execute([":fid" => $i, ":cid" => $cid, ":sessid" => 1]);
        } catch (PDOException $pe) {
           
        }
    }

    // For Session 2
    for ($j = 0; $j < 2; $j++) {
        // Assign a random course between 7 and 11
        $cid = rand(7, 11);
        try {
            $s->execute([":fid" => $i, ":cid" => $cid, ":sessid" => 2]);
        } catch (PDOException $pe) {
           
        }
    }
}
