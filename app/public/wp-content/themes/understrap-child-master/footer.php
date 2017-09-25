<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="main-footer" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">
      <div class="row">
        <div class="col text-center">
          Made with <i class="fa fa-heart" aria-hidden="true"></i>
        </div>
      </div>

      <div class="row">
        <div class="col text-center">
          <i class="fa fa-copyright" aria-hidden="true"></i> 2017 Thacher
        </div>
      </div>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
