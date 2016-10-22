<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="description" content="">

    <!--<link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//fast.fonts.net">-->

    <link rel="icon" type="image/png" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="assets/css/main.css">
	<!--[if lt IE 9]> <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script> <![endif]-->
</head>
<body>

	<header class="l-header">

	</header>

	<main class="l-main">
		<!-- content -->

		<?php
			// change dir to whatever - if only one page then you can remove $page
			$directory = 'assets/img/';
			if(is_dir($directory)) {
			    // Check if the directory exists
			    if($handle = opendir($directory)) {
			        // Check if its able to open the directory
			        $images = array();
			        // Loop through files
			        while(false !== ($entry = readdir($handle))) {
			            if($entry != "." && $entry != ".." && $entry != ".DS_Store") {

							// Strip extention
			                $cursor_sans_ext = strstr($entry, '.', true);

			                // If the file exists store it in array
			                // Build the full file path
			                $images[ $cursor_sans_ext ] = '/' . $directory . $entry;

			            }
			        }
			        // Close directory and sort array
			        closedir($handle);

			        // Set images as cursors
			        $cursors = $images;

			    }
			}

		?>

		<ul class="cursors">
			<?php foreach( $cursors as $cursor => $cursor_path ) { ?>
				<li class="c-item c-item--<?php echo $cursor; ?>"><img src="<?php echo $cursor_path; ?>" alt="<?php echo $cursor; ?>"></li>
			<?php } ?>
		</ul>

	</main>

	<footer class="l-footer">

		<div class="container">
			<div class="row">
				<div class="col col--2-4">
					<p>
						cursors.github.io is a list of your local computers cursors for use on the web. A trend that saves needless HTTP requests to symbolise an item. Make use of the computer.
					</p>
				</div>
				<div class="col col--1-4 col--last">
					<p>
						To contribute visit <a href="http://www.github.com/CHEWX/cursors.github.io" target="_blank">github</a>
					</p>
					<p>
						<a href="https://twitter.com/intent/tweet?text=A visual list of CSS Cursors - &url=https://cursors.github.io&via=CHEWX">Tweet</a> this.
					</p>
				</div>
			</div>
		</div>

	</footer>

	<!-- Google Analytics here -->


</body>
</html>