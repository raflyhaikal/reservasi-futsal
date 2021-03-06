<body class="utility-page sb-l-c sb-r-c">

    <!-- -------------- Body Wrap  -------------- -->
    <div id="main" class="animated fadeIn">

        <!-- -------------- Main Wrapper -------------- -->
        <section id="content_wrapper">

            <div id="canvas-wrapper">
                <canvas id="demo-canvas"></canvas>
            </div>

            <!-- -------------- Content -------------- -->
            <section id="content">

                <!-- -------------- Login Form -------------- -->
                <div class="allcp-form theme-primary mw320" id="login">
                    <div class="panel mw320">

                        <?= $this->session->flashdata('message'); ?>
                        <?= $this->session->flashdata('msg'); ?>

                        <form method="post" action="<?= base_url('authfront/login'); ?>">
                            <div class="panel-body pn mv10">

                                <div class="section">
                                    <label for="username" class="field prepend-icon">
                                        <input type="text" name="username" id="username" class="gui-input" placeholder="Username">
                                        <label for="username" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section">
                                    <label for="password" class="field prepend-icon">
                                        <input type="password" name="password" id="password" class="gui-input" placeholder="Password">
                                        <label for="password" class="field-icon">
                                            <i class="fa fa-lock"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="bs-component pull-left pt5">
                                    <div class="radio-custom radio-primary mb5 lh25">
                                        <input type="radio" id="remember" name="remember">
                                        <label for="remember">Ingatkan saya</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-bordered btn-primary pull-right">Log in</button>
                                <br>
                                <hr>
                                <div class="text-center">
                                    <a href="<?= base_url('authfront/register') ?>">Daftar Akun</a>
                                </div>
                                <!-- -------------- /section -------------- -->

                            </div>
                            <!-- -------------- /Form -------------- -->
                        </form>
                    </div>
                    <!-- -------------- /Panel -------------- -->
                </div>
                <!-- -------------- /Spec Form -------------- -->

            </section>
            <!-- -------------- /Content -------------- -->

        </section>
        <!-- -------------- /Main Wrapper -------------- -->

    </div>
    <!-- -------------- /Body Wrap  -------------- -->