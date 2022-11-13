<div class="gallery">
	<?php
		$credits = array('cinni'             => 'https://cinni.net/',
						 'panstarry'         => 'https://www.deviantart.com/panstarry',
						 'rogue-ranger'      => 'https://www.deviantart.com/rogue-ranger',
						 'virus-xenon'       => 'https://www.deviantart.com/virus-xenon',
						 'kittyjewelpet78'   => 'https://www.deviantart.com/kittyjewelpet78',
						 'dustyhyena'        => 'https://www.deviantart.com/dustyhyena',
						 'sugary-stardust'   => 'https://www.deviantart.com/sugary-stardust',
						 'tamriei'           => 'https://www.deviantart.com/tamriei',
						 '100ghosts'         => 'https://www.deviantart.com/100ghosts',
						 'dameinatrix'       => 'https://www.deviantart.com/dameinatrix',
						 'nyanfuw'           => 'https://www.deviantart.com/nyanfuw',
						 'skystamps'         => 'https://www.deviantart.com/skystamps',
						 'hyper--drunk'      => 'https://www.deviantart.com/hyper--drunk',
						 'stampmakerlkj'     => 'https://www.deviantart.com/stampmakerlkj',
						 'beepudding'        => 'https://www.deviantart.com/beepudding',
						 'princessskyler'    => 'https://www.deviantart.com/princessskyler',
						 'buniis'            => 'https://www.deviantart.com/buniis',
						 'goredoq'           => 'https://www.deviantart.com/goredoq',
						 'ufocatchers'       => 'https://www.deviantart.com/ufocatchers',
						 'stitchlovergirl96' => 'https://www.deviantart.com/stitchlovergirl96',
						 'midousujii'        => 'https://www.deviantart.com/midousujii',
						 'molly-stamps'      => 'https://www.deviantart.com/molly-stamps',
						 'glittersludge'     => 'https://www.deviantart.com/glittersludge',
						 'amekin'            => 'https://www.deviantart.com/amekin',
						 'stratosqueer'      => 'https://www.deviantart.com/stratosqueer',
						 'puppystamps'       => 'https://www.deviantart.com/puppystamps',
						 'turbuggy'          => 'https://www.deviantart.com/turbuggy',
						 'aestheticstamps'   => 'https://www.deviantart.com/aestheticstamps',
						 'kittyjewelpet74'   => 'https://www.deviantart.com/kittyjewelpet74',
						 'king-lulu-deer'    => 'https://www.deviantart.com/king-lulu-deer',
						 'r0se-designs'      => 'https://www.deviantart.com/r0se-designs',
						 'aomiarmster'       => 'https://www.deviantart.com/aomiarmster',
						 'nerdy-pixel-girl'  => 'https://www.deviantart.com/nerdy-pixel-girl',
						 'crystalstamps'     => 'https://www.deviantart.com/crystalstamps',
						 'fairytrash'        => 'https://fairytrash.neocities.org/portal/oldweb.html',
						 'antikrist'         => 'https://antikrist.neocities.org/');

		foreach ($credits as $author => $link) {
			foreach (glob('img/stamps/' . $author . '/*.*') as $img) {
				echo "<a href='" . $link . "' target='_blank'>";
					echo "<img src='" . $img . "'>";
				echo "</a>";
			}
		}
	?>
</div>