<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Person</title>
    <link rel="stylesheet" href="css/person.css">
    <link rel="icon" href="Pictures/almnight.png">
</head>

<body>
    <div class="main">
        <div class="submain">
        <a href="index.php"><button class="bttn">Back</button></a>
            <a href="inputperson.php"><button class="bttn">Input Person</button></a>

            <center><ul>
                <li>
                    <a href="student.php"><button class="btn">STUDENT</button></a>
                </li>
                <li>
                    <a href="department.php"><button class="btn">DEPARTMENT</button></a>
                </li>
                <li>
                    <a href="graduate.php"><button class="btn">GRADUATE YEAR</button></a>
                </li>
            </ul></center>

            <div class="container">
                <table border="4" cellpadding="4" width="100%" bordercolor="#000080">
                    <tr>
                        <td width="100%" colspan="8" bgcolor="#3f88c5">
                            <p align="center"><b>PERSON</b></p>
                        </td>
                    </tr>
            
                    <tr>
                        <td width="12.5%" bgcolor="#5fc0a0" align="center"><b>
                            FIRST_NAME
                        </b>
                    </td>
                        <td width="12.5%" bgcolor="#5fc0a0" align="center"><b>
                            MIDDLE_NAME
                        </b>
                    </td>
                        <td width="12.5%" bgcolor="#5fc0a0" align="center"><b>
                            LAST_NAME
                        </b>
                    </td>
                     <td width="12.5%" bgcolor="#5fc0a0" align="center"><b>
                        AGE
                        </b>
                     </td>
                     <td width="12.5%" bgcolor="#5fc0a0" align="center"><b>
                        GENDER
                        </b>
                     </td>
                     <td width="12.5%" bgcolor="#5fc0a0" align="center"><b>
                        CONTACT_NO
                        </b>
                     </td>
                     <td width="12.5%" bgcolor="#5fc0a0" align="center"><b>
                        EMAIL
                        </b>
                     </td>
                     <td width="12.5%" bgcolor="#5fc0a0" align="center"><b>
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

	$sql = "SELECT first_name, middle_name, last_name, age, gender, contact_no., email, id from person";
	$ewsult = conn->query($sql);
	
	if ($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
		echo "<tr><td>". $row["FIRST NAME"] ."</td><td>". $row["MIDDLE NAME"] ."</td><td>". $row["LAST NAME"] ."</td><td>". $row["AGE"] ."</td></td>". $row["GENDER"] ."</td></td>". $row["CONTACT NO"] ."</td><td>". $row["EMAIL"] ."</td></td>". $row["ID"] ."</td></tr>";
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