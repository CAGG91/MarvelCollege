<?php
    session_start();
    $studid= $_SESSION['useridnum'];
    if ($_POST['submit'])
    {
       $dbc = mysqli_connect("mysql12.000webhost.com", "a5053570_REG1", "password1", "a5053570_sdp");
       if (!$dbc)
       {
          echo "Couldn't Connect. " . mysqli_connect_error();
       }
       else
       {  

          if ($_POST['MCN1'])
          {
             $mcn= $_POST['MCN1'];
             $d="INSERT INTO ENROLL (STUDENTID, MCN) VALUES ($studid, $mcn) ";
             $result=mysqli_query($dbc,$d);
             if (!$result)
             {
                echo "Couldn't Add Course " . $mcn . "&nbsp;&nbsp;:&nbsp;&nbsp;";
             }
             else
             {
                $d2= "INSERT INTO CLASSLIST (MCN, STUDENTID, FNAME, LNAME, EMAIL) " .
                     "SELECT MCN, STUDENTID, FNAME, LNAME, EMAIL FROM ENROLL,PERSON WHERE PERSONID = SUBSTRING(STUDENTID, 2) " .
                     "AND STUDENTID='$studid' AND MCN='$mcn' ";
                $result2=mysqli_query($dbc,$d2);
                if (!$result)
                {
                    echo "Couldn't Add Course " . $mcn . "&nbsp;&nbsp;:&nbsp;&nbsp;";
                }
                else
                {
                    //$q4=
                    echo " Successfully Added Course " . $mcn;
                } 
             }
          }
          if ($_POST['MCN2'])
          {
             $mcn= $_POST['MCN2'];
             $d="INSERT INTO ENROLL (STUDENTID, MCN) VALUES ($studid, $mcn)";
             $result=mysqli_query($dbc,$d);
             if (!$result)
             {
                echo "Couldn't Add Course " . $mcn . "&nbsp;&nbsp;:&nbsp;&nbsp;";
             }
             else
             {
                $d2= "INSERT INTO CLASSLIST (MCN, STUDENTID, FNAME, LNAME, EMAIL) " .
                     "SELECT MCN, STUDENTID, FNAME, LNAME, EMAIL FROM ENROLL,PERSON WHERE PERSONID = SUBSTRING(STUDENTID, 2) " .
                     "AND STUDENTID='$studid' AND MCN='$mcn' ";
                $result2=mysqli_query($dbc,$d2);
                if (!$result)
                {
                    echo "Couldn't Add Course " . $mcn . "&nbsp;&nbsp;:&nbsp;&nbsp;";
                }
                else
                {
                    echo " Successfully Added Course " . $mcn;
                } 

             }
          }
          if ($_POST['MCN3'])
          {
             $mcn= $_POST['MCN3'];
             $d="INSERT INTO ENROLL (STUDENTID, MCN) VALUES ($studid, $mcn)";
             $result=mysqli_query($dbc,$d);
             if (!$result)
             {
                echo "Couldn't Add Course " . $mcn . "&nbsp;&nbsp;:&nbsp;&nbsp;";
             }
             else
             {
                $d2= "INSERT INTO CLASSLIST (MCN, STUDENTID, FNAME, LNAME, EMAIL) " .
                     "SELECT MCN, STUDENTID, FNAME, LNAME, EMAIL FROM ENROLL,PERSON WHERE PERSONID = SUBSTRING(STUDENTID, 2) " .
                     "AND STUDENTID='$studid' AND MCN='$mcn' ";
                $result2=mysqli_query($dbc,$d2);
                if (!$result)
                {
                    echo "Couldn't Add Course " . $mcn . "&nbsp;&nbsp;:&nbsp;&nbsp;";
                }
                else
                {
                    echo " Successfully Added Course " . $mcn;
                } 

             }
          }
          if ($_POST['MCN4'])
          {
             $mcn= $_POST['MCN4'];
             $d="INSERT INTO ENROLL (STUDENTID, MCN) VALUES ($studid, $mcn)";
             $result=mysqli_query($dbc,$d);
             if (!$result)
             {
                echo "Couldn't Add Course " . $mcn . "&nbsp;&nbsp;:&nbsp;&nbsp;";
             }
             else
             {
                $d2= "INSERT INTO CLASSLIST (MCN, STUDENTID, FNAME, LNAME, EMAIL) " .
                     "SELECT MCN, STUDENTID, FNAME, LNAME, EMAIL FROM ENROLL,PERSON WHERE PERSONID = SUBSTRING(STUDENTID, 2) " .
                     "AND STUDENTID='$studid' AND MCN='$mcn' ";
                $result2=mysqli_query($dbc,$d2);
                if (!$result)
                {
                    echo "Couldn't Add Course " . $mcn . "&nbsp;&nbsp;:&nbsp;&nbsp;";
                }
                else
                {
                    echo " Successfully Added Course " . $mcn;
                } 

             }
          }
          if ($_POST['MCN5'])
          {
             $mcn= $_POST['MCN5'];
             $d="INSERT INTO ENROLL (STUDENTID, MCN) VALUES ($studid, $mcn)";
             $result=mysqli_query($dbc,$d);
             if (!$result)
             {
                echo "Couldn't Add Course " . $mcn . "&nbsp;&nbsp;:&nbsp;&nbsp;";
             }
             else
             {
                $d2= "INSERT INTO CLASSLIST (MCN, STUDENTID, FNAME, LNAME, EMAIL) " .
                     "SELECT MCN, STUDENTID, FNAME, LNAME, EMAIL FROM ENROLL,PERSON WHERE PERSONID = SUBSTRING(STUDENTID, 2) " .
                     "AND STUDENTID='$studid' AND MCN='$mcn' ";
                $result2=mysqli_query($dbc,$d2);
                if (!$result)
                {
                    echo "Couldn't Add Course " . $mcn . "&nbsp;&nbsp;:&nbsp;&nbsp;";
                }
                else
                {
                    echo " Successfully Added Course " . $mcn;
                } 
             }
          }
       }
    }

?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Add Course</title>
    <link rel="stylesheet" type="text/css" href="MCSstyles.css">
    <script type="text/javascript" src="MCSscripts.js"></script>
</head>
<body>
<div style="background-color: #000054;width:700px;height:370px;overflow:auto;">
<?php include 'Header.php'; ?>
</div>
<form id="addcourse" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
<table border="1">
    <tr>
    <th colspan="5">Enter Up To Five MCN numbers</th>
    </tr>
    <tr>
        <td>MCN:</td>
        <td>MCN:</td>
        <td>MCN:</td>
        <td>MCN:</td>
        <td>MCN:</td>
    </tr>
    <tr>
        <td>
            <label><input name="MCN1" type="text" value = "" pattern="\d*" maxlength="5" autofocus></label>
        </td>
        <td>
            <label><input name="MCN2" type="text" value="" pattern="\d*" maxlength="5"></label>
        </td>
        <td>
            <label><input name="MCN3" type="text" value="" pattern="\d*" maxlength="5"></label>
        </td>
        <td>
            <label><input name="MCN4" type="text" value="" pattern="\d*" maxlength="5"></label>
        </td>
        <td>
            <label><input name="MCN5" type="text" value="" pattern="\d*" maxlength="5"></label>
        </td>
    </tr>
    <tr>
        <td><input type="reset" value="Reset" onclick="registerEvents()"></td>
        <td><input name="submit" type="submit" value="Enter"></td>
    </tr>
</table>
</form>
<ul hidden> <!--need script to validate input,write to db, display correct results here-->
    <li>Math<div id="course0"></div>*****registered****on<div id="todaysdate" ></div></li>
    <li>CompI<div id="course1"></div>*****registered****on</li>
    <li>Really hard Class<div id="course2"></div>*****registered****on</li>
    <li>Organic Chemistry III<div id="course3"></div>*****registered****on</li>
    <li>Black Holes I<div id="course4"></div>*****registered****on</li>
</ul>
<script>
    d = new Date();
    document.getElementById("todaysdate").innerHTML = d;
</script>
<iframe src="Footer.html"></iframe>
</body>
</html>
