<?php
/**
 * Template Name: Tentang Kami
 *
 * @package GriyaKaruna
 */

get_header();
?>

<div class="page-header-banner">
	<div class="container">
		<h1>Tentang Kami</h1>
		<p style="font-size: 1.1rem; opacity: 0.9; margin-top: 8px;">Mengenal Lebih Dekat Rumah Singgah Griya Karuna</p>
	</div>
</div>

<section class="page-content-area">
	<div class="container" style="max-width: 960px;">
		<div style="text-align: center; margin-bottom: 48px;">
			<h2 style="font-size: 2rem; color: var(--color-primary); margin-bottom: 16px;">Ruang Penuh Kasih & Harapan</h2>
			<p style="font-size: 1.1rem; color: var(--color-text-muted); line-height: 1.8;">
				Griya Karuna adalah yayasan rumah singgah non-profit yang diperuntukkan bagi anak-anak penderita penyakit non-infeksius kronis serta keluarga pendamping selama menjalani proses pengobatan di rumah sakit rujukan.
			</p>
		</div>

		<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px; margin-bottom: 56px;">
			<div style="background: var(--color-bg-light); padding: 36px; border-radius: var(--border-radius-card); border: 1px solid var(--color-border);">
				<h3 style="color: var(--color-primary); font-size: 1.5rem; margin-bottom: 12px;">Visi Kami</h3>
				<p style="color: var(--color-text-muted); line-height: 1.7;">
					Menjadi rumah singgah yang aman, layak, dan penuh kasih sayang, tempat anak-anak dapat terus belajar, bermain, dan bertumbuh dengan penuh harapan.
				</p>
			</div>

			<div style="background: var(--color-bg-light); padding: 36px; border-radius: var(--border-radius-card); border: 1px solid var(--color-border);">
				<h3 style="color: var(--color-primary); font-size: 1.5rem; margin-bottom: 12px;">Misi Kami</h3>
				<ul style="color: var(--color-text-muted); line-height: 1.7; padding-left: 20px;">
					<li>Menyediakan akomodasi gratis yang nyaman & higienis.</li>
					<li>Memberikan pendampingan emosional & psikososial bagi keluarga.</li>
					<li>Menyediakan fasilitas edukasi dan aktivitas kreatif anak.</li>
				</ul>
			</div>
		</div>

		<div style="text-align: center; margin-bottom: 40px;">
			<h2 style="font-size: 1.8rem; color: var(--color-primary); margin-bottom: 24px;">Tim & Pengurus</h2>
			<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
				<div style="background: #FFF; border: 1px solid var(--color-border); border-radius: 16px; padding: 24px; text-align: center;">
					<div style="width: 90px; height: 90px; border-radius: 50%; background: var(--color-accent-light); margin: 0 auto 16px; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: var(--color-primary); font-weight: bold;">GK</div>
					<h4 style="font-size: 1.1rem; color: var(--color-primary);">Pendiri & Pembina</h4>
					<p style="font-size: 0.9rem; color: var(--color-text-muted);">Griya Karuna Foundation</p>
				</div>
				<div style="background: #FFF; border: 1px solid var(--color-border); border-radius: 16px; padding: 24px; text-align: center;">
					<div style="width: 90px; height: 90px; border-radius: 50%; background: var(--color-accent-light); margin: 0 auto 16px; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: var(--color-primary); font-weight: bold;">TM</div>
					<h4 style="font-size: 1.1rem; color: var(--color-primary);">Tim Medis & Relawan</h4>
					<p style="font-size: 0.9rem; color: var(--color-text-muted);">Dokter & Perawat Pendamping</p>
				</div>
				<div style="background: #FFF; border: 1px solid var(--color-border); border-radius: 16px; padding: 24px; text-align: center;">
					<div style="width: 90px; height: 90px; border-radius: 50%; background: var(--color-accent-light); margin: 0 auto 16px; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: var(--color-primary); font-weight: bold;">OP</div>
					<h4 style="font-size: 1.1rem; color: var(--color-primary);">Operasional Rumah</h4>
					<p style="font-size: 0.9rem; color: var(--color-text-muted);">Pengelola Harian Singgah</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
