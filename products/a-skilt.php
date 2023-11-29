<?php
/*
Template Name: A-skilt
*/
?>
<?php get_header() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-skilt print</title>
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

                <p>
                      Standard størrelse er som regel B2, som måler 50x70 cm, eller B1, som måler 70x100 cm. Mål hellere efter

                    Pris på 2 stk. B2 print:
                    132,- holdbar i nogle måneder. 150g. plakat papir.
                    230,- holdbar i nogle år. Lamineret print.

                    Pris på 2 stk. B1 print:
                    264,- holdbar i nogle måneder. 150g. plakat papir.
                    462,- holdbar i nogle år. Lamineret print.
                </p>

                <!-- Insert your image here -->
                <img src="http://lumaprint.site/wp-content/uploads/2023/11/Gadeskilt.png" alt="Stickers" width="50%">
            </div>
        </div>
    </div>

</body>

<?php get_footer(); ?>

