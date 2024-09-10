
<?php 

$choice = array('SELECT tel FROM students','tel');


?>

<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
        <title>△</title>
        <form method="POST">
            <button type="submit" name="choice" value="SELECT * FROM students">All Data</button>
            <button type="submit" name="choice" value="<?php $choice ?>">tellephone</button>
            <button type="submit" name="choice" value="SELECT country FROM students">country</button>
            <button type="submit" name="choice" value="SELECT name FROM students">name</button>
        </form>
    </body>
</html>


<?php

require ('./SQLconnection.php');

var_dump($choice);

$choice = "";


if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $i = $_POST['choice'];

}else{
    die();
}


// $Bchoice = array($choice)  . "<br>";




// $result = $mysqli->query($choice);




echo "<br>";

// if($result->num_rows > 0){
//     echo "1234567890";
//     while($row = $result->fetch_assoc()){
//     echo $row['id'] . $row['name'] . "<br />";
//     };
// }




?>


