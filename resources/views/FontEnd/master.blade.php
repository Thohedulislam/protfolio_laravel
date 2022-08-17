<!DOCTYPE html>
<html lang="en">

@include('FontEnd.header')
@stack('styles')
<body data-spy="scroll" data-target=".navbar" data-offset="50">


	<!--Start Hero Area-->
	<div id="home" class="hero-area">
		<div class="owl-carousel hero-area-slider">
			<div class="hero-bg bg-1">
				<div class="d-table hero-area-wrapper">
					<div class="d-table-cell hero-area-inner">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-9">
									<h1>Web &amp; Graphic Designer</h1>
									<a href="#" class="btn hero-btn">learn more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hero-bg bg-1">
				<div class="d-table hero-area-wrapper">
					<div class="d-table-cell hero-area-inner">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-9">
									<h1>Web Developer</h1>
									<a href="#" class="btn hero-btn">learn more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hero-bg bg-1">
				<div class="d-table hero-area-wrapper">
					<div class="d-table-cell hero-area-inner">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-9">
									<h1>PSD Designer</h1>
									<a href="#" class="btn hero-btn">learn more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Hero Area-->


	<!--Start Main Menu Logo-->
	@include('FontEnd.manu')
	<!--End Main Menu Logo-->


	<!--Start Tartget-->
	<div class="target-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-target-box">
						<h1>Values</h1>
						pLorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est. </div>
				</div>
				<div class="col-lg-4">
					<div class="single-target-box">
						<h1>goals</h1>
						pLorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est. </div>
				</div>
				<div class="col-lg-4">
					<div class="single-target-box">
						<h1>hobbies</h1>
						pLorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est. </div>
				</div>
			</div>
			<!--End of row-->
		</div>
		<!--End of container-->
	</div>
	<!--End of Target area-->


	<!--Start About Area-->
	@include('FontEnd.about')
	<!--End of About Area-->


	<!--Start Skill-->
	@include('FontEnd.skills')
	<!--End of skill area-->


	<!--Strat Resume-->
    @include('FontEnd.resume')
	<!--End of Resume-->



    <!--Start Testimonial-->
    @include('FontEnd.testimonial')
    <!--End of testimonial-->

    <!--Start Portfolio-->
    @include('FontEnd.protfolio')
    <!--End of portfolio-->

	<!--Start Contact-->
	@include('FontEnd.contact')
    <!--End Contact-->

@include('FontEnd.footer')
</body>
@stack('script')
</html>
