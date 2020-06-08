<?php
get_header();?>

<section classsearch-results>
    <div class="container">
        <div class="section-header">
            <h1>Search Results</h1>
        </div>
        <div class="search-results">
        <?php if(have_posts()){
            while(have_posts()){
                the_post(); ?>
            <div class="result-title">
                <?php the_title(); ?>
            </div>
            <div class="result-content">
                <?php the_content(); ?>
            </div>
            <?php
            }
        }
        ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>
