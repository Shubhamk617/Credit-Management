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
    $rid=$_GET['ssn'];
    echo  '<a href="doTransaction.php?ssn='.$rid.'" class="button">Transfer Credit</a><br/><br/>
     <a href="transHistory.php?ssn='.$rid.'" class="button">See Transaction History</a> '; 
     ?> 
     </div>
    </div>
</body>
</html>