<?php
/**
 * Template Name: Publikasi
 *
 * @package GriyaKaruna
 */

get_header();
?>

<div class="page-header-banner">
	<div class="container">
		<h1>Publikasi & Cerita</h1>
		<p style="font-size: 1.1rem; opacity: 0.9; margin-top: 8px;">Kisah Inspiratif & Kabar Kegiatan Griya Karuna</p>
	</div>
</div>

<section class="page-content-area">
	<div class="container">
		<div class="stories-grid">
			<!-- Story 1 -->
			<article class="story-card">
				<div class="story-image-wrap">
					<img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=800&auto=format&fit=crop" alt="Menuangkan Rasa Lewat Karya" />
					<div class="story-overlay-title">Menuangkan Rasa Lewat Karya</div>
				</div>
				<div class="story-card-body">
					<p class="story-excerpt">
						Aktivitas seni dan kerajinan tangan bersama anak-anak di Griya Karuna sebagai sarana menyampaikan perasaan dan keceriaan...
					</p>
					<a href="<?php echo esc_url( home_url( '/artikel-menuangkan-rasa' ) ); ?>" style="color: var(--color-primary); font-weight: 700; margin-top: auto;">Baca Artikel &rarr;</a>
				</div>
			</article>

			<!-- Story 2 -->
			<article class="story-card">
				<div class="story-image-wrap">
					<img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=800&auto=format&fit=crop" alt="Peran Kunjungan Dokter Spesialis" />
					<div class="story-overlay-title">Peran Kunjungan Dokter Spesialis untuk Tumbuh Kembang Anak</div>
				</div>
				<div class="story-card-body">
					<p class="story-excerpt">
						Pendampingan rutin oleh tim dokter dan tenaga medis spesialis memastikan kondisi anak terjaga dengan pemantauan tumbuh kembang terpadu...
					</p>
					<a href="<?php echo esc_url( home_url( '/artikel-dokter-spesialis' ) ); ?>" style="color: var(--color-primary); font-weight: 700; margin-top: auto;">Baca Artikel &rarr;</a>
				</div>
			</article>

			<!-- Story 3 -->
			<article class="story-card">
				<div class="story-image-wrap">
					<img src="https://images.unsplash.com/photo-1536640712-4d4c36ff0e4e?q=80&w=800&auto=format&fit=crop" alt="Cerita Bunda Yanti & Aqila" />
					<div class="story-overlay-title">Cerita Bunda Yanti & Aqila Berjuang Melawan Leukimia</div>
				</div>
				<div class="story-card-body">
					<p class="story-excerpt">
						Kisah inspiratif tentang ketegaran Bunda Yanti dalam mendampingi Aqila menjalani masa pengobatan panjang dengan semangat tinggi...
					</p>
					<a href="<?php echo esc_url( home_url( '/artikel-bunda-yanti' ) ); ?>" style="color: var(--color-primary); font-weight: 700; margin-top: auto;">Baca Artikel &rarr;</a>
				</div>
			</article>

			<!-- Story 4 -->
			<article class="story-card">
				<div class="story-image-wrap">
					<img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?q=80&w=800&auto=format&fit=crop" alt="Kegiatan Mewarnai & Musik" />
					<div class="story-overlay-title">Senyum Ceria di Sesi Terapi Seni & Musik</div>
				</div>
				<div class="story-card-body">
					<p class="story-excerpt">
						Sesi hiburan mingguan yang menghadirkan senyum dan tawa bagi anak-anak serta orang tua di ruang bersama Griya Karuna...
					</p>
					<a href="#" style="color: var(--color-primary); font-weight: 700; margin-top: auto;">Baca Artikel &rarr;</a>
				</div>
			</article>
		</div>
	</div>
</section>

<?php
get_footer();
