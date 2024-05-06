<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
    <link rel="stylesheet" href="css/student.css">
    <link rel="icon" href="Pictures/almnight.png">
</head>

<body>
    <div class="main">
        <div class="submain">
        <a href="index.php"><button class="bttn">Back</button></a>
            <a href="inputstudent.php"><button class="bttn">Input Student</button></a>

            <center><ul>
                <li>
                    <a href="department.php"><button class="btn">DEPARTMENT</button></a>
                </li>
                <li>
                    <a href="person.php"><button class="btn">PERSON</button></a>
                </li>
                <li>
                    <a href="graduate.php"><button class="btn">GRADUATE YEAR</button></a>
                </li>
            </ul></center>

            <div class="container">

                <table border="4" cellpadding="4" width="100%" bordercolor="#000080">
                    <tr>
                        <td width="100%" colspan="5" bgcolor="#3f88c5">
                            <p align="center"><b>STUDENT INFORMATION</b></p>
                        </td>
                    </tr>
            
                    <tr>
                    <td width="20%" bgcolor="#ffa675" align="center">
                            <b>ID</b>
                        </td>
                        <td width="20%" bgcolor="#5fc0a0" align="center"><b>
                            LAST NAME
                        </b>
                    </td>
                        <td width="20%" bgcolor="#5fc0a0" align="center"><b>
                            DEPARTMENT
                        </b>
                    </td>
                        <td width="20%" bgcolor="#5fc0a0" align="center"><b>
                            SCHOOL YEAR
                        </b>
                    </td>
                        <td width="20%" bgcolor="#5fc0a0" align="center"><b>
                        COURSE
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

	$sql = "SELECT ID, name, department, school_year, Course from student";
	$ewsult = $conn->query($sql);
	
	if ($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
		echo "<tr><td>". $row["ID"] ."</td><td>". $row["LAST NAME"] ."</td><td>". $row["DEPARTMENT"] ."</td><td>". $row["SCHOOL YEAR"] ."</td></td>". $row["COURSE"] ."</td></tr>";
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