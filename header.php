<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script type="text/javascript">
      WebFontConfig = {
      google: { families: [ 'Source+Code+Pro::latin', 'Open+Sans:300italic,700italic,400,300,700:latin' ] }
    };
    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <![endif]-->
		<script src="<?php echo theme_url('/js/script.js'); ?>"></script>

	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo current_url(); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body>
		<nav class="main-nav">
			<?php if(has_menu_items()): ?>
      <h3 class="nav-title">Pages</h3>
      <ul>
        <?php while(menu_items()): ?>
				<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
					<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
						<?php echo menu_name(); ?>
					</a>
				</li>
				<?php endwhile; ?>
      </ul>
      <?php endif; ?>

      <h3 class="nav-title">Categories</h3>
      <ul>
        <?php while(categories()): ?>
							<li>
								<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
									<?php echo category_title(); ?>
								</a>
							</li>
						<?php endwhile; ?>
      </ul>
      <form id="search" method="post" action="<?php echo search_url(); ?>" class="search"><input type="search" id="term" name="term" placeholder="Type your search..." value="<?php echo search_term(); ?>">
      </form>
      <?php if (twitter_account()): ?>
      <a href="<?php echo twitter_url(); ?>" class="twitter-link"><i class="icon-twitter"></i></a>
      <?php endif; ?>
    </nav>

    <header class="main-header" <?php if (theme_option('header_bg')): ?> style="background-image: url(<?php echo theme_option('header_image'); ?>)" <?php endif; ?> >
      <div class="logo">
        <figure>
          <a href="<?php echo base_url(); ?>"><img src="<?php echo theme_url(); ?>/img/logo.png" alt=""><?php echo site_name(); ?></a>
        </figure>
      </div>
    </header>