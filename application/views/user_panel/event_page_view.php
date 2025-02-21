<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Page</title>

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.carousel').carousel();
        });
    </script>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4e1d2;
            font-family: 'Georgia', serif;
            color: #6b2b06;
            text-align: center;
        }

        /* ✅ Title & Description Styling */
        .event-title {
            font-size: 2.3em;
            font-weight: bold;
            margin-top: 15px;
            color: #8c3d19;
        }

        .event-description {
            font-size: 1.2em;
            margin: 8px auto;
            color: #6b2b06;
            max-width: 70%;
        }

        /* ✅ Adjusted Carousel Size */
        .carousel {
            width: 60%; /* 🔽 Reduced width from 80% */
            height: 350px; /* 🔽 Reduced height */
            margin: 20px auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 3px 3px 15px rgba(0, 0, 0, 0.3);
            border: 3px solid #8c3d19;
            padding: 10px; /* ✅ Added padding to frame the images */
        }

        /* ✅ Ensures Faces Stay Visible */
        .carousel .carousel-item {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .carousel .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: contain; /* ✅ Prevents face cropping */
            border-radius: 10px;
            border: 2px solid #6b2b06;
        }

        /* ✅ Indicators Style */
        .carousel .indicators {
            bottom: -15px;
        }

        .carousel .indicators .indicator-item {
            background-color: #8c3d19;
        }

        .carousel .indicators .indicator-item.active {
            background-color: #6b2b06;
        }
    </style>
</head>

<body>

    <!-- ✅ Title & Description -->
    <h1 class="event-title"><?= htmlspecialchars($event[0]->title) ?></h1>
    <h2 class="event-description"><?= htmlspecialchars($event[0]->discription) ?></h2>

    <!-- ✅ Carousel Section -->
    <div class="carousel">
        <?php $events_images = explode(',', $event[0]->images); ?>
        <?php foreach ($events_images as $event_image): ?>
            <a class="carousel-item">
                <img src="<?= base_url('public/uploads/events/' . $event_image) ?>" alt="Event Image">
            </a>
        <?php endforeach; ?>
    </div>

    <script>
        $(document).ready(function () {
            $('.carousel').carousel({
                fullWidth: false,
                indicators: true
            });

            setInterval(function () {
                $('.carousel').carousel('next');
            }, 3000); // Auto-slide every 3 seconds
        });
    </script>

</body>
</html>
