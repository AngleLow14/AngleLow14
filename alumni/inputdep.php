<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input New information</title>
    <link rel="icon" href="Pictures/almnight.png">
    <link rel="stylesheet" href="css/inputdep.css">
</head>
<body>
    <div class="main">
        <div class="submain">
            <form class="container" action="php/inputdep.php" method="post">

            <table border="4" cellpadding="4" width="100%" bordercolor="#000080">

                 <tr>
                    <td width="100%" colspan="4" bgcolor="#3f88c5">
                        <p align="center"><b>INPUT DEPARTMENT INFORMATION</b></p>
                    </td>
                </tr>

                <tr>
                    <td width="25%" bgcolor="#5fc0a0" align="center">
                        <label for="department">Department:</label><br>
                        <input type="text" id="department" name="department" required/>
                    </td>
                    <td width="25%" bgcolor="#5fc0a0" align="center">
                        <label for="course_unit">Course Unit:</label><br>
                        <input type="text" id="course_unit" name="course_unit" required/>
                    </td>
                    <td width="25%" bgcolor="#5fc0a0" align="center">
                        <label for="major">Major:</label><br>
                        <input type="text" id="major" name="major" required/>
                    </td>
                    <td width="25%" bgcolor="#5fc0a0" align="center">
                        <label for="ID">ID:</label><br>
                        <input type="text" id="ID" name="ID" required/>
                        </td> 
                </tr>
                </table>
                <a href="department.php"><input class="bttn" type="button" value="Cancel"/></a>
                <input type="submit" type="button" class="bttn"/>   

    </form>
    </div>
</div>
    
</body>
</html>