<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StagFramework
 * @subpackage Meth
 */

global $wp_query;

$page_id = '';

if( $wp_query->is_posts_page ) {
	$page_id = get_option('page_for_posts');
} else {
	$page_id = get_the_ID();
}

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main"<?php stag_markup_helper( array( 'context' => 'content' ) ); ?>>

		<header class="entry-header page-header">
			<div class="inside">
				<h1 class="entry-title"<?php stag_markup_helper( array( 'context' => 'title' ) ); ?>><?php echo get_the_title($page_id); ?></h1>
			</div>
		</header>

		<?php if( have_posts() ): ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php stag_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<div>
<div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-7 col-lg-5 col-md-offset-7">
                <div class="search pull-right">
                    <form>
                        <a href="#" class="btn">Register Today</a>
                        <span><input type="text" class="search-bar rounded" placeholder=" Search..."></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Hero
    ================================================== -->
    <div class="hero">

        <div class="container hero-text">

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img alt="logo" src="images/logo-alt.jpg" />
                </div>
                <div class="col-lg-9 col-lg-9 col-sm-9">
                    <h1>Welcome to GEM</h1>
                    <p class="lead"><a class="youtube" href="https://www.youtube.com/watch?v=BJQ67uPfyQ4">Watch our video to learn more</a>
                    </p>
                </div>

            </div>
            <i class="middle-circle fa fa-globe"></i>
        </div>
    </div>

    <!-- Start Main Content
    ================================================== -->
    <div class="main">
        <div class="home-page-widgets">
            <div class="container marketing">
                <div class="row">
                    <div class="col-lg-3 col-md-3 widget">
                        <a href="#"><img class="img-circle slickHoverPlusWhite" src="images/callout-1.jpg">
                            <h2>GEM Community</h2>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    </div>
                    <!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-3 widget">
                        <a href="#"><img class="img-circle slickHoverPlusWhite1" src="images/callout-2.jpg">
                            <h2>Gift Hub</h2>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    </div>
                    <!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-3 widget">
                        <a href="#"><img class="img-circle slickHoverPlusWhite2" src="images/callout-3.jpg">
                            <h2>Peace Projects</h2>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    </div>
                    <!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-3 widget">
                        <a href="#"><img class="img-circle slickHoverPlusWhite3" src="images/callout-4.jpg">
                            <h2>Play it Forward</h2>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    </div>
                    <!-- /.col-lg-3 -->
                </div>
                <!-- /.row -->
                <!--/.marketing -->
            </div>
            <!-- /.home-page-widgets -->
        </div>
        <!--/.main -->
        <div class="container" id="feed">
            <div class="row">
                <div class="block peace-project col-md-7">
                    <div class="featured"><a href="#">Featured</a></div>
                    <div class="project-title"><a class="title" href="#"><h3>Example Project Title</h3></a>
                    </div>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident...</p>
                    <p class="meta">Tags: <span class="highlight"><a href="#">Featured</a>, <a href="#">Peace Project</a>, <a href="#">Education</a></span>
                    </p>
                    <a href="#"><img src="images/sample-project.jpg"></a>
                </div>
                <div class="col-md-1"></div>

                <div class="announcements col-md-4">
                    <h2>Announcements</h2>
                    <div class="article">
                    <h4><a href="#">Sample Article Title</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos...</p>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->
        <!-- /.row -->
    </div>
    <!-- Start Footer
    ================================================== -->
    <div class="container footer">
        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a>
            </p>
            <p>&copy; 2015 GEM Global Network. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
            </p>
        </footer>
    </div>
    </div>

<?php get_footer(); ?>
