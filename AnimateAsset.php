<?php
/**
 * Created by PhpStorm.
 * User: Ulth4ne
 * Date: 16.01.2017
 * Time: 22:23
 */

namespace ulth4ne\animatecss;

use yii\web\AssetBundle;

class AnimateAsset extends AssetBundle {
	public $sourcePath = '@vendor/ulth4ne/yii2-animate.css';

	public $js = [
		'js/animate.css.js',
	];

	public $depends = [
		'ulth4ne\animatecss\AnimateCssAsset',
	];
}