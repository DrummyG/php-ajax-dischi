<?php
include __DIR__."/data.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>

    </header>
    <main>
    <div class="container">
      <div class="row gap-3 justify-content-center">
      <?php foreach($dischi as $value){?>
        <div class="col-sm-4 col-md-3 col-lg-2">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="<?php echo $value["poster"] ?>" alt="" class="w-75">
                <p class="big text-center text-uppercase"><?php echo $value["title"] ?></p>
                <div>
                    <p class="smol text-center"><?php echo $value["author"] ?></p>
                <p class="smol text-center"><?php echo $value["year"] ?></p>
                </div>
            </div>
        </div>
        <?php }?>
      </div>
    </div>
    </main>
    <?php ?>
    
</body>
</html>