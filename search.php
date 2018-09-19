 <?php

get_header(); ?>


<?php
    $s=get_search_query();
    $args = array('s' =>$s );
    $the_query = new WP_Query( $args );
?>

<form role="search" method="get" id="searchform" class="search-form" action="<?php echo home_url('/'); ?>">
    <div class="search-input-group">
        <input type="text" name="s" placeholder="Search" value="<?php echo get_query_var('s'); ?>" class="form-control" />
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit">Search</button>
        </span>
    </div>
</form>

<?php
    if ( $the_query->have_posts() ) {
        _e("<h2 class='search-page-title'>Search Results for : <span>".get_query_var('s')."</span></h2>");
        $count =  $the_query->post_count;
?>
    <div class="resultsCount">
        <div> <?php echo $count; ?> results </div>
    </div>
<?php 
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
?>
<div>
    <div class="search-results-link">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
    <div>
        <div class="search-page-results">
            <span class="st"><?php the_excerpt(); ?></span>
        </div>
    </div>
</div>
<?php
        }
    }else{
?>
<h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
<div class="alert alert-info">
  <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
</div>
<?php } ?>

<?php get_footer(); ?>