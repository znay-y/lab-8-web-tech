<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\ex1.css">
    <link rel="stylesheet" href="css\reset.css">
    <title>Php hello world</title>
</head>

<body>
    <header>
        <h1>Employee Salaries</h1>
    </header>
    <table>
        <tr>
            <th>Name</th>
            <th>Salary</th>
        </tr>
        <tr>
            <td>David</td>
            <td><?php
                $Salary = 25;

                print("£" . $Salary . ",000");
                ?></td>

        </tr>
        <tr>
            <td>John</td>
            <td><?php
                $Salary = 37;

                print("£" . $Salary . ",000");
                ?></td>

        </tr>
        <tr>
            <td>Mark</td>
            <td><?php
                $Salary = 45;

                print("£" . $Salary . ",000");
                ?></td>

        </tr>

    </table>
</body>

</html>