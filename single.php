<?php

//Activiteiten
if (in_category('39')) {include (TEMPLATEPATH . '/single/single-posts.php');}
    elseif (in_category('64')) {include (TEMPLATEPATH . '/single/single-posts.php');}
        elseif (in_category('62')) {include (TEMPLATEPATH . '/single/single-posts.php');}
//Bungalows
    elseif (in_category('3')) {include (TEMPLATEPATH . '/single/single-blog.php');}
        elseif (in_category('68')) {include (TEMPLATEPATH . '/single/single-blog.php');}
            elseif (in_category('66')) {include (TEMPLATEPATH . '/single/single-blog.php');}
else { include (TEMPLATEPATH . '/page.php');
}
?>