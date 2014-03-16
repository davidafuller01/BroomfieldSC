

<?php $image = $fields['field_product_image']->content; $title = $fields['title']->content;  $price = $fields['commerce_price']->content;  ?>
   <li>
   	   <div style="border:1px solid #CCC; padding:1px;">
            <div style="margin-bottom:-6px; position:relative;"><?php  print $image;?><div class="product-price-latest"><?php print $price;?></div></div>
      <div class="product-title-latest"><?php print $title;?></div>
      </li>
 

