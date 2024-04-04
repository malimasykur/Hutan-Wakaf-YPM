<?php include 'koneksi.php' ?>
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
	