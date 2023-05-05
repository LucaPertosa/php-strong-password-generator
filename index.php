<?php 
if (isset($_GET['pswleng']) && $_GET['pswleng'] == true) {
    $get_number = $_GET['pswleng'];
    echo genera_password($get_number);
}

function genera_password($lunghezza) {
    $alph = 'abcdefghijklmnopqrstuvwxyz';
    $upalph = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numb = '0123456789';
    $symb = '!@.,';
    $carat = $alph . $upalph . $numb . $symb;
    $stringa_casuale = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $stringa_casuale .= $carat[rand(0, strlen($carat) - 1)];
    }
    return $stringa_casuale;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form action="index.php" method="get">
        <div class="container mt-3 mb-3"> 
            <div class="row"> 
                <div class="col-4"> 
                    <div class="form-group"> 
                        <label for="pswleng">Lunghezza password:</label> 
                        <input type="number" class="form-control" id="pswleng" name="pswleng" step="1">
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