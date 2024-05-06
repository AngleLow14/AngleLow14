<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Department</title>
    <link rel="stylesheet" href="css/department.css">
    <link rel="icon" href="Pictures/almnight.png">
</head>

<body>
    <div class="main">
        <div class="submain">
        <a href="index.php"><button class="bttn">Back</button></a>
            <a href="inputdep.php"><button class="bttn">Input Department</button></a>

            <center><ul>
                <li>
                    <a href="student.php"><button class="btn">STUDENT</button></a>
                </li>
                <li>
                    <a href="person.php"><button class="btn">PERSON</button></a>
                </li>
                <li>
                    <a href="graduate.php"><button class="btn">GRADUATE YEAR</button></a>
                </li>
            </ul></center>

            <div class="container">

                <table border="3" cellpadding="3" width="100%" bordercolor="#000080">
                    <tr>
                        <td width="100%" colspan="4" bgcolor="#3f88c5">
                            <p align="center"><b>DEPARTMENT</b></p>
                        </td>
                    </tr>
            
                    <tr>
                        <td width="25%" rowspan="2" bgcolor="#ffa675" align="center">
                            <b>DEPARTMENT</b>
                        </td>
                        <td width="75%" colspan="3" bgcolor="#61d06e" align="center">
                            <b></b>
                        </td>
                    </tr>
            
                    <tr>
                        <td width="25%" bgcolor="#5fc0a0" align="center"><b>
                            COURSE UNIT
                        </b>
                    </td>
                        <td width="25%" bgcolor="#5fc0a0" align="center"><b>
                            MAJOR
                        </b>
                    </td>
                        <td width="25%" bgcolor="#5fc0a0" align="center"><b>
                            ID
                        </b>
                    </td>
            
                    <tr>
                        <td width="25%" align="center"></td>
                        <td width="25%" align="center"></td>
                        <td width="25%" align="center"></td>
                        <td width="25%" align="center"></td>
                    </tr>
                    </tr>

    <?php
	$conn = mysqli_connect("localhost","root"," ","alumni");
	if($conn-> connect_error){
		die("Connecton failed : ". $conn-> connect_error);
	}

	$sql = "SELECT department, course_unit, major, ID from department";
	$ewsult = conn->query($sql);
	
	if ($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
		echo "<tr><td>". $row["DEPARTMENT"] ."</td><td>". $row["COURSE UNIT"] ."</td><td>". $row["MAJOR"] ."</td><td>". $row["ID"] ."</td></tr>";
        }
    }
	echo "</table>";

	$conn-> close();
?>	
            
                </table>

            </div>
        </div>
    </div>
</body>
</html>