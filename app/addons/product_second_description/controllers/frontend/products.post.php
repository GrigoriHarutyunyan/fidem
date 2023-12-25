<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

fn_register_hooks(
    'products:product_data_pre',
    'products:product_details_tabs',
);

function fn_product_second_description_product_details_tabs(&$product, &$auth)
{
    Registry::get('view')->assign('product_second_description_tab', 'addons/product_second_description/views/products/components/product_second_description.tpl');
}
