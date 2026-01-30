<?php
$students = [
    ['name' => 'A', 'grade' => 90],
    ['name' => 'B', 'grade' => 85],
    ['name' => 'C', 'grade' => 92]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>

<table border="1" cellpadding="8">
    <tr>
        <th>Name</th>
        <th>Grade</th>
    </tr>

    <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['grade']; ?></td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
