<?php theme_include('header'); ?>

<section class="content">

	<?php if(has_posts()): ?>
			<?php posts(); ?>
			<article class="post">
        <div class="wrap">
          <h1 class="post-title"><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h1>
          <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>
          <?php if (article_description()): ?>
          <p class="description"><?php echo article_description(); ?></p>
          <?php endif; ?>
      </div>
      </article>

			<?php $i = 0; while(posts()): $i++; ?>
			<article class="post">
        <div class="wrap">
          <h2 class="post-title"><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h2>
          <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>
        </div>
      </article>
			<?php endwhile; ?>

		<?php if(has_pagination()): ?>
		<nav class="pagination">
			<div class="wrap">
				<?php echo posts_prev('&gt;'); ?>
				<?php echo posts_next('&lt;'); ?>
			</div>
		</nav>
		<?php endif; ?>

	<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	<?php endif; ?>

</section>

<?php theme_include('footer'); ?>