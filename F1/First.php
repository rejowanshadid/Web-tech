<!DOCTYPE html>
<html>
<head>
    <title> PHP Array </title>
</head>
<body>

<h1>PHP TABLE</h1>

<?php

$fruit = array(
    "fruit1" => "Apple",
    "fruit2" => "Banana",
    "fruit3" => "Mango",
    "fruit4" => "Orange",
    "fruit5" => "Grapes",
    "fruit6" => "Lichi",
    "fruit7" => "Guava",
    "fruit8" => "Papaya",
    "fruit9" => null,
    "fruit10" => ""
);

?>

<table border="2">

    <tr>
        <th>Value of Array</th>fs
        <th>isset()</th>
        <th>empty()</th>
        <th>is_null()</th>
    </tr>

    <?php foreach($fruit as $value){ ?>

    <tr>

        <td>

            <?php

            if(is_null($value))
            {
                echo "NULL";
            }
            else if($value == "")
            {
                echo "Empty";
            }
            else
            {
                echo $value;
            }

            ?>

        </td>

        <td>

            <?php

            if(isset($value))
            {
                echo "TRUE";
            }
            else
            {
                echo "FALSE";
            }

            ?>

        </td>

        <td>

            <?php

            if(empty($value))
            {
                echo "TRUE";
            }
            else
            {
                echo "FALSE";
            }

            ?>

        </td>

        <td>

            <?php

            if(is_null($value))
            {
                echo "TRUE";
            }
            else
            {
                echo "FALSE";
            }

            ?>

        </td>

    </tr>

    <?php } ?>

</table>

</body>
</html>