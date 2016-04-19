<?php
$featurette_section_title = get_field('featurette_section_title');
$video_url_link = get_field('video_url_link');
?>


<!-- VIDEO FEATURETTE -->
    <section id="featurette">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2><?php echo $featurette_section_title; ?></h2>
                    <iframe width="100%" height="315" src="<?php echo $video_url_link; ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!--featurette-->
                        
<?php wp_reset_query();?>