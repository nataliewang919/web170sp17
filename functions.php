<?php

/*
Theme Name: Han Wang's WordPress Demo
Author: Han Wang of Web170 Class
Author URI: http://han0919.com/web170/wordpress/
Description: This is my demo theme for the Web170 WordPress class.
Version: 1.0
*/

//Register Nav Menus
register_nav_menus(array('main-menu'=>__('Main Menu')));
//

//Add Support for post thumbnails & featured images
add_theme_support('post-thumbnails');
//

//Register the sidebar
register_sidebar(array('before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>'));

// Excerpt for Pages
add_post_type_support('page', 'excerpt');
//

//Han's title tag
function get_hans_title_tag(){
   
    global $post; //important
    
    if(is_front_page() || is_home())
    {//front or blog page
    bloginfo('description');
    }
    
    elseif (is_page() || is_single())
    {//page or posting
      echo get_the_title($post->ID);  
    }
    
    else
    {//404,search,etc
        bloginfo('description');//tagline
    }
    
    if($post->post_parent)
    {
        
    echo ' | ';
    echo 'get_the_title($post->post_parent)';
        
    }
    
    echo ' | ';
    bloginfo('name');
    echo ' | ';
    echo 'Beijing, China';
}
?>