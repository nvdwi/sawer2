<?php
extract($_POST);
$con=mysqli_connect('localhost','root','','sawera');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Barang Bekas Jadi Berkah</title>

<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="img/logo-title.png">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<script type="text/javascript" src="js/jQuery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
<style type="text/css">
	* { margin: 0; padding: 0; }
	img { 
		max-width: 100%;
	 }
	.cycle-slideshow {
		width: 100%;
		max-width: 100%;
		display: block;
		position: relative;
		margin: 20px auto;
		overflow: hidden;
	}
	.cycle-prev, .cycle-next {
		font-size: 200%;
		color: #fff;
		display: block;
		position: absolute;
		top: 50%;
		z-index: 9999;
		cursor: pointer;
		margin-top: -16px;
	}
	.cycle-prev { left: 62px; }
	.cycle-next { right: 62px; }
	.cycle-pager {
		position: absolute;
		width: 100%;
		height: 10px;
		bottom: 10px;
		z-index: 9999;
		text-align: center;
	}
	.cycle-pager span {
		text-indent: 100%;
		top: 100px;
		width: 10px;
		height: 10px;
		display: inline-block;
		border: 1px solid #fff;
		border-radius: 50%;
		margin: 0 10px;
		white-space: nowrap;
		cursor: pointer;
	}
	.cycle-pager-active { background-color: #fff; }
</style>

<a name="ancre"></a>

<!-- CACHE -->
<div class="cache"></div>

<!-- HEADER -->

<div id="wrapper-header" style="background-color:black;">
	<div id="main-header" class="object">
		<div class="logo"><span style="color:#FFFFFF; font-size:35px;">Saweria</span></div>
        <div id="main_tip_search"> 
			<form>
				<input type="text" name="search" id="tip_search_input" list="search" autocomplete=off required>
			</form>
		</div>
        <div id="stripes"></div>
    </div>
</div>

<!-- NAVBAR -->

<div id="wrapper-navbar">
		<div class="navbar object">
    		<div id="wrapper-sorting">

            <div id="wrapper-title-1">
           <a href="index.php"><div class="top-rated object">Beranda</div></a>
    		</div>
            

    		<div id="wrapper-title-6">
            <a href="sign-in.php"><div class="oldies object">Login</div></a>
    		</div>
    		
            </div>
    	</div>
    </div>

<!-- FILTER -->	

	<div id="main-container-menu" class="object">
    	<div class="container-menu">
            
            <div id="main-photo">
                <div class="photo"><a href="index.php">Beranda</a></div>
            </div>

            <div id="main-photo">
                <div class="photo"><a href="login.php">Login</a></div>
            </div>
            
        </div>
    </div>

<div class="cycle-slideshow">
	<span class="cycle-prev">&#9001;</span> <!-- Untuk membuat tanda panah di kiri slider -->
	<span class="cycle-next">&#9002;</span> <!-- Untuk membuat tanda panah di kanan slider -->
	<span class="cycle-pager"></span>  <!-- Untuk membuat tanda bulat atau link pada slider -->
	<!-- <?php
	$query=mysqli_query($con,"select * from carousel");
	while($data=mysqli_fetch_array($query))
	{
	?>
	<img src="img/carousel/<?php echo $data[3] ?>" alt="Gambar Pertama">
	<?php } ?> -->
</div>

<!-- PORTFOLIO -->

	<div id="wrapper-container">
    
		<div class="container object">

		<!--isi-->
		<span style="font-size:30px; color:#bcbcbc;">DAFTAR DONASI</span>

		<div id="main-container-image">
		<!--Proses-->
		<?php
          $query=mysqli_query($con,"select * from donasi where status='Sudah Dikirim' or status='Sudah Diterima' ORDER BY id DESC limit 0,40");
             while($a=mysqli_fetch_array($query)) {
           ?>
			                       
		<section class="work">
			<figure class="white">
				<a href="#">
					<img src="img/donasi/<?php echo $a[6] ?>" alt="" style="height:200px;" />
					<dl>
					<dt>Doa Anda</dt>
					<dd><?php echo $a[5] ?></dd>	
					</dl>
				</a>
			    <div id="wrapper-part-info">
			        <div class="part-info-image"></div>
			        <div id="part-info"><?php echo $a[2] ?></div>
				</div>
			</figure>	
		</section>   
		<?php } ?>
		<!--END Proses-->   
</div>	

		<!--tutup isi-->

            	    
			</div> 
	<div id="wrapper-thank">
    	<div class="thank">
        	<div class="thank-text"><span style="letter-spacing:-5px;"></span></div>
    	</div>
	</div>
	    
	<!-- <div id="main-container-footer">
		<div class="container-footer">
        	
            <div id="row-1f">
            	<div class="text-row-1f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Apa itu BJB ?</span><br>BJB adalah tempat dimana kita untuk mendonasikan barang bekas yang berguna ke anak yatim piatu yang ada di panti asuhan dan yang membutuhkan.</div>
            </div>
            
            <div id="row-2f">
            	<div class="text-row-2f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Siapa yang menerima ?</span><br>Barang akan diterima oleh kami sebagai penyelenggara, dan akan kami kirim ke panti asuhan dan yang membutuhkan.</div>
            </div>
            
            <div id="row-3f">
            	<div class="text-row-3f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Apa saja donasinya ?</span><br>BJB tidak tentang donasi uang, tapi donasi barang-barang yang sudah tidak terpakai tapi masih bisa digunakan seperti mainan, baju dll..</div>
            </div>
            
            <div id="row-4f">
            	<div class="text-row-4f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Pertanyaan lainnya</span><br>jika ada pertanyaan lainnya silahkan kirim pertanyyan anda melalui E-Mail dibawah ini.</div>

				<div id="main_tip_newsletter"> 
					<form>
						<input type="text" name="newsletter" id="tip_newsletter_input" list="newsletter" value="email@gmail.com" readonly autocomplete=off required>
					</form>
				</div>
            </div>
            
		</div>
	</div> -->
    
    
    <div id="wrapper-copyright">
		<div class="copyright">
    		<div class="copy-text object">Copyright Saweria ©2022.</div>
    	</div>
    </div>

</div>
<!-- SCRIPT -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
	<script type="text/javascript" src="js/fastclick.min.js"></script>
	<script type="text/javascript" src="js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" src="js/jquery.animate-shadow-min.js"></script>    
	<script type="text/javascript" src="js/main.js"></script>
	<script>
/* PRELOADER */

function preloader() {
	if (document.images) {
		var img1 = new Image();

		img1.src = "img/psd-4.jpg";
	}
}
function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}
addLoadEvent(preloader);

</script>
</body>
</html>

