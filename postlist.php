<?php
/**
 * Template Name: Post List
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>
    <div class="container" id="content">






        <?php
        //Search

        $clean_code = preg_replace('/[^a-zA-Z0-9 ]/', '', $_REQUEST['search']);

        $nospace = rtrim($clean_code);

        $searchwords = preg_replace('/\s+/', '+', $nospace);


        //        if(isset($_REQUEST['search']) && $a = 1){
        //        echo 'Zoekresultaten voor: "' . $nospace . '"<br>';
        //        }





        //Post Per Page Loop
        if( isset($_REQUEST['posts_per_page'] )) {
            $posts_per_page = $_REQUEST['posts_per_page'];
        }
        elseif( isset($_REQUEST['search'])){
            $posts_per_page = -1; // Search Results
        }
        else {
            $posts_per_page = 8; // default value
        }

        //Beroep Filter Loop
        if( isset($_REQUEST['tag_filter'] )) {
            $tag_filter = $_REQUEST['tag_filter'];
        }
        elseif( isset($_REQUEST['search'])){
            $tag_filter = 0; // Search Results
        }
        else {
            $tag_filter = 0; // default value
        }


        ?>

        <!--Loop-->

        <?php

        // Define custom query parameters
        $custom_query_args = array(
            's' => $searchwords,
            'posts_per_page' => $posts_per_page,
            'tag' => $tag_filter,
            'cat' => 39

        );

        // Get current page and append to custom query parameters array
        $custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

        // Instantiate custom query
        $custom_query = new WP_Query( $custom_query_args );

        // Pagination fix
        $temp_query = $wp_query;
        $wp_query   = NULL;
        $wp_query   = $custom_query;

        // Output custom query loop
        if ( $custom_query->have_posts() ) :
            $totalPosts = $custom_query->found_posts; //Shows Total Posts
            if(!empty($_REQUEST['search']) && $totalPosts > 1){
                echo '<h2 id="results">' . $results_1 . $totalPosts . $results_2 . $nospace . '".</h2>';
            }
            elseif(!empty($_REQUEST['search']) && $totalPosts == 1){
                echo '<h2 id="results">' . $result_1 . $totalPosts . $result_2 . $nospace . '".</h2>';
            }

            while ( $custom_query->have_posts() ) :
                $custom_query->the_post();?>
                <div class="row post-block" id="post-<?php the_ID(); ?>">
                    <div class="col-5">
                        <!-- Thumbnail -->
                        <a href="<?php the_permalink(); ?>#content"><div class="postlist-thumbnail"><?php the_post_thumbnail('small'); ?></div></a>
                        <!-- Thumbnail End -->
                    </div>
                    <div class="col-7 post-description">
                        <!-- Title -->
                        <a href="<?php the_permalink(); ?>#content"><h3 class="post-title"><?php the_title(); ?></h3></a>
                        <!-- Subtitle -->
                        <!-- Content -->
                        <a href="<?php the_permalink(); ?>#content">
                            <p class="single-post-subtitle">
                                <?php
                                if( get_field('ville') ):
                                    the_field('ville');
                                    echo '<br>';
                                endif;
                                ?>
                                <?php
                                if( get_field('kilometre') ):
                                    the_field('kilometre');
                                    echo '<br>';
                                endif;
                                ?><br>
                            </p>
                        </a>
                        <a href="<?php the_permalink(); ?>#content">
                            <p class="post-content" id="post-list-content"><?php echo wp_trim_words( get_the_content(), 40, '...' );?></p>
                        </a>
                        <a href="<?php the_permalink(); ?>#content" class="single-button"><?php echo $view_post_list; ?></a>
                    </div>

                </div>
            <?php
            endwhile;
            $totalPosts = $custom_query->found_posts; //Shows Total Posts
        elseif (!empty($_REQUEST['search']) && $totalPosts == 0):
            echo '<h2 id="results">' . $noresultsfor . ' "' . $nospace . '"</h2>
                <a onclick="document.getElementById(\'search_posts\').value = \'\'"><div id="retry_search"><i class="fas fa-undo-alt"></i></div></a>';
        else:
            echo '<h2 id="results">' . $noresults . '</h2><style>@media screen and (max-width: 800px){.container{padding-bottom:20vmax}}</style>';


        endif;
        // Reset postdata
        wp_reset_postdata();

        // Custom query loop pagination
        echo '<nav><div id="page-nav">';
        previous_posts_link( '<i class="fas fa-chevron-circle-left" id="prev-button"></i>' );
        if ($posts_per_page > 0 && $totalPosts > $posts_per_page){
            echo '<h4 id="page-number">' . $custom_query_args['paged'] . '</h4>';
        }
        next_posts_link( '<i class="fas fa-chevron-circle-right" id="next-button"></i>', $custom_query->max_num_pages );
        echo '</div></nav>';

        // Reset main query object
        $wp_query = NULL;
        $wp_query = $temp_query;






        //Query Vars
        //            $showedPosts = $custom_query->post_count; //Shows shown posts on a page
        //            $_GET['shown_post_nr'] = $showedPosts;
        //                echo $_GET['shown_post_nr'] . '<br>';
        //
        //            $pageNumber = $custom_query_args['paged'];
        //            $postNumber = $pageNumber * $showedPosts;
        //            echo 'Post Count' . $showedPosts . '<br>';
        //            echo 'Found Posts' . $countPosts . '<br>';
        //
        //            echo $postNumber . ' van de ' . $countPosts . ' vacatures getoond';

        //if found posts < post per page ^-^
        //pagenumber*showedposts

        ?>
    </div>


<?php get_footer(); ?>