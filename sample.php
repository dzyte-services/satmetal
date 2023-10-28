<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Layout</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Row 1: Image on the left, content on the right -->
        <div class="row">
            <div class="col-lg-6 order-lg-1">
                <img src="img/simg1.png" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-lg-6 order-lg-2">
                <p>Content for Row 1</p>
            </div>
        </div>
        <!-- Row 2: Content on the left, image on the right -->
        <div class="row">
            <div class="col-lg-6 order-lg-2">
                <p>Content for Row 2</p>
            </div>
            <div class="col-lg-6 order-lg-1">
                <img src="img/simg2.png" class="img-fluid" alt="Image 2">
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
