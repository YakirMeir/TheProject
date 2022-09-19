<?php // Template Name: template 2 ?>

<?php
get_header();
?>


<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
  
       

        <!-- Start Single Blog Area -->
        <section class="single-blog-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12" style="direction: rtl;">
                        <h1 class="inside-the-post-title"><?php echo get_the_title(); ?></h1>
                        <?php echo get_the_content(); ?>
                    </div>

                    <div class="col-lg-4 col-md-12" style="direction: rtl;">
                        <aside class="widget-area" id="secondary">
                           

                            

                            <section class="widget widget_categories">
                                <h3 class="widget-title">Tags</h3>
                                <?php 
                                $tags = get_tags(array(
                                'hide_empty' => false
                                ));
                                echo '<ul>';
                                foreach ($tags as $tag) {
                                echo '<li><a href="/?tag_name=' . $tag->term_id . '">' . $tag->name . '</li>';
                                }
                                echo '</ul>';
                                ?>
                            </section>

                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Single Blog Area -->
<?php
    endwhile;
endif;
?>




<?php
get_footer();


