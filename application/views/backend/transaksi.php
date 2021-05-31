<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <?php if ($this->session->flashdata('message')) echo $this->session->flashdata('message'); ?>



<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Transaksi</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <p class="text-muted font-13 m-b-30">
                        <!-- button tambah -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#transaksi">Tambah </button>
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Lapangan</th>
                          <th>Nama Pelanggan</th>
                          <th>No Telepon</th>
                          <th>Tanggal</th>
                          <th>Jam</th>
                          <th>Waktu</th>
                          <th>Total</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php $i = 1;?>
                        <?php foreach($transaksi as $p) : ?>
                        <tr>
                          <th scope="row"> <?= $i ?> </th>
                          <td><?= $p['nama_lapangan'] ;?></td>
                          <td><?= $p['nama_pelanggan'] ;?></td>
                          <td><?= $p['no_telepon'] ;?></td>
                          <td><?= $p['tanggal'] ;?></td>
                          <td><?= $p['jam'] ;?></td>
                          <td><?= $p['waktu'] ;?></td>
                          <td><?= $p['total'] ;?></td>
                          <td><?= $p['id_konfirmasi'] ? ( $p['status'] == "Belum Konfirmasi" ? $p['status']." Admin" : $p['status'] ): $p['status'] ;?> </td>
                          <td>
                          <a class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit<?= $p['id_transaksi']; ?>"> Edit </i></a>
                                 <a href="<?= base_url('Admin/hapustransaksi/' . $p['id_transaksi']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Transaksi <?= $p['nama_lapangan']; ?> Ingin Dihapus ?');" class="badge badge-danger" data-placement="top"> Hapus</i></a>
                                <?php if($p['status'] == "Belum Konfirmasi" ){ ?>
                                 <a class="btn btn-info btn-xs" data-toggle="modal" data-target="#konfirmasi<?= $p['id_transaksi']; ?>"> Konfirmasi </i></a>
                                <?php } ?>
                                 </td>
                        </tr>
                        <?php $i++;?>
                        <?php endforeach;?>
                        
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
      
              </div>
        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="transaksi" tabindex="-1" role="dialog" aria-labelledby="newTransaksiModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="newTransaksiModalLabel">Tambah transaksi</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <form action="<?= base_url('Admin/transaksi'); ?>" method="post">
                         <div class="modal-body">
                            <div class="form-group">
                                 <input type="text" class="form-control" id="nama_lapangan" name="nama_lapangan" placeholder="Nama Lapangan">
                            </div>
                            <div class="form-group">
                                 <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama Pelanggan">
                            </div>
                            <div class="form-group">
                                 <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="No Telepon">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" id="jam" name="jam" placeholder="Jam">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" id="waktu" name="waktu" placeholder="Waktu">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" id="total" name="total" placeholder="Total">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" id="status" name="status" placeholder="Status">
                            </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                             <button type="submit" class="btn btn-primary">Tambah</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
     <?php $i = 1;
        foreach ($transaksi as $p) : $i++; ?>
         <div class="row">
             <div class="modal fade" id="edit<?= $p['id_transaksi']; ?>" role="dialog">
                 <div class="modal-dialog">
                     <form action="<?= base_url('Admin/edittransaksi'); ?>" method="post">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title">Edit Transaksi</h5>
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                             </div>
                             <div class="modal-body">
                                 <input type="hidden" value="<?= $p['id_transaksi']; ?>" name="id_transaksi">
                                  <div class="form-group row">
                                     <b><label class='col'>Nama Lapangan</label></b><br>
                                     <input type="text" name="nama_lapangan" autocomplete="off" value="<?= $p['nama_lapangan']; ?>" required placeholder="Masukkan Nama Lapangan" class="form-control"></div>
                                  <div class="form-group row">
                                     <b><label class='col'>Nama Pelanggan</label></b><br>
                                     <input type="text" name="nama_pelanggan" autocomplete="off" value="<?= $p['nama_pelanggan']; ?>" required placeholder="Masukkan Nama Pelanggan" class="form-control"></div>
                                  <div class="form-group row">
                                     <b><label class='col'>No Telepon</label></b><br>
                                     <input type="text" name="no_telepon" autocomplete="off" value="<?= $p['no_telepon']; ?>" required placeholder="Masukkan Telepon" class="form-control"></div>
                                  <div class="form-group row">
                                     <b><label class='col'>Tanggal</label></b><br>
                                     <input type="text" name="tanggal" autocomplete="off" value="<?= $p['tanggal']; ?>" required placeholder="Masukkan Tanggal" class="form-control"></div>
                                  <div class="form-group row">
                                     <b><label class='col'>Jam</label></b><br>
                                     <input type="text" name="jam" autocomplete="off" value="<?= $p['jam']; ?>" required placeholder="Masukkan Jam" class="form-control"></div>
                                  <div class="form-group row">
                                     <b><label class='col'>Waktu</label></b><br>
                                     <input type="text" name="waktu" autocomplete="off" value="<?= $p['waktu']; ?>" required placeholder="Masukkan Waktu" class="form-control"></div>
                                  <div class="form-group row">
                                     <b><label class='col'>Total</label></b><br>
                                     <input type="text" name="total" autocomplete="off" value="<?= $p['total']; ?>" required placeholder="Masukkan Total" class="form-control"></div>
                                  <div class="form-group row">
                                     <b><label class='col'>Status</label></b><br>
                                    <select name="status" id="status">
                                    <?php if($status) foreach ($status as $value) : ?>
                                      <option value="<?= $value ?>" <?php if ($p['status'] == $value) echo "selected" ?>><?= $value ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                    </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     <?php endforeach; ?>
     <?php $i = 1;
        foreach ($transaksi as $p) : $i++; ?>
         <div class="row">
             <div class="modal fade" id="konfirmasi<?= $p['id_transaksi']; ?>" role="dialog">
                 <div class="modal-dialog">
                     <?php echo form_open_multipart('Admin/konfirmasitransaksi');?>
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title">Selesai Transaksi</h5>
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                             </div>
                             <div class="modal-body">
                                 <input type="hidden" value="<?= $p['id_transaksi']; ?>" name="id_transaksi">
                                 <input type="hidden" value="<?= $p['id_konfirmasi']; ?>" name="id_konfirmasi">
                                  <div class="form-group row">
                                     <b><label class='col'>Status</label></b><br>
                                    <select name="status" id="status">
                                    <?php if($status) foreach ($status as $value) : ?>
                                      <option value="<?= $value ?>" <?php if ($p['status'] == $value) echo "selected" ?>><?= $value ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                    </div>
                                    <div class="form-group row">
                                     <b><label class='col'>Nominal</label></b><br>
                                     <input type="text" name="nominal" autocomplete="off" value="<?php if(isset($p['nominal'])) echo  $p['nominal'];else echo 0 ; ?>" required placeholder="Masukkan Nominal" class="form-control"></div>
                                     <div class="form-group row">
                                      <b><label class='col'>Foto</label></b><br>
                                      <?php if(isset($p['foto'])){ ?>
                                      <img style= 'width:120px;height:120px;' src="<?= base_url()?>upload/<?=$p['foto'] ;?>" alt="">
                                      <?php }else{ ?>
                                      <input type="file" name="foto" autocomplete="off" class="form-control"></div>
                                      <?php } ?>
                                      </div>
                                    <div class="form-group row">
                                      <b><label class='col'>Catatan</label></b><br>
                                      <input type="text" name="catatan" autocomplete="off" value="<?php if(isset($p['catatan'])) echo $p['catatan']; else echo "" ; ?>" required placeholder="Masukkan Catatan" class="form-control"></div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Konfirmasi</button></div>
                                 </div>
                             </div>
                         </div>
                         <?php echo form_close(); ?>
                 </div>
             </div>
         </div>
     <?php endforeach; ?>
 </div>    