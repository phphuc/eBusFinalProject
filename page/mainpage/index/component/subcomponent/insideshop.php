<?php
include_once "/home/s3515215/public_html/setting/config.php";
?>
<!-- Javascript plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Shuffle/3.1.1/jquery.shuffle.modernizr.min.js"></script>
<!--<script src="https://rawgit.com/Vestride/Shuffle/master/dist/jquery.shuffle.min.js"></script>
-->
<!-- Rating -->
<script src="js/jquery.shuffle.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
			/* initialize shuffle plugin */
			var $grid = $('#grid-shop');
			$grid.shuffle({
				itemSelector: '.item' // the selector for the items in the grid
			});
			/* reshuffle when user clicks a filter item */
			$('#selector-shop li').click(function (e) {
				e.preventDefault();

				// set active class
				$('#selector-shop li').removeClass('active');
				$(this).addClass('active');

				// get group name from clicked item
				var groupName = $(this).attr('data-group');

				// reshuffle grid
				$grid.shuffle('shuffle', groupName );
			});	
			// Searching
			$("#searchValueInThisbox").on("input", function() {
				var searchString = this.value;
				$grid.shuffle('shuffle', searchString );
				$('#selector-shop li').removeClass('active');
			});
			// Sorting options
			$('#sort-options').on('change', function() {
			  var sort = this.value,
				  opts = {};
			  // We're given the element wrapped in jQuery
			  if (sort === '0'){
				opts = {};
			  } else if ( sort === '1' ) {
			  	opts = {
				  reverse: true,
				  by: function($el) {
					return $el.data('rating'); // WOrk
				  }
				};
			  } else if ( sort === '2' ) {
			  	opts = {
				  reverse: false,
				  by: function($el) {
					return $el.data('price'); // WOrk
				  }
				};
			  } else if ( sort === '3' ) {
			  	opts = {
				  reverse: true,
				  by: function($el) {
					return $el.data('price'); // WOrk
				  }
				};
			  } else if ( sort === '4' ) {
				opts = {
				  by: function($el) {
					return $el.data('title').toLowerCase(); // WOrk
				  }
				};
			  } else if ( sort === '5' ) {
			  	opts = {
				  reverse: true,
				  by: function($el) {
					return $el.data('discount'); // WOrk
				  }
				};
			  }
			  // Filter elements
			  $grid.shuffle('sort', opts);
			});
	});
</script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
<!-- CSS Setting -->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet">
<style type="text/css">
div#insideshopmodal {
	font-size: 12px;
	margin: 15px auto;
}
div#insideshopmodal > div.row > div {
	margin-bottom: 30px;
	margin-right: -3px !important;
	margin-left: -3px !important;
}
.search-form .form-group {
	float: right !important;
	transition: all 0.35s, border-radius 0s;
	width: 32px;
	height: 32px;
	background-color: #fff;
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
	border-radius: 25px;
	border: 1px solid #ccc;
}
.search-form .form-group input.form-control {
	padding-right: 20px;
	border: 0 none;
	background: transparent;
	box-shadow: none;
	display: block;
}
.search-form .form-group input.form-control::-webkit-input-placeholder {
 display: none;
}
.search-form .form-group input.form-control:-moz-placeholder {
  /* Firefox 18- */
  display: none;
}
.search-form .form-group input.form-control::-moz-placeholder {
  /* Firefox 19+ */
  display: none;
}
.search-form .form-group input.form-control:-ms-input-placeholder {
 display: none;
}
.search-form .form-group:hover, .search-form .form-group.hover {
	width: 100%;
	border-radius: 4px 25px 25px 4px;
}
.search-form .form-group span.form-control-feedback {
	position: absolute;
	top: -1px;
	right: -2px;
	z-index: 2;
	display: block;
	width: 34px;
	height: 34px;
	line-height: 34px;
	text-align: center;
	color: #3596e0;
	left: initial;
	font-size: 14px;
}
.item{
		
}
#grid-shop {clear: both; position: relative}
#AllNeedToClick{
	z-index:1;	
}
.zoomContainer{ z-index: 1051;}
.zoomWindow{ z-index: 1051;}
.viewMore{cursor:pointer;}
</style>
<!-- HTML -->
<div class="container-fluid"><pre id="showstatus">Status: <span id="statusshop">Welcome to our SHOP :P</span></pre>
<?php
  $getevent_av[0] = mysqli_query($connect5,"SELECT * FROM `event` WHERE `event`.`ev_apply` = 1 AND (`event`.`ev_start` <= CURDATE() AND `event`.`ev_end` >= CURDATE()) AND (`event`.`ev_timestart` <= CURTIME() AND `event`.`ev_timeend` >= CURDATE())");
  $getevent_av[1] = mysqli_num_rows($getevent_av[0]);
  // Variable Set
  $show_event[0] = '';
  // Check
  if ($getevent_av[1] > 0){
	while($row = mysqli_fetch_array($getevent_av[0])){
		$getevent_id = $row['ev_id'];
		$getevent_i[0] = $row['ev_name'];
		$getevent_i[1] = $row['ev_start'];
		$getevent_i[2] = $row['ev_end'];
		$getevent_i[3] = $row['ev_timestart'];
		$getevent_i[4] = $row['ev_timeend'];
		$getevent_i[5] = $row['ev_disc'];	
		$show_event[0] .= '<div>Event: '.$getevent_i[0].' - Time Left: <span data-countdown="'.$getevent_i[0].'"></span> - <a data-toggle="collapse" data-target="#event-'.$getevent_id.'">Read More</a></div>
		<div id="event-'.$getevent_id.'" class="collapse">
		<kbd>'.$getevent_i[5].'</kbd>
	  </div>
		<script type="text/javascript">
			$('.$q.'[data-countdown="'.$getevent_i[0].'"]'.$q.').countdown('.$q.$getevent_i[2].' '.$getevent_i[4].$q.')
			 .on('.$q.'update.countdown'.$q.', function(event) {
			   var format = '.$q.'%H:%M:%S'.$q.';
			   if(event.offset.days > 0) {
				 format = '.$q.'%-d day%!d '.$q.' + format;
			   }
			   if(event.offset.weeks > 0) {
				 format = '.$q.'%-w week%!w '.$q.' + format;
			   }
			   $(this).html(event.strftime(format));
			 })
			 .on('.$q.'finish.countdown'.$q.', function(event) {
			   $(this).html('.$q.'This offer has expired!'.$q.')
				 .parent().addClass('.$q.'disabled'.$q.');
			 
			 });
		</script>
		
		';
	}
	echo $event_final_show = '
	<div class="alert alert-warning" style="font-size:12px;">
  		<strong>Discount: </strong><kbd id="realclocktime1" class="hidden-md hidden-lg"></kbd>
        <script type="text/javascript">window.onload = date_time("realclocktime1");</script><br />
		'.$show_event[0].'
	</div>
';
	$show_event[0] = '';
  }else{
	  
  }
?>
</div>
<div class="container-fluid" id="insideshopmodal">
  <div class="row">
    <div class="col-md-9 col-sm-9 col-xs-10">
      <ul class="btn-group" id="selector-shop">
        <li class="btn btn-default" data-group="all" id="AllNeedToClick"><span>Start</span></li>
        <!--
        <li class="btn btn-default" data-group="style1"><span>Style 1</span></li>
        <li class="btn btn-default" data-group="style2"><span>Style 2</span></li>
        <li class="btn btn-default" data-group="style3"><span>Style 3</span></li>
        -->
		<?php
			// Set Variable
			$show_cate = '';
			// Query
			$get_category = mysqli_query($connect5,"SELECT * FROM `cate_item` WHERE `ct_avail` = 1");
			$row_get_category = mysqli_num_rows($get_category);
			if ($row_get_category > 0){
				while($row = mysqli_fetch_array($get_category)){
					$cate[0] = $row['ct_id'];
					$cate[1] = $row['ct_name'];
					$show_cate .= '<li class="btn btn-default" data-group="'.$cate[1].'"><span>'.$cate[1].'</span></li>';
				}
				echo $show_cate;
			}
		?>
      </ul>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-2">
        <div class="form-group">
          <select class="form-control" id="sort-options">
            <option value="0">None</option>
            <option value="1">Most Loved Item</option>
            <option value="2">Cheapest Price</option>
            <option value="3">High-End Price</option>
            <option value="4">Title</option>
            <option value="5">Discount</option>
          </select>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <form action="" class="search-form">
        <div class="form-group has-feedback">
          <label for="search" class="sr-only">Search</label>
          <input type="text" class="form-control" name="search" id="searchValueInThisbox" placeholder="Category, Name Of Product, rating:{1,2,3,4,5}">
          <span class="glyphicon glyphicon-search form-control-feedback"></span> </div>
      </form>
    </div>
  </div>
  <div class="row" id="grid-shop">
  	<?php
		$getitem[0] = mysqli_query($connect5,"SELECT * FROM `item` a,`cate_item` b, `quantity` c WHERE `a`.`ct_id` = `b`.`ct_id` AND (`a`.`it_available` = 1 AND `b`.`ct_avail` = 1) AND `c`.`it_id` = `a`.`it_id` AND `c`.`it_qua` > 0");
		$getitem[1] = mysqli_num_rows($getitem[0]);
		$sprice = '';
		$rating_v = 0;
		$show = '';
		$item_vd = 0;
		$finalprice = '';
		$event_s = '';
		$user_buy_spec_dis = '';
		$user_buy_spec_que = '';
		if ($getitem[1] > 0){
			while($row = mysqli_fetch_array($getitem[0])){
				$item_v[0] = $row['it_id'];
				$item_v[1] = $row['it_name'];
				$item_vo = $row['it_price'];
				$item_v[3] = $row['it_disc'];
				$item_v[4] = $row['it_longdisc'];
				$item_v[5][0] = $row['it_img'];
				$item_v[5][1] = $row['it_imglarge'];
				$item_v[7] = $row['it_addeddate'];
				$item_v[8] = $row['ct_id'];
				$item_v[9] = $row['ct_name'];
				// Disable when buy special product [Login User Only]
				if (isset($_SESSION['id']) || isset($_SESSION['email'])){
					$shop_specct_do[0] = explode(",", $shop_specct);
					$shop_specct_do[1] = count($shop_specct_do[0]);
					$matchtest = 0;
					while ($matchtest < $shop_specct_do[1]){
						$shop_specct_do[0][$matchtest];
						if ($shop_specct_do[0][$matchtest] == $item_v[8]){
							// Check user already buy or not
							$user_buy_spec[0] = mysqli_query($connect5,"SELECT * FROM `orderanditem` a,`order` b WHERE `a`.`order_id` = `b`.`id` AND `a`.`item_id` = '".$item_v[0]."' AND (`b`.`user_id` = '".$_SESSION['id']."' OR `b`.`email` = '".$_SESSION['email']."')");
							$user_buy_spec[1] = mysqli_num_rows($user_buy_spec[0]);
							if ($user_buy_spec[1] > 0){
								$user_buy_spec_dis = 'disabled';
								$user_buy_spec_que = '<script type="text/javascript">
								$("#submit-order-bu-img-'.$item_v[0].'").removeClass("glyphicon-shopping-cart").addClass("glyphicon-ok");
								</script>';
							}else{
								$user_buy_spec_dis = '';
								$user_buy_spec_que = '';
							}
						}else{
							$user_buy_spec_dis = '';
							$user_buy_spec_que = '';	
						}
						$matchtest++;
					}
				}
				// Event Check
				$getevent[0] = mysqli_query($connect5,"SELECT * FROM `item`,`event`,`eventanditem` WHERE `item`.`it_id` = `eventanditem`.`it_id` AND `event`.`ev_id` = `eventanditem`.`ev_id` AND (`event`.`ev_start` <= CURDATE() AND `event`.`ev_end` >= CURDATE()) AND (`event`.`ev_timestart` <= CURTIME() AND `event`.`ev_timeend` >= CURDATE()) AND `item`.`it_id`='".$item_v[0]."' AND `event`.`ev_apply` = 1 AND `eventanditem`.`ev_it_apply` = 1");
				$getevent[1] = mysqli_num_rows($getevent[0]);
				if ($getevent[1] > 0){
					while ($row = mysqli_fetch_array($getevent[0])){
						$item_vd += $row['ev_discount'];
						$event_i[0] = $row['ev_name'];
						$event_i[1] = $row['ev_start'];
						$event_i[2] = $row['ev_end'];
						$event_i[3] = $row['ev_timestart'];
						$event_i[4] = $row['ev_timeend'];
						$event_s .= ''.$event_i[0].', Start in '.$event_i[1].' - End in '.$event_i[2].', Time: '.$event_i[3].' - '.$event_i[4].'<br>';
					}
					$discount = $item_vd;
					$haveevent = 1;
					$item_vd = 0;
					$hasdiscount = '<span class="text-danger">- Discount: <kbd>'.$discount.'%</kbd></span>';
				}else{
					$haveevent = 0;	
					$item_vd = 0;
					$discount = $item_vd;
					$hasdiscount = '';
				}
				// Coupon
					
					// Final Price
					$item_dis = ($discount*$item_vo/100);
				 	$item_v[2] = $item_vo - $item_dis;
					$item_v[2] = round($item_v[2],2,PHP_ROUND_HALF_UP);
					if ($haveevent == 1){
						$finalprice = '<h3>'.$pagecurrency_s.$item_v[2].'</h3><h6 data-toggle="tooltip" data-placement="right" title="'.$event_s.'"><strike>'.$pagecurrency_s.$item_vo.'</strike></h6>';
						$event_s = '';
					}else{
						$finalprice = '<h3>'.$pagecurrency_s.$item_v[2].'</h3>';
						$event_s = '';	
					}
				// Get Stars
				$getstar[0] = mysqli_query($connect5,"SELECT * FROM `votes` WHERE item='".$item_v[0]."'");
				$getstar[1] = mysqli_num_rows($getstar[0]);
				if ($getstar[1] > 0){
					while($row = mysqli_fetch_array($getstar[0])){
						$rating_v += $row['rating'];
					}
					$stars = round(($rating_v/$getstar[1]), 0, PHP_ROUND_HALF_UP);
					$rating_v = 0;
				}else{
					$stars = 0;	
				}
				
				$show .= '
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 item" data-groups='.$q.'["all", "'.$item_v[9].'", "'.$item_v[1].'","rating:'.$stars.'"]'.$q.' data-rating='.$q.$stars.$q.' data-price='.$q.$item_v[2].$q.' data-title='.$q.$item_v[1].$q.' data-discount='.$q.$discount.$q.'>
				  <div class="panel panel-default">
					<div class="hidden-md hidden-lg hidden-xs hidden-sm">
						<p>'.$item_v[1].'</p>
						<p>Price:$'.$item_v[2].'</p>
					</div>
					<div class="panel-heading">
					  <h5>'.$item_v[1].'</h5>
					</div>
					<div class="panel-body" style="overflow:hidden"> 
					<a data-toggle="modal" data-target="#image-Zoom-'.$item_v[0].'" class="viewMore">
						<img class="img-responsive" src="'.$item_v[5][0].'"/>
					</a>
					<div class="inmiddle">
						<input id="rating-'.$item_v[0].'" value="'.$stars.'" type="number" class="rating" data-symbol="'.$img_rating.'" min='.$min_v_rating.' max='.$max_v_rating.' step='.$step_v_rating.' data-size="'.$size_rating.'">
						<div>
						  <b id="rating-user-'.$item_v[0].'">'.$getstar[1].'</b> <span class="glyphicon glyphicon-user"></span> 
						</div>
					</div>
						
				</div>
					<div class="panel-footer">
					  <div class="row">
						<div class="col-md-6 col-xs-6 col-sm-6"><h3>'.$item_v[1].'</h3></div>
						<div class="col-md-6 col-xs-6 col-sm-6" style="text-align:right">'.$finalprice.'</div>
						<br>
						<hr>
						<br>
					  	<div class="col-md-12 col-xs-12 col-sm-12">
							<textarea disabled="disabled" class="form-control embed-responsive embed-responsive-16by9" rows="4" cols="30" style="overflow-x:auto;overflow-y:auto;border:0;border-radius:0;">
								'.$item_v[3].'
							</textarea>
						</div>
					  </div>
					  <br>
					  <a class="btn btn-success form-control" onclick="addToCart('.$item_v[0].','.$q.$item_v[1].$q.','.$item_v[2].');	toggleEffectCart();" '.$user_buy_spec_dis.'><span class="glyphicon glyphicon-shopping-cart" id="submit-order-bu-img-'.$item_v[0].'"></span>
					  '.$user_buy_spec_que.'
						</a>
					</div>
				  </div>
				</div>
				<script>
					$("#rating-'.$item_v[0].'").on("rating.change", function() {
						$("#rating-'.$item_v[0].'").rating("refresh", {
							showClear:true, 
							disabled:true
						});
						var starrate = $("#rating-'.$item_v[0].'").val();
						var idrate = "'.$item_v[0].'"; 
						var userrate = parseInt("'.$getstar[1].'");
						$("#rating-user-'.$item_v[0].'").text(parseInt(userrate + 1));
						ratingThis(idrate,starrate);
					});
				</script>
				<div id="image-Zoom-'.$item_v[0].'" class="modal fade" role="dialog" style="overflow:hidden">
				  <div class="modal-dialog modal-lg">
				
					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" id="close-image-Zoom-'.$item_v[0].'-a">&times;</button>
						<h4 class="modal-title">'.$item_v[1].' Preview '.$hasdiscount.'</h4>
					  </div>
					  <div class="modal-body">
					  	<div style="max-width:600px;max-height:400px;margin: 0 auto;">
							<img class="img-responsive zoom-img img-rounded" src="'.$item_v[5][0].'" data-zoom-image="'.$item_v[5][1].'"/>
						</div>
						<div style="margin-top:180px;clear:both;"></div>
					  	<label>Product Details:</label>
						<textarea class="form-control" rows="10" disabled="disabled" style="background:white;" id="product-details-'.$item_v[0].'">'.$item_v[4].'</textarea>
						<div class="row">
  							<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12" style="min-height:400px;">
								<iframe src="'.$url_s.'page/mainpage/index/component/comment.php?product='.$item_v[0].'" scrolling="no" height="100%" width="100%" frameborder="0" style="min-height: 800px;display:block;" id="iframe-comment-'.$item_v[0].'"></iframe>
					  		</div>
					  	</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" id="close-image-Zoom-'.$item_v[0].'-b">Close</button>
						<script type="text/javascript">
							$("button#close-image-Zoom-'.$item_v[0].'-a,button#close-image-Zoom-'.$item_v[0].'-b").click(function (){
								$("#image-Zoom-'.$item_v[0].'").modal("hide");
								var currentPosition = $("#shopModalC").data("currentPosition");
								$("#shopModalC").animate({ scrollTop: currentPosition }, "slow"); 
							})
							$("#image-Zoom-'.$item_v[0].'").on("shown.bs.modal", function() {
							$(".zoom-img").elevateZoom({
								zoomType: "inner",
								cursor: "crosshair",
								easing : true,
								scrollZoom : true,
							});
							 $(".zoomContainer,.zoomWindow").css("z-index","1051");
							 var currentPosition = $("#shopModalC").scrollTop();
							 $("#shopModalC").data("currentPosition", currentPosition);
							 $("#shopModalC").animate({ scrollTop: "0px" }, "slow"); 
							})
							$("#image-Zoom-'.$item_v[0].'").on("hidden.bs.modal", function () {
								$(".zoomContainer,.zoomWindow").css("z-index","0");
							}) 
						</script>
					  </div>
					</div>
				
				  </div>
				</div> 
				';
				
			if ($zoom_s == 1){
			echo"	
					<script type='text/javascript'>
						$('#image-Zoom-".$item_v[0]."').on('shown.bs.modal', function() {
							$('.zoom-img').elevateZoom({
								zoomType: 'inner',
								cursor: 'crosshair',
								easing : true
							});
							 $('.zoomContainer,.zoomWindow').css('z-index','1051');
						})
						$('#image-Zoom-".$item_v[0]."').on('hidden.bs.modal', function () {
							$('.zoomContainer,.zoomWindow').css('z-index','0');
						})
					</script>
				";
			}
	
			}
			echo $show;
		}else{
			echo "There is no avaiable item";
		}
	?>
  </div>
</div>
<style type="text/css">
	.rating-stars{
		color:#00CEFF !important;
	}
	.inmiddle{
		text-align:center;
		margin:auto;
		padding:0;	
	}
</style>
<script type="text/javascript">
	$('#AllNeedToClick').click(function(){
		$('#AllNeedToClick').html('<span>All</span>');
		$('.shadow-1').fadeOut('slow');
	})
	function ratingThis(idrate,starrate){
		$.post('page/mainpage/index/component/subcomponent/rating.php',{idrate:idrate,starrate:starrate},function(rateit){
			$("#statusshop").html(rateit);
		});
	}
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>