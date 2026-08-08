<?php
/**
 * Single Post Template (Artikel Detail)
 *
 * @package GriyaKaruna
 */

get_header();
?>

<!-- Breadcrumb -->
<div class="container" style="padding-top: 24px;">
	<nav style="font-size: 0.9rem; color: var(--color-text-muted);">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a> &rsaquo; 
		<a href="<?php echo esc_url( home_url( '/publikasi' ) ); ?>">Publikasi</a> &rsaquo; 
		<span>Menuangkan Rasa Lewat Karya</span>
	</nav>
</div>

<!-- Article Header -->
<section style="padding: 32px 0 24px;">
	<div class="container" style="max-width: 900px;">
		<span style="font-size: 0.95rem; color: var(--color-text-muted); display: block; margin-bottom: 8px;">20 Juli 2026</span>
		<h1 style="font-size: 2.8rem; font-weight: 700; color: var(--color-primary); line-height: 1.25; margin-bottom: 16px;">
			Menuangkan Rasa Lewat Karya
		</h1>
		<p style="font-size: 1.2rem; color: var(--color-text-muted); line-height: 1.6; margin-bottom: 20px;">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		</p>
		
		<!-- Badges -->
		<div style="display: flex; gap: 10px;">
			<span style="border: 1px solid var(--color-border); background: #FFF; padding: 4px 16px; border-radius: 20px; font-size: 0.85rem; color: var(--color-text-muted);">Artikel</span>
			<span style="border: 1px solid var(--color-border); background: #FFF; padding: 4px 16px; border-radius: 20px; font-size: 0.85rem; color: var(--color-text-muted);">Kegiatan</span>
		</div>
	</div>
</section>

<!-- Featured Image -->
<section style="padding-bottom: 40px;">
	<div class="container" style="max-width: 1000px;">
		<img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=1200&auto=format&fit=crop" alt="Menuangkan Rasa Lewat Karya" style="width: 100%; height: 480px; object-fit: cover; border-radius: var(--border-radius-card); box-shadow: var(--shadow-sm);" />
	</div>
</section>

<!-- Article Content & Sidebar Layout (2 Columns) -->
<section style="padding-bottom: 80px; background-color: #FFFFFF;">
	<div class="container" style="display: grid; grid-template-columns: 2fr 1fr; gap: 48px; align-items: flex-start;">
		<!-- Main Content (Left Column) -->
		<div style="line-height: 1.8; color: var(--color-text-main); font-size: 1.05rem;">
			<p style="margin-bottom: 24px;">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id auctor quam. Vivamus et dui gravida, ultrices leo in, faucibus sem. Maecenas dictum lorem dolor, et mattis justo vestibulum vitae. Mauris et erat sed mauris interdum blandit. Nam malesuada volutpat turpis, sit amet blandit lacus dignissim et. Fusce in est euismod, ornare lorem in, tristique sem. In accumsan eget enim at posuere. Cras quis mi magna. Ut bibendum tellus eu mauris venenatis, blandit vestibulum orci ultrices. Vestibulum ante.
			</p>

			<div style="margin: 32px 0;">
				<img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=1000&auto=format&fit=crop" alt="Foto Kegiatan" style="width: 100%; border-radius: 16px; height: 320px; object-fit: cover;" />
			</div>

			<p style="margin-bottom: 24px;">
				Curabitur pharetra neque et velit congue bibendum quis ut felis. Phasellus eu enim mi. Sed tincidunt in felis sit amet aliquam. Nulla laoreet rhoncus pharetra. Pellentesque mauris augue, elementum sit amet lorem nec, ullamcorper laoreet augue. Cras ac laoreet leo, sed commodo lacus. Duis arcu neque, luctus sit amet venenatis a, porttitor id libero.
			</p>

			<p style="margin-bottom: 24px;">
				Sed vestibulum gravida pellentesque. Vivamus id quam eu sem mollis vulputate. Nunc aliquet ut magna eget pharetra. Maecenas ullamcorper vel sapien in vestibulum. Cras sed purus nisl. In hac habitasse platea dictumst. Vivamus maximus urna nunc, consequat pulvinar sapien iaculis in. Donec dapibus nisl enim, in viverra nunc tristique et.
			</p>

			<p style="margin-bottom: 32px;">
				Vivamus vel magna accumsan, convallis sem nec, eleifend nulla. Vestibulum arcu urna, commodo commodo sollicitudin ut, rhoncus ac elit. Aliquam sed ullamcorper sapien. Praesent eros ligula, maximus ut ligula a, commodo consequat tellus. Aenean vitae porta nisl. Praesent nunc eros, cursus vitae urna dignissim, pharetra vulputate risus. Sed elementum ornare ex. Curabitur convallis faucibus risus non iaculis. Donec pretium nulla at malesuada blandit.
			</p>

			<div style="font-size: 0.95rem; font-weight: 600; color: var(--color-text-muted); border-top: 1px solid var(--color-border); padding-top: 16px;">
				Oleh: Dr. Rina Amelia, M.Si.
			</div>
		</div>

		<!-- Sidebar "Baca Juga" (Right Column) -->
		<aside>
			<h3 style="font-size: 1.5rem; font-weight: 700; color: var(--color-primary); margin-bottom: 24px;">Baca Juga</h3>
			
			<div style="display: flex; flex-direction: column; gap: 24px;">
				<!-- Related 1 -->
				<div style="background: #FFF; border: 1px solid var(--color-border); border-radius: 16px; overflow: hidden; box-shadow: var(--shadow-sm);">
					<img src="https://images.unsplash.com/photo-1536640712-4d4c36ff0e4e?q=80&w=400&auto=format&fit=crop" style="width: 100%; height: 160px; object-fit: cover;" alt="Related 1" />
					<div style="padding: 16px;">
						<span style="font-size: 0.8rem; color: var(--color-text-muted); display: block; margin-bottom: 4px;">12 Juli 2026</span>
						<h4 style="font-size: 1rem; color: var(--color-primary); font-weight: 700; line-height: 1.4;">Menuangkan Rasa Lewat Karya</h4>
					</div>
				</div>

				<!-- Related 2 -->
				<div style="background: #FFF; border: 1px solid var(--color-border); border-radius: 16px; overflow: hidden; box-shadow: var(--shadow-sm);">
					<img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?q=80&w=400&auto=format&fit=crop" style="width: 100%; height: 160px; object-fit: cover;" alt="Related 2" />
					<div style="padding: 16px;">
						<span style="font-size: 0.8rem; color: var(--color-text-muted); display: block; margin-bottom: 4px;">12 Juli 2026</span>
						<h4 style="font-size: 1rem; color: var(--color-primary); font-weight: 700; line-height: 1.4;">Menuangkan Rasa Lewat Karya</h4>
					</div>
				</div>

				<!-- Related 3 -->
				<div style="background: #FFF; border: 1px solid var(--color-border); border-radius: 16px; overflow: hidden; box-shadow: var(--shadow-sm);">
					<img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=400&auto=format&fit=crop" style="width: 100%; height: 160px; object-fit: cover;" alt="Related 3" />
					<div style="padding: 16px;">
						<span style="font-size: 0.8rem; color: var(--color-text-muted); display: block; margin-bottom: 4px;">12 Juli 2026</span>
						<h4 style="font-size: 1rem; color: var(--color-primary); font-weight: 700; line-height: 1.4;">Menuangkan Rasa Lewat Karya</h4>
					</div>
				</div>
			</div>
		</aside>
	</div>
</section>

<?php
get_footer();
