<div class="col-md-3">
        <div class="card">
            <a href="<?php echo BASE_URL; ?>views/product/product.php ?id=<?php echo $product["id"]; ?>">
            <img src="<?php echo BASE_URL. $product["image_url"]; ?>" class="card-img-top mx-auto" alt="Product 1" style="height:300px;width:300px">
            </a>
            <div class="card-body text-center">
            <h5 class="card-title"><?php echo $product["product_name"]?></h5>
                <p class="card-text">Php <?php echo number_format($product["unit_price"],2); ?></p>
                <xa href="#" class="btn btn-success">Add to Cart</xa>
            </div>
        </div>
    
</div>