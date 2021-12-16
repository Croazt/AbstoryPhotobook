<?php
$conn = new mysqli("localhost","root","","abstory");

function query($query){
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows = array();
    $index=0;
    while( $row= mysqli_fetch_assoc($result)){
        $rows[$index] = $row;
        $index++;
    }
    return $rows;
}

function cari($keyword){
    $query="Select * from produk where
            nama like '%$keyword%'";
    return query($query);
}

$keyword=$_GET["keyword"];
$query="Select * from produk where nama like '%$keyword%' or in_currency like '%$keyword%' or harga like '%$keyword%'";
$products = query($query);
$counter=0;?>


<?php foreach ($products as $product): ?>
  <?php if($counter%3==0){?>
                <div class="row">

                <?php 
              } $counter++;?>

                  <div class="col-4 col-md-4 col-lg-4">
                    <div class="card">
                      <div class="card-header">
                      <a href='/addtocart/<?= $product["id"]; ?>'><img class="product" src='images/<?= $product["imageurl"]; ?>'></a>
                     </div>
                     <div class="card-body">
                       <h6><?= $product["in_currency"]; ?></h6>
                        <p><?= $product["nama"]; ?></p>
                      </div>

                    </div>
                  </div>
                <?php if($counter%3==0){?>
                  </div>
                <?php }?>            
<?php endforeach; ?>

            <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form>
                      <div class="modal-body">
                        <div class="form-group row">
                          <label for="nama" class="col-sm-2 col-form-label">Product name</label>
                          <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="email@example.com">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="harga" class="col-sm-2 col-form-label">Price</label>
                          <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="Rp. 500.000,-">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                          <div class="col-sm-10">
                          <input type="number" value="1" min="1" max="1000" step="1">
                          </div>
                        </div>
                        Add this product to your cart?
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Wait</button>
                      <button type="button" class="btn btn-outline-dark">Sure!</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>   
            </div>
            <br>
          </div>


          
