<footer>
	<div class="row">
		<div class="col-md-12 footer">
			<div class="col-md-8 col-md-offset-2 no-padding">
				
				<section class="footer-contact">
							<div class="row">
								<div class="col-md-2">
									<div class="footer-help">
										<div class="footer-help-title" style="padding: 10px 0 0 10px;color: #666">
											<a href="#"><b>Giúp đỡ</b></a>
											<hr style="border-top: 1px solid #d1c9c9;">
											<p>Làm việc từ 8:00am - 10:00pm Phone : <strong>0974755854</strong> or Email <strong>help@gmail.com</strong></p>
										</div>


									</div>
								</div>
								<div class="col-md-2">
									
									<div class="footer-help-title" style="padding: 10px 0 0 10px;color: #666">
											<a href="#"><b>Hỗ Trợ Khách Hàng</b></a>
											<hr style="border-top: 1px solid #d1c9c9;">
											<a href="#">FAQ & Support Centre</a><br>
											<a href=""> Suggest a Product</a><br>
											<a href="#"> Price Guarantee</a><br>
											<a href=""> Security & privacy Policy</a><br>
											<a href="#">Terms of Use</a>
									</div>
								</div>
								<div class="col-md-2">
									<div class="footer-help-title" style="padding: 10px 0 0 10px;color: #666">
											<a href="#"><b>Giới Thiệu</b></a>
											<hr style="border-top: 1px solid #d1c9c9;">	
											<a href="#">RedMArt Team</a>
											<a href="#">Press</a>
											<a href="#">Careers</a>
											<a href="#">Contact Us</a>
											<a href="#">What is Marketplace</a>
									</div>

								</div>
								<div class="col-md-2">
									<div class="footer-help-title" style="padding: 10px 0 0 10px;color: #666">
											<a href="#"><b>Các Dịch Vụ</b></a>
											<hr style="border-top: 1px solid #d1c9c9;">
											<a href="#">Sell on RedMart</a>
											<a href="#">Marketing Enquires</a>
											<a href="#">Partner Portal</a>
											
									</div>
								</div>
								<div class="col-md-4" style="border-left: 1px solid #555">
									<div class="footer-help-right">
										<div class="footer-help-right-title" style="font-size: 18px;">
											Hãy Kết Nối Với Eduu 
											<br>Whenever, Wherever.
										</div>
										<br>
										<div class="footer-help-right-app">
											<div class="app-android">
												
											</div>
											<br>
											<br>
											
										</div>

									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-4">
									<img src="{{asset('images/card2.png')}}">
								</div>

								<div class="col-md-4">
									<p style="color: #666">At RedMart we have our very own fleet of delivery vans. Your order will be packed with care at our warehouse and delivered right to your door by our friendly RedMart team.</p>
								</div>

								<div class="col-md-4">
									<img src="{{asset('images/price.png')}}">
								</div>
							</div>
						</section>
			</div>
		</div>
	</div>
</footer>
<div class="scroll-top-wrapper ">
  <span class="scroll-top-inner">
    <span class="glyphicon glyphicon-chevron-up
glyphicon glyphicon-"></span>
  </span>
</div>
<!-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyD0FewE444l6H8yw3-XVMOxF_kS27xIcAg
"></script> -->



<script src="{{asset('js/Constellation.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$("#menu").click(function(){
			    $("#menu-left").animate({width: 'toggle'});
			});
    	});

    	$(document).ready(function(){

$(function(){
 
    $(document).on( 'scroll', function(){
 
    	if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
 
	$('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}

});
    </script>