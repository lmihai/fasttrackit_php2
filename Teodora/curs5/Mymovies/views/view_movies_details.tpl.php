<style>
	.details {
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	color: #333;
	width: 700px;
		
}
a {
	color: #333;
}
img {
	margin-top: 20px;
	
}
hr{
    border: 0;
    height: 1px;
    background: #333;
    background-image: linear-gradient(to right, #ccc, #333, #ccc);
}
p {
	text-align: center;

}
a {
	color: #333;
	font-size: 24px;
}
a:hover {
	color: blue;
}
</style>

<div class = "details">

<h1><?php print($movies_details['title']); ?></h1>
	
<h2><?php print($movies_details['year']); ?></h2>
<hr>
<img src="<?php print($movies_details['poster']); ?>">
</div>
<p><a href="index.php">Back to movies</a></p>
