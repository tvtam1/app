<!--   product  -->

<?php 
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['product_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
    $in_cart = $Cart->getCartId($product->getData('cart')) ;
    $item_id = $_GET['item_id']??0;
    foreach ($product->getData() as $item){
        if($item['item_id']==$item_id){
            
 ?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image']?? "./assets/products/nikerun1.png"; ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                    </div>
                    <div class="col">
                      <form method="post">
                          <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                          <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                          <?php
                            if (in_array($item['item_id'],$in_cart ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="product_submit" class="btn btn-warning form-control">Add to Cart</button>';
                            }
                            ?>

                      </form>
                    </div>                        
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name']??"Unknown"; ?></h5>
                <small> by <?php echo $item['item_brand']??"Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                      </div>
                      <a href="#" class="px-2 font-rale font-size-14">53 ratings | 10+ answered questions</a>
                </div>
                <hr class="m-0">

                <!---    product price       -->
                    <table class="my-3">
                        <tr class="font-rale font-size-14">
                            <td>Deal Price:</td>
                            <td class="font-size-20 text-danger"><span><?php echo $item['item_price']??'0'; ?>K</span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                        </tr>
                    </table>
                <!---    !product price       -->

                 <!--    #policy -->
                    <div id="policy">
                        <div class="d-flex">
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-truck  border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-rale font-size-12">Daily Tuition <br>Deliverd</a>
                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                            </div>
                        </div>
                    </div>
                  <!--    !policy -->
                    <hr>

                 <div class="row">
                     <div class="col-6">
                            <!-- color -->
                                <div class="color my-3">
                                  <div class="d-flex justify-content-between">
                                    <h6 class="font-baloo">Color:</h6>
                                    <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                  </div>
                                </div>
                            <!-- !color -->
                     </div>
                     <div class="col-6">
                      <!-- size -->
                    <div class="size my-3">
                        <label for="size">Size:</label>
                        <input type="text" id="size" name="size"><br><br>
                    </div>
                <!-- !size -->
                     </div>
                 </div>

                


            </div>

            <div class="col-12">
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p class="font-rale font-size-14">Wait, I need to do something here by add a column description in the product table and then display it here </p>
                
            </div>
        </div>
    </div>
</section>

<?php }}  ?>
<!--   !product  -->