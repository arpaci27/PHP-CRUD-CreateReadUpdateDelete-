    <?php

    require 'config.php';

    if(isset($_POST['action'])){
       
        if($_POST["action"]=="insert"){
            insert();
        }
    }

    function insert(){
        global $conn;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $query = "INSERT INTO users ('', '$name' , '$email', '$gender')";
    mysqli_query($conn, $query);
    echo "Data Inserted Successfully";}
    ?>