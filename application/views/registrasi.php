<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg col-lg-5 my-5 mx-auto">
            <div class="card-body p-20">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registrasi Akun!</h1>
                            </div>
                            <form method="post" action="<?php echo base_url('registrasi/index') ?>" class="user">  
                            <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Masukkan Nama Lengkap" name="nama">
                                        <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div');?>
                                </div>                          
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Masukkan Username" name="username">
                                        <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div');?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="Masukkan Password" name="password_1">
                                            <?php echo form_error('password_1', '<div class="text-danger small ml-2">', '</div');?>
                                    </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"
                                        placeholder="Konfirmasi Password" name="password_2">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Registrasi</button>                              
                            </form>
                            <div class="text-center mt-3 ">
                                <a class="small" href="<?php echo base_url('auth/login')?>">Sudah Punya Akun? Silahkan Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>