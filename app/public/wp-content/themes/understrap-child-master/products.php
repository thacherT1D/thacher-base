<?php /* Template Name: products-page*/

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<header class="main-header">
  <div class="header-content">
    <div class="header-content-inner">
      <div>
        <h1>Products</h1>
      </div>
    </div>
  </div>
</header>

<div class="container-fluid">
  <section class="introduction">
    <div class="row">
      <div class="col">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>

    <div class="row btn-solo">
      <div class="col">
        <a href="#" class="btn btn-primary float-right btn-xl xs-btn-to-block">Do things!</a>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
