<?php
include("admin-layouts/header.php");

// $sql_theater="SELECT * FROM `theater`";
// $theaters=mysqli_query($conn,$sql_theater);

$theater=$theaterlocation="";
$theaterErr=$theaterlocationErr="";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty($_POST["theater_name"])) {
        $theaterErr = "theater is required";
    } else {
        $theater = test_input($_POST["theater_name"]);
    }

    if (empty($_POST["location"])) {
        $theaterlocationErr = "location is required";
    } else {
        $theaterlocation = test_input($_POST["location"]);
    }
	if (empty($theaterErr) && empty($theaterlocationErr)) {
	$sql_theater_insert="INSERT INTO `theater` (`theater_id`, `theater_name`, `location`) VALUES (NULL, '$theater', '$theaterlocation')";
	if (mysqli_query($conn, $sql_theater_insert)) {
		header("Location: theater-admin.php");
		exit();
	}
}
}
?>
	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Add Theater</h2>
					</div>
				</div>
				<!-- end main title -->
				.
				<!-- form -->
				<div class="col-12">
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="sign__form sign__form--add">
						<div class="row">
							<div class="col-12 col-xl-7">
								<div class="row">
									<div class="col-12">
										<div class="sign__group">
										<label for="theater_name" class="form-label text-light">theater <span class="text-danger">*<?php  echo   $theaterErr?></span></label>
											<input type="text" class="sign__input"  name="theater_name">
										</div>
									</div>

									<div class="col-12">
										<div class="sign__group">
										<label for="theater_name" class="form-label text-light">Location<span class="text-danger">*<?php  echo  $theaterlocationErr?></span></label>
											<textarea id="text"  class="sign__textarea"  name="location"></textarea>
										</div>
									</div>
							</div>

						
										
							<div class="col-12">
								<input type="submit" value="Publish" class="sign__btn sign__btn--small">
							</div>
						</div>
					</form>
				</div>
				<!-- end form -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/slimselect.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/admin.js"></script>
</body>

<!-- Mirrored from hotflix.volkovdesign.com/admin/add-item.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Aug 2024 08:51:43 GMT -->
</html>