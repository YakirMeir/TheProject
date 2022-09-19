<?php
get_header();
?>
<?php //echo do_shortcode( '[[ajax_load_more]]' ); ?>
<!-- Start Blog Area -->
<section class="blog-area pt-100 pb-100">
            <div class="container">

               

                <div class="section-title">
                    <span>Latest Courses</span>
                    <h2>A broad selection of courses</h2>
                    <p>Choose from 204,000 online video courses with new additions published every month</p>
                </div>
              

               


                
                <div class="row" style="direction: rtl;">

                    <div class="the-filter-title">סינון לפי תגיות:</div>
                    <div class="all-the-filter">
                        <?php if($_GET['tag_name']){ ?>
                            <div class="single-filter"><a href="/">לכל הקורסים</a></div>
                        <?php }else{ ?>
                            <div class="single-filter active"><a href="/">לכל הקורסים</a></div>
                        <?php } ?>
                        
                        <?php $theTag = get_tags(); ?>
                        <?php for($x = 0; $x < count($theTag); $x++){ ?>
                            <?php if($_GET['tag_name'] == $theTag[$x]->term_id){ ?>
                                <div class="single-filter active"><a href="/?tag_name=<?php echo $theTag[$x]->term_id; ?>"><?php echo $theTag[$x]->name; ?></a></div>
                            <?php }else{ ?>
                                <div class="single-filter"><a href="/?tag_name=<?php echo $theTag[$x]->term_id; ?>"><?php echo $theTag[$x]->name; ?></a></div>
                            <?php } ?>
                        <?php } ?>

                    </div>

                    <?php
                        $theCountPostNew = 0;
                        $terms = get_terms('post_tag',array('hide_empty'=>false));
                        foreach($terms as $t) {
                            if($_GET['tag_name']){
                                if($_GET['tag_name'] == $t->term_id){
                                    $theCountPostNew = $t->count;
                                }
                            }
                        }

                        if(!$_GET['tag_name']){
                            $theCountPostNew =  $wp_query->found_posts;
                        }
                    ?>

                    <div class="all-the-post-count">נמצאו <?php echo $theCountPostNew; ?> קורסים</div>


                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                    ?>

                        <?php if($_GET['tag_name']){ ?>

                            <?php $theTag = get_the_tags(get_the_ID()); ?>
                            <?php for($z = 0; $z < count($theTag); $z++){ ?>

                                <?php if($_GET['tag_name'] == $theTag[$z]->term_id){ ?>
                                    
                                    <?php $theTag = get_the_tags(); ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-item">
                                            <div class="image">
                                                <a href="<?php echo get_the_permalink(); ?>">
                                                    <img src="<?php echo get_field('image')['url']; ?>" alt="image">
                                                </a>
                                                <div class="btn">
                                                    <a href="<?php echo get_the_permalink(); ?>"><?php echo get_field('name'); ?></a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <ul class="post-meta">
                                                    <li>
                                                        <i class='bx bxs-calendar'></i>
                                                        <?php echo get_field('start_date'); ?>
                                                    </li>
                                                    -
                                                    <li>
                                                        <i class='bx bxs-calendar'></i>
                                                        <?php echo get_field('end_date'); ?>
                                                    </li>
                                                    
                                                </ul>

                                                <h3>
                                                    <a href="<?php echo get_the_permalink(); ?>">
                                                    <?php echo get_field('content'); ?>
                                                    </a>
                                                </h3>
                                                <a href="<?php echo get_the_permalink(); ?>" class="read-more">
                                                    קרא עוד
                                                    <i class='bx bx-right-arrow-alt' style="transform: rotate(180deg);"></i>
                                                </a>
                                                <p style="font-weight: 700; text-decoration: underline;margin:10px 0 0 0;">תגיות</p>
                                                <div style="display: flex; flex-wrap: wrap;">
                                                    <?php $theTag = get_the_tags(); ?>
                                                    <?php for($a = 0; $a < count($theTag); $a++){ ?>
                                                        <?php if($a == 0){ ?>
                                                            <p><?php echo $theTag[$a]->name; ?></p>
                                                        <?php }else{ ?>
                                                            <p><span style="margin:0 5px;">|</span><?php echo $theTag[$a]->name; ?></p>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>



                            <?php } ?>

                        <?php }else{ ?>
                            <?php $theTag = get_the_tags(); ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="blog-item">
                                    <div class="image">
                                        <a href="<?php echo get_the_permalink(); ?>">
                                            <img src="<?php echo get_field('image')['url']; ?>" alt="image">
                                        </a>
                                        <div class="btn">
                                            <a href="<?php echo get_the_permalink(); ?>"><?php echo get_field('name'); ?></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <ul class="post-meta">
                                            <li>
                                                <i class='bx bxs-calendar'></i>
                                                <?php echo get_field('start_date'); ?>
                                            </li>
                                            -
                                            <li>
                                                <i class='bx bxs-calendar'></i>
                                                <?php echo get_field('end_date'); ?>
                                            </li>
                                            
                                        </ul>

                                        <h3>
                                            <a href="<?php echo get_the_permalink(); ?>">
                                            <?php echo get_field('content'); ?>
                                            </a>
                                        </h3>
                                        <a href="<?php echo get_the_permalink(); ?>" class="read-more">
                                            קרא עוד
                                            <i class='bx bx-right-arrow-alt' style="transform: rotate(180deg);"></i>
                                        </a>
                                        <p style="font-weight: 700; text-decoration: underline;margin:10px 0 0 0;">תגיות</p>
                                        <div style="display: flex; flex-wrap: wrap;">
                                            <?php $theTag = get_the_tags(); ?>
                                            <?php for($a = 0; $a < count($theTag); $a++){ ?>
                                                <?php if($a == 0){ ?>
                                                    <p><?php echo $theTag[$a]->name; ?></p>
                                                <?php }else{ ?>
                                                    <p><span style="margin:0 5px;">|</span><?php echo $theTag[$a]->name; ?></p>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                    
                    <?php
                        endwhile;
                    endif;
                    ?>
                    
                    <?php if($theCountPostNew > 10){ ?>
                        <div class="all-the-paginat-links"><?php echo paginate_links(); ?></div>
                    <?php } ?>
                    












                  
                </div>
            </div>
        </section>
        <!-- End Blog Area -->




<?php
get_footer();
?>




















































