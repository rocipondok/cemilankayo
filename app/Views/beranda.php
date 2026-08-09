<?= $this->extend('navbar');?>

<?= $this->section('isi');?>
		
 <h1> <?= $judul; ?></h1>
		<div class="container">
	<div class="row">
<div class="col">
<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="umkm.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="umkm1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="umkm2.png" class="d-block w-100" alt="...">
    </div>
  <div class="carousel-item">
      <img src="umkm4.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
	</div>
		</div>
    <div class="container">
  <div class="row">
<div class="col">
   <div class="card">
  <div class="card-body">
    <h5 class="card-title">Memajukan Usaha UMKM</h5>
    <p class="card-text">UMKM adalah Kegiatan yang mendukung pertumbuhan ekonomi paling besar dari Rakyat Indonesia, maka sudah sepatutnya kita warga yang baik senantiasa mendukung usaha-usaha Mereka. Untuk menuju Indonesia yang lebih maju dan lebih sejahtera</p>
    
  </div>
  <img src="umkm3.png" class="card-img-bottom" alt="...">
</div>
</div>
  </div>
    </div>

	<?= $this->endSection('isi');?>
