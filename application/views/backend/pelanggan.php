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
                    <h2>Pelanggan</small></h2>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pelanggan">Tambah </button>
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Pelanggan</th>
                          <th>Email</th>
                          <th>No Telepon</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php $i = 1;?>
                        <?php foreach($pelanggan as $p) : ?>
                        <tr>
                          <th scope="row"> <?= $i ?> </th>
                          <td><?= $p['nama_pelanggan'] ;?></td>
                          <td><?= $p['email'] ;?></td>
                          <td><?= $p['no_telepon'] ;?></td>
                          <td><?= $p['username'] ;?></td>
                          <td><?= $p['password'] ;?></td>
                          <td>
                          <a class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit<?= $p['id_pelanggan']; ?>"> Edit </i></a>
                                 <a href="<?= base_url('backend/hapuspelanggan/' . $p['id_pelanggan']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Pelanggan <?= $p['nama_pelanggan']; ?> Ingin Dihapus ?');" class="badge badge-danger" data-placement="top"> Hapus</i></a>
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
<div class="modal fade" id="pelanggan" tabindex="-1" role="dialog" aria-labelledby="newPelangganModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="newPelangganModalLabel">Tambah Pelanggan</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <form action="<?= base_url('Admin/pelanggan'); ?>" method="post">
                         <div class="modal-body">
                            <div class="form-group">
                                 <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama Pelanggan">
                            </div>
                            <div class="form-group">
                                 <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="No Telepon">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" id="password" name="password" placeholder="Password">
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
        foreach ($pelanggan as $p) : $i++; ?>
         <div class="row">
             <div class="modal fade" id="edit<?= $p['id_pelanggan']; ?>" role="dialog">
                 <div class="modal-dialog">
                     <form action="<?= base_url('Admin/editpelanggan'); ?>" method="post">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title">Edit Pelanggan</h5>
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                             </div>
                             <div class="modal-body">
                                 <input type="hidden" value="<?= $p['id_pelanggan']; ?>" name="id_pelanggan">          
                                  <div class="form-group row">
                                     <b><label class='col'>Nama Pelanggan</label></b><br>
                                     <input type="text" name="nama_pelanggan" autocomplete="off" value="<?= $p['nama_pelanggan']; ?>" required placeholder="Masukkan Nama Pelanggan" class="form-control"></div>
                                  <div class="form-group row">
                                     <b><label class='col'>Email</label></b><br>
                                     <input type="text" name="email" autocomplete="off" value="<?= $p['email']; ?>" required placeholder="Masukkan Email" class="form-control"></div>
                                  <div class="form-group row">
                                     <b><label class='col'>No Telepon</label></b><br>
                                     <input type="text" name="no_telepon" autocomplete="off" value="<?= $p['no_telepon']; ?>" required placeholder="Masukkan No Telepon" class="form-control"></div>
                                  <div class="form-group row">
                                     <b><label class='col'>Username</label></b><br>
                                     <input type="text" name="username" autocomplete="off" value="<?= $p['username']; ?>" required placeholder="Masukkan Username" class="form-control"></div>
                                  <div class="form-group row">
                                     <b><label class='col'>Password</label></b><br>
                                     <input type="text" name="password" autocomplete="off" value="<?= $p['password']; ?>" required placeholder="Masukkan Password" class="form-control"></div>    
                                     
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
 </div>


     