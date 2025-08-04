<div class="product_lists">
    <?php 
    require($_SERVER["DOCUMENT_ROOT"]."/VK-ECOMMERCE/db.php"); 
    require($_SERVER["DOCUMENT_ROOT"]."/VK-ECOMMERCE/functions.php");
    $products = fetchProducts($con);
    while($product = mysqli_fetch_assoc($products)){
    ?>
    <div class="product_card">
        <div class="card_header">
            <img src="<?php echo fetchProductImages($con,$product["product_id"]); ?>"/>
            <strong style="font-size:20px;"><?php echo $product["name"]; ?></strong>
        </div>
        <div class="card_body">
            <p><?php echo $product["price"]; ?></p>
            <i class="fa fa-star" style="color: orange;"></i>
            <i class="fa fa-star" style="color: orange;"></i>
            <i class="fa fa-star" style="color: orange;"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <div class="card_footer">
            <button class="add_to_cart_btn">Add to Cart</button>
            <a href="">Buy Now</a>
        </div>
    </div>
    <?php } ?>
</div>