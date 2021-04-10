<?php echo "Welcome to my site outsider"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Enter Car Properties</h2>
    <form method="POST">
        <p> <label for="input">License plate</label>
            <input type="text" name="licensePlate" size="40"/>
        </p>
        <p> <label for="input">Brand</label>
            <input type="text" name="brand" size="40"/>
        </p>
        <p> <label for="input">Model</label>
            <input type="text" name="model" size="40"/>
        </p>
        <p> <label for="input">Model Year</label>
            <input type="text" name="modelYear" size="40"/>
        </p>
        <p> <label for="input">Color</label>
            <input type="text" name="color" size="40"/>
        </p>
        <input type="submit">
    </form>
</body>
</html>