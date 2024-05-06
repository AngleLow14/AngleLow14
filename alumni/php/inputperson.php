<?php
$array = ['first_name' => '$first_name', 'middle_name' => '$middle_name', 'last_name' => '$last_name',
        'age' => '$age','gender' => '$gender','contact_no.' => '$contact_no.'
        'email' => '$email','id' => '$id'];

if (null !==$array=('$first_name'.'middle_name'.'$last_name'.'$age',
    '$gender','$contact_no.','$email','$id')) {
    echo 'Person Added: ' .null !==$array=('$first_name'.'middle_name'.'$last_name'.'$age',
    '$gender','$contact_no.','$email','$id');
} else {
    echo 'Data is not set';
}


    if (!empty($first_name) || !empty($middle_name) || !empty($last_name) || !empty($age)
    !empty($gender) || !empty($contact_no.) || !empty($email) || !empty($id)) {
        $host="localhost";
        $dbUsername="root";
        $dbPassword=" ";
        $dbname="person";

        $conn=new mysqli($host,$dbUsername,$dbPasword,$dbname);
        if(mysqli_connect_error()){
            die('Connection failed: ' . $conn->connect_error);

        }else{
            $sql = "SELECT * FROM `graduate_last_name`;";
            $sql = "INSERT INTO graduate_last_name (first_name, middle_name, last_name, age, gender, contact_no., email, id) 
            VALUES ('$first_name', '$middle_name','$last_name','$age','$gender','$contact_no.'$email','$id')";
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