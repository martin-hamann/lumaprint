<?php
/*
Template Name: Byggepladsskilt
*/
?>
<?php get_header() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plakat Print</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional Styles (Optional) -->
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
        <p> Dipond plade print til byggeplads - 2500x1250x3 mm.  </p></div>

        <div id="image-box">
            <img src="http://test.local/wp-content/uploads/2023/11/byggeplads_skilt.jpg" alt="Byggepladsskilt">
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
                        <td>2563,00	kr</td>
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


            <!-- Table 2 -->
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

    <div class="center-text">
    <p>Priser er inklusiv moms. Eksl. print og fragt. </p>
    </div>
    
</div>

<?php get_footer(); ?>

</body>

</html>