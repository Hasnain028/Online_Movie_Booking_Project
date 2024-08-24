<?php

include("admin-layouts/header.php");

$sql_screen="SELECT * FROM `screen`";
$screens=mysqli_query($conn,$sql_screen);

$sql_theater="SELECT * FROM `screen` AS s
JOIN theater AS t ON s.theater_id=t.theater_id";
$theaters=mysqli_query($conn,$sql_theater);

$theater=$screen=$seat_class=$price="";
$theaterErr=$screenErr=$seat_classErr=$priceErr="";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty($_POST["theater_name"])) {
        $theaterErr = "theater is required";
    } else {
        $theater = test_input($_POST["theater_name"]);
    }

    if (empty($_POST["screen_name"])) {
        $screenErr ="screen is required";
    } else {
        $screen = test_input($_POST["screen_name"]);
    }
	if (empty($_POST["class_type"])) {
        $seat_classErr ="seat class is required";
    } else {
        $seat_class = test_input($_POST["class_type"]);
    }
	if (empty($_POST["price"])) {
        $seat_classErr ="price is required";
    } else {
        $seat_class = test_input($_POST["price"]);
    }
	if (empty($theaterErr) && empty($theaterlocationErr)) {
	$sql_theater_insert="INSERT INTO `seat_class` (`seat_id`, `screen_id`, `class_type`, `price`) VALUES (NULL, '2', 'gold', '13.0');";
	if (mysqli_query($conn, $sql_theater_insert)) {
		header("Location: seat-admin.php");
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
						<h2>Add Review</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					<form action="#" class="sign__form sign__form--add">
						<div class="row">
							<div class="col-12 col-xl-7">
								<div class="row">
								<div class="col-12 col-md-6 col-xl-8">
								<div class="sign__group">
									<select class="sign__selectjs" id="sign__actors" multiple>
										<option value="Matt Jones">Matt Jones</option>
										<option value="Gene Graham">Gene Graham</option>

									</select>
								</div>
							</div>	
							<div class="col-12 col-xl-5">
								<div class="row">
									<div class="col-12">
										<div class="sign__group">
											<select class="sign__selectjs" id="sign__genre" multiple>
												<option value="Action">Action</option>
												<option value="Animation">Animation</option>
												<option value="Comedy">Comedy</option>
											</select>
										</div>
									</div>
									
									<div class="col-12">
										<div class="sign__group">
											<input type="text" class="sign__input" placeholder="Title">
										</div>
									</div>

									<div class="col-12 col-md-6">
										<div class="sign__group">
											<input type="text" class="sign__input" placeholder="Running time">
										</div>
									</div>

									<div class="col-12 col-md-6">
										<div class="sign__group">
											<input type="text" class="sign__input" placeholder="Premiere date">
										</div>
									</div>

									<div class="col-12">
										<div class="sign__group">
											<select class="sign__selectjs" id="sign__country" multiple>
												<option value="Afghanistan">Afghanistan</option>
												<option value="Åland Islands">Åland Islands</option>
												<option value="Albania">Albania</option>
												<option value="Algeria">Algeria</option>
												<option value="American Samoa">American Samoa</option>
												<option value="Andorra">Andorra</option>
												<option value="Angola">Angola</option>
												<option value="Anguilla">Anguilla</option>
												<option value="Antarctica">Antarctica</option>
												<option value="Antigua and Barbuda">Antigua and Barbuda</option>
												<option value="Argentina">Argentina</option>
												<option value="Armenia">Armenia</option>
												<option value="Aruba">Aruba</option>
												<option value="Australia">Australia</option>
												<option value="Austria">Austria</option>
												<option value="Azerbaijan">Azerbaijan</option>
												<option value="Bahamas">Bahamas</option>
												<option value="Bahrain">Bahrain</option>
												<option value="Bangladesh">Bangladesh</option>
												<option value="Barbados">Barbados</option>
												<option value="Belarus">Belarus</option>
												<option value="Belgium">Belgium</option>
												<option value="Belize">Belize</option>
												<option value="Benin">Benin</option>
												<option value="Bermuda">Bermuda</option>
												<option value="Bhutan">Bhutan</option>
												<option value="Bolivia">Bolivia</option>
												<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
												<option value="Botswana">Botswana</option>
												<option value="Bouvet Island">Bouvet Island</option>
												<option value="Brazil">Brazil</option>
												<option value="Brunei Darussalam">Brunei Darussalam</option>
												<option value="Bulgaria">Bulgaria</option>
												<option value="Burkina Faso">Burkina Faso</option>
												<option value="Burundi">Burundi</option>
												<option value="Cambodia">Cambodia</option>
												<option value="Cameroon">Cameroon</option>
												<option value="Canada">Canada</option>
												<option value="Cape Verde">Cape Verde</option>
												<option value="Cayman Islands">Cayman Islands</option>
												<option value="Central African Republic">Central African Republic</option>
												<option value="Chad">Chad</option>
												<option value="Chile">Chile</option>
												<option value="China">China</option>
												<option value="Colombia">Colombia</option>
												<option value="Comoros">Comoros</option>
												<option value="Congo">Congo</option>
												<option value="Congo">Congo</option>
												<option value="Cook Islands">Cook Islands</option>
												<option value="Costa Rica">Costa Rica</option>
												<option value="Cote D'ivoire">Cote D'ivoire</option>
												<option value="Croatia">Croatia</option>
												<option value="Cuba">Cuba</option>
												<option value="Cyprus">Cyprus</option>
												<option value="Czech Republic">Czech Republic</option>
												<option value="Denmark">Denmark</option>
												<option value="Djibouti">Djibouti</option>
												<option value="Dominica">Dominica</option>
												<option value="Dominican Republic">Dominican Republic</option>
												<option value="Ecuador">Ecuador</option>
												<option value="Egypt">Egypt</option>
												<option value="El Salvador">El Salvador</option>
												<option value="Equatorial Guinea">Equatorial Guinea</option>
												<option value="Eritrea">Eritrea</option>
												<option value="Estonia">Estonia</option>
												<option value="Ethiopia">Ethiopia</option>
												<option value="Faroe Islands">Faroe Islands</option>
												<option value="Fiji">Fiji</option>
												<option value="Finland">Finland</option>
												<option value="France">France</option>
												<option value="Gabon">Gabon</option>
												<option value="Gambia">Gambia</option>
												<option value="Georgia">Georgia</option>
												<option value="Germany">Germany</option>
												<option value="Ghana">Ghana</option>
												<option value="Gibraltar">Gibraltar</option>
												<option value="Greece">Greece</option>
												<option value="Greenland">Greenland</option>
												<option value="Grenada">Grenada</option>
												<option value="Guadeloupe">Guadeloupe</option>
												<option value="Guam">Guam</option>
												<option value="Guatemala">Guatemala</option>
												<option value="Guernsey">Guernsey</option>
												<option value="Guinea">Guinea</option>
												<option value="Guinea-bissau">Guinea-bissau</option>
												<option value="Guyana">Guyana</option>
												<option value="Haiti">Haiti</option>
												<option value="Honduras">Honduras</option>
												<option value="Hong Kong">Hong Kong</option>
												<option value="Hungary">Hungary</option>
												<option value="Iceland">Iceland</option>
												<option value="India">India</option>
												<option value="Indonesia">Indonesia</option>
												<option value="Iran">Iran</option>
												<option value="Iraq">Iraq</option>
												<option value="Ireland">Ireland</option>
												<option value="Isle of Man">Isle of Man</option>
												<option value="Israel">Israel</option>
												<option value="Italy">Italy</option>
												<option value="Jamaica">Jamaica</option>
												<option value="Japan">Japan</option>
												<option value="Jersey">Jersey</option>
												<option value="Jordan">Jordan</option>
												<option value="Kazakhstan">Kazakhstan</option>
												<option value="Kenya">Kenya</option>
												<option value="Kiribati">Kiribati</option>
												<option value="Korea">Korea</option>
												<option value="Kuwait">Kuwait</option>
												<option value="Kyrgyzstan">Kyrgyzstan</option>
												<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
												<option value="Latvia">Latvia</option>
												<option value="Lebanon">Lebanon</option>
												<option value="Lesotho">Lesotho</option>
												<option value="Liberia">Liberia</option>
												<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
												<option value="Liechtenstein">Liechtenstein</option>
												<option value="Lithuania">Lithuania</option>
												<option value="Luxembourg">Luxembourg</option>
												<option value="Macao">Macao</option>
												<option value="Macedonia">Macedonia</option>
												<option value="Madagascar">Madagascar</option>
												<option value="Malawi">Malawi</option>
												<option value="Malaysia">Malaysia</option>
												<option value="Maldives">Maldives</option>
												<option value="Mali">Mali</option>
												<option value="Malta">Malta</option>
												<option value="Marshall Islands">Marshall Islands</option>
												<option value="Martinique">Martinique</option>
												<option value="Mauritania">Mauritania</option>
												<option value="Mauritius">Mauritius</option>
												<option value="Mayotte">Mayotte</option>
												<option value="Mexico">Mexico</option>
												<option value="Moldova">Moldova</option>
												<option value="Monaco">Monaco</option>
												<option value="Mongolia">Mongolia</option>
												<option value="Montenegro">Montenegro</option>
												<option value="Montserrat">Montserrat</option>
												<option value="Morocco">Morocco</option>
												<option value="Mozambique">Mozambique</option>
												<option value="Myanmar">Myanmar</option>
												<option value="Namibia">Namibia</option>
												<option value="Nauru">Nauru</option>
												<option value="Nepal">Nepal</option>
												<option value="Netherlands">Netherlands</option>
												<option value="Netherlands Antilles">Netherlands Antilles</option>
												<option value="New Caledonia">New Caledonia</option>
												<option value="New Zealand">New Zealand</option>
												<option value="Nicaragua">Nicaragua</option>
												<option value="Niger">Niger</option>
												<option value="Nigeria">Nigeria</option>
												<option value="Niue">Niue</option>
												<option value="Norfolk Island">Norfolk Island</option>
												<option value="Northern Mariana Islands">Northern Mariana Islands</option>
												<option value="Norway">Norway</option>
												<option value="Oman">Oman</option>
												<option value="Pakistan">Pakistan</option>
												<option value="Palau">Palau</option>
												<option value="Panama">Panama</option>
												<option value="Papua New Guinea">Papua New Guinea</option>
												<option value="Paraguay">Paraguay</option>
												<option value="Peru">Peru</option>
												<option value="Philippines">Philippines</option>
												<option value="Pitcairn">Pitcairn</option>
												<option value="Poland">Poland</option>
												<option value="Portugal">Portugal</option>
												<option value="Puerto Rico">Puerto Rico</option>
												<option value="Qatar">Qatar</option>
												<option value="Reunion">Reunion</option>
												<option value="Romania">Romania</option>
												<option value="Russian Federation">Russian Federation</option>
												<option value="Rwanda">Rwanda</option>
												<option value="Samoa">Samoa</option>
												<option value="San Marino">San Marino</option>
												<option value="Sao Tome and Principe">Sao Tome and Principe</option>
												<option value="Saudi Arabia">Saudi Arabia</option>
												<option value="Senegal">Senegal</option>
												<option value="Serbia">Serbia</option>
												<option value="Seychelles">Seychelles</option>
												<option value="Sierra Leone">Sierra Leone</option>
												<option value="Singapore">Singapore</option>
												<option value="Slovakia">Slovakia</option>
												<option value="Slovenia">Slovenia</option>
												<option value="Solomon Islands">Solomon Islands</option>
												<option value="Somalia">Somalia</option>
												<option value="South Africa">South Africa</option>
												<option value="Spain">Spain</option>
												<option value="Sri Lanka">Sri Lanka</option>
												<option value="Sudan">Sudan</option>
												<option value="Suriname">Suriname</option>
												<option value="Swaziland">Swaziland</option>
												<option value="Sweden">Sweden</option>
												<option value="Switzerland">Switzerland</option>
												<option value="Syrian Arab Republic">Syrian Arab Republic</option>
												<option value="Taiwan">Taiwan</option>
												<option value="Tajikistan">Tajikistan</option>
												<option value="Tanzania">Tanzania</option>
												<option value="Thailand">Thailand</option>
												<option value="Timor-leste">Timor-leste</option>
												<option value="Togo">Togo</option>
												<option value="Tokelau">Tokelau</option>
												<option value="Tonga">Tonga</option>
												<option value="Trinidad and Tobago">Trinidad and Tobago</option>
												<option value="Tunisia">Tunisia</option>
												<option value="Turkey">Turkey</option>
												<option value="Turkmenistan">Turkmenistan</option>
												<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
												<option value="Tuvalu">Tuvalu</option>
												<option value="Uganda">Uganda</option>
												<option value="Ukraine">Ukraine</option>
												<option value="United Arab Emirates">United Arab Emirates</option>
												<option value="United Kingdom">United Kingdom</option>
												<option value="United States">United States</option>
												<option value="Uruguay">Uruguay</option>
												<option value="Uzbekistan">Uzbekistan</option>
												<option value="Vanuatu">Vanuatu</option>
												<option value="Venezuela">Venezuela</option>
												<option value="Viet Nam">Viet Nam</option>
												<option value="Western Sahara">Western Sahara</option>
												<option value="Yemen">Yemen</option>
												<option value="Zambia">Zambia</option>
												<option value="Zimbabwe">Zimbabwe</option>
											</select>
										</div>
									</div>
								</div>
							</div>

							<div class="col-12 col-md-6 col-xl-4">
								<div class="sign__group">
									<select class="sign__selectjs" id="sign__director" multiple>
										<option value="Matt Jones">Matt Jones</option>
										<option value="Gene Graham">Gene Graham</option>
										<option value="Rosa Lee">Rosa Lee</option>
										<option value="Brian Cranston">Brian Cranston</option>
										<option value="Tess Harper">Tess Harper</option>
										<option value="Eliza Josceline">Eliza Josceline</option>
										<option value="Otto Bree">Otto Bree</option>
										<option value="Kathie Corl">Kathie Corl</option>
										<option value="Georgiana Patti">Georgiana Patti</option>
										<option value="Cong Duong">Cong Duong</option>
										<option value="Felix Autumn">Felix Autumn</option>
										<option value="Sophie Moore">Sophie Moore</option>
									</select>
								</div>
							</div>

							<div class="col-12 col-md-6 col-xl-8">
								<div class="sign__group">
									<select class="sign__selectjs" id="sign__actors" multiple>
										<option value="Matt Jones">Matt Jones</option>
										<option value="Gene Graham">Gene Graham</option>
										<option value="Rosa Lee">Rosa Lee</option>
										<option value="Brian Cranston">Brian Cranston</option>
										<option value="Tess Harper">Tess Harper</option>
										<option value="Eliza Josceline">Eliza Josceline</option>
										<option value="Otto Bree">Otto Bree</option>
										<option value="Kathie Corl">Kathie Corl</option>
										<option value="Georgiana Patti">Georgiana Patti</option>
										<option value="Cong Duong">Cong Duong</option>
										<option value="Felix Autumn">Felix Autumn</option>
										<option value="Sophie Moore">Sophie Moore</option>
									</select>
								</div>
							</div>

							<div class="col-12">
								<div class="sign__group">
									<label class="sign__label">Item type:</label>
									<ul class="sign__radio">
										<li>
											<input id="type1" type="radio" name="type" data-bs-toggle="collapse" data-bs-target=".multi-collapse" checked="">
											<label for="type1">Movie</label>
										</li>
										<li>
											<input id="type2" type="radio" name="type" data-bs-toggle="collapse" data-bs-target=".multi-collapse">
											<label for="type2">TV Series</label>
										</li>
									</ul>
								</div>
							</div>

							<!-- movie -->
							<div class="col-12">
								<div class="collapse show multi-collapse">
									<div class="sign__video">
										<label id="movie1" for="sign__video-upload">Upload video</label>
										<input data-name="#movie1" id="sign__video-upload" name="movie" class="sign__video-upload" type="file" accept="video/mp4,video/x-m4v,video/*">
									</div>
								</div>
							</div>
							<!-- end movie -->

							<!-- tv series -->
							<div class="col-12">
								<div class="collapse multi-collapse">
									<!-- season -->
									<div class="sign__season">
										<div class="sign__season-head">
											<div class="row">
												<div class="col-12">
													<span class="sign__episode-title">Season #1</span>
												</div>

												<div class="col-12 col-sm-6 col-md-5 col-xl-6">
													<div class="sign__group">
														<input type="text" class="sign__input" placeholder="Season title">
													</div>
												</div>

												<div class="col-12 col-sm-6 col-md-4 col-xl-4">
													<div class="sign__group">
														<input type="text" class="sign__input" placeholder="Season info">
													</div>
												</div>

												<div class="col-12 col-sm-4 col-md-3 col-xl-2">
													<button class="sign__btn sign__btn--add"><span>add season</span></button>
												</div>
											</div>
										</div>

										<!-- episode -->
										<div class="sign__episode">
											<div class="row">
												<div class="col-12">
													<span class="sign__episode-title">Episode #1</span>
													<button class="sign__delete" type="button">
														<i class="ti ti-x"></i>
													</button>
												</div>

												<div class="col-12 col-md-6">
													<div class="sign__group">
														<input type="text" class="sign__input" placeholder="Episode title 1">
													</div>
												</div>

												<div class="col-12 col-md-6">
													<div class="sign__group">
														<input type="text" class="sign__input" placeholder="Air date">
													</div>
												</div>

												<div class="col-12">
													<div class="sign__video">
														<label id="s1s1" for="sign__video-upload1">Upload episode 1</label>
														<input data-name="#s1s1" id="sign__video-upload1" name="s1s1" class="sign__video-upload" type="file" accept="video/mp4,video/x-m4v,video/*">
													</div>
												</div>
											</div>
										</div>
										<!-- end episode -->

										<!-- episode -->
										<div class="sign__episode">
											<div class="row">
												<div class="col-12">
													<span class="sign__episode-title">Episode #2</span>
													<button class="sign__delete" type="button">
														<i class="ti ti-x"></i>
													</button>
												</div>

												<div class="col-12 col-md-6">
													<div class="sign__group">
														<input type="text" class="sign__input" placeholder="Episode title 2">
													</div>
												</div>

												<div class="col-12 col-md-6">
													<div class="sign__group">
														<input type="text" class="sign__input" placeholder="Air date">
													</div>
												</div>

												<div class="col-12 col-sm-8 col-md-9 col-xl-10">
													<div class="sign__video">
														<label id="s1s2" for="sign__video-upload2">Upload episode 2</label>
														<input data-name="#s1s2" id="sign__video-upload2" name="s1s2" class="sign__video-upload" type="file" accept="video/mp4,video/x-m4v,video/*">
													</div>
												</div>

												<div class="col-12 col-sm-4 col-md-3 col-xl-2">
													<button class="sign__btn sign__btn--add"><span>add episode</span></button>
												</div>
											</div>
										</div>
										<!-- end episode -->
									</div>
									<!-- end season -->
								</div>
							</div>
							<!-- end tv series -->

							<div class="col-12">
								<button type="button" class="sign__btn sign__btn--small"><span>Publish</span></button>
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