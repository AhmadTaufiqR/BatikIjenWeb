<?php

include '../koneksi.php';


$keyword= $_GET["keyword"];

$dashboardTabel = mysqli_query($koneksi,"SELECT pesanan.id_pesanan, tb_pengguna.nama_lengkap, pesanan.tanggal_pesanan, pesanan.status_pesanan, pesanan.total ,detail_pesanan.sub_total FROM pesanan 
JOIN tb_pengguna 
ON pesanan.id_pengguna = tb_pengguna.id_pengguna  
JOIN detail_pesanan 
ON pesanan.id_pesanan=detail_pesanan.id_pesanan
WHERE tb_penggunan.nama_lengkap LIKE '%$keyword%'")

?>

<table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-dark">
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Pembeli</th>
                                            <th class="text-center">Tanggal Pesanan</th>
                                            <th class="text-center">Status Pesanan</th>
                                            <th class="text-center">Total</th>
                                            <th class="text-center">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (mysqli_num_rows($dashboardTabel)) { 
                                            while ($row = mysqli_fetch_array($dashboardTabel)) { ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $row['id_pesanan'] ?></td>
                                                    <td class="text-center"><?php echo $row['nama_lengkap'] ?></td>
                                                    <td class="text-center"><?php echo $row['tanggal_pesanan'] ?></td>
                                                    <td class="text-center"><?php echo $row['status_pesanan'] ?></td>
                                                    <td class="text-center"><?php echo $row['total'] ?></td>
                                                    <div class="d-grid gap-2">
                                                        <!-- Button trigger modal -->
                                                        <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalEditPesanan<?php echo $row['id_pesanan']; ?>" name="btn_edit" href="editpesanan.php?id_pesanan=?">Detail Produk</button>
                                                            <div class="modal fade" id="modalEditPesanan<?php echo $row['id_pesanan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                        </div>

                                                                        <form action="function/editpesanan.php" method="POST">
                                                                            <input type="hidden" name="no_pesanan" id="no_pesanan" value="<?php echo $row['id_pesanan'] ?>">
 
                                                                            <div class="modal-body">
                                                                                <div class="form-group col-md-25">
                                                                                    <div class="modal-body">
                                                                                        <div class="col-md-12">
                                                                                            <label for="nama_produk" class="form-label">Nama Produk</label>
                                                                                            <input type="nama_produk" class="form-control" id="nama_produk" value="<?php echo $row['sub_total'] ?>" name="nama_produk" disabled>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="col-md-12">
                                                                                            <label for="nama_produk" class="form-label">Nama Produk</label>
                                                                                            <input type="nama_produk" class="form-control" id="nama_produk" value="<?php echo $row['tanggal_pesanan'] ?>" name="nama_produk" disabled>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="col-md-12">
                                                                                            <label for="nama_produk" class="form-label">Nama Produk</label>
                                                                                            <input type="nama_produk" class="form-control" id="nama_produk" value="<?php echo $row['status_pesanan'] ?>" name="nama_produk" disabled>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="col-md-12">
                                                                                            <label for="nama_produk" class="form-label">Nama Produk</label>
                                                                                            <input type="nama_produk" class="form-control" id="nama_produk" value="<?php echo $row['total'] ?>" name="nama_produk" disabled>
                                                                                        </div>
                                                                                    </div>

                                                                                        
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-Secondary" data-bs-dismiss="modal">Close</button>
                                                                                
                                                                            </div>
                                                                        </form>

                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                        </tr>
                                    </tbody>

                                </table>