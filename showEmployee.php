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
        $conn=mysqli_connect("localhost", "root", "") or die (mysql_error());
        mysqli_select_db($conn,"employee") or die(mysql_error());


         $res=mysqli_query($conn,"select * from empdetails");
        
         echo "<table border='5' class='tab'>";
         echo "<tr> <th> SSN</th> <th> NAME</th><th> EMAIL</th><th> CREDITS AVAILABLE</th></tr>";
         while($arr=mysqli_fetch_row($res))
            echo "<tr><td>" . "<a class='selEmp' href='selectedEmp.php?ssn=" .urlencode($arr[0]). "'>".$arr[0]."</a>"."</td>"
                    ."<td>$arr[1]</td>
                    <td>$arr[2]</td>
                    <td>$arr[3]</td>
                 </tr>";
         
         echo "</table>";
    mysqli_close($conn);
    ?>
    
    <p class="select">Watch Over Employee</p>  


    </div>
    </div>
</body>
</html>