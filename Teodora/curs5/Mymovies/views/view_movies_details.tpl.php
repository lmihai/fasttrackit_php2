<style>

h1, h2, h3,  {
	text-align: center;
}


hr{
    border: 0;
    height: 1px;
    background: #333;
    background-image: linear-gradient(to right, #ccc, #333, #ccc);
}
.img {
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

<div class="img">
	<h1><?php print($movies_details['title']); ?></h1>

	<h2><?php print($movies_details['year']); ?></h2>
	<hr>


<img src="<?php print($movies_details['poster']); ?>">
</div>	

