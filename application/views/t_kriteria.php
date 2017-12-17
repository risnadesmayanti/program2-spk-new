<!doctype html>
<html class="no-js" lang="en">
<head>
	<!-- Page Header -->
	<title>Tugas Sistem Pendukung Keputusan || Admin Page</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
  	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">  	
  	<link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
  	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/highchart.js"></script>
</head>
<body onload="load()">
	<!-- Navigation  -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Prototype Aplikasi Sistem Pendukung Keputusan</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
             
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo site_url('login/logout') ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        	<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li class="active">
                        <a href="<?php echo site_url('welcome/') ?>"><i class="fa fa-fw fa-bar-chart-o"></i> Report</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('welcome/t_kriteria') ?>">Tambah Kriteria</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('welcome/t_alternatif') ?>">Tambah Alternatif</a>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Kriteria <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <?php foreach ($kriteria as $key) { ?>
										  	<a style="margin:0px 20px 10px 0px; font-size: 14px;" type="button" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Deksripsi" data-content="<?php echo $key['deskripsi']; ?>"><?php echo $key['kriteria']; ?></a>
										  <!-- 	<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										    	<span class="caret"></span>
										    	<span class="sr-only">Toggle Dropdown</span>
										  	</button>
										  	<ul class="dropdown-menu">
										    	<li><a><?php echo $key['deskripsi']; ?></a></li>
										  	</ul> -->
										<?php } ?>
                            </li>
                        

                        </ul>
                    </li>
                  

                        <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i> Alternatif Pilihan <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <?php foreach($alternatif as $alt){ ?>
										  	<a style="margin:0px 20px 10px 0px; font-size: 14px;" type="button" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Deksripsi" data-content="<?php echo $alt['deskripsi']; ?>"><?php echo $alt['nama']; ?></a>
										  <!-- 	<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										    	<span class="caret"></span>
										    	<span class="sr-only">Toggle Dropdown</span>
										  	</button>
										  	<ul class="dropdown-menu">
										    	<li><a><?php echo $key['deskripsi']; ?></a></li>
										  	</ul> -->
										<?php } ?>
                            </li>
                        

                        </ul>
                    </li>
                    

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>


	<div id="loader"></div>

	<!-- Page Container -->
	<div id="wrapper">
		
	<div class="page-wrapper animate-bottom" style="display: none; padding-top: 70px; background-color: #ffffff" id="container">
		<div class="container-fluid">
		<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <center>Tambah Kriteria</center> <!-- <small>Statistics Overview</small> -->
                        </h1>
                        <div class="col-lg-3"></div>
                        <center><div class="col-lg-6">
                        	<div class="well">
                        		
                        <p>
                        	Tambahkan kriteria yang sesuai dengan permasalahan desa tertinggal. Pastikan kolom Nama Kriteria dan Deskripsi Kriteria terisi dengan lengkap. <br>Isikan skala perbandingan antar kriteria dan alternatif sesuai. Pengisian skala perbandingan harus dalam bentuk pecahan.
                        </p>	
                        	</div>
                        </div></center>
                        
                    </div>
                </div>
</div>
		
		<div class="row">
			<div class="col-lg-8" style="left: 17.5%">
				<div class="panel panel-primary">
	  				<div class="panel-heading">
	    				<h3 class="panel-title"><span class="glyphicon glyphicon-pencil aria-hidden="true"></span>&nbsp;&nbsp;Formulir Tambah Kriteria</h3>
				  	</div>
	  				<div class="panel-body">
	  					<form action="" method="post" id="new" accept-charset="utf-8">
	  						<div class="row" style="padding-top: 10px;">
								<div class="row col-lg-1">
								</div>
								<div class="col-md-3 form-group">
									<input type="text" name="kriteria" id="kriteria" placeholder="Nama Kriteria" class="form-control">
								</div>
								<div class="col-md-7 form-group">
									<textarea name="deskripsi" class="form-control" id="deskripsi" placeholder="Deksripsi Kriteria" rows="6"></textarea>
								</div>
							</div>							
						</form>
						<hr>
						<h3>Perbandingan Kriteria dengan Nilai Alternatif</h3><br>
						<?php echo form_open('Welcome/inputk'); ?>
					  		<?php foreach($kriteria as $i){ ?>
					  		<div class="">
					  			<div class="form-group">
					  				<label name="labelinput"><?php echo $i['kriteria']; ?></label>
					  				<input type="text" name="arr[]" class="form-control">
					  			</div>	
					  		</div>	
					  		<?php } ?>
					  		<div>
					  			<b id="matvalue"><u>Perbandingan Nilai tiap Alternatif (Kuantitatif)</u></b>
					  		</div>
					  		<?php foreach($alternatif as $i){ ?>
					  		<div class="">
					  			<div class="form-group">
					  				<label name="labelinput"><?php echo $i['nama']; ?></label>
					  				<input type="text" name="arra[]" class="form-control">
					  			</div>	
					  		</div>	
					  		<?php } ?>
					  		<div class="">
					  		<input type="hidden" id="krit" name="kriteria">
					  		<input type="hidden" id="desk" name="deskripsi" >
					  		<input type="submit" name="eigenk" value="Submit" class="form-control btn-success">
					  		</div>
					  	</form>
					</div>
				</div>	
			</div>
		</div>
		<div id="eigenkriteria" class="row" style="display: none;">
			<div class="col-lg-8" style="left: 15%">
				<div class="panel panel-danger">
	  				
				  	<div class="panel-body">
	  				  	<?php echo form_open('Welcome/inputk'); ?>
					  		<?php foreach($kriteria as $i){ ?>
					  		<div class="">
					  			<div class="form-group">
					  				<label name="labelinput"><?php echo $i['kriteria']; ?></label>
					  				<input type="text" name="arr[]" class="form-control">
					  			</div>	
					  		</div>	
					  		<?php } ?>
					  		<div>
					  			<b id="matvalue"><u>Perbandingan Nilai tiap Alternatif (Kuantitatif)</u></b>
					  		</div>
					  		<?php foreach($alternatif as $i){ ?>
					  		<div class="">
					  			<div class="form-group">
					  				<label name="labelinput"><?php echo $i['nama']; ?></label>
					  				<input type="text" name="arra[]" class="form-control">
					  			</div>	
					  		</div>	
					  		<?php } ?>
					  		<div class="">
					  		<input type="hidden" id="krit" name="kriteria">
					  		<input type="hidden" id="desk" name="deskripsi" >
					  		<input type="submit" name="eigenk" value="Submit" class="form-control btn-success">
					  		</div>
					  	</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	</div> 

	<!-- Modal -->
	<!-- Modal : Input Not Valid -->
	<div class="modal fade" id="inputwarn" role="dialog" style="padding-top: 200px">
	    <div class="modal-dialog modal-sm">
	      	<div class="modal-content">
	        	<div class="modal-body">
	        		<div class="alert alert-danger" role="alert">
	        		<h1 align="center" style="font-size: 300%"><span class="glyphicon glyphicon-remove-sign aria-hidden="true"></span></h1>
		          	<h5 align="center" style="color: grey;">Input Data Belum Terisi Dengan Benar</h5>
		          	</div>
			    </div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
	      	</div>	      
	    </div>
  	</div>
  	<!-- Modal : Input Was Reset -->
  	<div class="modal fade" id="inputres" role="dialog" style="padding-top: 200px">
	    <div class="modal-dialog modal-sm">
	      	<div class="modal-content">
	        	<div class="modal-body">
	        		<div class="alert alert-success" role="alert">
	        		<h1 align="center" style="font-size: 300%"><span class="glyphicon glyphicon-erase aria-hidden="true"></span></h1>
		          	<h5 align="center" style="color: grey;">Input Data  Telah Direset</h5>
		          	</div>
			    </div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
	      	</div>
	      
	    </div>
  	</div>
			
<script>
	// page loader
	var timer;

	function load() {
	    timer = setTimeout(showContainer, 0);
	}

	function showContainer() {
	  document.getElementById("loader").style.display = "none";
	  document.getElementById("container").style.display = "block";
	}

	// data process on submit
	$('#submit1').on('click',function() {

		var kri = document.getElementById("kriteria").value;
		var des = document.getElementById("deskripsi").value;

		document.getElementById("krit").value = kri;
		// alert(document.getElementById("krit").value);
		document.getElementById("desk").value = des;
		// var asd = document.getElementById("matvalue").append("Perbandingan setiap alternatif");
		
		if( kri != '' && des != '' ){
			
			var $this = $(this);
			$this.button('loading');
			setTimeout(function() {
		       // $this.button('reset');
		       $("#eigenkriteria").show("slow");
		   	}, 1000);		
		}else{
			$("#inputwarn").modal();
		}
    });
	// data process on submit
	$('#submit2').on('click',function() {

		var m1 = document.getElementById("mobil").value;
		var d1 = document.getElementById("deskmobil").value;

		if( m1 != '' && d1 != '' ){
			document.getElementById("mobil2").value = m1;
			// alert(document.getElementById("krit").value);
			document.getElementById("deskmobil2").value = d1;
			// var asd = document.getElementById("matvalue").append("Perbandingan setiap alternatif");
			
				
			var $this = $(this);
			$this.button('loading');
			setTimeout(function() {
		       // $this.button('reset');
		       $("#eigenalternatif").show("slow");
		   	}, 1000);		
		}else{
			$("#inputwarn").modal();
		}
    });
	// reset button
    $('#reset').on('click',function() {
		$("#inputres").modal();
    	// $("#hasil").hide("slow");
    });

    // about button slideDown animation to Bootstrap dropdown when expanding.
  	$('.dropdown').on('show.bs.dropdown', function() {
    	$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  	});
  	$('.dropdown').on('hide.bs.dropdown', function() {
    	$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  	});
	$(function () {
	  $('[data-toggle="popover"]').popover()
	})
  	function toggleFullScreen() {
	  	if ((document.fullScreenElement && document.fullScreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
		    if (document.documentElement.requestFullScreen) {  
		      	document.documentElement.requestFullScreen();  
		    }else if(document.documentElement.mozRequestFullScreen) {  
		      	document.documentElement.mozRequestFullScreen();  
		    }else if(document.documentElement.webkitRequestFullScreen) {  
		      	document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
		    }  
	  	}else{  
	    if(document.cancelFullScreen) {  
	      	document.cancelFullScreen();  
	    }else if(document.mozCancelFullScreen) {  
	      	document.mozCancelFullScreen();  
	    }else if(document.webkitCancelFullScreen) {  
	      	document.webkitCancelFullScreen();  
	    }  
	  }  
	}
	$(function () {
	    Highcharts.chart('myChart', {
	        chart: {
	            plotBackgroundColor: null,
	            plotBorderWidth: null,
	            plotShadow: true,
	            type: 'pie'
	        },
	        title: {
	            text: ''
	        },
	        tooltip: {
	            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	        },
	        plotOptions: {
	            pie: {
	                allowPointSelect: true,
	                cursor: 'pointer',
	                dataLabels: {
	                    enabled: true,
	                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
	                    style: {
	                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
	                    }
	                }
	            }
	        },
	        series: [{
	            name: 'Kriteria',
	            colorByPoint: true,
	            data: [
	            <?php 
	            $asd = array('red','blue','yellow','skyblue','green','black','pink','beige');
	            $i=0;
	            foreach ($kriteria as $key) {
	            	# code...
	            ?>
	            {
	                name: <?php echo "'".$key['kriteria']."'"; ?>,
	                y: <?php echo $key['eigen']; ?>,
	                color :<?php echo "'".$asd[$i]."'"; ?>
	            }, 
	            <?php $i++;} ?>
	            ]
	        }]
	    });
	});
	
</script>

</body>
</html>