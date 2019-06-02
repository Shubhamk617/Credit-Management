<?xml version="1.0" encoding="UTF-8"?>

<! DOCTYPE html PUBLIC-"//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml"/DTD/xhtml//.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>Credit Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <div class="bgimage">
        <div class="menu"> <h3>EMPLOYEE MANAGEMENT SYSTEM</h3></div>
    <div class="main">
        <?php
        $ssnt=$_GET['ssnt'];
        $ssnf=$_GET['ssnf'];
        $amt=$_GET['amount'];


        if($ssnf!=$ssnt){
        echo "<p class='desg'>TRANSACTION SUCCESFULLY DONE AND UPDATED</p>
        <a href='start.html' class='button'>Return Back</a>";
        
        $conn=mysqli_connect("localhost", "root", "") or die (mysql_error());
        mysqli_select_db($conn,"employee") or die(mysql_error());
       
        $res1=mysqli_query($conn,"select * from empdetails where ssn=$ssnt");
        $arr1=mysqli_fetch_row($res1);
        $newamt1=$arr1[3]+$amt;
        $sql1="update empdetails set currCredit=$newamt1 where ssn=$ssnt";
        mysqli_query($conn,$sql1);

        $res2=mysqli_query($conn,"select * from empdetails where ssn=$ssnf");
        $arr2=mysqli_fetch_row($res2);
        $newamt2=$arr2[3]-$amt;
        $sql2="update empdetails set currCredit=$newamt2 where ssn=$ssnf";
        mysqli_query($conn,$sql2);

        $sql3="insert into transhistory values($ssnf,$ssnf,$ssnt,$amt)";
        mysqli_query($conn,$sql3);
        
        mysqli_close($conn);
        }else{
            
        echo "<p class='desg'>Please select and Enter Different Employee SSNs.</p>
        <a href='doTransaction.php?ssn=".$ssnf."' class='button'>Return Back</a>";
    
        }
 
        ?>
    </div>
    </div>
</body>
</html>