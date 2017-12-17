<!doctype html>
<html class="no-js" lang="en">
<head>
	<!-- Page Header -->
	<title>Tugas Sistem Pendukung Keputusan || User Page</title>
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
	<script src="<?php echo base_url(); ?>assets/js/morris.js"></script>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User<b class="caret"></b></a>
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
                        <a href="<?php echo site_url('welcome2') ?>"><i class="fa fa-fw fa-bar-chart-o"></i> Overview</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('welcome2/report_user') ?>"><i class="fa fa-fw fa-bar-chart-o"></i> Report</a>
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
		
	<div class="container-fluid animate-bottom" style="display: none; padding-top: 70px; background-color: #ffffff" id="container">
		
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <center> Pendahuluan </center><!-- <small>Statistics Overview</small> -->
                        </h1>
                        
                        
                    </div>
                </div>
		<div class="row">
			<div class="col-lg-8" style="left: 17%">
				<div class="panel panel-info">
	  				<div class="panel-heading">
	    				<h3 class="panel-title"><i class="fa fa-fw fa-file"></i>&nbsp;&nbsp;Visi dan Misi Kabupaten Garut</h3>
				  	</div>
	  				<div class="panel-body">
						<div class="tab-content">
						   <p><center><b>Visi	</b> <br>“Terwujudnya kemandirian desa dan keberdayaan masyarakat yang partisipatif.”<br><br>
								<b>Misi</b><br>
Dalam rangka mewujudkan pencapaian visi tersebut, maka dirumuskan misi DPMD sebagai berikut:<br>
1.	Peningkatan dan pengembangan sumber daya aparatur serta sarana dan prasarana.<br>
2.	Pemantapan penyelenggaraan Pemerintahan Desa.<br>
3.	Penguatan kelembagaan dan keswadayaan masyarakat serta pemantapan Aset Program Nasional Pemberdayaan Masyarakat Mandiri Perdesaan  (PNPM-MP).<br>
4.	Pemberdayaan ekonomi masyarakat dan lembaga keuangan mikro perdesaan.<br>
5.	Pemberdayaan masyarakat dalam pengelolaan sumber daya alam dan Teknologi Tepat Guna (TTG)</center>
</p> 
						   
					  	</div>
					</div>
				</div>
			</div>

		<div class="row">
			<div class="col-lg-8" style="left: 17%">
				<div class="panel panel-info">
	  				<div class="panel-heading">
	    				<h3 class="panel-title"><i class="fa fa-fw fa-file"></i>&nbsp;&nbsp;Formulasi Model</h3>
				  	</div>
	  				<div class="panel-body">
						<div class="tab-content">
						   <p>Dalam menentukan desa tertinggal di Kecamatan Karangpawitan Kabupaten Garut, menggunakan metode AHP, cara kerja kerja dari metode AHP ini yaitu dengan merinci setiap situasi yang komplek, kemudian dijadikan beberapa komponen – komponen dan kemudian variabel tersebut diatur kedalam suatu hierarki, kemudian diberikan nilai numerik dan variabel mana yang memiliki prioritas tertinggi.</p>
<p>Metode ini dapat digunakan menyelesaikan masalah – masalah kompleks yang tidak terstruktur, cukup memiliki data tertulis, seperti penentuan alternatif, penyusunan prioritas, optimalisasi dan pemecahan masalah.

</p> 
<center><img src= "http://localhost/program2-spk-master/assets/img/formulasi.png" alt="	" align="" ></center><br><br>
						      			   			
									  <p><center><a class="btn btn-primary" href="http://localhost/program/assets/Laporan.docx" target="_blank" role="button">Lihat lebih lanjut</a></center</p>
  						   
									  
  						   
					  	</div>
					</div>
				</div>
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

	// 	
</script>

</body>
</html>