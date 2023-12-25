{** block-description:description **}

{if $product.full_description}
    <div {live_edit name="product:full_description:{$product.product_id}"}>{$product.full_description nofilter} </div>
{elseif $product.short_description}
    <div {live_edit name="product:short_description:{$product.product_id}"}>{$product.short_description nofilter}</div>
{/if}

{if $product.full_second_description}
    <div {live_edit name="product:full_second_description:{$product.product_id}"}>{$product.full_second_description nofilter}</div>
{elseif $product.short_description}
    <div {live_edit name="product:short_description:{$product.product_id}"}>{$product.short_description nofilter}</div>
{/if}
