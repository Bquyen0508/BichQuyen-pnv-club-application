<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="container">
        <form action="result.php" method="get">
            <div class="row mb-2 mt-3">
                <div class="col-sm-2">
                    Name
                </div>
                <div class="col-sm-8">
                    <input class="input" type="text" name="name">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-2">
                    Club you want to apply
                </div>
                <div class="col-sm-8">
                    <select name="club" id="club" class="input" name="club">
                        <option value="Robotic Club">Robotic Club</option>
                        <option value="English Club">English Club</option>
                        <option value="Japanese Club">Japanese Club</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-2">
                    Be time for you
                </div>
                <div class="col-sm-8">
                    <input type="radio" id="Sat-mornings" name="time" value="Saturday mornings" class="radio">
                    <label for="Sat-mornings">Saturday mornings</label>
                    <input type="radio" id="Sat-afternoons" name="time" value="Saturday afternoons" class="radio">
                    <label for="Sat-afternoons">Saturday afternoons</label>
                    <br>
                    <input type="radio" id="Sun-afternoons" name="time" value="Sunday afternoons" class="radio">
                    <label for="Sun-afternoons">Sunday afternoons</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-2">
                    Your skills
                </div>
                <div class="col-sm-2">
                    <input type="checkbox" value="the best coder" class="checkbox" name="skill[]" id="the-best-coder">
                    <label for="the-best-coder">the best coder</label>
                </div>
                <div class="col-sm-2">
                    <input type="checkbox" value="good in arts" class="checkbox" name="skill[]" id="good-in-arts">
                    <label for="good-in-arts">good in arts</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <input type="checkbox" value="a super star" class="checkbox" name="skill[]" id="a-super-star">
                    <label for="a-super-star">a super star</label>
                </div>
                <div class="col-sm-2">
                    <input type="checkbox" value="a crazy dancer" class="checkbox" name="skill[]" id="a-crazy-dancer">
                    <label for="a-crazy-dancer">a crazy dancer</label>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <input type="checkbox" value="singer" class="checkbox" name="skill[]" id="singer">
                    <label for="singer">singer</label>
                </div>

                <div class="col-sm-2">
                    <input type="checkbox" value="good in design" class="checkbox" name="skill[]" id="good-in-design">
                    <label for="good-in-design">good in design</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <input type="checkbox" value="the best eater" class="checkbox" name="skill[]" id="the-best-eater">
                    <label for="the-best-eater">the best eater</label>
                </div>
                <div class="col-sm-2">
                    <input type="checkbox" value="good in speeches" class="checkbox" name="skill[]" id="good-in-speeches">
                    <label for="good-in-speeches">good in speeches</label>
                </div>
            </div>
            <button type="submit" class="submit mt-3 mb-3">SUBMIT !</button>
        </form>
    </div>
</body>

</html>