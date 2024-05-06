<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input New information</title>
    <link rel="icon" href="Pictures/almnight.png">
    <link rel="stylesheet" href="css/inputgy.css">
</head>
<body>
    <div class="main">
        <div class="submain">
            <form class="container" action="php/inputgy.php" method="post">

            <table border="4" cellpadding="4" width="100%" bordercolor="#000080">

                 <tr>
                    <td width="100%" colspan="5" bgcolor="#3f88c5">
                        <p align="center"><b>INPUT GRADUATE INFORMATION</b></p>
                    </td>

                </tr>

                <tr>
                    <td width="25%" bgcolor="#5fc0a0" align="center">
                        <label for="month">Month:</label><br>
                        <input type="text" id="month" name="month" required/>
                    </td>
                    <td width="25%" bgcolor="#5fc0a0" align="center">
                        <label for="day">Day:</label><br>
                        <input type="text" id="day" name="day" required/>
                    </td>
                    <td width="25%" bgcolor="#5fc0a0" align="center">
                        <label for="year">Year:</label><br>
                        <input type="text" id="year" name="year" required/>
                    </td>
                    <td width="25%" bgcolor="#5fc0a0" align="center">
                        <label for="id">ID:</label><br>
                        <input type="text" id="id" name="id" required/>
                    </td> 
                </tr>

                </table>
                <a href="graduate.php"><input class="bttn" type="button" value="Cancel"/></a>
                <input type="submit" type="button" class="bttn"/>   

    </form>
    </div>
</div>
    
</body>
</html>