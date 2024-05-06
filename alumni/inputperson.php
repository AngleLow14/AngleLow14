<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input New information</title>
    <link rel="icon" href="Pictures/almnight.png">
    <link rel="stylesheet" href="css/inputperson.css">
</head>
<body>
    <div class="main">
        <div class="submain">
            <form class="container" action="php/inputperson.php" method="post">

            <table border="4" cellpadding="4" width="100%" bordercolor="#000080">

                 <tr>
                    <td width="100%" colspan="5" bgcolor="#3f88c5">
                        <p align="center"><b>INPUT PERSON INFORMATION</b></p>
                    </td>

                </tr>

                <tr>
                    <td width="25%" bgcolor="#5fc0a0" align="center">
                        <label for="first_name">First Name:</label><br>
                        <input type="text" id="first_name" name="first_name" required/>
                    </td>
                    <td width="25%" bgcolor="#5fc0a0" align="center">
                        <label for="middle_name">Middle Name:</label><br>
                        <input type="text" id="middle_name" name="middle_name" required/>
                    </td>
                    <td width="25%" bgcolor="#5fc0a0" align="center">
                        <label for="last_name">Last Name:</label><br>
                        <input type="text" id="last_name" name="last_name" required/>
                    </td>
                    <td width="25%" bgcolor="#5fc0a0" align="center">
                        <label for="age">Age:</label><br>
                        <input type="text" id="age" name="age" required/>
                    </td> 
                </tr>

                <tr>
                    <td width="25%" bgcolor="#5fc0a0" align="center">
                        <label for="gender">Gender:</label><br>
                        <input type="text" id="gender" name="gender" required/>
                    </td>
                    <td width="25%" bgcolor="#5fc0a0" align="center">
                        <label for="contact_no.">Contact No.:</label><br>
                        <input type="text" id="contact_no." name="contact_no." required/>
                    </td>
                    <td width="25%" bgcolor="#5fc0a0" align="center">
                        <label for="email">Email:</label><br>
                        <input type="text" id="email" name="email" required/>
                    </td>
                    <td width="25%" bgcolor="#5fc0a0" align="center">
                        <label for="id">ID:</label><br>
                        <input type="text" id="id" name="id" required/>
                    </td> 
                </tr>
                </table>
                <a href="person.php"><input class="bttn" type="button" value="Cancel"/></a>
                <input type="submit" type="button" class="bttn"/>   

    </form>
    </div>
</div>
    
</body>
</html>