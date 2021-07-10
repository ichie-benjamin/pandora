<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PANDORAS AWARD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Afiaanyi">
    <meta name="description" content="PANDORA AWARD | Vote your best restaurant">
    <link rel="icon" href="images/logo.jpeg" type="image/x-icon" />
    <link href="http://fonts.googleapis.com/css?family=Kotta+One|Cantarell:400,700" rel="stylesheet" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- responsive-full-background-image.css stylesheet contains the code you want -->
    <link rel="stylesheet" href="/css/styles.css">

</head>
<body>

<header class="container">
    <section class="content">
        <div class="">
            <img style="width: 200px" src="images/logo_t.png" />
        </div>
        <div class="">
            <img style="width: 200px" src="images/lacuisine.png" />
        </div>
        <div class="">
            <button onclick="goToURL('home')" class="link">VOTE</button>
            <button  class="link">GALLERY</button>
        </div>
        <div>
            <button class="link">ABOUT</button>
            <button class="link">CONTACT</button>
        </div>

        <div class="mt-4" ><a class="h4" href="#">HELP DESK</a></div>

    </section>
</header>


<script src="assets/js/jquery-3.5.0.min.js"></script>
<script>
    function goToURL(link) {
        window.location = link
    }
</script>
</body>
</html>
