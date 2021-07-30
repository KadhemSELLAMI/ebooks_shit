<?php
    include_once "header.php";
?>
<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Nous contacter</h2>
            <span class="underline center"></span>
            <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
        </div>
    </div>
</section>
<!-- End: Page Banner -->

<!-- Start: Contact Us Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="contact-main">
                <div class="contact-us">
                    <div class="container">
                        <div class="contact-location">
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            <div class="contact-area">
                                <div class="container">
                                    <style type="text/css">
                                        #flipbook{
                                            width: 300px;
                                            height: 500px;
                                            margin: 5% auto;
                                            background-color: rgb(212, 238, 253); 
                                            border-radius: 10px;
                                        }  
                                    </style>
                                    <div id="flipbook">
                                        <div class="hard"> Turn.js </div>
                                        <div class="hard"></div>
                                        <div> Page 1 </div>
                                        <div> Page 2 </div>
                                        <div> Page 3 </div>
                                        <div> Page 4 </div>
                                        <div class="hard"></div>
                                        <div class="hard"></div>
                                    </div>
                                    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                                    <script src="turn.js"></script>
                                    <script type="text/javascript">
                                        $("#flipbook").turn({
                                            width: 400,
                                            height: 300,
                                            autoCenter: true
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- End: Contact Us Section -->

<?php
    include_once "footer.php";
?>