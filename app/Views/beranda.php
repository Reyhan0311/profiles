<?=$this->extend('layout')?>

<?=$this->section('beranda')?>     
       <!-- # site main content
        ================================================== -->
        <section id="content" class="s-content">

            <!-- intro
            ----------------------------------------------- -->
            <section id="intro" class="s-intro">

                <div class="row s-intro__content width-sixteen-col">

                    <div class="column lg-12 s-intro__content-inner grid-block">
                        
                        <div class="s-intro__content-text">
                            <?php foreach($profile as $p) : ?>
                            <div class="s-intro__content-pretitle text-pretitle">Hello, Saya <?=$p['nama']?></div>
                            <?php endforeach; ?>
                            <h1 class="s-intro__content-title">
                            Saya Disini akan<br>
                            menceritakan  <br>
                            tentang Diri saya<br>
                            sendiri.
                            </h1>
                        </div> <!-- s-intro__content-text -->

                        <div class="s-intro__content-media"> 
                            <div class="s-intro__content-media-inner">                               
                                <img src="images/Reyhan.jpeg" srcset="images/Reyhan.jpeg 1x, images/Reyhan.jpeg 2x" alt="">
                                <div class="lines">                               
                                    <span></span>                                  
                                </div>
                            </div>
                        </div> <!-- s-intro__content-media -->                      

                        <div class="s-intro__scroll-down">
                            <a href="#about" class="smoothscroll">
                                <div class="scroll-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#97b34a" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!  Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<polyline points="7 13 12 18 17 13"></polyline><line x1="12" y1="18" x2="12" y2="6"></line></svg>
                                </div>
                                <span>Scroll for more</span>
                            </a>
                        </div> <!-- s-intro__scroll-down -->
                        
                    </div> <!-- s-intro__content-inner -->

                </div> <!-- s-intro__content -->

            </section> <!-- end s-intro -->

            <!-- about
            ----------------------------------------------- -->
            <section id="about" class="s-about target-section">

                <div class="row s-about__content width-sixteen-col">
                    <div class="column grid-block grid-section-split">

                        <img src="images/geometric_shape.svg" alt="" class="s-about__content-imgbg">

                        <div class="section-header grid-section-split__header">
                            <div class="text-pretitle">Tentang saya</div>                           
                            <h2 class="text-display-title">
                            Beberapa kata inspiratif untuk menggambarkan diri Anda
                            </h2>                           
                        </div> <!-- end section-header -->

                        <div class="s-about__content-main grid-section-split__primary">
                        <?php foreach($profile as $p) : ?>
                            <p class="lead">
                            <?=$p['intro']?>
                            </p>
                         <?php endforeach; ?>
                        </div> <!-- end s-about__content-main -->

                        <div class="s-about__content-btn grid-section-split__bottom">
                            <a href="/about" class="btn btn--stroke u-fullwidth">Tentang Saya</a>

                            <ul class="s-about__social social-list">
                                <li>
                                    <a href="https://www.facebook.com/share/GzxsBH3rQ6w4efRC/?mibextid=qi2Omg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                                        <span class="u-screen-reader-text">Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/reyhan_khidir?igsh=MWVwYzJhbDR0aG8wdA==">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                        <span class="u-screen-reader-text">Instagram</span>
                                    </a>
                                </li>
                            </ul> <!-- end s-footer__social -->
                        </div> <!-- end s-about__content-btn -->
                    
                    </div> <!-- content-inner -->
                </div>
                
            </section> <!-- end s-about -->

            <!-- expertise
            ----------------------------------------------- -->
            <section id="expertise" class="s-expertise">

                <div class="row s-expertise__content width-sixteen-col">
                    <div class="column xl-12 grid-block grid-section-split">

                        <div class="section-header grid-section-split__header">
                            <div class="text-pretitle">Biodata</div>                           
                            <h2 class="text-display-title">
                            Bagaimana Perjalanan saya
                            </h2>     
                            
                            <p class="lead">
                            Perjalanan pendidikan saya dimulai di SDN Sawahlega, tempat saya pertama kali mengenal dunia akademis dan 
                            organisasi melalui Pramuka, yang mengajarkan saya tentang kepemimpinan dan kerjasama tim. Melanjutkan ke 
                            SMPN 1 Cisaat, saya terus aktif dalam Pramuka dan juga bergabung dengan klub Karate, yang memperkuat disiplin 
                            dan semangat juang saya. Di SMAN 1 Cisaat, saya mengekspresikan diri melalui kelompok Teater, memperkaya kreativitas 
                            dan kemampuan berbicara di depan umum. Saat ini, saya menempuh pendidikan tinggi di Universitas Muhammadiyah Sukabumi, 
                            di mana seluruh pengalaman sebelumnya telah membentuk karakter saya dan mempersiapkan saya untuk menghadapi 
                            tantangan masa depan dengan percaya diri dan tekad yang kuat. Setiap tahap dalam perjalanan ini telah memberikan 
                            kontribusi berharga dalam perkembangan diri saya, membawa saya sampai ke titik ini dengan berbagai keterampilan 
                            dan wawasan yang saya miliki.
                            </p>
                        </div> <!-- end section-header -->

                        <div class="s-expertise__content-main grid-section-split__primary">

                            <div class="grid-list-items list-items show-ctr">
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Riwayat Pendidikan</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>
                                        Pendidikan saya diawali di SDN Sawahlega, di mana saya mendapatkan fondasi pendidikan yang kokoh. 
                                        Melanjutkan ke jenjang SMP, saya menimba ilmu di SMPN 1 Cisaat, sebuah institusi yang terkenal dengan 
                                        kualitas pendidikannya. Kemudian, saya melanjutkan studi saya di SMAN 1 Cisaat, yang telah membekali 
                                        saya dengan berbagai pengetahuan dan keterampilan untuk siap menghadapi tantangan lebih lanjut. 
                                        Saat ini, saya sedang menempuh pendidikan tinggi di Universitas Muhammadiyah Sukabumi, sebuah 
                                        universitas yang berkomitmen terhadap pengembangan intelektual dan karakter mahasiswanya.
                                        </p>
                                    </div>
                                </div> <!-- list-item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Pengalaman Organisasi</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>
                                        Selama perjalanan pendidikan saya, saya aktif dalam berbagai organisasi yang telah membantu mengembangkan keterampilan dan 
                                        kepribadian saya. Di SDN Sawahlega, saya bergabung dengan Pramuka, di mana saya belajar tentang kepemimpinan, kerjasama tim, 
                                        dan keterampilan bertahan hidup dasar. Di SMPN 1 Cisaat, saya melanjutkan keaktifan saya di Pramuka, memperdalam pengetahuan 
                                        dan keterampilan kepramukaan, serta aktif dalam klub Karate, yang tidak hanya memperkuat fisik saya tetapi juga mengajarkan 
                                        disiplin, fokus, dan semangat juang. Di SMAN 1 Cisaat, saya bergabung dengan kelompok Teater, yang memberi saya kesempatan 
                                        untuk mengeksplorasi kreativitas, seni peran, dan kemampuan berbicara di depan umum. Pengalaman-pengalaman ini telah membentuk 
                                        karakter saya dan mempersiapkan saya untuk menghadapi tantangan di masa depan dengan lebih baik.
                                        </p>
                                    </div>
                                </div> <!-- list-expertise__item -->

                            </div> <!-- grid-list-items -->
                        </div> <!-- end s-expertise__content-main -->

                    </div> <!-- end grid-block-->
                </div> <!-- end s-expertise__content -->

            </section> <!-- end s-expertise -->

        </section> <!-- s-content-->
<?=$this->endSection()?>