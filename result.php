<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .container {
            width: 40%;
            border: 3px dashed salmon;
        }
        .container_content{
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <div class="container_content mt-3 mb-3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9sqJimYhqp8Q7vt25LyK1Np7J2HPsuJA9FQ&usqp=CAU" alt="image">
            <?php
            echo "<h1>Thx you " . $_GET["name"] . ' !!' . "</h1>";
            echo "We received your application for the " . $_GET["club"] . "<br><br>";
            if (isset($_GET["skill"])) {
                $selectedSkills = $_GET["skill"];
                echo "You are a ";
                echo implode(" and ", $selectedSkills);
                echo "<br><br>";
            } else {
                echo "No skills selected" . "<br>";
            }
            echo "You will be available on " . $_GET["time"]
            ?>
        </div>
    </div>
</body>

</html>