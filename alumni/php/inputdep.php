<?php
$array = ['deparment' => '$deparment', 'course_unit' => '$course_unit', 'major' => '$major', 'ID' => '$ID'];

if (null !==$array=('$deparment'.'$course_unit'.'$major'.'$ID')) {
    echo 'Information Added: ' .null !==$array=('$deparment'.'$course_unit'.'$major'.'$ID');
} else {
    echo 'Data is not set';
}


    if (!empty($deparment) || !empty($course_unit) || !empty($major) || !empty($ID)) {
        $host="localhost";
        $dbUsername="root";
        $dbPassword=" ";
        $dbname="graduate_year";

        $conn=new mysqli($host,$dbUsername,$dbPasword,$dbname);
        if(mysqli_connect_error()){
            die('Connection failed: ' . $conn->connect_error);

        }else{
            $sql = "SELECT * FROM `graduate_year`;";
            $sql = "INSERT INTO graduate_year (deparment, course_unit, major, ID) VALUES ('$deparment', '$course_unit','$major','$ID')";
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