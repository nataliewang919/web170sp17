<!-- Begin Sidebar--> 
<aside class="sidenav">
    <div id="sidebar">
        <h2><?php  
    
    if(is_page()){
    echo get_the_title($post->post_parent); 
    }
    else{
        echo 'Blog';
    }
            ?></h2>
        <ul class="sub-nav">
        <?php 
            
            if(is_page()){
            
        if($post->post_parent){
        
        wp_list_pages(array('child_of'=>$post->post_parent,'title_li' =>'',));
                
        }else{
            
           wp_list_pages(array('child_of'=>$post->ID,'title_li' => '',)); 
        }
        
            }
            
        else{
            if(!is_404()){
            wp_list_categories(array('title_li'=>'',));
                 }     
            }
            ?> 
            </ul>
    </div>
</aside>    
<!--end side bar-->