<?php
/*
Template Name: Tegningsplot
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
        }
    </style>
</head>

<body>

            <!-- Table 1 -->
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto center-text text-danger ">
        <div class="header mb-4 py-4"> <h1>PLOT, PRINT, ELLER SCAN AF TEGNINGER</h1> </div>

             <!-- Image Box 1 -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto center-text">
                <div>
                    <p>Sort/hvid plot ex.moms og fragt</p>
                    <img src="http://lumaprint.site/wp-content/uploads/2023/11/Plot-prisliste.png" alt="Image 1">      
                </div>
            </div>
        </div>
    </div>

        <!-- Image Box 2 -->
        <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto center-text">
                <div>
                    <p>Farve plot ex.moms og fragt</p>
                    <img src="http://lumaprint.site/wp-content/uploads/2023/11/Prisliste-eksl-moms.png" alt="Image 2">
                </div>
            </div>
        </div>
    </div>

            <!-- Main Table -->
            <table class="table table-bordered border-dark text-center mb-4">
                <thead>
                    <tr>
                    <td colspan="3" class="bg-dark text-light">PRINT eller PLOT af PDF, DWG, CAD og Autocad drawings, tegninger, planer, oversigt, snit osv.</td>
                    </tr>
                    <tr>
                        <th>Størrelse</th>
                        <th>Scanning til PDF fil</th>
                        <th>Vectorisering inkl. scanning</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A4</td>
                        <td>25.00</td>
                        <td>225.00</td>
                    </tr>
                    <tr>
                        <td>A3</td>
                        <td>50.00</td>
                        <td>295.00</td>
                    </tr>
                    <tr>
                        <td>A2</td>
                        <td>130.00</td>
                        <td>415.00</td>
                    </tr>
                    <tr>
                        <td>A1</td>
                        <td>175.00</td>
                        <td>490.00</td>
                    </tr>
                    <tr>
                        <td>A0</td>
                        <td>300.00</td>
                        <td>810.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">Scannes til PDF fil med 300 dpi. Kan efterfølgende konverteres til TIF eller JPG fil.</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>


<?php get_footer(); ?>

</body>

</html>
