<?php
/*
Template Name: Byggepladsskilt
*/
?>
<?php get_header() ?>

<head>
    <style>
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

        .byggeplads-header{
            margin-top:5vh;
        }
        .byggeplads-container{
            margin-bottom:5vh;
        }
        
    </style>
</head>

<div class="header text-center byggeplads-header ">
    <h1 class="headline">Plade med Print til Byggepladsskilt</h1>
    <p class="text"> Dipond plade print til byggeplads - 2500x1250x3 mm. </p>
</div>

<div class="container byggeplads-container">
    <div class="row">
        <div class="col-md-6 mx-auto center-text text-center">

            <div id="image-box">
                <img src="http://lumaprint.site/wp-content/uploads/2023/11/byggeplads_skilt.jpg" alt="Byggepladsskilt">
            </div>

            <!-- Main Table -->
            <table class="table table-bordered border-dark text-center mb-4">
                <thead>
                    <tr>
                        <td colspan="2" class="bg-dark text-light">Med Laminat</td>
                    </tr>
                    <tr>
                        <th>Antal</th>
                        <th>Pris</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fra 1 Plade</td>
                        <td>3094,00 kr</td>
                    </tr>
                    <tr>
                        <td>Fra 5 Plader</td>
                        <td>2563,00 kr</td>
                    </tr>
                    <tr>
                        <td>Fra 10 Plader</td>
                        <td>1983,00 kr</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">

            <!-- Main Table -->
            <table class="table table-bordered border-dark text-center mb-4">
                <thead>
                    <tr>
                        <td colspan="2" class="bg-dark text-light">Uden Laminat</td>
                    </tr>
                    <tr>
                        <th>Antal</th>
                        <th>Pris</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fra 1 Plade</td>
                        <td>2195,00 kr</td>
                    </tr>
                    <tr>
                        <td>Fra 5 Plader</td>
                        <td>1263,00 kr</td>
                    </tr>
                    <tr>
                        <td>Fra 10 Plader</td>
                        <td>1135,00 kr</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center text">
        <p>Priser er inklusiv moms. Eksl. print og fragt. <br> Lever venligst en PDF fil til print.</p>
    </div>

</div>


<?php get_footer(); ?>