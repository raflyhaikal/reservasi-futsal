<section class="blog_categorie_area">
    
    <br></br>
    <div class="container">
    <h3 class="text-heading title_color">DETAIL LAPANGAN</h3>
    <div class="table-responsive">
                <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">06:00</th>
                    <th scope="col">07:00</th>
                    <th scope="col">08:00</th>
                    <th scope="col">09:00</th>
                    <th scope="col">10:00</th>
                    <th scope="col">11:00</th>
                    <th scope="col">12:00</th>
                    <th scope="col">13:00</th>
                    <th scope="col">14:00</th>
                    <th scope="col">15:00</th>
                    <th scope="col">16:00</th>
                    <th scope="col">17:00</th>
                    <th scope="col">18:00</th>
                    <th scope="col">19:00</th>
                    <th scope="col">20:00</th>
                    <th scope="col">21:00</th>
                    <th scope="col">22:00</th>
                    <th scope="col">23:00</th>
                    <th scope="col">24:00</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($lapangan as $key => $value) : ?>
                    <tr>
                    <th><?php $tanggal=date_create($value['tanggal']); echo date_format($tanggal,"d/m/Y"); ?> </th>
                    <th scope="col"><?php if(in_array("06",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>  
                    <th scope="col"><?php if(in_array("07",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("08",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("09",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("10",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("11",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("12",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("13",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("14",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("15",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("16",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("17",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("18",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("19",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("20",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("21",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("22",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("23",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    <th scope="col"><?php if(in_array("24",  $value['jadwal'])) echo 'Booked';else echo 'Free'; ?></th>
                    </tr>
                <?php endforeach; ?>
                </tbody>
                </table>
                </div>
    </div>