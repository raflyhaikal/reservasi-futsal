<section class="about_us_area section_gap_top">

		<div class="container">
        <?php if ($this->session->flashdata('message')) echo $this->session->flashdata('message'); ?>
          
           <center> <h3 class="text-heading title_color">BOOKING LAPANGAN</h3></center>
                    <form action="<?= base_url('front/tambah_booking') ?>" method="post">
                        <div class="mt-10">
                        <label class='col'>Nama</label><br>
                            <input type="text" disabled name="nama" placeholder="Nama" value="<?= $this->session->userdata('ses_id') ? $this->session->userdata('ses_id') : "" ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'" required class="single-input">
                            <input type="hidden" name="id_pelanggan" value="<?= $this->session->userdata('idusr') ? $this->session->userdata('idusr') : 0 ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'" required class="single-input">
                        </div>
                        <div class="mt-3">
                        <label class='col'>Lapangan</label><br>
                        <select class="form-control" name="id_lapangan" id="">
                                <option value="">Silahkan Pilih Lapangan</option>                                
                                <?php foreach ($lapangan as $value) : ?>
                                    <option value="<?= $value['id_lapangan']?>"><?= $value['nama_lapangan'];?>[Rp <?= $value['harga']?> ]</option>
                                <?php endforeach ?>
                            </select>
                         </div>
                        <div class="mt-10">
                        <label class='col'>Tanggal </label><br>
                            <input type="date" name="tanggal" placeholder="Tanggal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal'" required class="single-input">
                        </div>
                        <div class="mt-3">
                        <label class='col'>Jam </label><br>
                        <select class="form-control" name="jam" id="" >
                        <option value="">Pilih Jam</option>
                        <option value="06:00">06:00</option>
                        <option value="07:00">07:00</option>
                        <option value="08:00">08:00</option>
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        <option value="19:00">19:00</option>
                        <option value="20:00">20:00</option>
                        <option value="21:00">21:00</option>
                        <option value="22:00">22:00</option>
                        <option value="23:00">23:00</option>
                        <option value="24:00">24:00</option>
                        </select>   
                        </div>
                        <div class="mt-10">
                        <label class='col'>Berapa Jam ?</label><br>
                            <input type="text" name="waktu" placeholder="1,2" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Berapa Jam'" required class="single-input">
                        </div>
                        <br>
                        </br>
                        <div class="mt-10">
                        <button type="submit" class="btn btn-primary">BOOKING</button>
                    </div>
                <br>
            </br>
            <br>
        </br>
	</section>
