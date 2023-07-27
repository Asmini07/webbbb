<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">
<div class="header">
   <h2>
      Tambah Pembelian
   </h2>

   </div>
   <label for="">Tanggal</label>
   <div class="form-group">
      <div class="form-line">
         <input type="date" name="tanggal" class="form-control" />
      </div>
  
                                             
         </select>
      </div>
   </div>
   <label for="">Kode Barcode</label>
   <div class="form-group">
      <div class="form-line">
         <select name="kode_barcode" id="kode_barcode" class="form-control" required="" >
            <option value="">-- Pilih  --</option>
            <?php 
               $sql = $koneksi->query("select * from tb_barang");
               
               while ($data = $sql->fetch_assoc()) {
                 echo '<option value="'.$data['kode_barcode'].'">'
                               .$data['kode_barcode'].'</option>';
               
               } ?>                                 
         </select>
      </div>
   </div>
   <label for="">Jumlah Beli</label> 
   <div class="form-group">
      <div class="form-line">
         <input type="number" name="stok" class="form-control" />
      </div>
   </div>
   <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
</form>
<?php 
   if (isset($_POST['simpan'])) {
    $tanggal = $_POST['tanggal'];
   
    $kode_barcode = $_POST['kode_barcode'];
     $stok = $_POST['stok'];
   
   
   $sql = $koneksi->query("insert into tb_pembelian (nofaktur,tanggal,nama_supplier,kode_barcode,stok) values('$nofaktur','$tanggal','$nama_supplier','$kode_barcode','$stok')");
   
   
   $id = mysqli_insert_id($koneksi);
   $barang =  $koneksi->query("select * from tb_pembelian where id='$id'");
   
   
   while ($data_madu = $madu->fetch_assoc()) {
   
     $koneksi->query("UPDATE tb_madu SET stok=stok +'$data_madu[stok]' WHERE kode_barcode='$data_madu[kode_barcode]'");
   
   }
   
   if ($sql) {
    ?>
<script type="text/javascript">
   alert("Data Berhasil di Simpan");
   window.location.href="?page=pembelian";
</script>
<?php
   }
   }
   ?>