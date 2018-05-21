      <div class="promo-block parallax-window" data-parallax="scroll" data-image-src="<?= base_url().'images/bg01.jpg' ?> ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="promo-block-divider">
                            <h1 class="promo-block-title"><img src="<?= base_url().'images/bg03.png' ?>" width="350px" alt=""> </h1>
                            <p class="promo-block-text"><h1 class="w3-text-white">REFUND & RESCHEDULE SYSTEM</h1></p>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>

        <div id="about">
            <div class="container-fluid content-lg">
                <div class="row">
                    <div class="col-sm-3 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0">Informasi Pelanggan</h2>
                            <b><h4 class="w3-text-red" >021-4503289</h4><i class="fa fa-phone"></i> </b>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                        <div class="margin-b-60">
                          <div class="w3-content" style="max-width:1000px">
                  <div class="w3-red">
                    <?= $this->session->flashdata('msg'); ?>
                  </div>
                  <div class="w3-row w3-center w3-card w3-padding">
                    <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
                      <div class="w3-col s6 tablink">Login</div>
                    </a>
                    <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
                      <div class="w3-col s6 tablink">Registrasi</div>
                    </a>
                  </div>

                  <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
                    <h5>Silahkan Login Untuk / Registrasi Jika Tidak Ada Akun</h5>
                    <p class="w3-text-grey">
                        <form class="w3-container" action="<?= base_url().'akun/loginuser'; ?>" method="post">
                          <p>
                          <label>Email</label></p>
                          <input class="w3-input" name="email" type="text">
                          <p>
                          <label>Password</label></p>
                          <input class="w3-input" name="password" type="password">

                          <div class="w3-right">
                            <input type="submit" class="w3-btn w3-red" name="login" value="Login">
                          </div>
                        </form>
                    </p><br>
                  </div>


                  <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
                    <h5>Daftar Disini</h5>
                    <p class="w3-text-grey">
                      <form class="w3-container" action="<?= base_url().'akun/registeruser'?>" method="post">
                        <div class="w3-row-padding">
                              <div class="w3-half">
                                <label>Nama Depan</label>
                                <input class="w3-input" type="text" name="nama_depan" placeholder="Masukan Nama Depan">
                                <span class="w3-text-red"><?= form_error('nama_depan') ?> </span>
                              </div>
                              <div class="w3-half">
                                <label>Nama Belakang</label>
                                <input class="w3-input" type="text" name="nama_belakang" placeholder="Masukan Nama Belakang">
                                <span class="w3-text-red"><?= form_error('nama_belakang') ?></span>
                              </div>
                              <div class="w3-half">
                                <label>Email</label>
                                <input class="w3-input" type="text" name="email" placeholder="Masukan Email">
                                <span class="w3-text-red"><?= form_error('email')?> </span>
                              </div>
                              <div class="w3-half">
                                <label>No. Telepon</label>
                                <input class="w3-input" type="text" name="no_telp" placeholder="Masukan No. Telepon">
                              </div>
                              <div class="w3-half">
                                <label>Password</label>
                                <input class="w3-input" type="password" name="password" placeholder="Masukan No. Telepon">
                              </div>
                            </div>
                            <div class="w3-right">
                              <input type="submit" class="w3-btn w3-red" name="register" value="Daftar">
                            </div>
                        </form>
                    </p><br>
                  </div>
                  </div>
                  </div>
                </div>
              </div>
              <!--// end row -->
        </div>
      </div>
        <!-- End About -->
        <!-- Experience -->
        <div id="experience">
            <div class="bg-color-sky-light" data-auto-height="true">
                <div class="container content-lg">
                    <div class="row">
                        <div class="col-sm-3 sm-margin-b-30">
                            <div class="text-right sm-text-left">
                                <h2 class="margin-b-0">Tentang Kami</h2>
                                <p> <img src="<?= base_url('images/bg04.png')?>" width="250px" alt=""> </p>
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-1">
                            <div class="row row-space-2 margin-b-4">
                                <div class="col-md-4 md-margin-b-4">
                                    <div class="service" data-height="height">
                                        <div class="service-element">
                                            <i class="service-icon icon-badge"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>Denpasar, Bali</h3>
                                            <p>Hanya Rp.600.000</p>
                                            <img src="<?= base_url('images/promo1.jpg')?>" width="170px" alt="">
                                            <p class="margin-b-5">Hati-Hati Penipuan yang mengatasnamakan Wakil Presiden Republik Indonesia Ataupun Sekretariat Wakil Presiden</p>
                                        </div>
                                        <a href="http://www.wapresri.go.id/struktur-organisasi/" class="content-wrapper-link" target="_blank" rel="nofollow" title="Aplikasi Setwapres"></a>
                                    </div>
                                </div>
                                <div class="col-md-4 md-margin-b-4">
                                    <div class="service bg-color-base wow zoomIn" data-height="height" data-wow-duration=".3" data-wow-delay=".1s">
                                        <div class="service-element">
                                            <i class="service-icon icon-badge"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3 class="color-white">Setneg</h3>
                                              <img src="<?= base_url('images/promo2.jpg')?>" width="170px" alt="">
                                            <p class="color-white margin-b-5">Kementerian Sekretariat Negara Republik Indonesia.</p>
                                        </div>
                                        <a href="https://setneg.go.id/" class="content-wrapper-link" target="_blank" rel="nofollow" title="Aplikasi Setneg"></a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service" data-height="height">
                                        <div class="service-element">
                                            <i class="service-icon icon-badge"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>KLHK</h3>
                                              <img src="<?= base_url('images/promo3.jpg')?>" width="170px" alt="">
                                            <p class="margin-b-5">Pelayanan Terpadu Satu pintu.</p>
											<p class="margin-b-5">Kementrian Lingkungan Hidup Dan Kehutanan.</p>
                                        </div>
                                        <a href="http://www.menlhk.go.id/" class="content-wrapper-link" target="_blank" rel="nofollow" title="Aplikasi KLHK"></a>
                                    </div>
                                </div>
                            </div>
                            <!--// end row -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Experience -->
        <!-- Work -->
        <div id="work">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-3 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0">Promo Bulan Ini</h2>
                            <p>I build the real value.</p>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                        <!-- Masonry Grid -->
                        <div class="masonry-grid row row-space-2">
                            <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8 margin-b-4">
                                <!-- Work -->
                                <div class="work work-popup-trigger">
                                    <div class="work-overlay">
                                        <img class="full-width img-responsive" src="img/800x400/01.jpg" alt="Portfolio Imagesss">
                                    </div>
                                    <div class="work-popup-overlay">
                                        <div class="work-popup-content">
                                            <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                            <div class="margin-b-30">
                                                <h3 class="margin-b-5">Art Of Coding</h3>
                                                <span>Clean &amp; Minimalistic Design</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                        <ul class="list-inline work-popup-tag">
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Design,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Coding,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Portfolio</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                                        <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                                        <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                                        <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Work -->
                            </div>
                            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-4">
                                <!-- Work -->
                                <div class="work work-popup-trigger">
                                    <div class="work-overlay">
                                        <img class="full-width img-responsive" src="img/397x400/01.jpg" alt="Portfolio Image">
                                    </div>
                                    <div class="work-popup-overlay">
                                        <div class="work-popup-content">
                                            <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                            <div class="margin-b-30">
                                                <h3 class="margin-b-5">Art Of Coding</h3>
                                                <span>Clean &amp; Minimalistic Design</span>
                                                <form class="" action="index.html" method="post">
                                                  <label for=""></label>
                                                  <input type="text" name="" value="">
                                                </form>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                        <ul class="list-inline work-popup-tag">
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Design,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Coding,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Portfolio</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                                        <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                                        <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                                        <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Work -->
                            </div>
                            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                                <!-- Work -->
                                <div class="work work-popup-trigger">
                                    <div class="work-overlay">
                                        <img class="full-width img-responsive" src="img/397x300/01.jpg" alt="Portfolio Image">
                                    </div>
                                    <div class="work-popup-overlay">
                                        <div class="work-popup-content">
                                            <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                            <div class="margin-b-30">
                                                <h3 class="margin-b-5">Art Of Coding</h3>
                                                <span>Clean &amp; Minimalistic Design</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                        <ul class="list-inline work-popup-tag">
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Design,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Coding,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Portfolio</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                                        <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                                        <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                                        <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Work -->
                            </div>
                            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                                <!-- Work -->
                                <div class="work work-popup-trigger">
                                    <div class="work-overlay">
                                        <img class="full-width img-responsive" src="img/397x300/02.jpg" alt="Portfolio Image">
                                    </div>
                                    <div class="work-popup-overlay">
                                        <div class="work-popup-content">
                                            <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                            <div class="margin-b-30">
                                                <h3 class="margin-b-5">Art Of Coding</h3>
                                                <span>Clean &amp; Minimalistic Design</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                        <ul class="list-inline work-popup-tag">
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Design,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Coding,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Portfolio</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                                        <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                                        <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                                        <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Work -->
                            </div>
                            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                                <!-- Work -->
                                <div class="work work-popup-trigger">
                                    <div class="work-overlay">
                                        <img class="full-width img-responsive" src="img/397x300/03.jpg" alt="Portfolio Image">
                                    </div>
                                    <div class="work-popup-overlay">
                                        <div class="work-popup-content">
                                            <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                            <div class="margin-b-30">
                                                <h3 class="margin-b-5">Art Of Coding</h3>
                                                <span>Clean &amp; Minimalistic Design</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                        <ul class="list-inline work-popup-tag">
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Design,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Coding,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Portfolio</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                                        <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                                        <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                                        <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Work -->
                            </div>
                        </div>
                        <!-- End Masonry Grid -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Work -->
		<!-- end work -->
        <!-- Contact -->
        <div id="contact">
            <div class="bg-color-sky-light">
                <div class="container content-lg">
                    <div class="row">
                        <div class="col-sm-3 sm-margin-b-30">
                            <div class="text-right sm-text-left">
                                <h2 class="margin-b-0">Hubungi Kami</h2>
                                <p> <img src="<?= base_url('images/bg03.png')?>" width="150px" alt=""> </p>
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-1">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 md-margin-b-30">
                                    <h5>Lokasi</h5>
                                    Jl. Jakarta Pusat
                                </div>
                                <div class="col-md-3 col-xs-6 md-margin-b-30">
                                    <h5>telephone/Fax</h5>
                                    (021)2316405-08
									/(021)3810104
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <h5>Email</h5>
                                    <a href="mailto:#">customerlion@liongroup.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
