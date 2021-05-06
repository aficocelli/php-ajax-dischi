<?php
    include __DIR__ . '/db.php';

  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
    <!-- /google font -->
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- /fontawesome -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- /css -->
    <title>Vue Dischi Musicali</title>
  </head>
  <body>
    <div class="container">
      <!-- header -->
      <header>
        <div class="logo">
          <i class="fab fa-spotify"></i>
        </div>
      </header>
      <!-- /header -->
     
    
      <!-- main -->
      <main>
        <!-- main box -->
        
              <?php  

                foreach($album as $item){

                    echo '<div class="box"> <div class="album">
                    <img src="'. $item['poster'] . '" alt="">
                    </div>';
                    echo '<h1>'. $item['title'] .'</h1>';

                    echo '<h2>'. $item['author'].'</h2>';

                    echo '<p>'. $item['genre'] .'</p>';
                    
                    echo '<p>'. $item['year'] .'</p></div>';
                    
                }         
            
              ?> 
 -->
            
            <?php foreach($album as $element): ?>

                <div class="box">
                
                    <div class="album">
                        <img src="<?php echo $element["poster"] ?>" alt="immagine album">
                    </div>
                    <h1><?php echo $element['title'] ?></h1>

                    <h2><?php echo $element['author'] ?></h2>
                
                    <p><?php echo $element['genre'] ?></p>

                    <p><?php echo $element['year'] ?></p>
                
                </div>
            
            <?php endforeach; ?>

            


      </main>
      <!-- /main -->
    </div>
    
  </body>
</html>