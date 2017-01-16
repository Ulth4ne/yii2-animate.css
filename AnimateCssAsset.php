<?php
namespace ulth4ne\animatecss;

use yii\web\AssetBundle;

/**
 * Created by PhpStorm.
 * User: Ulth4ne
 * Date: 16.01.2017
 * Time: 17:17
 */
class AnimateCssAsset extends AssetBundle {
	public $sourcePath = '@bower/animate.css';

	public $css = [
		'animate.min.css',
	];
}