<!-- <html>
    <link rel="stylesheet" href="milan.css>
    <?php
    echo "<P>hallo mensen</P> <br>";
    /* print username */
    echo $_POST["uname"];

    /* print een foutmelding als username < 5 tekens */


    /* print username */
    ?>
</html> -->
<html>
    <?php
    $B = array('bert','jannes','gerda');
echo "<br>Overzicht namen:<br>";
echo '<table border="1" width="200">';

    foreach($B as  $name){
        echo "<tr><td>";
        echo $name;
        "</td></tr>";
    }
    echo "</table>";
    ?>
</html>