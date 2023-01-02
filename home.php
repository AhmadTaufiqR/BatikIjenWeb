<?php
if ($_GET['modul'] == 'home') {
?>
    <div class="head-title">
        <div class="left">
            <h1>Dashboard</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Home</a>
                </li>
            </ul>
        </div>
        <a href="#" class="btn-download">
            <i class='bx bxs-cloud-download'></i>
            <span class="text">Download PDF</span>
        </a>
    </div>

    <ul class="box-info">
        <li>
            <i class='bx bxs-calendar-check'></i>
            <span class="text">
                <h3>5</h3>
                <p>Kategori Produk</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-shopping-bag-alt'></i>
            <span class="text">
                <h3>2</h3>
                <p>Produk Terbaru</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-message-dots'></i>
            <span class="text">
                <h3>2</h3>
                <p>Produk Terpopuler</p>
            </span>
        </li>
    </ul>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Pesanan Terbaru</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Date Order</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <img src="img/people.png">
                    <p>Supratman</p>
                    </td>
                    <td>01-10-2021</td>
                    <td><span class="status completed">Completed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        </li>
        </ul>
    </div>
    </div>
<?php

} else if ($_GET['modul'] == 'pesanan') {
    include "modul/pesanan/pesanan.php";
} else if ($_GET['modul'] == 'tokosaya') {
    include "modul/tokosaya/tokosaya.php";
} else if ($_GET['modul'] == 'produk') {
    include "modul/produk/produk.php";
} else if ($_GET['modul'] == 'laporan') {
    include "modul/laporan/laporan.php";
}

?>