<?php
$array = ['month' => '$month', 'day' => '$day', 'year' => '$year', 'id' => '$id'];

if (null !==$array=('$month'.'$day'.'$year'.'$id')) {
    echo 'Date Acquired ' .null !==$array=('$month'.'$day'.'$year'.'$id');
} else {
    echo 'Data is not set';
}


    if (!empty($month) || !empty($day) || !empty($year) || !empty($id)) {
        $host="localhost";
        $dbUsername="root";
        $dbPassword=" ";
        $dbname="graduate_year";

        $conn=new mysqli($host,$dbUsername,$dbPasword,$dbname);
        if(mysqli_connect_error()){
            die('Connection failed: ' . $conn->connect_error);

        }else{
            $sql = "SELECT * FROM `graduate_year`;";
            $sql = "INSERT INTO graduate_year (month, day, year, id) VALUES ('$month', '$day','$year','$id')";
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