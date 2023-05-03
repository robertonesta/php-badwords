
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <title>Bad words</title>
</head>
<body>

<div class="container d-flex justify-content-center">
    <div class="card rounded-0 shadow col-8 m-3">

      <div class="card-body">
        <form action="censoredText.php" method="get">
          <div class="mb-3">
            <label for="paragraph">Paragraph</label>
            <input type="text" name="paragraph" id="paragraph" class="form-control" placeholder="Insert a word or a paragraph" aria-describedby="suffixId">
          </div>
          <div class="mb-3">
            <label for="censoredWord">Censored Word</label>
            <input type="text" name="censoredWord" id="censoredWord" class="form-control" placeholder="Type a word that will be censored" aria-describedby="suffixId">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-primary">Reset</button>
        </form>
      </div>


    </div>
  </div>
    
</body>
</html>