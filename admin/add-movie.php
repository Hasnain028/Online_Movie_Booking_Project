<?php
include("admin-layouts/header.php");

// $sql_theater="SELECT * FROM `theater`";
// $theaters=mysqli_query($conn,$sql_theater);

$image=$title=$cast=$director=$duration=$relased_date=$trailer_url=$synopsis="";
$titleErr=$castErr=$directorErr=$durationErr=$relased_dateErr="";
$uploadErr = [];
$uploads_dir = '../images';
// $string = implode("", $uploadErr);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	// prx($_POST);
    if (empty($_POST["title"])) {
        $titleErr = "title is required";
    } else {
        $title = test_input($_POST["title"]);
    }

    if (empty($_POST["cast"])) {
        $castErr = "cast is required";
    } else {
        $cast = test_input($_POST["cast"]);
    }
	if (empty($_POST["director"])) {
        $directorErr = "director is required";
    } else {
        $director = test_input($_POST["director"]);
    }
	if (empty($_POST["duration"])) {
        $durationErr = "duration is required";
    } else {
        $duration = test_input($_POST["duration"]);
    }
	if (empty($_POST["released_date"])) {
        $relased_dateErr = "relased_date is required";
    } else {
        $relased_date = test_input($_POST["released_date"]);
    }
	if (empty($_POST["trailer_url"])) {
        $trailer_url = " ";
    } else {
        $trailer_url = test_input($_POST["trailer_url"]);
    }
	if (empty($_POST["synopsis"])) {
        $synopsis = " ";
    } else {
        $synopsis = test_input($_POST["synopsis"]);
    }
	 // Check if file already exists
$to = $uploads_dir . '/' . basename($_FILES['image']['name']);
        $from = $_FILES['image']['tmp_name'];
        $size = $_FILES['image']['size'];

        // Your other checks and operations here

        if (file_exists($to)) {
            array_push($uploadErr, "Sorry, file already exists !");
        }

        if ($size > 2097152) { // 2MB limit
            array_push($uploadErr, "file size must be under 2MB !");
        }
	if (empty($titleErr) && empty($castErr)&& empty($directorErr)&& empty($durationErr)&& empty($relased_dateErr)) {
		if(move_uploaded_file($from,$to)) {
			echo("file uploaded successfully");
	$sql_movie_insert="INSERT INTO `movies` ( `title`, `cast`, `director`, `duration`, `released_date`, `trailer_url`, `synopsis`, `image`) 
	VALUES ( '$title', '$cast', '$director', '$duration', '$relased_date', '$trailer_url', '$synopsis ', '$to')";
	if (mysqli_query($conn, $sql_movie_insert)) {
		header("Location: movie-admin.php");
		exit();
	}
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
						<h2>Add movie</h2>
					</div>
				</div>
				<!-- end main title -->
				<?php
        //   pr($_REQUEST);
		
				?>
				<!-- form -->
				<div class="col-12">
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="sign__form sign__form--add" enctype="multipart/form-data">
						<!-- @csrf -->
					<div class="row">
							<div class="col-12 col-xl-7">
								<div class="row">
								<div class="col-12">
										<div class="sign__group">
										<label for="image" class="form-label text-light">choose image <span class="text-danger"></span></label>
											<input type="file" class="sign__video-upload" id="sign__video-upload image"  name="image">
										</div>
									</div>
									<div class="col-12">
										<div class="sign__group">
										<label for="title" class="form-label text-light">title<span class="text-danger">*<?php  echo   $titleErr?></span></label>
											<input type="text" class="sign__input"  name="title">
										</div>
									</div>
									<div class="col-12">
										<div class="sign__group">
										<label for="cast" class="form-label text-light">cast<span class="text-danger">*<?php  echo  $castErr?></span></label>
											<textarea id="text"  class="sign__textarea"  name="cast"></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="sign__group">
										<label for="director" class="form-label text-light">director <span class="text-danger">*<?php  echo   $directorErr?></span></label>
											<input type="text" class="sign__input"  name="director">
										</div>
									</div>
									<div class="col-12">
										<div class="sign__group">
										<label for="duration" class="form-label text-light">duration<span class="text-danger">*<?php  echo   $durationErr?></span></label>
											<input type="text"  class="sign__input"  name="duration"placeholder="hh:mm">
										</div>
									</div>
									<div class="col-12">
										<div class="sign__group">
										<label for="released_date" class="form-label text-light">released_date <span class="text-danger">*<?php  echo   $relased_dateErr?></span></label>
											<input type="date" class="sign__input"  name="released_date">
										</div>
									</div>
									<div class="col-12">
										<div class="sign__group">
										<label for="trailer_url" class="form-label text-light">trailer_url </label>
											<input type="text" class="sign__input"  name="trailer_url">
										</div>
									</div>

									<div class="col-12">
										<div class="sign__group">
										<label for="synopsis" class="form-label text-light">synopsis</label>
											<textarea id="text"  class="sign__textarea"  name="synopsis"></textarea>
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