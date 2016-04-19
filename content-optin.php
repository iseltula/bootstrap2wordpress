<?php

/*CUSTOM FIELDS*/
$optin_text = get_post_meta(8, 'optin_text', true );
$optin_button_text = get_post_meta(8, 'optin_button_text', true );

?>


<!-- OPT IN SECTION -->
    <section id="optin">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p class="lead"><?php echo $optin_text ?></p>
                </div>
                <!--col-->
                <div class="col-sm-4">
                    <a href="" class="btn btn-lg btn-success btn-block" data-toggle="modal" data-target=#myModal><?php echo $optin_button_text ?></a>
                </div>
            </div>
        </div>

    </section>
    <!-- opt section-->