<!DOCTYPE html>
<html lang="FR-fr" class="no-js">

<?php include("header.php")?>

<section class="banner-area">
	<div class="container">
		<div class="row fullscreen align-items-center justify-content-between">
			<div class="col-lg-12 banner-content">
				<h6 class="text-white"></h6>
				<br/>
				<h1 class="text-white" style="text-align: center;">Réservation</h1>
				<br/>

			</div>
		</div>
	</div>
</section>
<br/>
<br/>
<br/>
  <div class="container">
    <div class="row justify-content-between align-items-center">
<div class="offset-lg-3">
        <center><h1 class="text-black">Réservé vos places maintenant !</h1></center>
</div>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
      <div class="offset-lg-3 col-lg-6 reservation-right">
        <form class="form-wrap text-center" action="#">
          <input type="text" class="form-control" name="name" placeholder="Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom'" >
          <input type="email" class="form-control" name="email" placeholder="Addresse Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Addresse Email'" >
          <input type="text" class="form-control" name="phone" placeholder="Numero de téléphone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Numero de téléphone'" >
          <input type="text" class="form-control date-picker" name="date" placeholder="Date et heures" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date et heures'" >
          <div class="form-select" id="service-select">
            <select>
              <option data-display="">Choix menu</option>
              <option value="1">Menu salade</option>
              <option value="2">Menu burger</option>
              <option value="3">Menu pizza</option>
              <option value="4">Menu authentique</option>
            </select>
          </div>
          <button class="primary-btn text-uppercase mt-20">Réserver</button>
        </form>
        <br/>
        <br/>
        <br/>
      </div>
    </div>
  </div>
</section>
</body>
<?php include("footer.php") ?>

<html>
