<?php get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <div class="Hero__Container" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_the_post_thumbnail_url(); ?> '); background-attachment: fixed;  background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="Hero__Inner Container">
                <h1 class="Hero__Header"></h1>
                <h3 class="Hero__SubHeader"><?php the_title(); ?></h3>
                <h3 class="Hero__Paragraph">by <?php the_author(); ?> | <?php echo get_the_date( 'm-d-Y' ); ?> |  <?php
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[0]->name );
                    }
                    ?></h3>
            </div>
        </div>
        <section class="Row__Container Row__Container--Light Row__Container--Spacer">
            <div class="Row__Inner">
            <?php the_content(); ?>
            </div>
        </section>
  
        </main><!-- .site-main -->
    </div><!-- .content-area -->
<?php get_footer(); ?>


