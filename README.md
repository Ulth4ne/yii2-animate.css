# yii2-animate.css
AssetBundle for http://daneden.github.io/animate.css/

## Installation

####Composer

```
$ php composer.phar require ulth4ne/yii2-animate.css "dev-master"
```

or add

```
"ulth4ne/yii2-animate.css": "dev-master"
```

to the ```require``` section of your `composer.json` file.

## Usage

in view (for example: ```@app/views/layouts/main.php```)

```php
// ...
use ulth4ne\animatecss\AnimateAsset;
// ...
AnimateAsset::register($this);
```

or add to your ```assets/AppAsset.php```

```php
public $depends = [
    // ...
    'ulth4ne\animatecss\AnimateAsset',
];
```
