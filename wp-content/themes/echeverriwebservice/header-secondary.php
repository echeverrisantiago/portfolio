<header id="masthead-secondary" class="site-header">
	<img class="menu-background" src="<?php echo get_template_directory_uri(); ?>/img/Elementos/Menu-inicio.png">
	 <div class="logo-cont">
	     <img src="<?php echo get_template_directory_uri() . '/img/logo-2.png'; ?>">
	 </div>

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->