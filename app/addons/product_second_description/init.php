<?php

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

fn_register_hooks(
    'products:main'
);

function fn_my_custom_block_products_main(&$product, &$smarty, $auth)
{
    $product_id = !empty($product['product_id']) ? $product['product_id'] : 0;

    $product_second_description = db_get_field("SELECT product_second_description FROM ?:products_descriptions WHERE product_id = ?i", $product_id);

    $smarty->assign('product_second_description', $product_second_description);
}
