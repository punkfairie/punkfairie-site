<div class="gallery">
	<?php
		$credits = array('cinni'          => 'https://cinni.net/',
						 'key'            => 'https://keysklubhouse.neocities.org/',
						 'fairytrash'     => 'https://fairytrash.neocities.org/portal/oldweb.html',
						 'webcore-galore' => 'https://www.deviantart.com/webcore-galore',
						 'molly-stamps'   => 'https://www.deviantart.com/molly-stamps',
						 'murderawrz'     => 'https://www.deviantart.com/murderawrz',
						 'minecr-aft'     => 'https://www.deviantart.com/minecr-aft',
						 'gaarumageddon'  => 'https://www.deviantart.com/gaarumageddon',
						 'morecentipedes' => 'https://www.deviantart.com/morecentipedes/',
						 'gendercute'     => 'https://www.deviantart.com/gendercute',
						 'uzkost'         => 'https://www.deviantart.com/uzkost',
						 'fawntoy'        => 'https://www.deviantart.com/fawntoy',
						 'antikrist'      => 'https://antikrist.neocities.org/');

		foreach ($credits as $author => $link) {
			foreach (glob('img/blinks/' . $author . '/*.*') as $img) {
				echo "<a href='" . $link . "' target='_blank'>";
					echo "<img src='" . $img . "'>";
				echo "</a>";
			}
		}
	?>
</div>