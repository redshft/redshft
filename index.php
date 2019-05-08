<!DOCTYPE html>
<html lang="en"> 
<head>
<meta charset="utf-8">
<title>title</title>
<!--Link an external style sheet-->
<link href="css/styles.css" rel="stylesheet">
<style> 
	main { max-width: 1500px; }
	section { max-width: 1000px; margin: 10px auto; padding: 0 20px; }
</style>
</head>
<!-- body -->
<body>
<main>
<section>
	<?php include("header.php); ?>")
	<article>
		<h2>Heading 2</h2>
		<p>The template contains most used HTML5 elements.
		</p>
		<figure>
			<img src="http://b.parsons.edu/~dejongo/12-fall/stuff/01-blocks.gif" alt="blocks" />
			<figcaption>Blocks</figcaption>
		</figure>
	</article>	
	<footer>
		<hr>
		<p>Resources
		<ul>
			<li> HTML <a href="http://b.parsons.edu/~dejongo/01-writing-html5/#inline_elements"  target="_blank">inline</a> and <a href="http://b.parsons.edu/~dejongo/01-writing-html5/#block_elements"  target="_blank">block</a> elements. 
			<li> Writing <a href="http://b.parsons.edu/~dejongo/03-the-mechanics-of-css/" target="_blank">CSS</a>, <a href="http://b.parsons.edu/~dejongo/03-applying-css/"  target="_blank">examples</a>, <a href="http://b.parsons.edu/~dejongo/04-the-layout-modes/" target="_blank">layout</a> and <a href="http://b.parsons.edu/~dejongo/05-styling-the-navigation/" target="_blank"> styling the navigation</a> 
			<li><a href="https://validator.w3.org" target="_blank">Validate your page</a>
		</ul>
	</footer>
</section>
</main>
</body>	
</html>
