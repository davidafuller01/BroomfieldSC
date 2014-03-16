

<?php $image = $fields['field_product_image']->content; $title = $fields['title']->content;  $price = $fields['commerce_price']->content;  ?>
   <li>
   	   <div style="border:1px solid #CCC; padding:1px;">
            <div style="margin-bottom:-6px;"><?php  print $image;?></div>
		<div class="product-title-latest"><?php print $title;?></div>
      <div><div style="text-align:center; background-color:#EFEFEF; color:#666"><?php print $price;?></div>
      </div>
      </li>
 

