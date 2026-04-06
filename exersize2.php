<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\reset.css">
    <link rel="stylesheet" href="css\ex2.css">

    <title>Birthday Calculator</title>
</head>

<body>
    <form method="post" action="exersize2.php" id="mainform">
        <fieldset>
            <legend>My Birthday</legend>
            <div>
                <?php

                $username = $_POST['username'];
                $birthday = $_POST["birthday"];
                $conv_birthday = date("d M Y", strtotime($birthday));

                print("<p>Hello " . $username . " your birthday is on: " . $conv_birthday . "</p>");
                print("<p>Today is " . date("d F Y") . "</p>");

                //Current time and date
                $current_time = strtotime(date("Y-m-d H:i:s"));


                //User's time and date
                $user_seconds = strtotime($birthday);

                //Difference between the two
                $difference = $current_time - $user_seconds;

                //converted values of time
                $mins = floor($difference / 60);
                $hours = floor($difference / 3600);
                $days = floor($difference / 86400);
                $months = floor($difference / 2592000);
                $years = floor($difference / 31536000);

                print("<p> Since your birthday," . $difference . " seconds have passed, or " . $mins . " minutes, or " . $hours . " hours, or " . $days . " days, or " . $months . " months, or " . $years . " years</p>");


                ?>
            </div>

            <script src="js/ex2.js"></script>
        </fieldset>
    </form>
</body>

</html>