<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HUTAN WAKAF YPM</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="style2.css">	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div  class="navbar-logo"> 
							<img src="images/LOGO.png" alt="Logo" width="10px" height="20px" >
							<a href="index.html" class="ket-logo text-primary" ><h1> <span>HUTAN </span>WAKAF YPM</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
													
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">BERANDA</a></li>
				<li>DONASI</li>			
			</div>		
		</div>	
	</div>
	
	<div class="map">
	</div>
	
	<section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>NO REKENING A.N YPM 63Q78323286328</h2>
                <p>*JANGAN LUPA SERTAKAN BUKTI TRANSFER*</p>
            </div> 
			<?php
            
			$sqli = "SELECT * FROM main_donasi";
			$qi = mysqli_query($connect, $sqli);
			?>
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" form action="upload_file.php" method="post" enctype="multipart/form-data">
                    <?php while($r1 = mysqli_fetch_assoc($qi)){?>
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>NAMA </label>
                            <label><?= $r1['nama_donasi'] ?></label>
                        </div>
                        <div class="form-group">
                            <label>NO. REKENING</label>
                            <label><?= $r1['no_rekening'] ?></label>
                        </div>
                        <div class="form-group">
                            <label>JUMLAH DONASI</label>
                            <label><?= $r1['jumlah_donasi'] ?></label>
                        </div>
						<div class="form-group">
                            <label>NO. WA/TELP</label>
                            <label><?= $r1['no_telfon']?></label>
                        </div>                    
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>PESAN YANG DISAMPAIKAN</label>
                            <label><?php $r1['pesan'] ?></label>
                        </div><?php }?>
						<div class="form-group">
                            <label>Tanggal TRANSFER</label>
                            <script>
								function getTanggal() {
								var today = new Date();
								var dd = String(today.getDate()).padStart(2, '0');
								var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
								var yyyy = today.getFullYear();
								return dd + '/' + mm + '/' + yyyy;
								}
								</script>

							<label id="tanggal"></label>

								<script>
								document.getElementById("tanggal").innerHTML = getTanggal();
								</script>

                        </div>                            
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" >KIRIM</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="https://www.facebook.com/umahasidoarjo/" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/hutanwakafypm/" class="instagram tool-tip" title="Instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://wa.me/6282131545669" class="whatsapp tool-tip" class="tool-tip" title="WhatsApp"><i class="fa fa-phone" ></i></a></li>
							<li><a href="https://www.youtube.com/" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						Copyright &copy; 2024 - Hutan Wakaf YPM. All Rights Reserved.
					</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Company
                    -->
				</div>						
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
	
  </body>
</html>