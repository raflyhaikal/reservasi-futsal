<body class="utility-page sb-l-c sb-r-c">


    <!-- -------------- Body Wrap  -------------- -->
    <div id="main" class="animated fadeIn">

        <!-- -------------- Main Wrapper -------------- -->
        <section id="content_wrapper">

            <div id="canvas-wrapper">
                <canvas id="demo-canvas"></canvas>
            </div>

            <!-- -------------- Content -------------- -->
            <section id="content" class="">

                <!-- -------------- Registration -------------- -->
                <div class="allcp-form theme-primary mw600" id="register">
                    <div class="panel panel-primary">
                        <div class="panel-heading pn">
                            <span class="panel-title">
                                Daftar Akun
                            </span>
                        </div>
                        <!-- -------------- /Panel Heading -------------- -->

                        <form method="post" action="<?= base_url('authfront/register'); ?>" id="form-register">
                            <div class="panel-body pn">
                                <div class="section row">
                                    <div class="col-md-6 ph10">
                                        <label for="username" class="field prepend-icon">
                                            <input type="text" name="username" id="username" class="gui-input" placeholder="Username" value="<?= set_value('username'); ?>">
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                            <label for="username" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="col-md-6 ph10">
                                        <label for="nama" class="field prepend-icon">
                                            <input type="text" name="nama" id="nama" class="gui-input" placeholder="Nama" value="<?= set_value('nama'); ?>">
                                            <label for="nama" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section">
                                    <label for="email" class="field prepend-icon">
                                        <input type="email" name="email" id="email" class="gui-input" placeholder="Email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <label for="email" class="field-icon">
                                            <i class="fa fa-envelope"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section">
                                    <label for="phone" class="field prepend-icon">
                                        <input type="number" name="telepon" id="phone" class="gui-input" placeholder="Phone" value="<?= set_value('telepon'); ?>">
                                        <label for="phone" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section">
                                    <label for="password" class="field prepend-icon">
                                        <input type="password" name="password" id="password" class="gui-input" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <label for="password" class="field-icon">
                                            <i class="fa fa-lock"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- -------------- /section -------------- -->
                                <!-- -------------- /section -------------- -->
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-bordered btn-primary">Buat Akun
                                    </button>
                                </div>
                                <!-- -------------- /section -------------- -->

                            </div>
                            <!-- -------------- /Form -------------- -->
                            <div class="panel-footer">

                            </div>
                            <!-- -------------- /Panel Footer -------------- -->
                        </form>
                    </div>
                </div>
                <!-- -------------- /Spec Form -------------- -->

            </section>
            <!-- -------------- /Content -------------- -->

        </section>
        <!-- -------------- /Main Wrapper -------------- -->

    </div>
    <!-- -------------- /Body Wrap  -------------- -->