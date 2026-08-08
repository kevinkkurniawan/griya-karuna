<?php
/**
 * Main Template File (Fallback)
 *
 * @package GriyaKaruna
 */

get_header();
?>

<div class="page-header-banner">
	<div class="container">
		<h1>Griya Karuna</h1>
		<p style="font-size: 1.1rem; opacity: 0.9; margin-top: 8px;">Rumah Singgah Pasien Anak</p>
	</div>
</div>

<section class="page-content-area">
	<div class="container">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				?>
				<article style="margin-bottom: 40px;">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div style="margin-top: 12px; color: var(--color-text-muted);"><?php the_excerpt(); ?></div>
				</article>
				<?php
			endwhile;
		else :
			?>
			<p>Tidak ada konten ditemukan.</p>
			<?php
		endif;
		?>
	</div>
</section>

<?php
get_footer();
