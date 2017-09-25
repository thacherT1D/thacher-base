<?php /* Template Name: main-page*/

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<header class="main-header">
  <div class="header-content">
    <div class="header-content-inner">
      <div>
        <h1>Welcome</h1>
        <h1>to</h1>
        <h1>the rest of your life</h1>
      </div>
    </div>
  </div>
</header>

<div class="">
  <section class="">
    <div class="row">
      <div class="col text-justify">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>

    <div class="row btn-solo">
      <div class="col">
        <a href="#" class="btn btn-primary float-right btn-xl xs-btn-to-block">Do things!</a>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="row">
      <div class="col-md-6 col-xs-12">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      <div class="col-md-6 col-xs-12">
        <form class="contact-form">
          <div class="form-group">
            <strong><label>Name</label></strong>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Alex Smith">
            </div>
          </div>
          <div class="form-group">
            <strong><label>Email address</label></strong>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
              <input type="email" class="form-control" placeholder="alex.smith@gmail.com">
            </div>
            <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
          </div>
          <button type="submit" class="btn btn-primary float-right xs-btn-to-block">Submit</button>
        </form>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
