<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\asset;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ThemeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    // public $baseUrl = '@theme';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        'theme/css/vendors_css.css',
        'theme/css/style.css',
        'theme/css/skin_color.css',
        'themecss/custom.css',
        'theme/css/css/dashboard5.css',
        'theme/css/responsive.html',
  

    ];
    public $js = [
    'theme/js/vendors.min.js',
    'theme/js/pages/chat-popup.js',
    'theme/assets/icons/feather-icons/feather.min.js',


    'theme/assets/vendor_components/raphael/raphael.min.js',
    'theme/assets/vendor_components/morris.js/morris.min.js',
    'theme/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js',
    'theme/assets/vendor_components/flexslider/jquery.flexslider.js',
    'theme/assets/vendor_plugins/bootstrap-slider/bootstrap-slider.js',
    'theme/assets/vendor_components/OwlCarousel2/dist/owl.carousel.js',
    'theme/assets/vendor_components/c3/c3.min.js',
    'theme/assets/vendor_components/c3/d3.min.js',



    'theme/js/demo.js',
    'theme/js/template.js',
    'theme/js/pages/dashboard5.js',
	
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap5\BootstrapAsset'
    ];
}
