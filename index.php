<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Emp Binary Tree</title>
</head>

<body>
    <form action="submit.php" method="post">
        <div>Name:
            <input type="text" name="name">
        </div>
        <div>Ref ID: <input type="text" name="parent_ref_id"></div>
        <div>
            <label for="left">
                Left
            </label>
            <input type="radio" name="position" id="left" value="left">
            <label for="right">
                Right
            </label>
            <input type="radio" name="position" id="right" value="right">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>

</html>