
<!DOCTYPE html>
<html>

<head>
    
    <!-- Slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script type="text/javascript" 
src="https://code.jquery.com/jquery-1.12.0.min.js">
    </script>

    <!-- Compiled and minified JavaScript -->
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
    </script>
    
    <script>
        $(document).ready(function () {
            $('.carousel').carousel();
        });
    </script>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: coral;
        }

        a {
            height: 900px;
            width: 650px;
        }

        .carousel {
            height: 800px;
            perspective: 950px;
            transform: translateY(-100px);
        }

        .carousel carousel-item {
            width: 7050px;
        }

        img {
            width: 100%;
            height: 200px;
        }

        h4 {
            margin: 0;
            padding: 0;
            background: #fff;
            color: #000;
            box-sizing: border-box;
            padding: 10px 5px;
            font-weight: bold;
            font-size: 20px;
            text-align: center;
        }
    </style>
</head>

  
<h1><?= $event[0]->title ?></h1>
<h1><?= $event[0]->discription ?></h1>

<?php $events_images=explode(',',$event[0]->images);?>
     <div class="carousel">

     <?php foreach ($events_images as $event): ?>

        <div class="carousel-item">
        <img src="<?=base_url('public/uploads/events/'.$event)?>" alt="" srcset="">
      </div>
    <?php endforeach; ?>
        </div>
        
        
    </div>

</body>
</html>