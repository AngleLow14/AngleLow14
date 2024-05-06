<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input New information</title>
    <link rel="icon" href="Pictures/almnight.png">
    <link rel="stylesheet" href="css/inputstudent.css">
</head>
<body>
    <div class="main">
        <div class="submain">
            <form class="container" action="php/inputstudent.php" method="post">

            <table border="4" cellpadding="4" width="100%" bordercolor="#000080">

                 <tr>
                    <td width="100%" colspan="5" bgcolor="#3f88c5">
                        <p align="center"><b>INPUT STUDENT INFORMATION</b></p>
                    </td>

                </tr>

                <tr>
                    <td width="20%" bgcolor="#5fc0a0" align="center">
                        <label for="ID">ID:</label><br>
                        <input type="text" id="ID" name="ID" required/>
                    </td>
                    <td width="20%" bgcolor="#5fc0a0" align="center">
                        <label for="name">Last Name:</label><br>
                        <input type="text" id="name" name="name" required/>
                    </td>
                    <td width="20%" bgcolor="#5fc0a0" align="center">
                        <label for="department">Department:</label><br>
                        <input type="text" id="department" name="department" required/>
                    </td>
                    <td width="20%" bgcolor="#5fc0a0" align="center">
                        <label for="school_year">School Year:</label><br>
                        <input type="text" id="school_year" name="school_year" required/>
                    </td> 
                    <td width="20%" bgcolor="#5fc0a0" align="center">
                        <label for="Course">Course:</label><br>
                        <input type="text" id="Course" name="Course" required/>
                    </td> 
                </tr>
                </table>
                <a href="student.php"><input class="bttn" type="button" value="Cancel"/></a>
                <input type="submit" type="button" class="bttn"/>   

    </form>
    </div>
</div>
    
</body>
</html>