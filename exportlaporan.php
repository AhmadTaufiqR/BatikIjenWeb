<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT pesanan.id_pesanan, tb_pengguna.nama_lengkap, pesanan.tanggal_pesanan, pesanan.status_pesanan, pesanan.total FROM pesanan JOIN tb_pengguna ON pesanan.id_pengguna = tb_pengguna.id_pengguna where pesanan.status_pesanan = 'selesai';");
?>
<html>

<head>
    <title>Export File Laporan </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container">
        <h2>Laporan</h2>
        <h4>Pesanan Selesai</h4>
        <div class="data-tables datatable-dark">

            <table class="table text-start align-middle table-bordered table-hover mb-0" id="mauexport" >
                <thead>
                    <tr class="text-dark">
                        <th class="text-center">No.</th>
                        <th class="text-center">Nama Pembeli</th>
                        <th class="text-center">Tanggal Pesanan</th>
                        <th class="text-center">Status Pesanan</th>
                        <th class="text-center">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($query)) { ?>
                        <?php while ($row = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td class="text-center"><?php echo $row['id_pesanan'] ?></td>
                                <td class="text-center"><?php echo $row['nama_lengkap'] ?></td>
                                <td class="text-center"><?php echo $row['tanggal_pesanan'] ?></td>
                                <td class="text-center"><?php echo $row['status_pesanan'] ?></td>
                                <td class="text-center"><?php echo $row['total'] ?></td>
                                <div class="d-grid gap-2">

                                    <!-- Footer Start -->
                        </tr>
                                </div>
                                <!-- Footer End -->
        </div>
        <!-- Content End -->

    <?php } ?>
<?php } ?>
</tr>
</tbody>

    </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#mauexport').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>