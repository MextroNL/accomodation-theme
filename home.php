<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>

    <div class="container">
        <div class="block1">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <div class="block1content">
                    <?php the_content();?>
                </div>
                <a href="<?php the_permalink(); echo $about_link; ?>" class="perma-button"><?php echo $about; ?></a>
            <?php endwhile;
            else:?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>
    </div>

        <div class="block2">
            <div class="row footer-widget-wrapper">
                <?php
                if(is_active_sidebar('index-widget-1')){?>
                    <div class="col-sm"><?php dynamic_sidebar('index-widget-1');?></div><?php
                }

                if(is_active_sidebar('index-widget-2')){?>
                    <div class="col-sm"><?php dynamic_sidebar('index-widget-2');?></div><?php
                }

                if(is_active_sidebar('index-widget-3')){?>
                    <div class="col-sm"><?php dynamic_sidebar('index-widget-3');?></div><?php
                }

                 if(is_active_sidebar('index-widget-4')){?>
                    <div class="col-sm"><?php dynamic_sidebar('index-widget-4');?></div><?php
                }

                if(is_active_sidebar('index-widget-5')){?>
                    <div class="col-sm"><?php dynamic_sidebar('index-widget-5');?></div><?php
                }


                ?>
            </div>
        </div>
    <div class="container">







        <!--Index Post Block-->
        <div class="block3">

            <a href="<?php the_permalink(); echo $collection; ?>"><h2 class="cat-name"><?php echo $category_name;?> </h2></a>

            <?php

            if (strpos($url,'/en/') !== false) {
                $category_id = 'english cat';
            }else{
                $category_id = '3';
            }

            $catquery = new WP_Query( 'cat='. $category_id . '&posts_per_page=3' );

            if ( $catquery->have_posts() ) :
                while($catquery->have_posts()) : $catquery->the_post();
                    ?>

                    <?php if ($catquery->current_post % 2 == 0): ?>
                        <!--                        Post Content Start-->

                        <div class="row post-block" id="post-<?php the_ID(); ?>">
                            <a href="<?php the_permalink(); ?>#content">
                            <div class="col-6">
                                <!--                                 Title-->
                                 <h4 class="post-title"><?php the_title(); ?></h4>

                                    <p class="single-post-subtitle">
                                        <?php
                                        if( get_field('personnes') ):
                                            the_field('personnes');
                                        endif;
                                        ?><br>
                                        <?php
                                        if( get_field('nuits') ):
                                            the_field('nuits');
                                            echo '<br>';
                                        endif;
                                        ?>
                                    </p>
                                    <p class="post-content"><?php echo wp_trim_words( get_the_content(), 25, '...' );?></p>
                                </a>
                                <a href="<?php the_permalink(); ?>#content" class="single-button"><?php echo $view_post_list; ?></a>
                            </div>
                            <div class="col-6">
                                <!--                                 Thumbnail-->
                                <a href="<?php the_permalink(); ?>#content"><div class="post-thumbnail"><?php the_post_thumbnail('medium_large'); ?></div></a>
                                <!--                                 Thumbnail End-->
                            </div>
                        </div>
                        <!--                        Post Content End-->
                    <?php else: ?>





                        <div class="row post-block" id="post-<?php the_ID(); ?>">
                            <div class="col-6">
                                <!--                                     Thumbnail-->
                                <a href="<?php the_permalink(); ?>#content"><div class="post-thumbnail"><?php the_post_thumbnail('medium_large'); ?></div></a>
                                <!--                                     Thumbnail End-->
                            </div>
                            <a href="<?php the_permalink(); ?>#content">
                            <div class="col-6">
                                <!--                                     Title-->
                               <h4 class="post-title"><?php the_title(); ?></h4>

                                    <p class="single-post-subtitle">
                                        <?php
                                        if( get_field('personnes') ):
                                            the_field('personnes');
                                        endif;
                                        ?><br>
                                        <?php
                                        if( get_field('nuits') ):
                                            the_field('nuits');
                                            echo '<br>';
                                        endif;
                                        ?>
                                    </p>
                                    <p class="post-content"><?php echo wp_trim_words( get_the_content(), 25, '...' );?></p>
                                </a>
                                <a href="<?php the_permalink(); ?>#content" class="single-button"><?php echo $view_post_list; ?></a>
                            </div>
                        </div>
                        <!--                            Post Content End-->

                    <?php

                    endif;?>
                <?php
                endwhile;?>

            <?php
            else:
                echo '<h4 id="results">' . $nocurrentresults . '</h4>';
            endif; ?>
            <?php wp_reset_query(); // reset the query ?>
        </div>
        <!--Container End-->





    </div>




<?php get_footer(); ?>