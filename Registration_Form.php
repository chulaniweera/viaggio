<?php
include_once 'core/init.php';

$message1 = "";
$message2 = "";
if(empty($_POST == false)){
	if(user_exists($_POST['username']) === true){
		$message1 = "Sorry the username is already taken";
		echo "<script type='text/javascript'>alert('$message1');</script>";
	}
	if(email_exists($_POST['email']) === true){
		$message2 = "Sorry, this e-mail is already in use";
		echo "<script type='text/javascript'>alert('$message2');</script>";
	}
}
?>


<?php include_once 'head.php'; ?>
<?php include_once 'Tourist.php'; ?>

  <div class="container-fluid" style ='background-color: #262626; width:80%; margin-top: 30px;opacity:0.8'>
	<div class="page-header">
		<h1><font color=white>REGISTRATION FORM</font></h1>
	</div>	
	<div class="panel panel-default">
		<div class="panel-body">
			<form class="form-horizontal" role="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" >
				<div class="row">
					<div class="col-sm-8">
				
						<div class="panel panel-primary" >
							<div class="panel-heading">Personal Details</div>
							<div class="panel-body">
								<div class="form-group">
									<label class="control-label col-sm-3" for="title">Title *</label>
									<div class="col-sm-7">
										
										<script>
											function validateTitleCombo(){
												if(document.getElementByName("title").value=="Default"){
													alert("Select a valid title");
													document.getElementById("titleCombo").focus();
													return false;
												}else{
													return true;
												}
											}
										</script>
										
										<div class="dropdown">
											  <select class="form-control btn btn-primary col-sm-11" name="title">
												<option value="Default">Please select the title</option>
												<option value="Mr">Mr.</option>
												<option value="Mrs">Mrs.</option>
												<option value="Ms">Ms.</option>
											  </select>
											</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3" for="firstName">First Name *</label>
									<div class="col-sm-7"> 
									
									<script>
										function validateFirstName() {
											var name = document.getElementById("firstName").value;
											var letters = /^[a-zA-Z\s]*$/;
											if( name.match(letters)){
												return true;
											}else{
												alert("Invalid data");
												document.getElementById("firstName").value=document.getElementById("firstName").value.slice(0,-1);
												name.focus();
												return false;
											}
										}
										</script>
										
										<input type="text" class="form-control" id="firstName" onkeyup="validateFirstName()" required>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3" for="lastName">Last Name *</label>
									<div class="col-sm-7"> 
									
										<script>
											function validateLastName() {
												var name = document.getElementById("lastName").value;
												var letters = /^[A-Za-z\s]*$/;
												if( name.match(letters)){
													return true;
												}else{
													alert("Invalid data");
													document.getElementById("lastName").value=document.getElementById("lastName").value.slice(0,-1);
													name.focus();
													return false;
												}
											}
										</script>
										
										<input type="text" class="form-control" id="lastName" onkeyup="validateLastName()" required>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3" for="address">Address</label>
									<div class="col-sm-7"> 
										<input type="text" class="form-control" id="address">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3" for="city">City</label>
									<div class="col-sm-7"> 
										<input type="text" class="form-control" id="city">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3" for="country"> Country *</label>
									<div class="col-sm-7">
										
										<script>
											function validateCountryCombo(){
												if(document.getElementByName("country").value=="Default"){
													alert("Select a valid country");
													document.getElementById("countryCombo").focus();
													return false;
												}else{
													return true;
												}
											}
										</script>
										
										<div class="dropdown">
											<select class="form-control btn btn-primary col-sm-11" name="country">
												<option value="Default">Please select a country</option>  
												<option value="AF">Afghanistan</option>
												<option value="AX">Åland Islands</option>
												<option value="AL">Albania</option>
												<option value="DZ">Algeria</option>
												<option value="AS">American Samoa</option>
												<option value="AD">Andorra</option>
												<option value="AO">Angola</option>
												<option value="AI">Anguilla</option>
												<option value="AQ">Antarctica</option>
												<option value="AG">Antigua and Barbuda</option>
												<option value="AR">Argentina</option>
												<option value="AM">Armenia</option>
												<option value="AW">Aruba</option>
												<option value="AU">Australia</option>
												<option value="AT">Austria</option>
												<option value="AZ">Azerbaijan</option>
												<option value="BS">Bahamas</option>
												<option value="BH">Bahrain</option>
												<option value="BD">Bangladesh</option>
												<option value="BB">Barbados</option>
												<option value="BY">Belarus</option>
												<option value="BE">Belgium</option>
												<option value="BZ">Belize</option>
												<option value="BJ">Benin</option>
												<option value="BM">Bermuda</option>
												<option value="BT">Bhutan</option>
												<option value="BO">Bolivia, Plurinational State of</option>
												<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
												<option value="BA">Bosnia and Herzegovina</option>
												<option value="BW">Botswana</option>
												<option value="BV">Bouvet Island</option>
												<option value="BR">Brazil</option>
												<option value="IO">British Indian Ocean Territory</option>
												<option value="BN">Brunei Darussalam</option>
												<option value="BG">Bulgaria</option>
												<option value="BF">Burkina Faso</option>
												<option value="BI">Burundi</option>
												<option value="KH">Cambodia</option>
												<option value="CM">Cameroon</option>
												<option value="CA">Canada</option>
												<option value="CV">Cape Verde</option>
												<option value="KY">Cayman Islands</option>
												<option value="CF">Central African Republic</option>
												<option value="TD">Chad</option>
												<option value="CL">Chile</option>
												<option value="CN">China</option>
												<option value="CX">Christmas Island</option>
												<option value="CC">Cocos (Keeling) Islands</option>
												<option value="CO">Colombia</option>
												<option value="KM">Comoros</option>
												<option value="CG">Congo</option>
												<option value="CD">Congo, the Democratic Republic of the</option>
												<option value="CK">Cook Islands</option>
												<option value="CR">Costa Rica</option>
												<option value="CI">Côte d'Ivoire</option>
												<option value="HR">Croatia</option>
												<option value="CU">Cuba</option>
												<option value="CW">Curaçao</option>
												<option value="CY">Cyprus</option>
												<option value="CZ">Czech Republic</option>
												<option value="DK">Denmark</option>
												<option value="DJ">Djibouti</option>
												<option value="DM">Dominica</option>
												<option value="DO">Dominican Republic</option>
												<option value="EC">Ecuador</option>
												<option value="EG">Egypt</option>
												<option value="SV">El Salvador</option>
												<option value="GQ">Equatorial Guinea</option>
												<option value="ER">Eritrea</option>
												<option value="EE">Estonia</option>
												<option value="ET">Ethiopia</option>
												<option value="FK">Falkland Islands (Malvinas)</option>
												<option value="FO">Faroe Islands</option>
												<option value="FJ">Fiji</option>
												<option value="FI">Finland</option>
												<option value="FR">France</option>
												<option value="GF">French Guiana</option>
												<option value="PF">French Polynesia</option>
												<option value="TF">French Southern Territories</option>
												<option value="GA">Gabon</option>
												<option value="GM">Gambia</option>
												<option value="GE">Georgia</option>
												<option value="DE">Germany</option>
												<option value="GH">Ghana</option>
												<option value="GI">Gibraltar</option>
												<option value="GR">Greece</option>
												<option value="GL">Greenland</option>
												<option value="GD">Grenada</option>
												<option value="GP">Guadeloupe</option>
												<option value="GU">Guam</option>
												<option value="GT">Guatemala</option>
												<option value="GG">Guernsey</option>
												<option value="GN">Guinea</option>
												<option value="GW">Guinea-Bissau</option>
												<option value="GY">Guyana</option>
												<option value="HT">Haiti</option>
												<option value="HM">Heard Island and McDonald Islands</option>
												<option value="VA">Holy See (Vatican City State)</option>
												<option value="HN">Honduras</option>
												<option value="HK">Hong Kong</option>
												<option value="HU">Hungary</option>
												<option value="IS">Iceland</option>
												<option value="IN">India</option>
												<option value="ID">Indonesia</option>
												<option value="IR">Iran, Islamic Republic of</option>
												<option value="IQ">Iraq</option>
												<option value="IE">Ireland</option>
												<option value="IM">Isle of Man</option>
												<option value="IL">Israel</option>
												<option value="IT">Italy</option>
												<option value="JM">Jamaica</option>
												<option value="JP">Japan</option>
												<option value="JE">Jersey</option>
												<option value="JO">Jordan</option>
												<option value="KZ">Kazakhstan</option>
												<option value="KE">Kenya</option>
												<option value="KI">Kiribati</option>
												<option value="KP">Korea, Democratic People's Republic of</option>
												<option value="KR">Korea, Republic of</option>
												<option value="KW">Kuwait</option>
												<option value="KG">Kyrgyzstan</option>
												<option value="LA">Lao People's Democratic Republic</option>
												<option value="LV">Latvia</option>
												<option value="LB">Lebanon</option>
												<option value="LS">Lesotho</option>
												<option value="LR">Liberia</option>
												<option value="LY">Libya</option>
												<option value="LI">Liechtenstein</option>
												<option value="LT">Lithuania</option>
												<option value="LU">Luxembourg</option>
												<option value="MO">Macao</option>
												<option value="MK">Macedonia, the former Yugoslav Republic of</option>
												<option value="MG">Madagascar</option>
												<option value="MW">Malawi</option>
												<option value="MY">Malaysia</option>
												<option value="MV">Maldives</option>
												<option value="ML">Mali</option>
												<option value="MT">Malta</option>
												<option value="MH">Marshall Islands</option>
												<option value="MQ">Martinique</option>
												<option value="MR">Mauritania</option>
												<option value="MU">Mauritius</option>
												<option value="YT">Mayotte</option>
												<option value="MX">Mexico</option>
												<option value="FM">Micronesia, Federated States of</option>
												<option value="MD">Moldova, Republic of</option>
												<option value="MC">Monaco</option>
												<option value="MN">Mongolia</option>
												<option value="ME">Montenegro</option>
												<option value="MS">Montserrat</option>
												<option value="MA">Morocco</option>
												<option value="MZ">Mozambique</option>
												<option value="MM">Myanmar</option>
												<option value="NA">Namibia</option>
												<option value="NR">Nauru</option>
												<option value="NP">Nepal</option>
												<option value="NL">Netherlands</option>
												<option value="NC">New Caledonia</option>
												<option value="NZ">New Zealand</option>
												<option value="NI">Nicaragua</option>
												<option value="NE">Niger</option>
												<option value="NG">Nigeria</option>
												<option value="NU">Niue</option>
												<option value="NF">Norfolk Island</option>
												<option value="MP">Northern Mariana Islands</option>
												<option value="NO">Norway</option>
												<option value="OM">Oman</option>
												<option value="PK">Pakistan</option>
												<option value="PW">Palau</option>
												<option value="PS">Palestinian Territory, Occupied</option>
												<option value="PA">Panama</option>
												<option value="PG">Papua New Guinea</option>
												<option value="PY">Paraguay</option>
												<option value="PE">Peru</option>
												<option value="PH">Philippines</option>
												<option value="PN">Pitcairn</option>
												<option value="PL">Poland</option>
												<option value="PT">Portugal</option>
												<option value="PR">Puerto Rico</option>
												<option value="QA">Qatar</option>
												<option value="RE">Réunion</option>
												<option value="RO">Romania</option>
												<option value="RU">Russian Federation</option>
												<option value="RW">Rwanda</option>
												<option value="BL">Saint Barthélemy</option>
												<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
												<option value="KN">Saint Kitts and Nevis</option>
												<option value="LC">Saint Lucia</option>
												<option value="MF">Saint Martin (French part)</option>
												<option value="PM">Saint Pierre and Miquelon</option>
												<option value="VC">Saint Vincent and the Grenadines</option>
												<option value="WS">Samoa</option>
												<option value="SM">San Marino</option>
												<option value="ST">Sao Tome and Principe</option>
												<option value="SA">Saudi Arabia</option>
												<option value="SN">Senegal</option>
												<option value="RS">Serbia</option>
												<option value="SC">Seychelles</option>
												<option value="SL">Sierra Leone</option>
												<option value="SG">Singapore</option>
												<option value="SX">Sint Maarten (Dutch part)</option>
												<option value="SK">Slovakia</option>
												<option value="SI">Slovenia</option>
												<option value="SB">Solomon Islands</option>
												<option value="SO">Somalia</option>
												<option value="ZA">South Africa</option>
												<option value="GS">South Georgia and the South Sandwich Islands</option>
												<option value="SS">South Sudan</option>
												<option value="ES">Spain</option>
												<option value="LK">Sri Lanka</option>
												<option value="SD">Sudan</option>
												<option value="SR">Suriname</option>
												<option value="SJ">Svalbard and Jan Mayen</option>
												<option value="SZ">Swaziland</option>
												<option value="SE">Sweden</option>
												<option value="CH">Switzerland</option>
												<option value="SY">Syrian Arab Republic</option>
												<option value="TW">Taiwan, Province of China</option>
												<option value="TJ">Tajikistan</option>
												<option value="TZ">Tanzania, United Republic of</option>
												<option value="TH">Thailand</option>
												<option value="TL">Timor-Leste</option>
												<option value="TG">Togo</option>
												<option value="TK">Tokelau</option>
												<option value="TO">Tonga</option>
												<option value="TT">Trinidad and Tobago</option>
												<option value="TN">Tunisia</option>
												<option value="TR">Turkey</option>
												<option value="TM">Turkmenistan</option>
												<option value="TC">Turks and Caicos Islands</option>
												<option value="TV">Tuvalu</option>
												<option value="UG">Uganda</option>
												<option value="UA">Ukraine</option>
												<option value="AE">United Arab Emirates</option>
												<option value="GB">United Kingdom</option>
												<option value="US">United States</option>
												<option value="UM">United States Minor Outlying Islands</option>
												<option value="UY">Uruguay</option>
												<option value="UZ">Uzbekistan</option>
												<option value="VU">Vanuatu</option>
												<option value="VE">Venezuela, Bolivarian Republic of</option>
												<option value="VN">Viet Nam</option>
												<option value="VG">Virgin Islands, British</option>
												<option value="VI">Virgin Islands, U.S.</option>
												<option value="WF">Wallis and Futuna</option>
												<option value="EH">Western Sahara</option>
												<option value="YE">Yemen</option>
												<option value="ZM">Zambia</option>
												<option value="ZW">Zimbabwe</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3" for="nic">NIC</label>
									<div class="col-sm-7"> 
										<input type="text" class="form-control" id="nic">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3" for="passportId">Passport ID</label>
									<div class="col-sm-7"> 
										<input type="text" class="form-control" id="passportID">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3" for="email">Email *</label>
									<div class="col-sm-7">
										
										<script>
											function validateEmail() {
												var email = document.getElementById("email").value;
												var letters = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
												if( email.match(letters)){
													return true;
												}else{
													alert("Invalid data");
													document.getElementById("email").value=document.getElementById("email").value="";
													email.focus();
													return false;
												}
											}
										</script>
										 
										<input type="email" class="form-control" id="email" name="email" onchange="validateEmail();" required>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3" for="contactNo">Contact Number</label>
									<div class="col-sm-7"> 
										<input type="tel" class="form-control" id="contactNo1">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3" for="contactNo"></label>
									<div class="col-sm-7"> 
										<input type="tel" class="form-control" id="contactNo2">
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-primary" >
							<div class="panel-heading">Account Details</div>
							<div class="panel-body">
								<div class="form-group">
								<label class="control-label col-sm-3" for="username">User Name *</label>
								<div class="col-sm-7"> 
									<input type="text" class="form-control" id="username" name="username" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3" for="password">Password *</label>
								<div class="col-sm-7"> 
									<input type="password" class="form-control" name="tpwd" id="password" onchange="validatePassword();" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3" for="confirm-password">Confirm Password *</label>
								<div class="col-sm-7"> 
									<input type="password" class="form-control" name="tcpwd" id="confirm_password" onkeyup="validatePassword();" required>
								</div>
							</div>
							<button type="submit" class="btn btn-primary pull-right btn-margin-right" onclick="add_new_tourist();">Submit</button>
							<button type="reset" class="btn btn-primary pull-right btn-margin-right">Cancel</button>
							
							<script type="text/javascript">
								username.setCustomValidity("")
								var password = document.getElementById("password")
								  , confirm_password = document.getElementById("confirm_password");

								function validatePassword(){
								  if(password.value != confirm_password.value) {
									confirm_password.setCustomValidity("Passwords Don't Match");
								  } else {
									confirm_password.setCustomValidity('');
								  }
								}
							</script>
							
							
						</div>
					</div>
					</div>
					<div class="col-sm-4">
						<div class="panel panel-primary">
							<div class="panel-heading">Profile Picture</div>
							<div class="panel-body">
								<div>
									<center><img id="blah" src="user.jpg" width = '250px' height='250px'alt="your image" /></center>
								</div>
								<input type='file'  class="btn btn-primary" onchange="readURL(this);" />
							</div>
						</div>
					</div>
					<script type="text/javascript">
					     function readURL(input) {
				            if (input.files && input.files[0]) {
				                var reader = new FileReader();

				                reader.onload = function (e) {
				                    $('#blah')
				                        .attr('src', e.target.result)
				                        .width(250)
				                        .height(250);
				                };

				                reader.readAsDataURL(input.files[0]);
				            }
				        }
				    </script>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
