<html>

    <?php
    echo '<>Hello World</p> <br>';
    echo $_POST['uname'];
    echo $_POST['psw'];


    $a = array('one', 'two,', 'tres');

    echo $a[2];

    foreach ($a as $value) {
        echo '$value <br>';
    }
    ?>
</html>