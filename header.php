<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="container header-container">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_griyakaruna.webp" alt="Griya Karuna Logo" style="height: 48px; width: auto;" />
		</a>

		<nav class="main-navigation">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class'     => 'nav-menu',
						'container'      => false,
					)
				);
			} else {
				?>
				<ul>
					<li class="<?php echo is_front_page() ? 'current-menu-item' : ''; ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a></li>
					<li class="<?php echo is_page( 'tentang-kami' ) ? 'current-menu-item' : ''; ?>"><a href="<?php echo esc_url( home_url( '/tentang-kami/' ) ); ?>">Tentang Kami</a></li>
					<li class="<?php echo is_page( 'program' ) ? 'current-menu-item' : ''; ?>"><a href="<?php echo esc_url( home_url( '/program/' ) ); ?>">Program</a></li>
					<li class="<?php echo is_page( 'publikasi' ) ? 'current-menu-item' : ''; ?>"><a href="<?php echo esc_url( home_url( '/publikasi/' ) ); ?>">Publikasi</a></li>
					<li class="<?php echo is_page( 'hubungi-kami' ) ? 'current-menu-item' : ''; ?>"><a href="<?php echo esc_url( home_url( '/hubungi-kami/' ) ); ?>">Hubungi Kami</a></li>
				</ul>
				<?php
			}
			?>
		</nav>

		<button class="mobile-nav-toggle" id="mobile-nav-toggle" aria-label="Open Navigation Menu">
			<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
			</svg>
		</button>
	</div>
</header>

<!-- Mobile Navigation Drawer -->
<div class="mobile-drawer-overlay" id="mobile-drawer-overlay"></div>
<aside class="mobile-nav-drawer" id="mobile-nav-drawer">
	<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px;">
		<span class="logo-title" style="font-size: 1.2rem;">Menu Navigation</span>
		<button id="mobile-nav-close" style="background: none; border: none; font-size: 1.5rem; cursor: pointer; color: var(--color-primary);">&times;</button>
	</div>
	<ul style="list-style: none; display: flex; flex-direction: column; gap: 20px; font-size: 1.1rem; font-weight: 600;">
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a></li>
		<li><a href="<?php echo esc_url( home_url( '/tentang-kami/' ) ); ?>">Tentang Kami</a></li>
		<li><a href="<?php echo esc_url( home_url( '/program/' ) ); ?>">Program</a></li>
		<li><a href="<?php echo esc_url( home_url( '/publikasi/' ) ); ?>">Publikasi</a></li>
		<li><a href="<?php echo esc_url( home_url( '/hubungi-kami/' ) ); ?>">Hubungi Kami</a></li>
	</ul>
</aside>
