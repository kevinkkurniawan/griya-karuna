<?php
/**
 * Template Name: Program
 *
 * @package GriyaKaruna
 */

get_header();
?>

<div class="page-header-banner">
	<div class="container">
		<h1>Program & Layanan</h1>
		<p style="font-size: 1.1rem; opacity: 0.9; margin-top: 8px;">Berbagai Program Pendampingan Anak & Keluarga</p>
	</div>
</div>

<section class="page-content-area">
	<div class="container">
		<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px;">
			<div style="background: #FFF; border: 1px solid var(--color-border); border-radius: var(--border-radius-card); padding: 32px; box-shadow: var(--shadow-sm);">
				<div style="width: 56px; height: 56px; background: var(--color-accent-light); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#594B73" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
				</div>
				<h3 style="font-size: 1.3rem; color: var(--color-primary); margin-bottom: 12px;">Akomodasi Rumah Singgah</h3>
				<p style="color: var(--color-text-muted); font-size: 0.98rem; line-height: 1.6;">
					Fasilitas tempat tinggal gratis, kamar bersih, konsumsi nutrisi seimbang, serta perlengkapan sehari-hari bagi pasien anak dan orang tua pendamping.
				</p>
			</div>

			<div style="background: #FFF; border: 1px solid var(--color-border); border-radius: var(--border-radius-card); padding: 32px; box-shadow: var(--shadow-sm);">
				<div style="width: 56px; height: 56px; background: var(--color-accent-light); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#594B73" stroke-width="2"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path></svg>
				</div>
				<h3 style="font-size: 1.3rem; color: var(--color-primary); margin-bottom: 12px;">Pendampingan Psikososial</h3>
				<p style="color: var(--color-text-muted); font-size: 0.98rem; line-height: 1.6;">
					Dukungan moral, sesi konseling, dan kelompok berbagi emosional untuk menguatkan psikologis orang tua dalam proses terapi medis anak.
				</p>
			</div>

			<div style="background: #FFF; border: 1px solid var(--color-border); border-radius: var(--border-radius-card); padding: 32px; box-shadow: var(--shadow-sm);">
				<div style="width: 56px; height: 56px; background: var(--color-accent-light); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#594B73" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
				</div>
				<h3 style="font-size: 1.3rem; color: var(--color-primary); margin-bottom: 12px;">Ruang Belajar & Edukasi</h3>
				<p style="color: var(--color-text-muted); font-size: 0.98rem; line-height: 1.6;">
					Aktivitas belajar informal, membaca buku, mewarnai, dan permainan edukatif agar hak bertumbuh dan belajar anak tetap terpenuhi.
				</p>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
