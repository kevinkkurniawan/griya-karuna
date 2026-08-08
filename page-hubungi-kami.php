<?php
/**
 * Template Name: Hubungi Kami
 *
 * @package GriyaKaruna
 */

get_header();
?>

<!-- Breadcrumb -->
<div class="container" style="padding-top: 24px;">
	<nav style="font-size: 0.9rem; color: var(--color-text-muted);">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a> &rsaquo; <span>Hubungi Kami</span>
	</nav>
</div>

<!-- Hero Section -->
<section style="padding: 40px 0 60px;">
	<div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center;">
		<div>
			<h1 style="font-size: 2.8rem; font-weight: 700; color: var(--color-primary); line-height: 1.25; margin-bottom: 20px;">
				Kirim Pesan<br>Kepada Kami
			</h1>
			<p style="font-size: 1.1rem; color: var(--color-text-muted); line-height: 1.7; max-width: 480px;">
				Jika Anda memiliki pertanyaan, silakan isi dan kirim formulir di bawah ini atau hubungi kami di +628978800000
			</p>
		</div>
		<div>
			<img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=1000&auto=format&fit=crop" alt="Kirim Pesan Kepada Kami" style="border-radius: var(--border-radius-card); width: 100%; height: 420px; object-fit: cover; box-shadow: var(--shadow-md);" />
		</div>
	</div>
</section>

<!-- Form Section with Light Tint Background -->
<section style="background-color: var(--color-bg-light); padding: 80px 0;">
	<div class="container" style="max-width: 760px;">
		<form action="#" method="post" onsubmit="alert('Terima kasih! Pesan Anda telah terkirim.'); return false;" style="background: #FFF; padding: 48px; border-radius: var(--border-radius-card); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm);">
			<!-- Name Row (2 columns: Depan & Belakang) -->
			<div style="margin-bottom: 24px;">
				<label style="display: block; font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 8px;">Nama*</label>
				<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
					<div>
						<input type="text" required style="width: 100%; padding: 14px 18px; border: 1px solid var(--color-border); border-radius: 12px; font-size: 1rem; font-family: inherit;">
						<span style="font-size: 0.8rem; color: var(--color-text-muted); display: block; margin-top: 4px;">Depan</span>
					</div>
					<div>
						<input type="text" required style="width: 100%; padding: 14px 18px; border: 1px solid var(--color-border); border-radius: 12px; font-size: 1rem; font-family: inherit;">
						<span style="font-size: 0.8rem; color: var(--color-text-muted); display: block; margin-top: 4px;">Belakang</span>
					</div>
				</div>
			</div>

			<!-- Email & Phone Row (2 columns) -->
			<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
				<div>
					<label style="display: block; font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 8px;">Email*</label>
					<input type="email" required style="width: 100%; padding: 14px 18px; border: 1px solid var(--color-border); border-radius: 12px; font-size: 1rem; font-family: inherit;">
				</div>
				<div>
					<label style="display: block; font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 8px;">Nomor Telepon*</label>
					<input type="tel" required style="width: 100%; padding: 14px 18px; border: 1px solid var(--color-border); border-radius: 12px; font-size: 1rem; font-family: inherit;">
				</div>
			</div>

			<!-- Subject -->
			<div style="margin-bottom: 24px;">
				<label style="display: block; font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 8px;">Subjek*</label>
				<input type="text" required style="width: 100%; padding: 14px 18px; border: 1px solid var(--color-border); border-radius: 12px; font-size: 1rem; font-family: inherit;">
			</div>

			<!-- Message -->
			<div style="margin-bottom: 32px;">
				<label style="display: block; font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 8px;">Pesan*</label>
				<textarea rows="5" required style="width: 100%; padding: 14px 18px; border: 1px solid var(--color-border); border-radius: 12px; font-size: 1rem; font-family: inherit; resize: vertical;"></textarea>
			</div>

			<button type="submit" class="btn-primary-pill" style="width: 100%; border: none; cursor: pointer; font-size: 1.05rem; padding: 16px;">Kirim Pesan</button>
		</form>
	</div>
</section>

<?php
get_footer();
