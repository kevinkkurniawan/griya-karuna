<?php
/**
 * Template Name: Tentang Kami
 *
 * @package GriyaKaruna
 */

get_header();
?>

<!-- Breadcrumb -->
<div class="container" style="padding-top: 24px;">
	<nav style="font-size: 0.9rem; color: var(--color-text-muted);">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a> &rsaquo; <span>Tentang Kami</span>
	</nav>
</div>

	<!-- Hero / Intro Section -->
	<section style="padding: 60px 0 80px; background-color: #FFFFFF;">
		<div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center;">
			<div>
				<h1 style="font-size: 2.8rem; font-weight: 700; color: var(--color-primary); line-height: 1.25; margin-bottom: 20px;">
					Mengenal<br>Griya Karuna<br>Lebih Dekat
				</h1>
				<p style="font-size: 1.15rem; color: var(--color-text-muted); line-height: 1.7; max-width: 480px;">
					Griya Karuna adalah yayasan sosial non-profit yang didirikan untuk mendampingi anak dari keluarga prasejahtera dengan penyakit non-infeksius.
				</p>
			</div>
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_hero.png" alt="Mengenal Griya Karuna Lebih Dekat" style="border-radius: var(--border-radius-card); width: 100%; height: 420px; object-fit: cover; box-shadow: var(--shadow-md);" />
			</div>
		</div>
	</section>

	<!-- Visi Kami Section (Banner Overlay) -->
	<section class="section-vision" style="background: linear-gradient(180deg, rgba(162, 200, 134, 0.85) 0%, rgba(162, 200, 134, 0.95) 100%), url('https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=1600&auto=format&fit=crop') center/cover; padding: 80px 0; color: #FFF; text-align: center;">
		<div class="container" style="max-width: 820px;">
			<h2 style="font-size: 2.5rem; font-weight: 700; color: #FFF; margin-bottom: 20px;">Visi Kami</h2>
			<p style="font-size: 1.2rem; line-height: 1.7; color: #FFF;">
				Mewujudkan rumah singgah yang menjadi tempat tinggal sementara untuk singgah penuh harapan, dukungan dan kenyamanan bagi pasien anak penyakit non – infeksius dalam menjalani proses pengobatan dan pemulihan serta memberikan pendampingan bermain dan belajar kepada anak-anak yang sedang menjalani masa pengobatannya.
			</p>
		</div>
	</section>

	<!-- Misi Kami Section -->
	<section style="padding: 80px 0; background-color: #FFFFFF;">
		<div class="container" style="max-width: 960px;">
			<h2 style="font-size: 2.4rem; font-weight: 700; color: var(--color-primary); text-align: center; margin-bottom: 48px;">Misi Kami</h2>
			<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px 48px;">
				<div style="display: flex; gap: 16px; align-items: flex-start;">
					<div style="width: 28px; height: 28px; background: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4E3F6B" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
					</div>
					<p style="font-size: 1.08rem; color: var(--color-text-muted); line-height: 1.6;">
						Menyediakan tempat tinggal sementara yang layak dan ramah anak.
					</p>
				</div>
				<div style="display: flex; gap: 16px; align-items: flex-start;">
					<div style="width: 28px; height: 28px; background: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4E3F6B" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
					</div>
					<p style="font-size: 1.08rem; color: var(--color-text-muted); line-height: 1.6;">
						Menjalin kerja sama dengan instansi pemerintah, lembaga sosial dan masyarakat untuk memperluas jangkauan dan dampak program.
					</p>
				</div>
				<div style="display: flex; gap: 16px; align-items: flex-start;">
					<div style="width: 28px; height: 28px; background: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4E3F6B" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
					</div>
					<p style="font-size: 1.08rem; color: var(--color-text-muted); line-height: 1.6;">
						Menciptakan lingkungan yang aman dan penuh empati.
					</p>
				</div>
				<div style="display: flex; gap: 16px; align-items: flex-start;">
					<div style="width: 28px; height: 28px; background: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4E3F6B" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
					</div>
					<p style="font-size: 1.08rem; color: var(--color-text-muted); line-height: 1.6;">
						Membangun komunitas yang inklusif dan berempati, yang mendorong para penghuni pasien anak dan pendampingnya untuk bangkit dan berdiri.
					</p>
				</div>
				<div style="display: flex; gap: 16px; align-items: flex-start; grid-column: span 2; max-width: 440px;">
					<div style="width: 28px; height: 28px; background: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4E3F6B" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
					</div>
					<p style="font-size: 1.08rem; color: var(--color-text-muted); line-height: 1.6;">
						Menyediakan akses informasi dan pendampingan untuk mendapatkan layanan kesehatan.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Tim Pengelola Section -->
	<section style="padding: 80px 0; background-color: var(--color-bg-light);">
		<div class="container">
			<div style="text-align: center; max-width: 720px; margin: 0 auto 48px auto;">
				<h2 style="font-size: 2.4rem; font-weight: 700; color: var(--color-primary); margin-bottom: 16px;">Tim Pengelola</h2>
				<p style="font-size: 1.1rem; color: var(--color-text-muted); line-height: 1.6;">
					Kami berkomitmen menjaga lingkungan yang aman, nyaman, dan mendukung proses pemulihan anak.
				</p>
			</div>

			<div style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 20px;">
				<!-- Member 1 -->
				<div style="background: #FFF; border-radius: var(--border-radius-card); border: 1px solid var(--color-border); padding: 24px 16px; text-align: center;">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team1.png" alt="Irawan Adi Nugroho" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 16px auto; display: block;" />
					<h3 style="font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 4px;">Irawan Adi Nugroho</h3>
					<span style="font-size: 0.85rem; color: var(--color-text-muted);">Pembina</span>
				</div>

				<!-- Member 2 -->
				<div style="background: #FFF; border-radius: var(--border-radius-card); border: 1px solid var(--color-border); padding: 24px 16px; text-align: center;">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team2.png" alt="Andi Winahyu" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 16px auto; display: block;" />
					<h3 style="font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 4px;">Andi Winahyu</h3>
					<span style="font-size: 0.85rem; color: var(--color-text-muted);">Ketua Yayasan</span>
				</div>

				<!-- Member 3 -->
				<div style="background: #FFF; border-radius: var(--border-radius-card); border: 1px solid var(--color-border); padding: 24px 16px; text-align: center;">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team3.png" alt="Yulia Candra Lena" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 16px auto; display: block;" />
					<h3 style="font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 4px;">Yulia Candra Lena</h3>
					<span style="font-size: 0.85rem; color: var(--color-text-muted);">Bendahara</span>
				</div>

				<!-- Member 4 -->
				<div style="background: #FFF; border-radius: var(--border-radius-card); border: 1px solid var(--color-border); padding: 24px 16px; text-align: center;">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team4.png" alt="Dewi Kristina" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 16px auto; display: block;" />
					<h3 style="font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 4px;">Dewi Kristina</h3>
					<span style="font-size: 0.85rem; color: var(--color-text-muted);">Koordinator</span>
				</div>

				<!-- Member 5 -->
				<div style="background: #FFF; border-radius: var(--border-radius-card); border: 1px solid var(--color-border); padding: 24px 16px; text-align: center;">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team5.png" alt="Christina Merabella" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 16px auto; display: block;" />
					<h3 style="font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 4px;">Christina Merabella</h3>
					<span style="font-size: 0.85rem; color: var(--color-text-muted);">General Affairs</span>
				</div>

				<!-- Member 6 -->
				<div style="background: #FFF; border-radius: var(--border-radius-card); border: 1px solid var(--color-border); padding: 24px 16px; text-align: center;">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team6.png" alt="Salsabila Rizki Prasasti" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 16px auto; display: block;" />
					<h3 style="font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 4px;">Salsabila Rizki Prasasti</h3>
					<span style="font-size: 0.85rem; color: var(--color-text-muted);">Pengajar</span>
				</div>
			</div>
		</div>
	</section>

<!-- Histori Timeline Section -->
<section style="padding: 80px 0; background-color: var(--color-bg-light);">
	<div class="container" style="max-width: 800px;">
		<h2 style="font-size: 2.2rem; font-weight: 700; color: var(--color-primary); text-align: center; margin-bottom: 48px;">Histori</h2>

		<div style="position: relative; padding-left: 40px; border-left: 3px solid var(--color-border);">
			<!-- 2024 -->
			<div style="position: relative; margin-bottom: 48px;">
				<span style="position: absolute; left: -64px; top: -4px; background: var(--color-accent); color: var(--color-primary); font-weight: 700; padding: 4px 16px; border-radius: 20px; font-size: 1.1rem;">2024</span>
				<div style="background: #FFF; border-radius: 16px; border: 1px solid var(--color-border); padding: 24px; box-shadow: var(--shadow-sm);">
					<h4 style="color: var(--color-primary); font-size: 1.1rem; margin-bottom: 8px;">APRIL</h4>
					<p style="color: var(--color-text-muted); font-size: 0.98rem; line-height: 1.6; margin-bottom: 8px;">Pertemuan perdana para pendiri yang menjadi awal mula berdirinya Griya Karuna.</p>
					<p style="color: var(--color-text-muted); font-size: 0.98rem; line-height: 1.6;">Kunjungan para pendiri ke RSUP Dr. Sardjito untuk memperkenalkan Griya Karuna.</p>
				</div>
			</div>

			<!-- 2025 -->
			<div style="position: relative;">
				<span style="position: absolute; left: -64px; top: -4px; background: var(--color-accent); color: var(--color-primary); font-weight: 700; padding: 4px 16px; border-radius: 20px; font-size: 1.1rem;">2025</span>
				<div style="display: flex; flex-direction: column; gap: 20px;">
					<div style="background: #FFF; border-radius: 16px; border: 1px solid var(--color-border); padding: 24px; box-shadow: var(--shadow-sm);">
						<h4 style="color: var(--color-primary); font-size: 1.1rem; margin-bottom: 8px;">MARET</h4>
						<p style="color: var(--color-text-muted); font-size: 0.98rem; line-height: 1.6;">Penyewaan rumah yang akan digunakan sebagai Rumah Singgah Griya Karuna.</p>
					</div>
					<div style="background: #FFF; border-radius: 16px; border: 1px solid var(--color-border); padding: 24px; box-shadow: var(--shadow-sm);">
						<h4 style="color: var(--color-primary); font-size: 1.1rem; margin-bottom: 8px;">19 APRIL</h4>
						<p style="color: var(--color-text-muted); font-size: 0.98rem; line-height: 1.6;">Peresmian Griya Karuna.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Tim Pengelola Section -->
<section style="padding: 80px 0; background-color: #FFFFFF;">
	<div class="container">
		<div style="text-align: center; max-width: 600px; margin: 0 auto 48px;">
			<h2 style="font-size: 2.2rem; font-weight: 700; color: var(--color-primary); margin-bottom: 12px;">Tim Pengelola</h2>
			<p style="font-size: 1.05rem; color: var(--color-text-muted);">Kami berkomitmen menjaga lingkungan yang aman, nyaman, dan mendukung proses pemulihan anak.</p>
		</div>

		<div style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 20px;">
			<!-- Member 1 -->
			<div style="background: #FFF; border: 1px solid var(--color-border); border-radius: var(--border-radius-card); padding: 24px 12px; text-align: center;">
				<div style="width: 80px; height: 80px; border-radius: 50%; background: var(--color-accent); margin: 0 auto 16px;"></div>
				<h4 style="font-size: 0.98rem; color: var(--color-primary); margin-bottom: 4px;">Irawan Adi Nugroho</h4>
				<p style="font-size: 0.85rem; color: var(--color-text-muted);">Pembina</p>
			</div>
			<!-- Member 2 -->
			<div style="background: #FFF; border: 1px solid var(--color-border); border-radius: var(--border-radius-card); padding: 24px 12px; text-align: center;">
				<img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=200&auto=format&fit=crop" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 16px;" alt="Andi Winahyu" />
				<h4 style="font-size: 0.98rem; color: var(--color-primary); margin-bottom: 4px;">Andi Winahyu</h4>
				<p style="font-size: 0.85rem; color: var(--color-text-muted);">Ketua Yayasan</p>
			</div>
			<!-- Member 3 -->
			<div style="background: #FFF; border: 1px solid var(--color-border); border-radius: var(--border-radius-card); padding: 24px 12px; text-align: center;">
				<img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=200&auto=format&fit=crop" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 16px;" alt="Yulia Candra Lena" />
				<h4 style="font-size: 0.98rem; color: var(--color-primary); margin-bottom: 4px;">Yulia Candra Lena</h4>
				<p style="font-size: 0.85rem; color: var(--color-text-muted);">Bendahara</p>
			</div>
			<!-- Member 4 -->
			<div style="background: #FFF; border: 1px solid var(--color-border); border-radius: var(--border-radius-card); padding: 24px 12px; text-align: center;">
				<img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=200&auto=format&fit=crop" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 16px;" alt="Dewi Kristina" />
				<h4 style="font-size: 0.98rem; color: var(--color-primary); margin-bottom: 4px;">Dewi Kristina</h4>
				<p style="font-size: 0.85rem; color: var(--color-text-muted);">Koordinator</p>
			</div>
			<!-- Member 5 -->
			<div style="background: #FFF; border: 1px solid var(--color-border); border-radius: var(--border-radius-card); padding: 24px 12px; text-align: center;">
				<img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200&auto=format&fit=crop" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 16px;" alt="Christina Merabella" />
				<h4 style="font-size: 0.98rem; color: var(--color-primary); margin-bottom: 4px;">Christina Merabella</h4>
				<p style="font-size: 0.85rem; color: var(--color-text-muted);">General Affairs</p>
			</div>
			<!-- Member 6 -->
			<div style="background: #FFF; border: 1px solid var(--color-border); border-radius: var(--border-radius-card); padding: 24px 12px; text-align: center;">
				<img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=200&auto=format&fit=crop" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 16px;" alt="Salsabila Rizki Prasasti" />
				<h4 style="font-size: 0.98rem; color: var(--color-primary); margin-bottom: 4px;">Salsabila Rizki Prasasti</h4>
				<p style="font-size: 0.85rem; color: var(--color-text-muted);">Pengajar</p>
			</div>
		</div>
	</div>
</section>

<!-- Kemitraan Kami Section -->
<section style="padding: 60px 0 80px; background-color: var(--color-bg-light);">
	<div class="container text-center" style="text-align: center;">
		<h2 style="font-size: 2.2rem; font-weight: 700; color: var(--color-primary); margin-bottom: 16px;">Kemitraan Kami</h2>
		<p style="font-size: 1.05rem; color: var(--color-text-muted); max-width: 720px; margin: 0 auto 40px; line-height: 1.6;">
			Griya Karuna didukung oleh berbagai mitra dan komunitas yang peduli terhadap kesehatan anak. Kolaborasi ini membantu kami menjangkau dan mendampingi lebih banyak keluarga yang membutuhkan.
		</p>
		
		<div style="display: flex; justify-content: center; gap: 36px; opacity: 0.6; flex-wrap: wrap;">
			<div style="font-weight: bold; font-size: 1.2rem; color: #666;">RSUD SLEMAN</div>
			<div style="font-weight: bold; font-size: 1.2rem; color: #666;">RSUD SLEMAN</div>
			<div style="font-weight: bold; font-size: 1.2rem; color: #666;">RSUD SLEMAN</div>
			<div style="font-weight: bold; font-size: 1.2rem; color: #666;">RSUD SLEMAN</div>
		</div>
	</div>
</section>

<?php
get_footer();
