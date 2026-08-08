<?php
/**
 * Single Post Template (Artikel Detail)
 *
 * @package GriyaKaruna
 */

get_header();
?>

<div class="page-header-banner">
	<div class="container">
		<span style="background: var(--color-accent); color: var(--color-primary); font-size: 0.85rem; font-weight: 700; padding: 4px 14px; border-radius: 20px; text-transform: uppercase;">Cerita Singgah</span>
		<h1 style="margin-top: 12px; font-size: 2.2rem;"><?php the_title( '', '' ); ?></h1>
	</div>
</div>

<section class="page-content-area">
	<article class="container" style="max-width: 800px; line-height: 1.8; color: var(--color-text-main);">
		<?php if ( has_post_thumbnail() ) : ?>
			<div style="margin-bottom: 32px; border-radius: var(--border-radius-card); overflow: hidden; box-shadow: var(--shadow-sm);">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
		<?php else : ?>
			<div style="margin-bottom: 32px; border-radius: var(--border-radius-card); overflow: hidden; box-shadow: var(--shadow-sm);">
				<img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=1200&auto=format&fit=crop" alt="Artikel Griya Karuna" />
			</div>
		<?php endif; ?>

		<div class="entry-content" style="font-size: 1.1rem; color: #444;">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					the_content();
				endwhile;
			else :
				?>
				<p>Melalui tulisan dan cerita-cerita sederhana, kami ingin mengajak Anda mengenal kehidupan di Griya Karuna lebih dekat, bukan hanya tentang perjuangan melawan sakit, tetapi juga tentang tawa, pertumbuhan, dan harapan yang terus hidup.</p>
				<p>Setiap anak di Griya Karuna membawa kisah ketegaran masing-masing. Bersama dukungan para donatur dan relawan, rumah singgah ini terus menjadi tempat berlindung yang memberikan rasa hangat, kasih sayang, serta kekuatan bagi setiap keluarga yang sedang berjuang.</p>
				<?php
			endif;
			?>
		</div>

		<div style="margin-top: 48px; padding-top: 24px; border-top: 1px solid var(--color-border); display: flex; justify-content: space-between; align-items: center;">
			<a href="<?php echo esc_url( home_url( '/publikasi' ) ); ?>" class="btn-primary-pill" style="font-size: 0.9rem; padding: 10px 24px;">&larr; Kembali ke Publikasi</a>
		</div>
	</article>
</section>

<?php
get_footer();
