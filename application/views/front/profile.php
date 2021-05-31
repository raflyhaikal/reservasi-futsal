<hr>
<div class="container bootstrap snippet">

    <?php $user = $this->session->userdata('ses_id'); 
    if (!$user) redirect ('authfront/login');

    ?>
    <section class="about_us_area section_gap_top">
    <div class="row">
        <div class="col-sm-3 text-center">
            
             <a href="/users" class="pull-left"><img title="profile image" class="img-circle img-responsive" src="<?= base_url ('assets/front/img/mugiwara.jpg')?>"></a>

             <button type="button" class=" btn btn-default btn-sm">
              <span class="icon-sign-out"></span>
              <a href="<?= base_url('Authfront/logout')?>">Log out</a>
            </button>

        </div>
        <div class="col-sm-9">
            <ul class="list-group">
                <h3>Profil</h3>
                <li class="list-group-item text-left"><span class="pull-left"><strong>Username  :   </strong></span> <?= $pelanggan['username']; ?></li>
                <li class="list-group-item text-left"><span class="pull-left"><strong>Nama  :   </strong></span> <?= $pelanggan['nama_pelanggan'] ?></li>
                <li class="list-group-item text-left"><span class="pull-left"><strong>Email   :   </strong></span> <?= $pelanggan['email']; ?> </li>
                <li class="list-group-item text-left"><span class="pull-left"><strong>No Telepon    :   </strong></span> <?= $pelanggan['no_telepon']; ?> </li>
                 
            </ul>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <!--left col-->
            <?php if ($this->session->flashdata('message')) echo $this->session->flashdata('message'); ?>
        </div>

    <br>
    <br>
        <!--/col-3-->
        <div class="col-sm-12 ml-5">

            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#home" data-toggle="tab">Transaksi</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="table-responsive">
                        <table class="table table-hover">
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
                                <tbody id="items">
                                <?php $i = 1;?>
                                <?php foreach($transaksi as $p) : ?>
                                <tr>
                                <tr>
                                  <td><?= $p['id_transaksi'] ;?></td>
                                    <td><?= $p['nama_lapangan'] ;?></td>
                                    <td><?= $p['nama_pelanggan'] ;?></td>
                                    <td><?= $p['no_telepon'] ;?></td>
                                    <td><?= $p['tanggal'] ;?></td>
                                    <td><?= $p['jam'] ;?></td>
                                    <td><?= $p['waktu'] ;?></td>
                                    <td><?= $p['total'] ;?></td>
                                    <td><?= $p['status'] ;?></td>
                                    <td>
                                        <a class="btn btn-primary text-white btn-xs" data-toggle="modal" data-target="#konfirmasi<?= $p['id_transaksi']; ?>"> Konfirmasi</a>
                                  </td>
                                  
                                </tr>
                                <?php $i++;?>
                                <?php endforeach;?>

                                
                                
                              </tbody>
                        </table>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center">
                                <ul class="pagination" id="myPager"></ul>
                            </div>
                        </div>
                    </div>
                    <!--/table-resp-->

                    <hr>

                </div>
                <!--/tab-pane-->

                <!--/tab-pane-->

            <!--/tab-pane-->
        </div>
        <!--/tab-content-->

        </div>
        </div>
        </div>
        </div>
    <!--/col-9-->
</section>

    <!--/Modal-->
<?php $i = 1;
        foreach ($transaksi as $p) : $i++; ?>
         <div class="row">
             <div class="modal fade" tabindex="-1"  id="konfirmasi<?= $p['id_transaksi']; ?>" role="dialog">
                 <div class="modal-dialog modal-dialog-centered">
	            <?php echo form_open_multipart('Front/konfirmasi_profile');?>
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title">Konfirmasi Transaksi</h5>
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                             </div>
                             <div class="modal-body">
                                 <input type="hidden" value="<?= $p['id_transaksi']; ?>" name="id_transaksi">                           
                                    <div class="form-group row">
                                     <b><label class='col'>Nominal</label></b><br>
                                     <input type="text" name="nominal" autocomplete="off" value="<?php if(isset($p['nominal'])) echo  $p['nominal'];else echo 0 ; ?>" required placeholder="Masukkan Nominal" class="form-control"></div>
                                    <div class="form-group row">
                                      <b><label class='col'>Foto</label></b><br>
                                      <input type="file" name="foto" /></div>
                                    <div class="form-group row">
                                      <b><label class='col'>Catatan</label></b><br>
                                      <input type="text" name="catatan" autocomplete="off" value="<?php if(isset($p['catatan'])) echo $p['catatan']; else echo "" ; ?>" required placeholder="Masukkan Catatan" class="form-control"></div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-primary"> Konfirmasi</button>
                                 </div>
                             </div>
                         </div>
                    <?php echo form_close(); ?>
                 </div>
             </div>
         </div>
     <?php endforeach; ?>
 </div>    

 <style>
b{
    color:black
}
 
 
 </style>