<?php
/*
 * Bungalows
 * Template Name: Single Blog
 * Template Post Type: news
 */
?>
<?php get_header(); ?>
<!--    <h1 class="pagetitle">--><?php //echo $postlist_subtitle; ?><!--</h1>-->
    <div class="page-content" id="content">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- Posts loop -->
            <!-- Terug Knop -->
            <div class="single-title">
                <a href="<?php echo home_url() . $bungalow;?>"><div class="go-back"><i class="fas fa-chevron-circle-left"></i><span class="terug"><?php echo $back; ?></span></div></a>
            </div>




            <div class="row post-block" id="post-<?php the_ID(); ?>">
                <div class="col-6">

                    <!-- Thumbnail -->
                    <a href="<?php echo get_the_post_thumbnail_url() ?>"
                       class="swipebox " rel="post-gallery-<?php the_ID(); ?>">
                        <div class="single-post-thumbnail">
                            <?php echo the_post_thumbnail('small'); ?>
                        </div>
                    </a>
                    <?php echo do_shortcode( '[post_gallery]' ); ?>
                    <!-- Thumbnail End -->
                </div>
                <div class="col-6">
                    <!-- Title -->
                    <h2 class="blogtitle"><?php the_title(); ?></h2>
                    <!-- Subtitle -->
                    <p class="post-title">
                        <?php


                        //                        $low1 = date('Y-m-d', strtotime("05/01"));
                        //                        $low2 = date('Y-m-d', strtotime("06/30"));
                        //                        $low3 = date('Y-m-d', strtotime("09/01"));
                        //                        $low4 = date('Y-m-d', strtotime("10/15"));

                        //                        $mid1 = date('Y-m-d', strtotime("07/01"));
                        //                        $mid2 = date('Y-m-d', strtotime("08/31"));
                        //                        $mid3 = date('Y-m-d', strtotime("10/16"));
                        //                        $mid4 = date('Y-m-d', strtotime("12/15"));

                        //                        $high1 = date('Y-m-d', strtotime("12/16"));
                        //                        $high2 = date('Y-m-d', strtotime("12/31"));
                        //                        $high3 = date('Y-m-d', strtotime("01/01"));
                        //                        $high4 = date('Y-m-d', strtotime("04/30"));
                        //Dates
                        $date = date('Y-m-d');
                        $date=date('Y-m-d', strtotime($date));

                        $low1 = date('Y-m-d', strtotime("04/15"));
                        $low2 = date('Y-m-d', strtotime("12/15"));



                        $high1 = date('Y-m-d', strtotime("12/16"));
                        $high2 = date('Y-m-d', strtotime("12/31"));
                        $high3 = date('Y-m-d', strtotime("01/01"));
                        $high4 = date('Y-m-d', strtotime("04/14"));


                        // Compare the dates
                        if (($date >= $low1) && ($date <= $low2)){
                            echo $lowseason;

//                        }elseif (($date >= $low3) && ($date <= $low4)){
//                            echo $lowseason;

//                        }elseif (($date >= $mid1) && ($date <= $mid2)){
//                            echo $midseason;
//
//                        }elseif (($date >= $mid3) && ($date <= $mid4)){
//                            echo $midseason;

                        }elseif (($date >= $high1) && ($date <= $high2)){
                            echo $highseason;
                            
                        }elseif (($date >= $high3) && ($date <= $high4)){
                            echo $highseason;
                            
                        }else{
                            echo "";
                        }
                        ?>
                    </p>
                    <p class="single-post-subtitle">
                        <?php
                        if( get_field('personnes') ):
                            the_field('personnes');
                            echo '<br>';
                        endif;
                        ?>
                        <?php
                        if( get_field('nuits') ):
                            the_field('nuits');
                            echo '<br>';
                        endif;
                        ?><br>
                    </p>

<!--                    Price Table-->

                    <?php
                    if( get_field('basse_saison') ):
                        ?>
                    <table class="price-table" id="price-table-desktop">
                        <tbody>
                        <tr style="font-weight: 700;">
                            <td></td>
                            <td><?php echo $lowseasonhead;?></td>
<!--                            <td>--><?php //echo $midseasonhead;?><!--</td>-->
                            <td> <?php echo $highseasonhead;?></td>




                        </tr>
                        <tr>
                            <td style="font-weight: 700;"><?php echo $fournights;?></td>
                            <td>€<?php the_field('basse_saison');?></td>
<!--                            <td>€--><?php //the_field('moyenne_saison');?><!--</td>-->
                            <td>€<?php the_field('haute_saison');?></td>
                        </tr>
                        <tr>
                            <td style="font-weight: 700;"><?php echo $sevennights;?></td>
                            <td>€<?php the_field('basse_saison7');?></td>
<!--                            <td>€--><?php //the_field('moyenne_saison7');?><!--</td>-->
                            <td>€<?php the_field('haute_saison7');?></td>
                        </tr>
                        </tbody>
                    </table>
                    <?php endif;?>
                    <!-- Content -->

                </div>
                <div class="single-content"><?php the_content(); ?></div>

    <?php
    if( get_field('basse_saison') ):
        ?>
                <table class="price-table" id="price-table-mobile">
                    <tbody>
                    <tr style="font-weight: 700;">
                        <td></td>
                        <td><?php echo $lowseasonhead;?></td>
<!--                        <td>--><?php //echo $midseasonhead;?><!--</td>-->
                        <td> <?php echo $highseasonhead;?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: 700;"><?php echo $fournights;?></td>
                        <td>€<?php the_field('basse_saison');?></td>
<!--                        <td>€--><?php //the_field('moyenne_saison');?><!--</td>-->
                        <td>€<?php the_field('haute_saison');?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: 700;"><?php echo $sevennights;?></td>
                        <td>€<?php the_field('basse_saison7');?></td>
<!--                        <td>€--><?php //the_field('moyenne_saison7');?><!--</td>-->
                        <td>€<?php the_field('haute_saison7');?></td>
                    </tr>
                    </tbody>
                </table>
    <?php endif;?>
            </div>



        </div>


        <?php endwhile; ?>
        <?php endif; ?>
    </div>

<?php
$content = get_the_content();
if (strlen($content) < 240) {
    echo "<style>.page-content{padding-bottom:20vmax}</style>";
}
?>





<?php get_footer(); ?>