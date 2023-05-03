<?php

$paragraph = trim($_GET["paragraph"]);
$censoredWord = trim($_GET["censoredWord"]);
$censoredParagraph = str_replace($censoredWord, "***", $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <title>Censored paragraph</title>
</head>
<body>

<div class="container d-flex justify-content-center">
    <div class="card rounded-0 shadow col-8 m-3">
        <div class="card-body my-2">
            <h3>
                The uncensored paragraph is: "<?php echo $paragraph; ?>" and contains <?php echo strlen($paragraph); ?> characters
            </h3>
        </div>
        <div class="card-body my-2">
            <h3>
                The censored paragraph is: "<?php echo $censoredParagraph; ?>" and contains <?php echo strlen($censoredParagraph); ?> characters
            </h3>
        </div>        
    </div>
</div>
</body>
</html>