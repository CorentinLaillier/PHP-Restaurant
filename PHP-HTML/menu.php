	<!DOCTYPE html>
	<html lang="FR-fr" class="no-js">
	<?php include("header.php")?>
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-between">
				<div class="col-lg-12 banner-content">
					<h6 class="text-white"></h6>
					<br/>
					<h1 class="text-white" style="text-align: center;">Menu</h1>
					<br/>
				</div>
			</div>
		</div>
	</section>



            <section class="menu-area section-gap" id="menu">
                <div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Choisissez parmi plusieurs menus</h1>

							</div>
						</div>
					</div>

                    <ul class="filter-wrap filters col-lg-12 no-padding">
                        <li class="active" data-filter="*">Tout les menus</li>
                        <li data-filter=".salade">Menu salade</li>
                        <li data-filter=".burger">Menu burger</li>
                        <li data-filter=".pizza">Menu Pizza</li>
                        <li data-filter=".aut">Menu authentique</li>

                    </ul>

                    <div class="filters-content">
                        <div class="row grid">
                            <div class="col-md-6 all salade">
								<div style="background-color: #E73E01;"class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>Menu salade</h4>
										<h4 style="color:black;"class="price">$14</h4>
									</div>
									<p>
										Salade du terroir
									</p>
									<div>
										<button style="background-color:#000000;"class="primary-btn text-uppercase mt-20">Réserver</button>
									</div>
								</div>
                            </div>
                            <div class="col-md-6 all burger">
								<div style="background-color: #ED7F10;"class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>Menu burger</h4>
										<h4 style="color:black;"class="price">$25</h4>
									</div>
									<p>
										Burger façons françaises
									</p>
									<div>
										<button style="background-color:#000000;"class="primary-btn text-uppercase mt-20">Réserver</button>
									</div>
								</div>
                            </div>
                            <div class="col-md-6 all pizza">
								<div style="background-color: #F3D617;"class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>Menu pizza</h4>
										<h4 style="color:black;"class="price">$18</h4>
									</div>
									<p>
										Pizza
									</p>
									<div>
										<button style="background-color:#000000;"class="primary-btn text-uppercase mt-20">Réserver</button>
									</div>
								</div>
                            </div>
                            <div class="col-md-6 all aut">
								<div style="background-color:#F0E36B;"class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>Menu authentique</h4>
										<h4 style="color:black;"class="price">$49</h4>
									</div>
									<p>
										Goutez au saveur du pays
									</p>
									<div>
										<button style="background-color:#000000;"class="primary-btn text-uppercase mt-20">Réserver</button>
									</div>
								</div>
                            </div>

                            </div>
                        </div>
                    </div>

                </div>
            </section>



			<?php include("footer.php") ?>



		</body>
	</html>
