<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 7</title>
</head>
<body>

    <h1>Fake Air BNB</h1>

    <?php include"db-conn.php"?>
    
    <table border=1>

        <tr>
            <th>ID</th>
            <th>Title</th>
        </tr>

        <?php foreach($places as $place) { ?>
            <tr>
                <td>
                    <a href="details.php?id=<?php echo $place["id"]; ?>"><?php echo $place["id"];?></a>
                </td>

                <td>
                    <?php echo $place["name"];?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>