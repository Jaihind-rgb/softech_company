<?php

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

// Set your connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}


// Taking all 5 values from the form data(input)
$name = $_REQUEST['name'];
$parent_ref_id = $_REQUEST['parent_ref_id'];
$child_ref_id = generateRandomString(5);
$position = $_REQUEST['position'];

// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO emp  VALUES ('','$name','$parent_ref_id','$child_ref_id','$position')";

if (mysqli_query($conn, $sql)) {
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$name\n $parent_ref_id\n $position");
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
</head>

<body>
<ul>
    <li>
        <a href="#">xyz</a>
        <ul>
            <li>
                <a href="">b</a>
                <ul>
                    <li>
                        <a href="">d</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">c</a>
            </li>
        </ul>
    </li>
</ul>
</body>

</html>