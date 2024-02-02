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

// check if there is any active stock take proccess
$stk_query = \SLiMS\DB::getInstance('mysqli')->query('SELECT * FROM stock_take WHERE is_active=1');
if ($stk_query->num_rows < 1) {
    Plugins::getInstance()->registerMenu('stock_take', __('Initialize'), __DIR__ . '/init.php');
}
