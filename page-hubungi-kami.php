<?php
/**
 * Template Name: Hubungi Kami
 *
 * @package GriyaKaruna
 */

get_header();
?>

<div class="page-header-banner">
	<div class="container">
		<h1>Hubungi Kami</h1>
		<p style="font-size: 1.1rem; opacity: 0.9; margin-top: 8px;">Silakan Hubungi Tim Griya Karuna untuk Informasi & Bantuan</p>
	</div>
</div>

<section class="page-content-area">
	<div class="container" style="max-width: 1000px;">
		<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px;">
			<!-- Contact Form -->
			<div style="background: #FFF; border: 1px solid var(--color-border); border-radius: var(--border-radius-card); padding: 36px; box-shadow: var(--shadow-sm);">
				<h2 style="font-size: 1.5rem; color: var(--color-primary); margin-bottom: 20px;">Kirim Pesan</h2>
				<form action="#" method="post" onsubmit="alert('Terima kasih! Pesan Anda telah terkirim.'); return false;">
					<div style="margin-bottom: 16px;">
						<label style="display: block; font-size: 0.9rem; font-weight: 600; color: var(--color-primary); margin-bottom: 6px;">Nama Lengkap</label>
						<input type="text" required placeholder="Masukkan nama Anda" style="width: 100%; padding: 12px 16px; border: 1px solid var(--color-border); border-radius: 10px; font-family: inherit; font-size: 0.95rem;">
					</div>
					<div style="margin-bottom: 16px;">
						<label style="display: block; font-size: 0.9rem; font-weight: 600; color: var(--color-primary); margin-bottom: 6px;">Alamat Email</label>
						<input type="email" required placeholder="nama@email.com" style="width: 100%; padding: 12px 16px; border: 1px solid var(--color-border); border-radius: 10px; font-family: inherit; font-size: 0.95rem;">
					</div>
					<div style="margin-bottom: 16px;">
						<label style="display: block; font-size: 0.9rem; font-weight: 600; color: var(--color-primary); margin-bottom: 6px;">Nomor Telepon / WhatsApp</label>
						<input type="tel" placeholder="+628..." style="width: 100%; padding: 12px 16px; border: 1px solid var(--color-border); border-radius: 10px; font-family: inherit; font-size: 0.95rem;">
					</div>
					<div style="margin-bottom: 24px;">
						<label style="display: block; font-size: 0.9rem; font-weight: 600; color: var(--color-primary); margin-bottom: 6px;">Pesan Anda</label>
						<textarea rows="4" required placeholder="Tuliskan pesan atau pertanyaan Anda di sini..." style="width: 100%; padding: 12px 16px; border: 1px solid var(--color-border); border-radius: 10px; font-family: inherit; font-size: 0.95rem; resize: vertical;"></textarea>
					</div>
					<button type="submit" class="btn-primary-pill" style="width: 100%; border: none; cursor: pointer;">Kirim Pesan Sekarang</button>
				</form>
			</div>

			<!-- Direct Contact Details -->
			<div style="display: flex; flex-direction: column; justify-content: center;">
				<h2 style="font-size: 1.8rem; color: var(--color-primary); margin-bottom: 20px;">Informasi Alamat & Kontak</h2>
				
				<div style="margin-bottom: 24px;">
					<h3 style="font-size: 1.1rem; color: var(--color-primary); margin-bottom: 4px;">Alamat Yogyakarta:</h3>
					<p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.6;">
						Jl. Jembatan Merah V No.62, Soropadan, Condongcatur, Kec. Depok, Kabupaten Sleman, D.I. Yogyakarta 55281
					</p>
				</div>

				<div style="margin-bottom: 24px;">
					<h3 style="font-size: 1.1rem; color: var(--color-primary); margin-bottom: 4px;">Alamat Jakarta:</h3>
					<p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.6;">
						Jl. Kyai Maja No.43, Gunung, Kec. Kby. Baru, Kota Jakarta Selatan, D.K.I. Jakarta 12120
					</p>
				</div>

				<div style="background: var(--color-accent-light); padding: 24px; border-radius: 16px; border: 1px solid rgba(158, 192, 125, 0.4);">
					<h3 style="font-size: 1.1rem; color: var(--color-primary); margin-bottom: 12px;">Kontak Cepat WhatsApp</h3>
					<p style="color: var(--color-text-muted); font-size: 0.95rem; margin-bottom: 16px;">
						Tim relawan & pengelola kami siap memberikan informasi seputar penerimaan pasien singgah maupun donasi.
					</p>
					<a href="https://wa.me/6281234567890" target="_blank" class="btn-primary-pill" style="font-size: 0.9rem; padding: 10px 24px;">Chat WhatsApp Customer Care &rarr;</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
