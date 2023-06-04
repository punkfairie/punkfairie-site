<div class="gallery">
	<?php
		$credits = array('key'           => 'https://keysklubhouse.neocities.org/',
						 'GIFCollection' => 'https://cyber.dabamos.de/88x31/');

		foreach ($credits as $author => $link) {
			foreach (glob('img/buttons/' . $author . '/*.*') as $img) {
				echo "<a href='" . $link . "' target='_blank'>";
					echo "<img src='" . $img . "'>";
				echo "</a>";
			}
		}
	?>
</div>