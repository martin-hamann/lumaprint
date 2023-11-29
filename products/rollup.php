<?php
/*
Template Name: Rollup
*/
?>
<?php get_header() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rollup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .center-text {
            text-align: center;
            color: white;
        }

        #image-box {
            margin-top: 20px;
            margin-bottom: 50px;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: auto;
        }
    </style>
</head>

<body>

<!-- Table 1 -->
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto center-text text-danger ">
            <div class="header "> <h1>Plade med Print til Byggepladsskilt</h1>
                <p> Rollup system til indendørs messer, showrooms, udstillinger, butikker, osv.
                    Systemet leveres med farve print på B1 brandhæmmende banner inkl. en tranport taske.</p></div>

            <div id="image-box">
                <img src="http://lumaprint.site/wp-content/uploads/2023/11/rollup-e1701219099886.png"
                     alt="Rollup banner">
            </div>

            <!-- Main Table -->
            <table class="table table-bordered border-dark text-center mb-4">
                <thead>
                <tr>
                    <td colspan="3" class="bg-dark text-light">Antal & Pris</td>
                </tr>
                <tr>
                    <th>Antal</th>
                    <th>Pris</th>
                    <th>X.Moms</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1 stk. 85x200</td>
                    <td>800,00 kr</td>
                    <td>640,00 kr</td> 
                </tr>
                <tr>
                    <td>2 stk. 85x200</td>
                    <td>1500,00 kr</td>
                    <td>1200,00 kr</td> 
                </tr>
                <tr>
                    <td>3 stk. 85x200</td>
                    <td>2100,00 kr</td>
                    <td>1680,00 kr</td> 
                </tr>
                <tr>
                    <td>4 stk. 85x200</td>
                    <td>2600,00 kr</td>
                    <td>2080,00 kr</td> 
                </tr>
                <tr>
                    <td>5 stk. 85x200</td>
                    <td>3000,00 kr</td>
                    <td>2400,00 kr</td> 
                </tr>
                <tr>
                    <td>6 stk. 85x200</td>
                    <td>3300,00 kr</td>
                    <td>2640,00 kr</td> 
                </tr>
                <tr>
                    <td>1 stk. 50x200</td>
                    <td>700,00 kr</td>
                    <td>560,00 kr</td> 
                </tr>
                <tr>
                    <td>1 stk. 120x200</td>
                    <td>1370,00 kr</td>
                    <td>1096,00 kr</td> 
                </tr>
                </tbody>    
            </table>
        </div>
    </div>
</div>

    <div class="center-text">
        <p>Priser er inklusiv moms. Eksl. print og fragt. <br> Lever venligst en PDF fil til print.</p>
    </div>

    <?php get_footer(); ?>

</body>

</html>
