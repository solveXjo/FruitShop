<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        '@web/assets/img/favicon.png',
        "https://fonts.googleapis.com/css?family=Open+Sans:300,400,700",
        "https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap",
        '@web/assets/css/all.min.css',
        '@web/assets/bootstrap/css/bootstrap.min.css',
        '@web/assets/css/owl.carousel.css',
        '@web/assets/css/magnific-popup.css',
        '@web/assets/css/animate.css',
        '@web/assets/css/meanmenu.min.css',
        '@web/assets/css/main.css',
        '@web/assets/css/responsive.css',
    ];
    public $js = [
        '@web/assets/js/jquery-3.6.0.min.js',
        '@web/assets/bootstrap/js/bootstrap.bundle.min.js',
        '@web/assets/js/owl.carousel.min.js',
        '@web/assets/js/magnific-popup.min.js',
        '@web/assets/js/meanmenu.min.js',
        '@web/assets/js/wow.min.js',
        '@web/assets/js/main.js',
        '@web/assets/js/jquery.counterup.min.js',
        '@web/assets/js/jquery.waypoints.min.js',
        '@web/assets/js/jquery.nice-select.min.js',
        '@web/assets/js/jquery.slicknav.min.js',
        '@web/assets/js/jquery.scrollUp.min.js',
        '@web/assets/js/jquery.sticky.js',
        '@web/assets/js/jquery.form.js',
        '@web/assets/js/jquery.validate.min.js',
        '@web/assets/js/additional-methods.min.js',
        '@web/assets/js/contact.js',
        '@web/assets/js/mail-script.js',
        '@web/assets/js/jquery-1.11.3.min.js',
        '@web/assets/bootstrap/js/bootstrap.min.js',
        '@web/assets/js/jquery.countdown.js',
        '@web/assets/js/jquery.isotope-3.0.6.min.js',
        '@web/assets/js/waypoints.js',
        '@web/assets/js/owl.carousel.min.js',
        '@web/assets/js/jquery.magnific-popup.min.js',
        '@web/assets/js/jquery.meanmenu.min.js',
        '@web/assets/js/sticker.js',
        'assets/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
