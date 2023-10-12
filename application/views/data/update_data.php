       <!-- partial -->
       <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Update Data </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Edit</a></li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit</h4>
                    <form action="<?= base_url('pesen/update_data')?>" method="post"> 
                    <?php
                       $message = $this->session->flashdata('message');

                       if($message == "success"){
                  ?>
                           <script>alert('berhasil memasukan data')</script>
                  <?php
                       };
                  ?>   
                      <div class="form-group">
                        <label for="exampleInputName1">Nama Konsumen</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="nama_konsumen">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Nama Barang</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="nama_barang">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Jumlah Barang</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="jumlah_barang">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Tanggal Pemesanan</label>
                        <input type="date" class="form-control" id="exampleInputPassword4" name="tanggal_pemesanan">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Tanggal Pengambilan</label>
                        <input type="date" class="form-control" id="exampleInputPassword4" name="tanggal_pengambilan">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Jam Pengambilan</label>
                        <input type="time" class="form-control" id="exampleInputPassword4" name="jam_pengambilan">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          