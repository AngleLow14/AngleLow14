<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Graduate Year</title>
    <link rel="stylesheet" href="css/graduate.css">
    <link rel="icon" href="Pictures/almnight.png">
</head>

<body>
    <div class="main">
        <div class="submain">
        <a href="index.php"><button class="bttn">Back</button></a>
            <a href="inputgy.php"><button class="bttn">Input Graduate</button></a>

            <center><ul>
                <li>
                    <a href="department.php"><button class="btn">DEPARTMENT</button></a>
                </li>
                <li>
                    <a href="person.php"><button class="btn">PERSON</button></a>
                </li>
                <li>
                    <a href="student.php"><button class="btn">STUDENT</button></a>
                </li>
            </ul></center>

            <div class="container">

                <table border="4" cellpadding="4" width="100%" bordercolor="#000080">
                    <tr>
                        <td width="100%" colspan="5" bgcolor="#3f88c5">
                            <p align="center"><b>GRADUATE YEAR</b></p>
                        </td>
                    </tr>
            
                    <tr>
                        <td width="20%" bgcolor="#5fc0a0" align="center"><b>
                            MONTH
                        </b>
                    </td>
                        <td width="20%" bgcolor="#5fc0a0" align="center"><b>
                            DAY
                        </b>
                    </td>
                        <td width="20%" bgcolor="#5fc0a0" align="center"><b>
                            YEAR
                        </b>
                    </td>
                        <td width="20%" bgcolor="#5fc0a0" align="center"><b>
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

	$sql = "SELECT month, day, year, id from graduate_year";
	$ewsult = conn->query($sql);
	
	if ($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
		echo "<tr><td>". $row["MONTH"] ."</td><td>". $row["DAY"] ."</td><td>". $row["YEAR"] ."</td><td>". $row["ID"] ."</td></tr>";
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