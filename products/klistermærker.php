<?php
/*
Template Name: Klistermærker
*/
?>
<?php get_header() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klistermærker</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional Styles (Optional) -->
    <style>

#main-content {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

#text-box,
#right-images {
    width: 50%;
    margin: auto;
    color: white;
}


#content-box {
    text-align: center;
}

#right-images {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

#right-images img {
    margin-bottom: 10px;
}
    </style>
</head>

<body>

<div id="main-content" class="centered">
    <div id="text-box">
        <div id="content-box">
            <h1>Print af Egne Klistermærker</h1>
            
            <p>Kontur skåret klistermærker med print efter dit eget mortiv, foto, logo, layout osv. Folien er plast/vinyl med grå permanent klæb på bagsiden.
               Email dit motiv, skriv ønsket størrelse og antal, så vender vi tilbage med et tilbud 

               Vejledende pris:
               75,00 for et A4 ark med klistermærker.
               100,00 for et A3 ark med klistermærker.  </p>
            
            <img src="https://images.pexels.com/photos/2783837/pexels-photo-2783837.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Stickers" width= "50%">

            <p>Priser er inkl. moms. Eksl. grafisk arbejde og fragt. <br> Lever venligst en PDF fil til print. </p>
        </div>
    </div>


</div>

</body>

<?php get_footer(); ?>
