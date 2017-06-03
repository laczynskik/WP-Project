<nav class="navbar navbar-default">
  <div class="container-fluid">
  	<div class="row">
  		<div class="container"> 
  		<!-- Brand and toggle get grouped for better mobile display -->
  			<div class="row">
  				<div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo get_home_url (); ?>">Bootcamp Wordpress</a>
    </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <?php wp_nav_menu( array('theme_location' => 'header_menu')); ?>
	</div><!-- /.navbar-collapse -->




  </div><!-- /.navbar-header -->
 </div>   
  	</div>  
  	</div> 
  </div><!-- /.container-fluid -->
</nav>


