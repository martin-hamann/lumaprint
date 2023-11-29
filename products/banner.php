<?php
/*
Template Name: Banner
*/
?>
<?php get_header() ?>


<div class="container">
    <div class="header mb-4 py-4">
        <h2 class="banner-headline headline">Bannerprint</h2>
    </div>
    <div class="row image-container d-flex justify-content-center">
        <div class="col-md-3 image-box">
            <img src="http://lumaprint.site/wp-content/uploads/2023/11/Vinyl.jpg" alt="Vinyl" class="banner-img">
            <h4 class="banner-sub-headline headline">Banner af Vinyl</h4>
            <p class="banner-text text-center">Outdoor eller indoor B1 pressing banner.
                Print på en side.</p>
        </div>
        <div class="col-md-3 image-box">
            <img src="http://lumaprint.site/wp-content/uploads/2023/11/Mesh.jpg" alt="Mesh" class="banner-img">
            <h4 class="banner-sub-headline headline">Banner af Mesh</h4>
            <p class="banner-text text-center">Outdoor banner med små huller som tillader vinden at trænge igennem. Det
                er velegnet
                til frithængende bannere, f.eks på byggepladshegn, festivalshegn, stillads osv.
                Print på en side.</p>
        </div>
        <div class="col-md-3 image-box">
            
            <img src="http://lumaprint.site/wp-content/uploads/2023/11/Stof.jpg" alt="Stof" class="banner-img">
            <h4 class="banner-sub-headline headline">Banner af Stof</h4>
            <p class="banner-text text-center">Outdoor og indoor B1 brændhæmmende fleksibel tekstil banner. Kan foldes
                sammen til
                rejsetaske som er nemmere end en rullet poster.
                Print på en side.</p>
        </div>
    </div>


    <div class="row table-container">
        <div class="col-md-6 mx-auto text-center">
            <table class="table table-bordered border-dark bg-dark text-light text-center">
                <thead>

                    <tr>
                        <th>Pris</th>
                        <th>Mål i cm</th>
                        <th>Ex.moms </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>218,75</td>
                        <td>A1/ 60x84</td>
                        <td>175,00</td>
                    </tr>
                    <tr>
                        <td>250,00</td>
                        <td>B1/ 70x100</td>
                        <td>200,00</td>
                    </tr>
                    <tr>
                        <td>343,73</td>
                        <td>A0/ 84x119</td>
                        <td>275,00</td>

                    </tr>
                    <tr>
                        <td>418,75</td>
                        <td>150x50 </td>
                        <td>335,00</td>
                    </tr>
                    <tr>
                        <td>576,25</td>
                        <td>B0/ 100x140 </td>
                        <td>461,00</td>
                    </tr>
                    <tr>
                        <td>601,25 </td>
                        <td>150x100</td>
                        <td>481,00</td>
                    </tr>
                    <tr>
                        <td>782,50</td>
                        <td>150x150</td>
                        <td>626,00</td>
                    </tr>
                    <tr>
                        <td>965,00</td>
                        <td>150x200</td>
                        <td>772,00</td>

                    </tr>
                    <tr>
                        <td>1147,50</td>
                        <td>150x250</td>
                        <td>918,00</td>
                    </tr>
                    <tr>
                        <td>1328,75</td>
                        <td>150x300 </td>
                        <td>1063,00</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

</div>
<style>
   
    .banner-text {
        color: white;
    }

    h2.banner.headline {
        width: 50%;
        margin: 0 auto;
    }

    .banner-img {
        object-fit: cover;
        height: 50%;
        width:100%;  
        margin-bottom:5vh;
    }
    .image-container{
        margin-bottom:10vh;
    }
    .table-container{
        margin-bottom:20vh;
    }
</style>


<?php get_footer() ?>