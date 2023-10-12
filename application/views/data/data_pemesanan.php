       <!-- partial -->
       <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <?php
                       $message = $this->session->flashdata('message');

                       if($message == "success"){
                  ?>
                      <script>alert('berhasil memasukan data')</script>
                  <?php
                       }
                       else if($message == "success update")
                       {
                       ?>
                       <script>alert('berhasil merubah data')</script>
                       <?php
                       }else if($message == "success delete")
                       {
                        ?>
                      <script>alert('berhasil menghapus data')</script>
                      <?php
                       }
                       ?>
                  <div class="card-body">
                    <h4 class="card-title">Daftar Penjualan</h4>
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Konsumen</th>
                          <th>Nama Barang</th>
                          <th>Jumlah</th>
                          <th>Tanggal</th>
                          <th>Jam</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                    $L = 1;
                      foreach($data as $d) :
                    ?>
                      <tr>
                        <td><?= $L ?></td>
                        <td><?= $d->nama_konsumen ?></td>
                        <td><?= $d->nama_barang ?></td>
                        <td><?= $d->jumlah_barang ?></td>
                        <td><?= $d->tanggal_pengambilan ?></td>
                        <td><?= $d->jam_pengambilan ?></td>
                        <td><label class="badge badge-success">Sukses</label></td>
                        <td>
                            <a href="<?= base_url()?>pesen/update_pemesanan?id=<?= $d->id ?>" type="button" class="btn btn-warning">
                            <i class="fas fa-pencil-alt"></i></a>
                            <a href="<?= base_url()?>pesen/delete_data?id=<?= $d->id ?>" type="button" class="btn btn-danger">
                            <i class="fas fa-trash"></i></a>
                        </td>
                      </tr>                            
                    <?php
                      $L++;
                      endforeach;
                    ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
          <!-- content-wrapper ends -->