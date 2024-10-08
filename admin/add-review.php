 <?php
// include("admin-layouts/header.php");

// $sql_user="SELECT * FROM `user` ";
// $users=mysqli_query($conn,$sql_user);

// $sql_movie="SELECT * FROM `movies` ";
// $movies=mysqli_query($conn,$sql_movie);

// $user_id=$movie_id=$rating=$comments="";
// $user_idErr=$movie_idErr=$ratingErr=$commentsErr="";

// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     if (empty($_POST["user_id"])) {
//         $user_idErr = "user is required";
//     } else {
//         $user_id = test_input($_POST["user_id"]);
//     }

//     if (empty($_POST["movie_id "])) {
//         $movie_id = "movie is required";
//     } else {
//         $movie_idErr = test_input($_POST["movie_id "]);
//     }
// 	if (empty($_POST["rating"])) {
//         $rating = "rating is required";
//     } else {
//         $ratingErr = test_input($_POST["rating"]);
//     }
// 	if (empty($_POST["comments"])) {
//         $comments = "comment is required";
//     } else {
//         $commentsErr = test_input($_POST["comments"]);
//     }

// 	if (empty($user_idErr) && empty($movie_idErr) && empty($rating) && empty($comments)) {
// 	$sql_reviews_insert="INSERT INTO `reviews` (`review_id`, `user_id`, `movie_id`, `rating`, `comments`, `review_date`) VALUES (NULL, '$user_id', '$movie_id', '$rating', '$comments', current_timestamp()";
// 	if (mysqli_query($conn, $sql_reviews_insert)) {
// 		header("Location: reviews-admin.php");
// 		exit();
// 	}
// }
// } -->

include("admin-layouts/header.php");

// Fetch users and movies for the form
$sql_user = "SELECT * FROM `user`";
$users = mysqli_query($conn, $sql_user);

$sql_movie = "SELECT * FROM `movies`";
$movies = mysqli_query($conn, $sql_movie);

// Initialize variables and error messages
$user_id = $movie_id = $rating = $comments = "";
$user_idErr = $movie_idErr = $ratingErr = $commentsErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Validate user_id
    if (empty($_POST["user_id"])) {
        $user_idErr = "User is required";
    } else {
        $user_id = test_input($_POST["user_id"]);
    }

    // Validate movie_id
    if (empty($_POST["movie_id"])) {
        $movie_idErr = "Movie is required";
    } else {
        $movie_id = test_input($_POST["movie_id"]);
    }

    // Validate rating
    if (empty($_POST["rating"])) {
        $ratingErr = "Rating is required";
    } else {
        $rating = test_input($_POST["rating"]);
    }

    // Validate comments
    if (empty($_POST["comments"])) {
        $commentsErr = "Comment is required";
    } else {
        $comments = test_input($_POST["comments"]);
    }

    // Check if there are no errors before executing the query
    if (empty($user_idErr) && empty($movie_idErr) && empty($ratingErr) && empty($commentsErr)) {
        $sql_reviews_insert = "INSERT INTO `reviews` (`review_id`, `user_id`, `movie_id`, `rating`, `comments`, `review_date`) 
                               VALUES (NULL, '$user_id', '$movie_id', '$rating', '$comments', current_timestamp())";
        if (mysqli_query($conn, $sql_reviews_insert)) {
            header("Location: reviews-admin.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
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
                    <h2>Add reviews</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="sign__form sign__form--add">
                    <div class="row">
                        <div class="col-12 col-xl-7">
                            <div class="row">
                                <div class="col-12">
                                    <div class="sign__group">
                                        <label for="user_id" class="form-label text-light">User <span class="text-danger">*<?php echo $user_idErr; ?></span></label>
                                        <select class="sign__selectjs" id="sign__genre" name="user_id">
                                            <option value="">Select User</option>
                                            <?php while ($user = mysqli_fetch_assoc($users)) { ?>
                                                <option value="<?php echo $user['user_id']; ?>"><?php echo $user['name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="sign__group">
                                        <label for="movie_id" class="form-label text-light">Movie <span class="text-danger">*<?php    echo $movie_idErr; ?></span></label>
                                        <select class="sign__selectjs" id="sign__director" name="movie_id">
                                            <option value="">Select movie</option>
                                            <?php while ($movie = mysqli_fetch_assoc($movies)) { ?>
                                                <option value="<?php echo $movie['movie_id']; ?>"><?php echo $movie['title']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="sign__group">
                                        <label for="rating" class="form-label text-light">Rating <span class="text-danger">*<?php echo $ratingErr; ?></span></label>
                                        <input type="number" class="sign__input" name="rating">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="sign__group">
                                        <label for="comments" class="form-label text-light">Comments <span class="text-danger">*<?php echo $commentsErr; ?></span></label>
                                        <textarea id="text" class="sign__textarea" name="comments"></textarea>
                                    </div>
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
</html>
