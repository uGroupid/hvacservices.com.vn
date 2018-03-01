	<div class="container-wrap">
		<div class="main-content container-fullwidth">
			<div class="row">
				<div class="noo-main col-md-12" role="main">
					<div class="noo-vc-row row " style=" padding-top: 0px; padding-bottom: 50px;">
						<div class="noo-vc-col col-md-12 ">
							<div class=" property-slider">
								<div id="noo-slider-1" class="noo-slider noo-property-slide-wrap">
									<ul class="sliders">
										<?php $getslide = $this->callbuyMD->get_slide(); foreach( $getslide as $valueslide){ ?>
										<li class="slide-item noo-property-slide"><img width="1170" height="700" src="<?php echo base_url() ?>assets/uploads/<?php echo $valueslide['img'];?>" class="attachment-property-slider wp-post-image" alt="<?php echo $valueslide['title'];?>"/>
										
										</li>
										<?php }  ?>
									</ul>
									<div class="clearfix">
									</div>
									<div id="noo-slider-1-pagination" class="slider-indicators">
									</div>
									<a id="noo-slider-1-prev" class="slider-control prev-btn" role="button" href="#"><span class="slider-icon-prev"></span></a>
									<a id="noo-slider-1-next" class="slider-control next-btn" role="button" href="#"><span class="slider-icon-next"></span></a>
								</div>
							</div>
							<script>
jQuery('document').ready(function ($) {
  $('#noo-slider-1 .sliders').carouFredSel({
    infinite: true,
    circular: true,
    responsive: true,
    debug : false,
    scroll: {
      items: 1,
      duration: 1000,
      pauseOnHover: "resume",
      fx: "scroll"
    },
    auto: {
      timeoutDuration: 2000,
      play: true
    },
    prev: {
      button: "#noo-slider-1-prev"
    },
    next: {
      button: "#noo-slider-1-next"
    },
    pagination: {
      container: "#noo-slider-1-pagination"
    },
    swipe: {
      onTouch: true,
      onMouse: true
    }
  });
});
							</script>
							<style>
#noo-slider-1.noo-slider .caroufredsel_wrapper .sliders .slide-item.noo-property-slide{max-height:700px;}
							</style>
						</div>
					</div>
					
					<div class="noo-vc-row row " style=" padding-top: 50px; padding-bottom: 80px;">
						<div class="noo-vc-col col-md-12 ">
							<div class="container-boxed max">
								<div class="noo-vc-row row " style=" padding-top: 20px; padding-bottom: 20px;">
									<div class="noo-vc-col col-md-12 ">
									<?php $groupnews = $this->callbuyMD->groups_news();
										//	foreach($groupnews as $value_groupnews){
											//$get_products_list = $this->callbuyMD->get_products_list($valuecatelog_products['id_catelog']);
											//foreach($groupnews as $value_groupnews){
											?>
										<div class="recent-properties recent-properties-featured">
											<div class="recent-properties-title">
												 <span class="property-category"><h4><a href="<?php echo base_url();?>page/product/<?php echo $value_list_products['id_danhmuc'];?>"><u style="font-size:2em">
												 <img style="width: 92px;height: 44px;margin-top: -10px;" class="noo-logo-retina-img noo-logo-normal" src="<?php echo base_url() ?>themes/wp-content/uploads/2014/09/logo.jpg" alt="QUẠT CÔNG NGHIỆP">  <?php echo $value_list_products['name_en'];?></u></a></h4></span>
											</div>
											
											<div class="recent-properties-content">
												<div class="caroufredsel-wrap">
														<?php 
														//$get_product = $this->callbuyMD->index_get_product($value_list_products['id_danhmuc']); 
													foreach($groupnews as $value_groupnews){
													?>
													<ul>
												
														<li>
															<article class="post-6607 noo_property type-noo_property status-publish has-post-thumbnail hentry has-featured">
															<div class="property-featured">
																<a class="content-thumb" href="#">
																<img width="300px" height="400px" src="<?php echo base_url() ?>assets/uploads/<?php echo  $value_groupnews['img'];?>" class="" alt="<?php echo  $value_groupnews['name_en'];?>"/></a>
															</div>
														
															<div class="property-wrap">
																<h2 class="property-title">
																<a href="<?php echo base_url();?>page/view_news/<?php echo $value_groupnews['id_news'];?>" title="<?php echo  $value_groupnews['name_en'];?>"><?php   echo mb_substr($value_groupnews['name_en'],0,75,'UTF-8');?></a>
																</h2>
																<div class="property-excerpt">
																	<p>
																		<?php echo mb_substr($value_groupnews['introduction'],0,590,'UTF-8');?>
																	</p>
																</div>
																<div class="property-summary">
																
																	<div class="property-info">
																		<div class="property-action">
																			<!--<a id="clickdowload" class="button" href="#popup1">Download Catalogue <i class="fa fa-arrow-circle-o-right"></i>
																						<input id="valueinputdownload" class="inputdowload" id="nameproduct" name="nameproduct" type="hidden" value="<?php echo  $value_groupnews['name_en'];?>" >
																			</a>-->
																		</div>
																		<div class="property-action">
																			<a href="<?php echo base_url();?>page/view_news/<?php echo $value_groupnews['id_news'];?>">More Details   <i class="fa fa-arrow-circle-o-right"></i></a>
																		</div>
																	</div>
																</div>
															</div>
															</article>
															
														</li>
												
													</ul><br> <br> <br> 
														<?php } ?>
												</div>
												<a class="caroufredsel-prev" href="#"></a>
												<a class="caroufredsel-next" href="#"></a>
											</div>
										</div>
										<hr>
										<?php 
										//} 
									//	} 
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="popup1" class="overlay">
		<div class="popup">
			<h2>Please Enter Information To Download</h2>
			<a class="close" href="#">×</a>
			<div class="content">
				<form id="inputdownload"  method="post" action="<?php echo base_url();?>page/customer_contact">
						<br>
						  <input class="inputdowload" id="fullname" name="fullname" type="text" value="" placeholder="Full Name">
							<br>
						  <input class="inputdowload" id="email" name="email" type="email" value="" placeholder="example@quatgiocongnghiep.com.vn">
							<br>
						  <input class="inputdowload" id="phone" name="phone" type="phone" value="" placeholder="(+84)0981907109">
							<br>
						  <button id="buttondownload" name="submit" type="submit" value=""/>Download Now</button>
				</form>
				
			</div>
		</div>
	</div>
<style>

#buttondownload {
    width: 100%;
    height: 59px;
    margin-top: 15px;
    border-radius: 8px;
    border: none;
	background: #1FA52A;
	font-size: 27px;
color: #fff;
font-weight: bold;
}
.inputdowload{
    width: 100%;
    height: 43px;
    border: 1px slo;
    border-radius: 4px;
    margin-top: 20px;
}
#buttondownload:hover {
    width: 100%;
    height: 59px;
    margin-top: 15px;
    border-radius: 8px;
    border: none;
	background: #224872;
	font-size: 27px;
color: #fff;
font-weight: bold;
}
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
margin: 200px auto;
padding: 20px;
background: #FFF none repeat scroll 0% 0%;
border-radius: 5px;
width: 52%;
position: relative;
transition: all 5s ease-in-out 0s;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: orange;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}
</style>
	</div>