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
                    <h2>Selesai</small></h2>
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
              </div>
        <!-- Button trigger modal -->