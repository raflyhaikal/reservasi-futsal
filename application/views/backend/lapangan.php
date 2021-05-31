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
                          <h2>Lapangan</small></h2>
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

                          </p>
                          <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>


                            <tbody>
                              <?php $i = 1;?>
                              <?php foreach($lapangan as $p) : ?>
                              <tr>
                                <th scope="row"> <?= $i ?> </th>
                                <td><?= $p['nama_lapangan'] ;?></td>
                                <td><?= $p['harga'] ;?></td>
                                <td><?= $p['foto'] ;?></td>
                                <td>
                                <a class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit<?= $p['id_lapangan']; ?>"> Edit </i></a>
                                      <a href="<?= base_url('backend/hapuslapangan/' . $p['id_lapangan']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Lapangan <?= $p['nama_lapangan']; ?> Ingin Dihapus ?');" class="badge badge-danger" data-placement="top"> Hapus</i></a>
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
                </div>
              </div>
              <!-- Button trigger modal -->


      <!-- Modal -->
          <?php $i = 1;
              foreach ($lapangan as $p) : $i++; ?>
              <div class="row">
                  <div class="modal fade" id="edit<?= $p['id_lapangan']; ?>" role="dialog">
                      <div class="modal-dialog">
                          <form action="<?= base_url('Admin/editlapangan'); ?>" method="post">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title">Edit lapangan</h5>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">

                                      <input type="hidden" value="<?= $p['id_lapangan']; ?>" name="id_lapangan">
                                      <div class="form-group row">
                                          <b><label class='col'>Nama lapangan</label></b><br>
                                          <input type="text" name="nama_lapangan" autocomplete="off" value="<?= $p['nama_lapangan']; ?>" required placeholder="Masukkan Nama lapangan" class="form-control"></div>
                                      <div class="form-group row">
                                          <b><label class='col'>Harga</label></b><br>
                                          <input type="text" name="harga" autocomplete="off" value="<?= $p['harga']; ?>" required placeholder="Masukkan Harga" class="form-control"></div>
                                      <div class="form-group row">
                                          <b><label class='col'>Foto</label></b><br>
                                          <input type="text" name="nama_lapangan" autocomplete="off" value="<?= $p['nama_lapangan']; ?>" required placeholder="Masukkan Foto" class="form-control"></div>
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


          