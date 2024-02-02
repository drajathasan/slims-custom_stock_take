<?php
/**
 * Plugin Name: Custom Stock Take
 * Plugin URI: -
 * Description: Modifikasi proses stock take
 * Version: 1.0.0
 * Author: Drajat Hasan
 * Author URI: https://t.me/drajathasan
 */
use SLiMS\Plugins;

Plugins::getInstance()->registerMenu('stock_take', __('Initialize'), __DIR__ . '/init.php');