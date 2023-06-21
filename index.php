<?php

$server = mysqli_connect("localhost", "root", "", "nia");

$sql = "SELECT * FROM wakaf";

$query = mysqli_query($server, $sql);

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masjid</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <div class="container">
        <header>
       <nav>
        <ul>
            <li class="img"><img src="img/logowk.png"  alt="logowikrama"> </li>
            <label class="logo">SMK Wikrama <br>Bogor</label>
             
                <li><a class="active" href="#">Beranda</a></li>
                <li><a href="#">Cara Wakaf</a></li>
                <li><a href="#">Data Wakaf</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Web Wikrama</a></li>
           </ul> 
        </nav>
</header>
    </div>

        <div class="content1">
            <img src="img/masjid.png">
         
            <div class="content">  
                <div class="text">
                    <p>Masjid Besar SMK Wikrama Bogor</p>
                </div>
                <div class="text1">
                    <h1>Mari<span> Tingkatkan</span></h1>
                </div>
                <div class="text2">
                    <h1><span>Keimanan</span> Masyarakat</h1>
                </div>
                <div class="text3">
                    <h1>SMK Wikrama Bogor.</h1>
                </div>
                <div>
                <button type="button"><a href="wakaf.php" style="color : white;">Beri Bantuan Shadaqoh</a></button>
                </div>
            </div>   
        </div>
        <div class="content2">
            <div class="kotak">
                <p>
                    <div class="total">
                        <li>Total Target Dana <br> <p><b>Rp. 40.000,000</b></p></li>
                        <li>Total Dana Terkumpul <br><p><b>Rp. 40.000,000</b></p></li>
                        <li>Total Donatur <br><p><b>34 orang</p></b></li>
                    </div>
                </p>
                <hr>
                <br>
                <div class="progres1">
                    <div class="progress">
                        <!-- <span>30,0%</span> -->
                      
                        <p><b>30,0%</b>Terpenuhi</p>
                    </div>
                    <br>
                    <br>
                    <div class="progress2">
                           
                    <br>
                    <div class="textmarque">
                    <marquee direction="right">Muhammad Ridwan -<span> Uang :Rp.2.000,000 </span></span> Hamba Allah - <span>Barang : Emas</span>  Siti aisyah - <span>Uang: Rp.2.000,000       </span></marquee>
                    <br>
                    </div>
               </div>
            </div>
        </div>
        <br>
        <div class="content3">
            <div class="banner">
                <div class="bannertext">
                    <center><li>BANNER</li></center>
                </div>
            </div>
        </div>
    <div class="content4">
            <b><h1><span>Manfaat</span> Wakaf, Infaq<br>Shadaqoh.</h1></b>
            <p>Berikut Adalah Beberapa Keutamaan Wakaf, Infaq<br>Shadaqoh Yang Akan Anda Dapatkan.</p> 
    </div>
    <div class="card4">
        <div class="container1">
          <div class="card1">
             <div class="icon">
                <img src="img/card1.png">
             </div> 
              <h2>Menjadikan hati<br>lebih tenang</h2>
              <p>Kami memberikan harga<br>yang terbaik dibandingkan<br>dengan kompetitor kami.</p>
          </div>
      
          <div class="card1">
              <div class="icon">
                <img src="img/card2.png">
              </div>
              <h2>Terbukanya<br>pintu rezeki</h2>
              <p>Allah SWT akan membuka<br>pintu rezeki dari arah yang<br>tidak dikira sebelumnya.</p>
           </div>
        </div>
      
        <div class="container1">
          <div class="card1">
              <div class="icon">
                <img src="img/card3.png">
              </div>
              <h2>Menjauhkan dari<br>bahaya</h2>
              <p>Rasulullah SAW pernah<br>bersabda;"Bersegeralah<br>untuk bersedekah, karena<br>musibah dan bencana tidak<br>bisa mendahului sedekah."</p>
          </div>
      
          <div class="card1">
              <div class="icon">
                 <img src="img/card4.png">
              </div>
              <h2> Pahala yang tak<br>terputus</h2>
              <p>Ini akan menolong kita di<br>akhirat nantinya, juga<br> dapat menyelamatkan<br>dari api neraka</p>
            </div>
        </div> 
        <div class="tangan">
            <img src="img/tangan.jpg">
            </div>
       </div>

       <div class="content5">
             <b><h1><span>Cara Melakukan</span> Wakaf, Infaq<br>Shadaqoh.</h1></b>
             <p>Berikut Adalah Cara Melakukan Wakaf, Infaq Shadaqoh Untuk<br>Membantu Pembangunan Masjid Besar SMK Bogor</p> 
       </div>
       <div class="card5">
        <div class="container1">
          <div class="card2">
             <div class="icon">
                <h1>O1</h1>
             </div> 
              <h2> Isi Form Data Diri</h2>
              <p>Isikan form pengisian yang disediakan di form <br> data diri, isikan dengan <br> data diri anda dengan teliti.</p>
          </div>
      
          
          <div class="card2">
              <div class="icon">
                <h1>O2</h1>
              </div>
              <h2>Isikan Nominal Shadaqah </h2>
              <p>Isikan nominal yang akan anda shodaqohkan, <br> pastikan isi nominal dengan seiklasnya tanpa ada  <br>paksaan apapun.</p>
           </div>
        </div>
      
        <div class="container1">
          <div class="card2">
              <div class="icon">
                  <h1>O3</h1>
              </div>
              <h2>Upload Bukti Pembayaran</h2>
              <p>Pilih motode pembayaran dan upload bukti <br> pembayaranya.</p>
          </div>
      
          <div class="card2">
              <div class="icon">
                  <h1>O4</h1>
              </div>
              <h2> Verifikasi Pembayaran</h2>
              <p>Pembayaran anda akan di verifikasi oleh admin <br> dan jika terverifikasi nama anda akan tampil.</p>
            </div>
        </div>
    </div>
    <div class="content6">
        <b><h1><span>Data Donatur</span> Wakaf, Infaq <br> Shadaqoh.</h1></b>
            <p>Berikut Adalah Data Donatur Wakaf, Infaq Shadaqoh Untuk<br>Masjid Besar SMK Wikrama Bogor</p> 
    </div>
    <div class="content7">
    <div style="padding-right: 10%; margin-top: 10px;">
       
    </div>
    <center>
        <table border="1" cellspacing="0" cellpadding="10" style="width: 80%;">
        <tr>
            <th style="padding: 10px; margin: auto; height: 20px;">Nama Donatur</th>
            <th style="padding: 10px; margin: auto; height: 20px;">Donatur ID</th>
            <th style="padding: 10px; margin: auto; height: 20px;">Paket</th>
            <th style="padding: 10px; margin: auto; height: 20px;">Kategori</th>
            <th style="padding: 10px; margin: auto; height: 20px;">Nominal / Barang</th>
        </tr>
        <?php if(mysqli_num_rows($query) > 0) { ?>
        <?php while($rows = mysqli_fetch_assoc($query)){ ?>
                        <tr>
                            <td style="padding: 10px; margin: auto; height: 20px;"><?php echo $rows["nama_donatur"]?></td>
                            <td style="padding: 10px; margin: auto; height: 20px;"><?php echo $rows["donatur_id"]?></td>
                            <td style="padding: 10px; margin: auto; height: 20px;"><?php echo $rows["paket"]?></td>
                            <td style="padding: 10px; margin: auto; height: 20px;"><?php echo $rows["kategori"]?></td>
                            <td style="padding: 10px; margin: auto; height: 20px;"><?php echo $rows["nominal_barang"]?></td>
                            <!-- <td style="padding: 10px; margin: auto; height: 20px;"><a href="hapus.php?nama_donatur=<?php echo $rows['nama_donatur'] ?>">Hapus Data</a></td> -->
                        </tr>
                <?php   } ?>
            <?php } ?>    
        </table>
        </center>
        <br>
        </div>
        
        <div class="content8">
            <h1><span>Gallery</span> Masjid Besar SMK<br>Wikrama Bogor.</h1>
            <p>Berikut Adalah Gallery Masjid Besar SMK Wikrama Bogor.</p>
            
        </div>
    <link rel="stylesheet" href="gallery.css">
        <div class="container">
            <div class="grid">

                <div class="konten"></div>
                <div class="konten"></div>
                <div class="konten"></div>
                <img src="img/1.jpg" widht="500px" height="500px">
                <img src="img/2.jpg" widht="500px" height="500px">
                <img src="img/3.jpg" widht="500px" height="500px">
                <div class="konten"></div>
                <div class="konten"></div>
                <div class="konten"></div>
                <img src="img/7.jpg" widht="500px" height="500px">
                <img src="img/5.jpg" widht="500px" height="500px">
               
               
                <a href="gallery.html">
                <img src="img/gallery.jpeg" widht="300px" height="500px">
                
                
        </a>
        </div>
        </div>
        <br><br>
<div class="content10">
<link rel="stylesheet" href="footer.css">

 <footer id = "webwikrama" class="footer">
    <div class="footer-container">
      <div class="footer-row">
        <div class="footer-content">
          <div class="footer-col">
            <div class="footer-brand">
              <img src="img/logofooter.png" alt="">
              <h3>SMK WIKRAMA BOGOR</h3>
            </div>
            <br>
            <h4>alamat</h4>
            <p>
              jl.raya wangun <br>
              kelurahan sindangsari <br>
              bogor timur 16720
            </p>
            <hr>
            <h4>telepon</h4>
            <p>
              0251-8242411/<br>
              082221718035 (Whatsapp)
            </p>
            <hr>

            <ul class="footer-links">
              <li><a href="https://www.facebook.com/smkwikrama?_rdc=1&_rdr" target="_blank"><img src="img/fb.png" alt=""></a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank"><img src="img/twt.png" alt=""></a></li>
              <li><a href="https://www.instagram.com/smkwikrama/" target="_blank"><img src="img/ig.png" alt=""></a></li>
              <li><a href="https://www.youtube.com/@multimediawikrama7482" target="_blank"><img src="img/yt.png" alt=""></a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>tentang wikrama</h4>
            <ul>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">sejarah</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">peraturan sekolah</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">rencana strategi & prestasi</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">yayasan</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">struktur organisasi</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">cabang</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">penghargaan</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">kerjasama</a></li>
            </ul>
          </div>
        </div>

        <div class="footer-form">
          <div class="footer-col">
            <h4>Kirim Pesan</h4>
            <form action="">
              <input type="text" placeholder="Nama" require>
              <input type="email" placeholder="Email" require> 
              <textarea placeholder="Pesan Anda" require></textarea>

              <button type="submit">Submit</button>
            </form>
          </div>
        </div>
        
        <div class="row">
            <div class="col">
            <br>
            <hr> 
                <p>Copyright &#169; 2023 - SMK Wikrama Bogor. All Right Reserved. </p>
        </div>
        </div>
      </div>
    </div>
    
  </footer>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Footer Design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="footer.css">
</head>
<body>
  <footer class="footer">
  	 <div class="container1">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<div class="kepala" style="display: flex;">
					<img src="img/logowk.png" style="height: 50px; width: auto; padding-right: 10px;">
				    <h6 style="color: #fff; font-size: 16px;">SMK Wikrama <br>Bogor</h6>
				</div>
				<h5 style="color: #fff; font-size: 18px; padding-top: 15px;">Alamat</h5>
					<br>
					<p style="color: #fff;">Jl. Raya Wangun <br>Kelurahan SindangSari <br>Bogor Timur</p>
					<hr style="width: 90%;">
					<br>
					<h5 style="color: #fff; font-size: 18px; padding-top: 15px;">Telepon</h5>
					<br>
					<p style="color: #fff;" >0251-8242411 /</p>
					<p style="color: #fff;">082221718035(Whatsapp)</p>
					<hr style="width: 90%;">
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Tentang Wikrama</h4>
  	 			<ul>
  	 				<li><a href="#">Sejarah</a></li>
  	 				<li><a href="#">Peraturan Sekolah</a></li>
  	 				<li><a href="#">Rencana Strategi & Prestasi</a></li>
  	 				<li><a href="#">Yayasan</a></li>
  	 				<li><a href="#">Struktur Organisasi</a></li>
					<li><a href="#">Cabang</a></li>
					<li><a href="#">Penghargaan</a></li>
					<li><a href="#">Kerjasama</a></li>
  	 			</ul>
  	 		</div>
            <div class="footer-col">
                <h4>Follow Us</h4>
                <div class="social-links">
                <a class="fb" href="https://web.facebook.com/search/top/?q=smk%20wikrama" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" class="svg-inline--fa fa-facebook fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg></a>
                <a class="twt" href="https://twitter.com/smkwikrama" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg></a>
                <a class="ig" href="https://www.instagram.com/smkwikrama/" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a>
                <a class="yt" href="https://www.youtube.com/@multimediawikrama7482" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg></a>
            </div>
            </div>
            <form action="https://formsubmit.co/fanianirmala317@gmail.com" method="post">
                <div class="footer-col">
                <h4 style="color: #fff;">Kirim Pesan</h4>
                <input type="text" name="nama" placeholder="Nama" style="width: 270px;"><br>
                <br>
                <input type="email" name="email" placeholder="Email" style="width: 270px;"><br>
                <br>
                <textarea name="pesan" cols="30" rows="9" style="width: 270px; border-radius: 5px;" placeholder="kirim Pesan"></textarea>
                <br>
                <input type="submit" name="submit"><p style="color: #000; float: left; "></p></button>
                </div>
            </form>
  	 	</div>
  	 </div>
	   <div class="footer-bottom" style="color: #fff;">
		Copyright &copy 2023 - SMK Wikrama Bogor. All Right Reserved.
	</div>
  </footer>
</body>
</html> -->
</body>
</html>

    
