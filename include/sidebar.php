<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="dashboard.php" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i></i>Sanggar Batik</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/fotoprofil.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Rizki Farhan </h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="dashboard.php" class="nav-item nav-link <?php if($page =="dashboard"){echo "active";}?>">
            <!-- <a href="dashboard.php" class="nav-item nav-link"> -->
            <i class="fa fa-tachometer-alt me-2"> 
            </i>Dashboard</a>
            <div class="nav-item dropdown">
            </div>
            <a href="pesanan.php" class="nav-item nav-link <?php if($page =="pesanan"){echo "active";}?>">
                <i class="fa fa-table shop me-2"></i>Pesanan</a>

            <a href="tokosaya.php" class="nav-item nav-link <?php if($page =="tokosaya"){echo "active";}?>">
                <i class="fa fa-home me-2"></i>Toko Saya</a>

            <a href="produkkami.php" class="nav-item nav-link <?php if($page =="produk"){echo "active";}?>">
                <i class="fa fa-th me-2"></i>Produk Kami</a>

            <a href="laporan.php" class="nav-item nav-link <?php if($page =="report"){echo "active";}?>">
                <i class="fa fa-chart-bar me-2"></i>Laporan</a>
            <div class="nav-item dropdown">
            </div>
        </div>
    </nav>
</div>