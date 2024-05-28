<?=$this->extend('layout') ?>

<?=$this->section('about') ?>
<section id="content" class="s-content">

<section class="s-pageheader pageheader">
     <div class="row">
         <div class="column xl-12">
            <?php foreach($profile as $p) : ?>
             <h1 class="page-title">
                 <span class="page-title__small-type text-pretitle">Tentang saya</span>
                 Hi, Saya <?=$p['nama']?>
             </h1>
            <?php endforeach; ?>
             
         </div>
     </div>
</section> <!-- end pageheader --> 

<section class="s-pagecontent pagecontent">

     <div class="row pageintro">
         <div class="column xl-6 lg-12">
             <h2 class="text-display-title">Beberapa kata inspiratif untuk menggambarkan diri Anda</h2>
         </div>
         <div class="column xl-6 lg-12 u-flexitem-x-right">
            <?php foreach($profile as $p) : ?>
             <p class="lead">
             <?=$p['intro']?>
             </p>
            <?php endforeach; ?>
         </div>                       
     </div> <!-- end pageintro -->   
     
     <div class="row pagemedia">
         <d class="column xl-12">
             <figure class="page-media">                                
                 <img src="images/thumbs/about/ReyhanKh.jpeg" 
                      srcset="images/thumbs/about/ReyhanKh.jpeg 2400w" sizes="(max-width: 2400px) 100vw, 2400px" alt="">
             </figure>
         </d>
     </div> <!-- end pagemedia -->

     <div class="row width-narrower pagemain">
         <div class="column xl-12"> 

             <h2>Bagaimana saya sampai sini</h2>
             <p>
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

             <h2 class="u-add-bottom">Biodata saya</h2>

             <div class="grid-list-items list-items">
                 <div class="grid-list-items__item list-items__item u-remove-bottom">
                     <div class="list-items__item-header">
                         <h6 class="list-items__item-small-title">Riwayat Pendidikan</h6>
                     </div>
                     <p>
                     Pendidikan saya diawali di SDN Sawahlega, di mana saya mendapatkan fondasi pendidikan yang kokoh. 
                     Melanjutkan ke jenjang SMP, saya menimba ilmu di SMPN 1 Cisaat, sebuah institusi yang terkenal dengan 
                     kualitas pendidikannya. Kemudian, saya melanjutkan studi saya di SMAN 1 Cisaat, yang telah membekali 
                     saya dengan berbagai pengetahuan dan keterampilan untuk siap menghadapi tantangan lebih lanjut. 
                     Saat ini, saya sedang menempuh pendidikan tinggi di Universitas Muhammadiyah Sukabumi, sebuah 
                     universitas yang berkomitmen terhadap pengembangan intelektual dan karakter mahasiswanya.
                     </p>
                 </div>
                 <div class="grid-list-items__item list-items__item u-remove-bottom">
                     <div class="list-items__item-header">
                         <h6 class="list-items__item-small-title">Pengalaman Organisasi</h6>
                     </div>
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
             </div> <!--grid-list-items -->

         </div> <!-- end grid-block-->
     </div> <!-- end pagemain -->

</section> <!-- pagecontent -->

<section class="s-testimonials">

     <div class="s-testimonials__header row row-x-center text-center">
         <div class="column xl-8 lg-12">

             <p class="text-pretitle">
             Keluarga
             </p>
             <h3>
             Tentang Keluarga saya
             </h3>                        

         </div>
     </div> <!--end s-testimonials__header -->

     <div class="row s-testimonials__content">
         <div class="column xl-12 testimonials">

             <div class="swiper-container testimonials__slider page-slider">

                 <div class="swiper-wrapper">
                     <div class="testimonials__slide swiper-slide">
                         <p>
                         bapa saya bernama mahruf yusuf lahir di sukabumi tanggal 26 juli 1969, 
                         bekerja di salah satu perusahaan asuransi yang ada di sukabumi.

                         </p>
                         <div class="testimonials__author">
                             <img src="images/avatars/mahruf.jpeg" alt="Author image" class="testimonials__avatar">
                             <cite class="testimonials__cite">
                                 <strong>Mahruf Yusuf</strong>
                                 <span>Bapa</span>
                             </cite>
                         </div>
                     </div>
                     <div class="testimonials__slide swiper-slide">
                         <p>
                         ibu saya bernama lilih setiawati lahir di bogor tanggal 12 mei 1979, 
                         selain menjadi ibu rumah tangga ibu saya juga mengajar di paud yang ada di desa cissat.
                         </p>
                         <div class="testimonials__author">
                             <img src="images/avatars/lilih.jpeg" alt="Author image" class="testimonials__avatar">
                             <cite class="testimonials__cite">
                                 <strong>Lilih Setiawati</strong>
                                 <span>Ibu</span>
                             </cite>
                         </div>
                     </div>
                     <div class="testimonials__slide swiper-slide">
                         <p>
                         kakak saya bernama dara almira lahir di sukabumi tanggal 04 april 1999,
                          alhamdulilah kakak saya sudah menikah dan punya anak satu.
                         </p>
                         <div class="testimonials__author">
                             <img src="images/avatars/dara.jpeg" alt="Author image" class="testimonials__avatar">
                             <cite class="testimonials__cite">
                                 <strong>Dara Almira</strong>
                                 <span>Anak Ke-1</span>
                             </cite>
                         </div>
                     </div>
                     <div class="testimonials__slide swiper-slide">
                         <p>
                         nama saya reyhan khidir lahir di sukabumoi tanggal 11 maret 2003, 
                         saya masih berkuliah di universitas muhammadiyah Sukabumi.
                         </p>
                         <div class="testimonials__author">
                             <img src="images/avatars/reyhan.jpeg" alt="Author image" class="testimonials__avatar">
                             <cite class="testimonials__cite">
                                 <strong>Reyhan Khidir</strong>
                                 <span>Anak Ke-2</span>
                             </cite>
                         </div>
                     </div> 
                     <div class="testimonials__slide swiper-slide">
                         <p>
                         adik saya bernama Tazkia Reymalida  Lahir di Sukabumi tanggal 21 Desember 2010, 
                         adik saya masih bersekolah di SMP Negeri 1 Cisaat
                         </p>
                         <div class="testimonials__author">
                             <img src="images/avatars/tazkia.jpeg" alt="Author image" class="testimonials__avatar">
                             <cite class="testimonials__cite">
                                 <strong>Tazkia Reymalida</strong>
                                 <span>Anak Ke-3</span>
                             </cite>
                         </div>
                     </div> 
                 </div> <!-- end swiper-wrapper --> 

                 <div class="swiper-pagination"></div>

             </div> <!--end testimonials__slider --> 

         </div> <!-- testimonials -->
     </div> <!--end s-testimonials__content -->

</section> <!-- end s-testimonials -->

</section> <!-- s-content-->

<?=$this->endSection() ?>