<?php
/**
 * Template Name: Publikasi
 *
 * @package GriyaKaruna
 */

get_header();
?>

<!-- Breadcrumb -->
<div class="container" style="padding-top: 24px;">
	<nav style="font-size: 0.9rem; color: var(--color-text-muted);">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a> &rsaquo; <span>Publikasi</span>
	</nav>
</div>

<!-- Hero Section -->
<section style="padding: 40px 0 60px;">
	<div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center;">
		<div>
			<h1 style="font-size: 2.8rem; font-weight: 700; color: var(--color-primary); line-height: 1.25; margin-bottom: 20px;">
				Cerita dari<br>Rumah Singgah
			</h1>
			<p style="font-size: 1.1rem; color: var(--color-text-muted); line-height: 1.7; max-width: 480px;">
				Membagikan lebih dari sekadar kabar. Temukan cerita, pembaruan kegiatan, dan artikel edukasi untuk mengenal Griya Karuna lebih dekat.
			</p>
		</div>
		<div>
			<img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=1000&auto=format&fit=crop" alt="Cerita dari Rumah Singgah" style="border-radius: var(--border-radius-card); width: 100%; height: 420px; object-fit: cover; box-shadow: var(--shadow-md);" />
		</div>
	</div>
</section>

<!-- Featured Banner Carousel -->
<section style="position: relative; background: linear-gradient(180deg, rgba(30, 24, 45, 0.4) 0%, rgba(30, 24, 45, 0.8) 100%), url('https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=1600&auto=format&fit=crop') center/cover; padding: 100px 0; color: #FFF; text-align: center;">
	<div class="container" style="max-width: 800px; position: relative;">
		<span style="font-size: 1rem; color: var(--color-accent); font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">20 Juli 2026</span>
		<h2 style="font-size: 2.5rem; font-weight: 700; color: #FFF; margin: 12px 0 24px;">Menuangkan Rasa Lewat Karya</h2>
		<a href="<?php echo esc_url( home_url( '/artikel' ) ); ?>" class="btn-primary-pill">Baca Selengkapnya</a>
	</div>
</section>

<!-- Category Filter Tabs & Article Grid -->
<section style="padding: 60px 0 80px; background-color: #FFFFFF;">
	<div class="container">
		<!-- Category Filter Tabs -->
		<div style="display: flex; gap: 32px; font-size: 1.1rem; font-weight: 600; margin-bottom: 40px; border-bottom: 1px solid var(--color-border); padding-bottom: 16px;">
			<a href="#" style="color: var(--color-primary); border-bottom: 3px solid var(--color-primary); padding-bottom: 14px;">Semua</a>
			<a href="#" style="color: var(--color-text-muted);">Artikel (12)</a>
			<a href="#" style="color: var(--color-text-muted);">Edukasi (10)</a>
		</div>

		<!-- 3-Column Article Grid -->
		<div class="stories-grid">
			<!-- Article 1 -->
			<article class="story-card">
				<div class="story-image-wrap" style="height: 240px;">
					<img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=800&auto=format&fit=crop" alt="Article 1" />
				</div>
				<div class="story-card-body" style="padding: 24px;">
					<span style="font-size: 0.85rem; color: var(--color-text-muted); display: block; margin-bottom: 8px;">12 Juli 2026</span>
					<h3 style="font-size: 1.15rem; color: var(--color-primary); font-weight: 700; line-height: 1.4;">
						<a href="<?php echo esc_url( home_url( '/artikel' ) ); ?>">Lorem Ipsum Dolor Sit Amet Consectetur Adipiscing Elit</a>
					</h3>
				</div>
			</article>

			<!-- Article 2 -->
			<article class="story-card">
				<div class="story-image-wrap" style="height: 240px;">
					<img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=800&auto=format&fit=crop" alt="Article 2" />
				</div>
				<div class="story-card-body" style="padding: 24px;">
					<span style="font-size: 0.85rem; color: var(--color-text-muted); display: block; margin-bottom: 8px;">12 Juli 2026</span>
					<h3 style="font-size: 1.15rem; color: var(--color-primary); font-weight: 700; line-height: 1.4;">
						<a href="<?php echo esc_url( home_url( '/artikel' ) ); ?>">Lorem Ipsum Dolor Sit Amet</a>
					</h3>
				</div>
			</article>

			<!-- Article 3 -->
			<article class="story-card">
				<div class="story-image-wrap" style="height: 240px;">
					<img src="https://images.unsplash.com/photo-1536640712-4d4c36ff0e4e?q=80&w=800&auto=format&fit=crop" alt="Article 3" />
				</div>
				<div class="story-card-body" style="padding: 24px;">
					<span style="font-size: 0.85rem; color: var(--color-text-muted); display: block; margin-bottom: 8px;">12 Juli 2026</span>
					<h3 style="font-size: 1.15rem; color: var(--color-primary); font-weight: 700; line-height: 1.4;">
						<a href="<?php echo esc_url( home_url( '/artikel' ) ); ?>">Lorem Ipsum Dolor Sit Amet Consectetur Adipiscing Elit</a>
					</h3>
				</div>
			</article>

			<!-- Article 4 -->
			<article class="story-card">
				<div class="story-image-wrap" style="height: 240px;">
					<img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?q=80&w=800&auto=format&fit=crop" alt="Article 4" />
				</div>
				<div class="story-card-body" style="padding: 24px;">
					<span style="font-size: 0.85rem; color: var(--color-text-muted); display: block; margin-bottom: 8px;">12 Juli 2026</span>
					<h3 style="font-size: 1.15rem; color: var(--color-primary); font-weight: 700; line-height: 1.4;">
						<a href="<?php echo esc_url( home_url( '/artikel' ) ); ?>">Lorem Ipsum Dolor Sit Amet Consectetur Adipiscing Elit</a>
					</h3>
				</div>
			</article>

			<!-- Article 5 -->
			<article class="story-card">
				<div class="story-image-wrap" style="height: 240px;">
					<img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?q=80&w=800&auto=format&fit=crop" alt="Article 5" />
				</div>
				<div class="story-card-body" style="padding: 24px;">
					<span style="font-size: 0.85rem; color: var(--color-text-muted); display: block; margin-bottom: 8px;">12 Juli 2026</span>
					<h3 style="font-size: 1.15rem; color: var(--color-primary); font-weight: 700; line-height: 1.4;">
						<a href="<?php echo esc_url( home_url( '/artikel' ) ); ?>">Lorem Ipsum Dolor Sit Amet</a>
					</h3>
				</div>
			</article>

			<!-- Article 6 -->
			<article class="story-card">
				<div class="story-image-wrap" style="height: 240px;">
					<img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=800&auto=format&fit=crop" alt="Article 6" />
				</div>
				<div class="story-card-body" style="padding: 24px;">
					<span style="font-size: 0.85rem; color: var(--color-text-muted); display: block; margin-bottom: 8px;">12 Juli 2026</span>
					<h3 style="font-size: 1.15rem; color: var(--color-primary); font-weight: 700; line-height: 1.4;">
						<a href="<?php echo esc_url( home_url( '/artikel' ) ); ?>">Lorem Ipsum Dolor Sit Amet Consectetur Adipiscing Elit</a>
					</h3>
				</div>
			</article>
		</div>

		<!-- Pagination -->
		<div style="display: flex; justify-content: center; gap: 12px; margin-top: 48px;">
			<span style="width: 40px; height: 40px; border-radius: 50%; border: 1.5px solid var(--color-primary); color: var(--color-primary); font-weight: bold; display: flex; align-items: center; justify-content: center;">1</span>
			<span style="width: 40px; height: 40px; border-radius: 50%; border: 1.5px solid var(--color-border); color: var(--color-text-muted); font-weight: bold; display: flex; align-items: center; justify-content: center;">2</span>
		</div>
	</div>
</section>

<?php
get_footer();
