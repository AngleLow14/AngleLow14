<?php
$array = ['ID' => '$ID', 'name' => '$name', 'department' => '$department',
        'school_year' => '$school_year','Course' => '$Course'];

if (null !==$array=('$ID'.'$name'.'$department'.'$school_year',
    '$Course')) {
    echo 'Student Added: ' .null !==$array=('$ID'.'$name'.'$department'.'$school_year',
    '$Course');
} else {
    echo 'Data is not set';
}


    if (!empty($ID) || !empty($name) || !empty($department) || !empty($school_year)
    !empty($Course)) {
        $host="localhost";
        $dbUsername="root";
        $dbPassword=" ";
        $dbname="person";

        $conn=new mysqli($host,$dbUsername,$dbPasword,$dbname);
        if(mysqli_connect_error()){
            die('Connection failed: ' . $conn->connect_error);

        }else{
            $sql = "SELECT * FROM `graduate_last_name`;";
            $sql = "INSERT INTO graduate_last_name (ID, name, department, school_year, Course) 
            VALUES ('$ID', '$name','$department','$school_year','$Course')";
            if ($conn->query($sql) === TRUE) {
                echo 'Data inserted successfully';
            } else {
                echo 'Error: ' . $sql . ' ' . $conn->error;
            }
            $stmt->close();
            $stmt->close();
        }

}   else{
    echo "DATA IS OKAY";
    die();
}
?>