
<?xml version="1.0" encoding="UTF-8"?>

<! DOCTYPE html PUBLIC-"//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml"/DTD/xhtml//.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>Credit Management</title>
    <link rel="stylesheet" href="style.css">
    <script src="myScript.js"></script>
</head>
<body >
    <div class="bgimage">
        <div class="menu"> <h3>EMPLOYEE MANAGEMENT SYSTEM</h3></div>
    <div class="main">
  <?php 
     $conn=mysqli_connect("localhost", "root", "") or die (mysql_error());
     mysqli_select_db($conn,"employee") or die(mysql_error());
     $rid = $_GET['ssn'];
        $res=mysqli_query($conn,"select * from empdetails where ssn=$rid");
        
        echo "<table border='5' class='tab'>";
         echo "<tr> <th> SSN</th> <th> NAME</th><th> EMAIL</th><th> CREDITS AVAILABLE</th></tr>";

         while($arr=mysqli_fetch_row($res))
            echo "<tr>
                    <td>$arr[0]</td>        
                    <td>$arr[1]</td>
                    <td>$arr[2]</td>
                    <td>$arr[3]</td>
                 </tr>";
         
         echo "</table>";
    
    echo '<p class="desg" id="p1">Transaction Status</p><br/><br/>
    <form action="transDone.php" method="GET" class="desg">
    <input type = "hidden" name = "ssnf" value ='.$rid.' />
    <p>Enter the Reciever Employee SSN:</p><br/> 
    <input type="text" class="inp" name="ssnt" placeholder="Enter SSN"/><br/><br/> 
    <p>Enter the Credit Amount:</p><br/>    
    <input type="text" class="inp" name="amount" placeholder="Enter amount"/><br/><br/>
    <button id="butt1" class="butt"  onclick="transfer()">Transfer Credits </button> 
    </form>';

    ?>
    </div>
    </div>

</body>
</html>