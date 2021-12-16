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
$keyword=$_GET["keyword"];
$query="SELECT * FROM produk";
$products = query($query);
foreach($products as $key => $value){
    echo $key . " : " . $value . "<br>";
}
?> 

foreach ($products as $product){         
<div class="col-4 col-md-4 col-lg-4" id="container">
                    <div class="card">
                      <div class="card-header">
                        <img class="product" src='{{ $product->imageurl }}' action="index.html">
                      </div>
                      <div class="card-body">
                        <h6>{{ $product->in_currency }}</h6>
                        <p>{{ $product->nama }}</p>
                      </div>
                    </div>
                  </div>
}

