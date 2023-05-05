<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form action="generate_password.php" method="get">
        <div class="container mt-3 mb-3"> 
            <div class="row"> 
                <div class="col-4"> 
                    <div class="form-group"> 
                        <label for="pswleng">Lunghezza password:</label> 
                        <input type="number" class="form-control" id="pswleng" name="pswleng" step="1">
                        <input type="checkbox" name="upper_letters" value="1"> Lettere Maiuscole<br>
                        <input type="checkbox" name="numbers" value="1"> Numeri<br>
                        <input type="checkbox" name="symbols" value="1"> Simboli<br><br>
                        <input type="checkbox" name="repeat_chars" value="1"> Ripeti Caratteri<br><br>
                    </div> 
                </div> 
                <div class="col-2 pt-4"> 
                    <button type="submit" class="btn btn-primary">Genera</button> 
                </div> 
            </div> 
        </div>
    </form>
</body>
</html>