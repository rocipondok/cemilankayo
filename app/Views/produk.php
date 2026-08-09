<?= $this->extend('navbar');?>

<?= $this->section('isi');?>
<!-- 		
		<div class="container">
	<div class="row">
<div class="col"> -->
Ini Halaman Produk

<tbody>

   
      <div class="row row-cols-1 row-cols-md-3 g-4">
    <!-- <tr> -->
      
        <?php foreach($produk as $b):?> 

       <div class="card h-45 " >
      <img src="/public/<?=$b['slug'];?>.png" class="card-img-top" width ="133">
      <div class="card-body">
        <h4 class="card-title"><?=$b['nmproduk'];?> </h4>
        <h4 class="card-text">Harga <?=$b['hrgproduk'];?></h4>
          <?php foreach($toko as $c):?> 
      <a href="https://wa.me/<?=$c['notelp'];?>" class="btn btn-success"?> Order Barang</a> <?php endforeach; ?>
           </div>

      <div class="card-footer">
        <small class="text-body-secondary">Last updated <?=$b['updated_at'];?></small>
      </div>

    </div>
      <?php endforeach; ?>
  </div>

<!-- </tr> -->

  </tbody>
<!-- <div class="row row-col-10 row-cols-md-3 g-4">
  	<?php foreach($produk as $b) :?>
 <div class="card">
      <img src="<?=$b['slug'];?>.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $b['nmproduk'];?></h5>
        <h5 class="card-text"><?= $b['hrgproduk'];?></h5>
      </div>
    <?php endforeach; ?> 
    </div>
  </div>   
 -->



<!-- </div>
	</div>
		</div> -->
	<?= $this->endSection();?>
