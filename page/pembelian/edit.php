<?php 
  $id = $_GET['id'];
  $sql = $koneksi->query("select * from tb_pembelian where id='$id'");
  $tampil = $sql->fetch_assoc();

?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Data Pembelian 
                                
                            </h2>
          </div>
          <div class="body">
                        <form method="POST">


                            <label for="">Tanggal</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" name="tanggal" value="<?php echo $tampil['tanggal']?>" class="form-control" />
                                </div>
                            </div>


                           
                                       
                                       <?php 

                                    
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
                                    <input type="number" name="stok" value="<?php echo $tampil['stok']?>" class="form-control" />
                                </div>
                            </div>
                         

                           <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

                        </form>

           <?php 

            if (isset($_POST['simpan'])) {
             
              $tanggal = $_POST['tanggal'];
             
              $kode_barcode = $_POST['kode_barcode'];
              $stok = $_POST['stok'];
            

            $sql = $koneksi->query("update  tb_pembelian  set nofaktur='$nofaktur', tanggal='$tanggal', nama_supplier='$nama_supplier',kode_barcode='$kode_barcode',stok='$stok' where id='$id'");

            if ($sql) {
              ?>

              <script type="text/javascript">
                alert("Data Berhasil di Edit");
                window.location.href="?page=pembelian";
              </script>


              <?php
            }
    }
     ?>