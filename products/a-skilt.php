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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #main-content {
            display: flex;
            justify-content: center;
            height: 100vh;
            margin-top:20vh auto 20vh auto;
        }

        .text-box{
            text-align:center;  
        }
        p.a-skilt-tekst .text {
            color:#ededed;
        }
        h2.headline{
            color:#e31e26;
        }

        .askilt-img{
            display:flex;
            justify-content:center;

        }
    </style>
</head>

<body>

    <div id="main-content" class="centered">
        <div id="text-box">
            <div id="content-box">

                <h2 class="headline">Print til gadeprint</h2>

                <p class="a-skilt-tekst text">
                    Standard størrelse er som regel B2, som måler 50x70 cm, eller B1, som måler 70x100 cm. Mål hellere
                    efter.
                </p>

                <p class="a-skilt-tekst text">Pris på 2 stk. B2 print:
                    <br>
                    132,- holdbar i nogle måneder. 150g. plakat papir.
                    <br>
                    230,- holdbar i nogle år. Lamineret print.
                </p>

                <p class="a-skilt-tekst text">Pris på 2 stk. B1 print:
                    <br>
                    264,- holdbar i nogle måneder. 150g. plakat papir.
                    <br>
                    462,- holdbar i nogle år. Lamineret print.
                </p>

                <div class="askilt-img">
                    <img src="http://lumaprint.site/wp-content/uploads/2023/11/Gadeskilt.png" alt="a-skilt" width="30%" height="30%">
                </div>
            </div>
        </div>
    </div>

</body>

<?php get_footer(); ?>