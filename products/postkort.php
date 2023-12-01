<?php
/*
Template Name: Postkort
*/

get_header();
?>

<style>
    .pricing-card {
        border-radius: 5px;
        margin-bottom: 20px;
        background-color: #222;
    }

    .pricing-card img {
        width: 100%;
        height: auto;
        object-fit:cover;
    }

    .pricing-details {
        padding: 20px;
    }
    .pricing-info{
        text-align:center;
    }


</style>

<div class="container my-5 mx-auto">
    <h1 class="headline">Postkort</h1>
    <div class="row d-flex justify-content-center">
        <div class="col-md-3 text-center">
            <div class="pricing-card">
                <div class="pricing-details text-center">
                    <div class="pricing-header"> <h5 class="headline">50 stk. postkort</h5></div>
                    <div class="pricing-info text">122,- for 1-sidet print</div>
                    <div class="pricing-info text">167,- for 2-sidet print</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="pricing-card">
                <div class="pricing-details">
                    <div class="pricing-header"><h5 class="headline">100 stk. postkort</h5></div>
                    <div class="pricing-info text">197,- for 1-sidet print</div>
                    <div class="pricing-info text">293,- for 2-sidet print</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="pricing-card">
                <div class="pricing-details">
                    <div class="pricing-header"><h5 class="headline">200 stk. postkort</h5></div>
                    <div class="pricing-info text">360,- for 1-sidet print</div>
                    <div class="pricing-info text">532,- for 2-sidet print</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="pricing-card">
                <div class="pricing-details">
                    <div class="pricing-header"><h5 class="headline">400 stk. postkort</h5></div>
                    <div class="pricing-info text">604,- for 1-sidet print</div>
                    <div class="pricing-info text">844,- for 2-sidet print</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-3 text-center">
            <div class="pricing-card">
                <img src="http://lumaprint.site/wp-content/uploads/2023/11/Postkort.png" alt="Postkort forside">
            </div>

        </div>
        <div class="col-md-3 text-center">
            <div class="pricing-card">
                <img src="http://lumaprint.site/wp-content/uploads/2023/11/Postkort_Page_2.png" alt="Postkort bagside">
            </div>
        </div>
    </div>
    
</div>


<?php get_footer(); ?>