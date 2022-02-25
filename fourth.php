<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display User Name</title>
</head>

<body>
    <form method="get">
        <label>Name</label><br>
        <input placeholder="Enter Name" name="name" /><br>
        <button type="submit">Print Name</button><br>
        <?php echo $_GET{
            "name"} ?>
    </form>
</body>

</html>