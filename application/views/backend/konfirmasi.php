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
                    <h2>Konfirmasi</small></h2>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#konfirmasi">Tambah </button>
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Jam</th>
                          <th>Waktu</th>
                          <th>Total</th>
                          <th>Status</th>
                          <th>Nominal</th>
                          <th>Foto</th>
                          <th>Catatan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php $i = 1;?>
                        <?php foreach($konfirmasi as $p) : ?>
                        <tr>
                          <th scope="row"> <?= $i ?> </th>
                          <td><?= $p['tanggal'] ;?></td>
                          <td><?= $p['jam'] ;?></td>
                          <td><?= $p['waktu'] ;?></td>
                          <td><?= $p['total'] ;?></td>
                          <td><?= $p['status'] ;?></td>
                          <td><?= $p['nominal'] ;?></td>
                          <td><a href="<?= base_url()?>upload/<?=$p['foto'] ;?>" target="_blank"><img src="<?= base_url()?>upload/<?=$p['foto'] ;?>" class='img-thumbnail'
                          style= 'width:120px;height:120px';></a></td>
                          <td><?= $p['catatan'] ;?></td>
                          <td>
                                 <a href="<?= base_url('Admin/hapuskonfirmasi/' . $p['id_konfirmasi']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Konfirmasi <?= $p['tanggal']; ?> Ingin Dihapus ?');" class="badge badge-danger" data-placement="top"> Hapus</i></a>
                                 <?php if ($p['nominal'] == $p ['total'] ) { ?>
                                 <a class="btn btn-info btn-xs" href="<?=base_url('Admin/selesai_pemesanan')."?id=".$p['id_transaksi'];?>"> Selesai </i></a>
                                 <?php }else{ ?>
                                  <a class="btn btn-info btn-xs" data-toggle="modal" data-target="#konfirmasi<?= $p['id_konfirmasi']; ?>"> Selesai </i></a>
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
<?php $i = 1;
        foreach ($konfirmasi as $p) : $i++; ?>
         <div class="row">
             <div class="modal fade" id="konfirmasi<?= $p['id_konfirmasi']; ?>" role="dialog">
                 <div class="modal-dialog">
                     <form action="<?= base_url('Admin/selesaikonfirmasi'); ?>" method="post">
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
                                      <img src="<?= base_url()?>upload/<?=$p['foto'] ;?>" alt="">
                                      <?php }else{ ?>
                                      <input type="file" name="foto" autocomplete="off" class="form-control"></div>
                                      <?php } ?>
                                      </div>
                                    <div class="form-group row">
                                      <b><label class='col'>Catatan</label></b><br>
                                      <input type="text" name="catatan" autocomplete="off" value="<?php if(isset($p['catatan'])) echo $p['catatan']; else echo "" ; ?>" required placeholder="Masukkan Catatan" class="form-control"></div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Selesai</button>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     <?php endforeach; ?>
 </div>

     