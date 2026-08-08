<?php
/**
 * Template Name: Front Page (Beranda)
 *
 * @package GriyaKaruna
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-section" style="min-height: 560px;">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_exact.webp" alt="Griya Karuna Hero" class="hero-bg-image" />
	<div class="hero-overlay"></div>
	<div class="container hero-content">
		<h1 class="hero-title">
			Bukan sekadar rumah singgah, tapi tempat tumbuhnya harapan, kekuatan, dan cinta.
		</h1>
	</div>
</section>

<!-- Vision Section -->
<section class="section-vision">
	<div class="container">
		<div class="vision-subtitle">Kami percaya</div>
		<h2 class="vision-heading">“A place when hope lives”</h2>
		<p class="vision-description">
			Griya Karuna hadir sebagai ruang penuh kasih untuk anak-anak dengan penyakit non-infeksius tempat yang nyaman, layak, dan penuh harapan.
		</p>
	</div>
</section>

<!-- Features Section ("Kami ingin mewujudkan") -->
<section class="section-features">
	<div class="container">
		<h2 class="features-title">Kami ingin mewujudkan</h2>

		<div class="features-grid">
			<!-- Card 1 -->
			<div class="feature-card">
				<div class="feature-icon-wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon1.png" alt="Akomodasi Icon" />
				</div>
				<p class="feature-text">
					Tempat tinggal yang aman, nyaman, dan layak bagi anak dan keluarga selama menjalani pengobatan.
				</p>
			</div>

			<!-- Card 2 -->
			<div class="feature-card">
				<div class="feature-icon-wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon2.png" alt="Pendampingan Icon" />
				</div>
				<p class="feature-text">
					Pendampingan yang menguatkan secara emosional dan sosial.
				</p>
			</div>

			<!-- Card 3 -->
			<div class="feature-card">
				<div class="feature-icon-wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon3.png" alt="Ruang Belajar Icon" />
				</div>
				<p class="feature-text">
					Ruang belajar dan bermain agar anak tetap dapat bertumbuh di tengah masa pengobatan.
				</p>
			</div>

			<!-- Card 4 -->
			<div class="feature-card">
				<div class="feature-icon-wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon4.png" alt="Lingkungan Kasih Icon" />
				</div>
				<p class="feature-text">
					Lingkungan yang penuh kasih, sehingga setiap keluarga merasa diterima dan tidak berjalan sendiri.
				</p>
			</div>

			<!-- Card 5 -->
			<div class="feature-card">
				<div class="feature-icon-wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon5.svg" alt="Dukungan Icon" />
				</div>
				<p class="feature-text">
					Kesempatan bagi semua orang untuk ikut mengambil bagian melalui waktu, tenaga, keahlian, maupun dukungan lainnya.
				</p>
			</div>
		</div>
	</div>
</section>

<!-- Stories Section ("Cerita dari Rumah Singgah") -->
<section class="section-stories">
	<div class="container">
		<div class="stories-header">
			<h2 class="stories-title">Cerita dari Rumah Singgah</h2>
			<p class="stories-subtitle">
				Melalui tulisan dan cerita-cerita sederhana, kami ingin mengajak Anda mengenal kehidupan di Griya Karuna lebih dekat, bukan hanya tentang perjuangan melawan sakit, tetapi juga tentang tawa, pertumbuhan, dan harapan yang terus hidup.
			</p>
		</div>

		<div class="stories-grid">
			<!-- Article Card 1 -->
			<article class="story-card">
				<div class="story-image-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/story1.webp" alt="Menuangkan Rasa Lewat Karya" />
					<div class="story-overlay-title">Menuangkan Rasa Lewat Karya</div>
				</div>
			</article>

			<!-- Article Card 2 -->
			<article class="story-card">
				<div class="story-image-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/story2.webp" alt="Peran Kunjungan Dokter Spesialis" />
					<div class="story-overlay-title">Peran Kunjungan Dokter Spesialis untuk Tumbuh Kembang Anak</div>
				</div>
			</article>

			<!-- Article Card 3 -->
			<article class="story-card">
				<div class="story-image-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/story3.webp" alt="Cerita Bunda Yanti & Aqila" />
					<div class="story-overlay-title">Cerita Bunda Yanti & Aqila Berjuang Melawan Leukimia</div>
				</div>
			</article>
		</div>

		<div class="btn-container-center">
			<a href="<?php echo esc_url( home_url( '/publikasi/' ) ); ?>" class="btn-primary-pill">Baca Selengkapnya</a>
		</div>
	</div>
</section>

<?php
get_footer();
