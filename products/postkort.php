<?php
/*
Template Name: Postkort
*/

get_header();
?>

<style>
    .pricing-card {
        border: 1px solid #dee2e6;
        border-radius: 10px;
        margin-bottom: 20px;
        background-color: #ffffff;
    }

    .pricing-card img {
        width: 100%;
        height: auto;
    }

    .pricing-details {
        padding: 20px;
    }

    .pricing-header {
        font-size: 1.8rem;
        font-weight: bold;
        color: #111213;
    }
</style>

<div class="container">
    <h1 class="headline">Postkort</h1>
    <div class="row d-flex">
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
    <div class="row d-flex">
        <div class="col-md-3 text-center">
            <div class="pricing-card">
                <div class="pricing-details">
                    <div class="pricing-header headline">50 stk. postkort</div>
                    <div class="pricing-info">122,- for 1-sidet print</div>
                    <div class="pricing-info">167,- for 2-sidet print</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="pricing-card">
                <div class="pricing-details">
                    <div class="pricing-header headline">100 stk. postkort</div>
                    <div class="pricing-info">197,- for 1-sidet print</div>
                    <div class="pricing-info">293,- for 2-sidet print</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="pricing-card">
                <div class="pricing-details">
                    <div class="pricing-header headline">200 stk. postkort</div>
                    <div class="pricing-info">360,- for 1-sidet print</div>
                    <div class="pricing-info">532,- for 2-sidet print</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="pricing-card">
                <div class="pricing-details">
                    <div class="pricing-header headline">400 stk. postkort</div>
                    <div class="pricing-info">604,- for 1-sidet print</div>
                    <div class="pricing-info">844,- for 2-sidet print</div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>