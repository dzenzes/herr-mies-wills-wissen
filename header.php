<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
<div class="dmi">
	<div class="header">
		<h1 class="header_title">
			<a  class="header_link" href="/" title="Daniel Mies"><strong class="header_link-highlighted">Herr Mies</strong> will's wissen</a>
		</h1>
	</div>

	<div class="social">
	    <ul class="social_list">
	        <li class="social_item">
	            <a href="https://twitter.com/danielmies" title="Follow me on Twitter" class="social_link">
	                <i class="fa fa-twitter"></i>
				</a>
			</li>
	        <li class="social_item">
	            <a href="https://github.com/dmies" title="Follow me on GitHub" class="social_link">
	                <i class="fa fa-github"></i>
	            </a>
	        </li>
	        <li class="social_item">
	            <a href="https://mies.me/feed/mp3/" title="Podcast ESS Feed" class="social_link">
	                <i class="fa fa-podcast"></i>
	            </a>
	        </li>
	        <li class="social_item">
	            <a href="/atom.xml" title="Subscribe RSS Feed+" class="social_link">
	                <i class="fa fa-rss"></i>
	            </a>
	        </li>
		</ul>
	</div>
