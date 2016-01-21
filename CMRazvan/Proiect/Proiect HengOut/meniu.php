
					<ul>
						<li><a href='index.php'>Acasa</a></li>
						<li><a  href='propuneri.php'>Propuneri</a></li>
							<ul style='float:right;list-style-type:none;'>
								<li><a href='despre.php'>Despre</a></li>
								<li><a href='cont.php'>Cont</a></li>

	<?php if (!isset($_SESSION['id'])){
echo "<li><a href='connectare.php'>Conectare</a></li>";
}else {
echo "<li><a href='deconectare.php'>Deconectare</a></li>";
}
?>
								


							</ul> 
					</ul>