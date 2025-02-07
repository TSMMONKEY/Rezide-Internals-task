<?php 
get_header(); 

if (have_posts()) : 
    while (have_posts()) : the_post(); 
        // Your post content will go here, e.g., post title, content, etc.
        the_title('<h1>', '</h1>'); // This displays the post title
        the_content(); // This displays the content of the post
    endwhile; 
else : 
    echo '<p>No content found</p>'; // Display message if no posts are found
endif;

get_footer(); 
?>
