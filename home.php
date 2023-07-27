<?php
$sql= $koneksi->query("select * from tb_barang");
while ($tampil = $sql->fetch_assoc()) {
    $jumlah_barang = $sql->num_rows;
}
?>
        <div class="container-fluid">
            <div class="block-header">
                <h2><b><u>SELAMAT DATANG DI PENJUALAN MADU </b></u></h2>
                

            </div>
            <div class="container-fluid">
            <div class="block-header">
                <h2><b>Layanan</b></h2>

            </div>
            <div class="container-fluid">
            <div class="block-header">
                <h2><b>Jenis-jenis Madu</b> </h2>

            </div>
            <div class="container-fluid">
            <div class="block-header">
                <h2><b>Madu Kelanceng</b> </h2>
                <h2>>>Meningkatkan kekebalan tubuh</h2>
                <h2>>>Anti bakteri</h2>
                <h2>>>Sebagai Obat untuk penyakit gula, jantung, stroke, dll</h2>
                <h2>
            </div>
            <div class="container-fluid">
            <div class="block-header">
                <h2><b>Madu Lebah</b> </h2>
                <h2>>>Pengobatan tradisional</h2>
                <h2>>>Anti bodi</h2>
                <h2>>>Penghambat pertumbuhan sel kanker (tumor), dll</h2>
            </div>
            </div>
            </div>
        </section>
    </div>
               