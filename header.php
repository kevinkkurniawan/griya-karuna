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
			<svg width="44" height="44" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<circle cx="24" cy="24" r="22" fill="#4E3F6B" />
				<path d="M24 14C21.5 14 19.5 16 19.5 18.5C19.5 23 24 27 24 27C24 27 28.5 23 28.5 18.5C28.5 16 26.5 14 24 14Z" fill="#A2C886"/>
				<circle cx="17" cy="30" r="3" fill="#FFFFFF"/>
				<circle cx="24" cy="32" r="3.5" fill="#A2C886"/>
				<circle cx="31" cy="30" r="3" fill="#FFFFFF"/>
			</svg>
			<div class="logo-text">
				<span class="logo-title">Griya Karuna</span>
				<span class="logo-subtitle">Rumah Singgah Pasien Anak</span>
			</div>
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
