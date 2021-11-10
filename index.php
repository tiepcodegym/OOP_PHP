<?php
include_once"danhsach.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<table>
    <tr>
        <th>name</th>
        <th>age</th>
        <th>address</th>
    </tr>

    <?php if (isset($student)) {
        foreach($student as $key => $value):?>
            <tr>
                <td><?php echo $value["name"] ?></td>
                <td><?php echo $value["age"] ?></td>
                <td><?php echo $value["address"] ?></td>
            </tr>
        <?php endforeach;
    } ?>

</table>

</body>
</html>