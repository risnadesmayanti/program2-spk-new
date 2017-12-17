<!doctype html>
<html class="no-js" lang="en">
<head>
	<!-- Page Header -->
	<title>Tugas Besar SPK</title>
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
	<?php 	$this->load->view('navbar'); ?>

	<div id="loader"></div>

	<!-- Page Container -->
	<div id="wrapper">
		
	<div class="container-fluid animate-bottom" style="display: none; padding-top: 70px; background-color: #ffffff" id="container">
		

		<div class="row">
			<div class="col-lg-8" style="left: 15%">
				<div class="panel panel-primary">
	  				<div class="panel-heading">
	    				<h3 class="panel-title"><span class="glyphicon glyphicon-folder-open aria-hidden="true"></span>&nbsp;&nbsp;Deskripsi</h3>
				  	</div>
	  				<div class="panel-body">
						<ul class="nav nav-tabs">
						   <li class="active"><a data-toggle="tab" href="#attribut">Kriteria</a></li>
						   <li><a data-toggle="tab" href="#data">Alternatif</a></li>
						   <li><a data-toggle="tab" href="#test">Peringkat Kriteria</a></li>
						   <li><a data-toggle="tab" href="#rekom">Rekomendasi</a></li>
						</ul>

						<div class="tab-content">
						   
						    <div id="attribut" class="tab-pane fade in active" style="padding-top: 20px;">
						    	<div class="col-md-1">
									<span style="font-size: 500%" class="glyphicon glyphicon-duplicate aria-hidden="true"></span>
								</div>								
								<div class="col-md-11">
							      	<div class="btn-group">
										<?php foreach ($kriteria as $key) { ?>
										  	<a style="margin:0px 20px 10px 0px; font-size: 14px;" type="button" tabindex="0" class="btn btn-sm btn-info pop" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Deksripsi" data-content="<?php echo $key['deskripsi']; ?>"><?php echo $key['kriteria']; ?></a>
										  <!-- 	<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										    	<span class="caret"></span>
										    	<span class="sr-only">Toggle Dropdown</span>
										  	</button>
										  	<ul class="dropdown-menu">
										    	<li><a><?php echo $key['deskripsi']; ?></a></li>
										  	</ul> -->
										<?php } ?>
									</div>
								</div>
						    </div>
						    <div id="data" class="tab-pane fade" style="padding-top: 20px;">						    	
						    	<div class="row">
						    		<div class="col-md-12">
						      			<?php foreach($alternatif as $alt){ ?>
									  	<div class="col-sm-6 col-md-4">
										    <div class="thumbnail">
										      <img src="<?php echo base_url()."assets/img/".strtolower($alt['nama']).".png"; ?>" alt="...">
										      <div class="caption">
										        <h3><?php echo $alt['nama']; ?></h3>
										        <p><?php echo $alt['deskripsi']; ?></p>
										        <p><a href="http://www.toyota.astra.co.id/product/<?php echo strtolower($alt['nama']); ?>" class="btn btn-primary" role="button">Pelajari Lebih Lanjut</a></p>
										      </div>
										    </div>
										 </div>
										 <?php } ?>
									</div>		
								</div>
						    </div>
						    <div id="test" class="tab-pane fade" style="padding-top: 20px;">
						    	<div class="row">
						    		<div class="col-md-9">
										<center><div id="myChart" style="width:800px; height:500px;"></div></center>
						    		</div>
						    		<div class="col-md-3">
						    			<table class="table">
						    			<th class="warning">Rank</th>
						    			<th class="warning">Kriteria</th>
						    			<?php $i=1;foreach($sort as $key){?>
						    			    <tr class="">
						    			    <td><?php echo $i; ?></td>
						    			    <td><?php echo $key['kriteria']; ?></td>
						    			    </tr>
										<?php $i++;} ?>
						    			</table>
						    		</div>
					    		</div>
						  </div>
  						    <div id="rekom" class="tab-pane fade" style="padding-top: 20px;">
						    	<div class="row">
						    		<div class="col-md-12">
						    			<div class="col-md-2">
											<span style="font-size: 1000%" class="glyphicon glyphicon glyphicon-paste aria-hidden="true"></span>
										</div>
						    			<div class="col-md-10">
							      			<table class="table">
							      					<th class="warning">Rank</th>
								    				<th class="warning">Tipe Mobil</th>
								    				<th class="warning">Eigenvektor</th>
									    			<?php $arr=array('success','danger','warning','info','success','danger');$i=0;foreach($rekomendasi as $key){?>
									    			    <tr>
									    			    	<td><?php echo $i+1; ?></td>
									    			    	<td><?php echo $key['nama']; ?></td>
									    			    	<!-- <td><?php echo $key; ?> -->
									    			    	<td>
										    			    	<div class="progress">
																 	<div class="progress-bar progress-bar-<?php echo $arr[$i];?>" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $key['value']*100; ?>%;">
																    <?php echo number_format($key['value'],2); ?>
																  	</div>
																</div>
															</td>
									    			    </tr>
													<?php $i++;} ?>
						    				</table>
					    				</div>
					    			</div>
					    		</div>
						    </div>
					  	</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8" style="left: 15%">
				<div class="panel panel-primary">
	  				<div class="panel-heading">
	    				<h3 class="panel-title"><span class="glyphicon glyphicon-pencil aria-hidden="true"></span>&nbsp;&nbsp;Input Kriteria</h3>
				  	</div>
	  				<div class="panel-body">
	  					<form action="" method="post" id="new" accept-charset="utf-8">
	  						<div class="row" style="padding-top: 10px;">
								<div class="col-md-3 form-group">
									<input type="text" name="kriteria" id="kriteria" placeholder="Nama Kriteria" class="form-control">
								</div>
								<div class="col-md-7 form-group">
									<textarea name="deskripsi" class="form-control" id="deskripsi" placeholder="Deksripsi Kriteria" rows="6"></textarea>
								</div>
								<div class="row col-md-2">
									<button class="btn btn-warning" type="reset" id="reset"><span class="glyphicon glyphicon-repeat"></span>&nbsp;&nbsp;Reset</button>
									<button type="button" class="btn btn-success " id="submit1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>">Submit</button>

								</div>
							</div>							
						</form>
					</div>
				</div>	
			</div>
		</div>
		<div id="eigenkriteria" class="row" style="display: none;">
			<div class="col-lg-8" style="left: 15%">
				<div class="panel panel-danger">
	  				<div class="panel-heading">
	    				<h3 class="panel-title"><span class="glyphicon glyphicon-check aria-hidden="true"></span>&nbsp;&nbsp;Input Perbandingan Nilai Matriks</h3>
				  	</div>
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
		<div class="row">
			<div class="col-lg-8" style="left: 15%">
				<div class="panel panel-primary">
	  				<div class="panel-heading">
	    				<h3 class="panel-title"><span class="glyphicon glyphicon-ok aria-hidden="true"></span>&nbsp;&nbsp;Input Alternatif
	    				</h3>
				  	</div>
	  				<div class="panel-body">
	  					<form action="" method="post" id="new" accept-charset="utf-8">
	  						<div class="row" style="padding-top: 10px;">
								<div class="col-md-3 form-group">
									<input type="text" name="nama" id="mobil" placeholder="Nama Tipe Mobil" class="form-control">
								</div>
								<div class="col-md-7 form-group">
									<textarea name="deskripsi" class="form-control" id="deskmobil" placeholder="Deksripsi Mobil" rows="6"></textarea>
								</div>
								<div class="row col-md-2">
									<button class="btn btn-warning" type="reset" id="reset"><span class="glyphicon glyphicon-repeat"></span>&nbsp;&nbsp;Reset</button>
									<button type="button" class="btn btn-success " id="submit2" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>">Submit</button>

								</div>
							</div>							
						</form>
					</div>
				</div>	
			</div>
		</div>	
		<div id="eigenalternatif" class="row" style="display: none;">
			<div class="col-lg-8" style="left: 15%">
				<div class="panel panel-danger">
	  				<div class="panel-heading">
	    				<h3 class="panel-title"><span class="glyphicon glyphicon-check aria-hidden="true"></span>&nbsp;&nbsp;Input Nilai Alternatif(Kualitatif/Kuantitatif)</h3>
				  	</div>
				  	<div class="panel-body">
	  				  	<?php echo form_open('Welcome/inputa'); ?>
					  		<?php foreach($kriteria as $i){ ?>
					  		<div class="">
					  			<div class="form-group">
					  				<label name="labelinput"><?php echo $i['kriteria']; ?></label>
					  				<input type="text" name="arrv[<?php echo $i['id']; ?>]" class="form-control">
					  			</div>	
					  		</div>	
					  		<?php } ?>
					  		<!-- <div>
					  			<b id="matvalue"><u>Perbandingan Nilai tiap Alternatif</u></b>
					  		</div>
					  		<?php foreach($alternatif as $i){ ?>
					  		<div class="">
					  			<div class="form-group">
					  				<label name="labelinput"><?php echo $i['nama']; ?></label>
					  				<input type="text" name="arra[]" class="form-control">
					  			</div>	
					  		</div>	
					  		<?php } ?> -->
					  		<div class="">
					  		<input type="hidden" id="mobil2" name="mobil">
					  		<input type="hidden" id="deskmobil2" name="deskmobil" >
					  		<input type="submit" value="Submit" class="form-control btn-success">
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