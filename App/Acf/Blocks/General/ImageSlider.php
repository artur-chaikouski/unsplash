<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class ImageSlider implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'image_slider',
				'Image slider',
				'Image slider',
				'blocks/image-slider.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Image slider",
					'description' => "Image slider"
				),
				'image',
				'custom'
			)
		);
	}
}