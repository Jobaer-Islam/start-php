<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <form action="second.php">
            <label>Name:</label>
            <input type="text" name="user_name">

            <label>ID:</label>
            <input type="text" name="user_ID">

            <input type="submit" value="submit">
        </form>
    </body>
</html>


<?php

echo "<h1>Number Page</h1>";
echo "<a href='prob3.php'>click and See which number is larger</a>";
?>