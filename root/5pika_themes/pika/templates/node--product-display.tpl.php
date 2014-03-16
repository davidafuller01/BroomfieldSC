<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php

    hide($content['comments']);

    hide($content['links']);

    hide($content['field_product_image']);

    hide($content['field_product_dimensions']);

    hide($content['field_type_of_product']);;

    hide($content['product:commerce_price']);

	hide($content['field_product_images_more_images']);

	hide($content['field_display_on_front_page']);

    hide($content['product:field_product_size']);

    hide($content['product:field_product_color']);

	hide($content['product:commerce_stock']);

	hide($content['product:field_product_image']);

	hide($content['product:field_product_dimensions']);

	hide($content['product:field_product_weight']);

	hide($content['product:sku']);

	hide($content['product:commerce_stock_override']);

	

	

	$field_product_images_more_images = field_get_items('node', $node, 'field_product_images_more_images');

	$field_product_images = field_get_items('node', $node, 'product:field_product_image');

?>



  

  <div class="row">

    <div class="six columns">

     <?php if (!empty($content['field_product_images_more_images'][0])): ?>
<div id="slider" class="flexslider">
      <ul class="slides">
        <?php foreach ($field_product_images_more_images as $img): ?>
        <li>
          <?php $img_view = file_create_url($img['uri']); ?>

          <a rel="gallery-node-<?php $node->nid; ?>" class="colorbox init-colorbox-processed cboxElement" title="<?php print $img['title'];?>" href="<?php print $img_view; ?>"> <?php print theme('image_style', array('style_name' => 'product-images', 'path' => $img['uri'])); ?> </a></li>

        <?php endforeach; ?>
      </ul>
    </div>

    




    <?php else:?>



<?php print render($content['product:field_product_image']);  ?>

       

    <?php endif;?>
</div>

    <div id="split" class="six columns split">

    

      <h3><?php echo $title; ?></h3>  

	  <?php print render($content['body']); ?>  

      <div style="border-top:1px solid #EAEAEA; padding-bottom:7px; margin-top:10px;"></div>

	  <h3><?php print render($content['product:commerce_price']); ?></h3>

	  <strong><?php print t("In stock left");?></strong><br />

	  <?php print render($content['product:commerce_stock']); ?>

      <?php print render($content);?>     

    </div>



</div>
</div>

<br />

