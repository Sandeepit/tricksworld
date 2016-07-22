<?php
if(isset($_POST['pageName'])){
	echo $_POST['pageName'];
if(substr($_POST['pageName'],0,1)!="l")
{
	$os=$_POST['pageName'];
switch($os)
{
case 'java' :
$i="10";
break;
case 'symbianv2' :
$i="20";
break;
case 'symbianv3' :
$i="30";
break;
case 'symbianv5' :
$i="50";
break;
case 'symbianbellic' :
$i="40";
break;
case 'windows' :
$i="70";
break;
case 'android' :
$i="60";
break;
case 'mac' :
$i="80";
break;}
echo '<h3>'.strtoupper($os).'</h3>';
$d=$i+5;
include_once("data/settings.php");
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
for($m=0;$i<$d;$m++,$i++)
{
$c=array("APPLICATIONS","GAMES","THEMES","WIDGETS","LIVE WALLPAPER");
$query = "SELECT t1.title,t2.target FROM links t1 INNER JOIN links_target t2 ON t1.id = t2.id WHERE t1.type ='$i'";
$result = mysqli_query($dbc,$query);
if (mysqli_num_rows($result) !=0)
{
echo '<div id="list2"><h4>'.$c[$m].'</h4><hr/><ul>';
while($row=mysqli_fetch_array($result))
{
$link=$row['target'];
echo "<li><a href='files/".$os."/".$link."'>".$row['title']."</a></li>";
}
echo '</ul></div>';
}
}
mysqli_close($dbc);
}
else if($_POST['pageName']=="l1"){
?>
<h2>The Most Popular Downloads</h2>
<div id='list1'><h4>Android</h4><hr/><ul>
<li><a href='http://tricksworld.net/download.php?OS=android&uploader=2&no=1043&link=facebookmessanger(www.tricksworld.net).apk'>facebookmessenger</a></li><li><a href='http://tricksworld.net/download.php?OS=android&uploader=1&no=752&link=NetQinantivirus(www.tricksworld.net).apk'>Netqin Anti Virus</a></li><li><a href='http://tricksworld.net/download.php?OS=android&uploader=1&no=654&link=AppLock(www.tricksworld.net).apk'>App Locker</a></li><li><a href='http://tricksworld.net/download.php?OS=android&uploader=1&no=625&link=Wikipedia(www.tricksworld.net).apk'>WikiPedia</a></li><li><a href='http://tricksworld.net/download.php?OS=android&uploader=1&no=235&link=Skype(www.tricksworld.net).apk'>Skype</a></li><li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1lMmE4OUFTMVRDOHM'>Wifi File Explorer</a></li><br /><a href="#?" onClick="getData('android');">>>Some More</a></ul></div>

<div id='list1'><h4>Windows</h4><hr/><ul>
<li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1lUjdsWXBuZXlvaTQ'>Screen Recorder</a></li><li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1lZmdEb0kwdzBZTUE'>Opera Browser</a></li><li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1lazM0YktJRUliOWM'>TVC</a></li><li><a href='http://tricksworld.net/download.php?OS=windows&uploader=1&no=832&link=Nero(www.tricksworld.net).exe'>Nero</a></li><li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1lZ0lhM0kyMnRJeVU'>Google earth</a></li><li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1leEtsNW44WFctSWs'>open office</a></li><br /><a href="#?" onClick="getData('windows');">>>Some More</a></ul></div>

<div id='list1'><h4>MAC</h4><hr/><ul>
<li><a href='files/mac/WhatsAppPocket(www.tricksworld.net).dmg'>WhatsApp Pocket</a></li><li><a href='files/mac/Skype(www.tricksworld.net).dmg'>Skype</a></li><li><a href='files/mac/RealPlayer(www.tricksworld.net).dmg'>Real Player</a></li><li><a href='files/mac/Opera(www.tricksworld.net).dmg'>Opera</a></li><li><a href='files/mac/Firefox(www.tricksworld.net).dmg'>Firefox</a></li><li><a href='files/mac/Ccleaner(www.tricksworld.net).dmg'>CCleaner</a></li><br /><a href="#?" onClick="getData('mac');">>>Some More</a></ul></div>

<div id='list1'><h4>Java</h4><hr/><ul>
<li><a href='http://tricksworld.net/files/java/Mbrowser(www.tricksworld.net).jar'>Mbrowser</a></li><li><a href='http://tricksworld.net/files/java/Nimbuzz(www.tricksworld.net).jar'>Nimbuzz</a></li><li><a href='http://tricksworld.net/files/java/operamini(www.tricksworld.net).jar'>operamini</a></li><li><a href='http://tricksworld.net/files/java/Facebook(www.tricksworld.net).Jar'>Facebook</a></li><li><a href='http://tricksworld.net/files/java/Eng-engDictionary(www.tricksworld.net).jar'>Eng-engDictionary</a></li><li><a href='http://tricksworld.net/files/java/newshunt(www.tricksworld.net).jar'>newshunt</a></li><br />
<a href="#?" onClick="getData('java');">>>Some More</a></ul></div>

<div id='list1'><h4>Symbian V3</h4><hr/><ul>
<li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1lYVd1Rjd1dUdNQnM'>Power Mp3</a></li><li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1lSFgwLTEyS1d0VDg'>Photo Book</a></li><li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1ldENnamVlYkZ5Y2c'>Opera Mini</a></li><li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1lRHlYbklKN0hTbXc'>Media Safe</a></li><li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1ldkxNUDZ1WFZyM0U'>Ibibo Browser</a></li><li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1lNkpaSkswMDViWWM'>Xplore</a></li><br /><a href="#?" onClick="getData('symbianv3');">>>Some More</a></ul></div>

<div id='list1'><h4>Symbian V5</h4><hr/><ul><li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1lX2RZVzk3WGVjc3c'>Adobe Reader</a></li><li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1lZHRQaFBvZFp5S2M'>Xplore</a></li><li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1lekJhS0xRZ3VvVEE'>Virtual Radio</a></li><li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1lbjhaNTVPNVlKWGc'>Think Change</a></li><li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1lV2FPbWs1dnQxbEk'>Smart Movie</a></li><li><a href='https://docs.google.com/uc?export=download&id=0B5ykUSjQaM1lcnYzdXN4MmV3Q1U'>Power Mp3</a></li><br /><a href="#?" onClick="getData('symbianv5');">>>Some More</a></ul></div>
<?php
}
else if($_POST['pageName']=="l6"){
?>
<script>
function submitForm(form){
	if (validateNonEmpty(form["msg"], form["msg_help"]) && validateEmail(form["email"], form["email_help"])){
		feedback(form["email"].value,form["msg"].value);
	}else{
		alert("There is something wrong with the information.");
	}
}
function feedback(email,msg){
	$("#data").html("<img src='images/loading.gif'/>");
	var posting =$.post("data.php",{
		email:email,
		msg:msg
	});
	posting.done(function(data){
		$("#data").html(data);
	});
	posting.fail(function(){
	$("#data").html("<h5>Message Sending failed.....</h5>");
	});
}
</script>
<h2>Contact Us</h2>
<br/><form><label for="email">E-Mail</label><br/>
<input type="text" id="email" name="email" onblur="validateEmail(this, document.getElementById('email_help'))" />
<span id="email_help"></span><br/><br/>
<label for="msg">Message</label><br/>
<textarea id="msg" name="msg" onblur="validateNonEmpty(this, document.getElementById('msg_help'))"></textarea>
<span id="msg_help"></span><br/>
<input type="button" value="submit" onclick="submitForm(this.form);"/>
</form>
<?php
}
else if($_POST['pageName']=="l3"){
?>
<script>
function submitForm(form){
	if (validateNonEmpty(form["password"], form["password_help"]) && validateEmail(form["email"], form["email_help"])){
		log(form["email"].value,form["password"].value);
	}else{
		alert("There is something wrong with the information.");
	}
}
function log(email,password){
	$("#data").html("<img src='images/loading.gif'/>");
	var posting =$.post("data.php",{
		email:email,
		password:password
	});
	posting.done(function(data){
		$("#data").html(data);
	});
	posting.fail(function(){
	$("#data").html("<h>Log in failed.....</h5>");
	});
}
</script>
			<h2>Log In</h2>
					<fieldset>
							<legend>Log In</legend>
										<form>
												<table>
													<tr>
														<td>
															<label for="email">Email:</label>
														</td>
															<td>
					<input type="text" name="email" id="email" onblur="validateEmail(this, document.getElementById('email_help'))"/>
															</td>
																<td>
									<span id="email_help">
									</span>
																</td>
										</tr>
										<tr>
										<td>
										<label for="password">Password:</label>
										</td>
										<td>
					<input type="password" name="password" id="password" onblur="validateNonEmpty(this, document.getElementById('password_help')"/>
					</td>
					<td>
					<span id="password_help">
					</span>
					</td>
					</tr>
					<tr>
					<td>
					<input type="button" value="Log In" onclick="submitForm(this.form);"/>
					</td>
					</tr>
					</table>
					</form>
					</fieldset>
<?php
}
else if($_POST['pageName']=="l2"){
	if(isset($_COOKIE['name'])){
	include_once("data/settings.php");
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$query = "SELECT gender,notifications, birthdate, city, state, country FROM users_info WHERE user_id = '" . $_COOKIE['user_id'] . "'";
    $data = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($data);
?>
<script>
function submitForm(form){
	if (validateNonEmpty(form["city"], form["city_help"]) || validateNonEmpty(form["country"], form["country_help"]) || validateNonEmpty(form["state"], form["state_help"]) || form["gender"].value != '' || form["birthdate"].value != 'YYYY-MM-DD' || form["notifications"].value != '')
		updateProfile(form["gender"].value,form["birthdate"].value,form["city"].value,form["state"].value,form["country"].value,form["notifications"].value);
	else{
		alert("There is something wrong with the information.");
	}
}
function updateProfile(gender,birthdate,city,state,country,notifications){
	$("#data").html("<img src='images/loading.gif'/>");
	var posting =$.post("data.php",{
		gender:gender,
		birthdate:birthdate,
		city:city,
		state:state,
		country:country,
		notifications:notifications
	});
	posting.done(function(data){
		$("#data").html(data);
	});
	posting.fail(function(){
	$("#data").html("<h5>Profile update failed.....</h5>");
	});
}
</script>
<h2>Personal Information</h2>
<fieldset>
<legend>Personal Information</legend>
<form>
     <table><tr><td>
      <label for="lastname">Name:</label></td><td>
      <input type="text" id="lastname" name="lastname" value="<?php if (!empty($_COOKIE['name'])) echo $_COOKIE['name']; ?>" readonly/></td><td><span id="lastname_help" ></span></td></tr><tr><td>
      <label for="gender">Gender:</label></td><td>
      <select id="gender" name="gender">
        <option value="">No Mention</option>
        <option value="1" <?php if (!empty($row['gender']) && $row['gender'] == '1') echo 'selected = "selected"'; ?>>Male</option>
        <option value="0" <?php if (!empty($row['gender']) && $row['gender'] == '0') echo 'selected = "selected"'; ?>>Female</option>
      </select></td></tr><tr><td>
      <label for="birthdate">Birthdate:</label></td><td>
      <input type="text" id="birthdate" name="birthdate" value="<?php if (!empty($row['birthdate'])) echo $row['birthdate']; else echo 'YYYY-MM-DD'; ?>" onblur="validateDate(this, document.getElementById('birthdate_help'))" /></td><td><span id="birthdate_help" ></span></td></tr><tr><td>
      <label for="city">City:</label></td><td>
      <input type="text" id="city" name="city" value="<?php if (!empty($row['city'])) echo $row['city']; ?>" onblur="validateNonEmpty(this, document.getElementById('city_help'))" /></td><td><span id="city_help" ></span></td></tr><tr><td>
      <label for="state">State:</label></td><td>
      <input type="text" id="state" name="state" value="<?php if (!empty($row['state'])) echo $row['state']; ?>" onblur="validateNonEmpty(this, document.getElementById('state_help'))" /></td><td><span id="state_help" ></span></td></tr><tr><td>
	        <label for="country">Country:</label></td><td>
      <input type="text" id="country" name="country" value="<?php if (!empty($row['country'])) echo $row['country']; ?>" onblur="validateNonEmpty(this, document.getElementById('country_help'))" /></td><td><span id="country_help" ></span></td></tr><tr><td>
	        <label for="email">Email:</label></td><td>
      <input type="text" id="email" name="email" value="<?php if (!empty($_COOKIE['email'])) echo $_COOKIE['email']; ?>" readonly/></td><td><span id="email_help" ></span></td></tr><tr><td>
	  <label for="notifications">Subscribe Notifications</label></td><td>
    Yes <input name="notifications" type="radio" value="1" <?php if (!empty($row['notifications']) && $row['notifications'] == '1') echo 'checked="checked"'; ?>/>
    No <input name="notifications" type="radio" value="2" <?php if (!empty($row['notifications']) && $row['notifications'] == '2') echo 'checked="checked"'; ?>/></td></tr><tr><td>
      <input type="button" value="Submit" onclick="submitForm(this.form);" /></td></tr></table>
  </form></fieldset>

<?php
mysqli_close($dbc);
}
else{
?>
<script>
function submitForm(form){
	if (validateNonEmpty(form["name"], form["name_help"]) && validateEmail(form["email"], form["email_help"]) && validateNonEmpty(form["password1"], form["password1_help"]) && validateEqual(form["password1"], form["password2"],form["password2_help"])){
		signup(form["name"].value,form["email"].value,form["password1"].value);
	}else{
		alert("There is something wrong with the information.");
	}
}
function signup(name,email,password){
	$("#data").html("<img src='images/loading.gif'/>");
	var posting =$.post("data.php",{
		email:email,
		name:name,
		password:password
	});
	posting.done(function(data){
		$("#data").html(data);
	});
	posting.fail(function(){
	$("#data").html("<h5>Form submit failed.....</h5>");
	});
}
</script>
<h2>Sign Up</h2>
<fieldset>
<legend>Sign Up</legend>
<form>
<table><tr><td><label for="name">Full Name:</label></td><td>
<input type="text" id="name" name="name" onblur="validateNonEmpty(this, document.getElementById('name_help'))" /></td><td>
<span id="name_help" class="help"></span></td></tr>
<tr><td><label for="email">E-mail:</label></td><td>
<input type="text" id="email" name="email" onblur="validateEmail(this, document.getElementById('email_help'))" /></td><td>
<span id="email_help" class="help"></span></td></tr>
<tr><td>
<label for="password1">Password:</label></td><td>
<input type="password" id="password1" name="password1" onblur="validateNonEmpty(this, document.getElementById('password1_help'))" /></td><td>
<span id="password1_help" class="help"></span></td></tr><tr><td>
<label for="password2">Password(Retype):</label></td><td>
<input type="password" id="password2" name="password2" onblur="validateEqual(this, document.getElementById('password1'), document.getElementById('password2_help'))" /></td><td>
<span id="password2_help" class="help"></span></td></tr>
<tr><td><input type="button" value="Sign Up" onclick="submitForm(this.form);"/></td></tr>
</table></form>
</fieldset>
<?php
}}
}
else if (isset($_COOKIE['user_id']) && isset($_POST['gender']) && isset($_POST['birthdate']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['country']) && isset($_POST['notifications'])){
	include_once("data/settings.php");
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$notifications=mysqli_real_escape_string ( $dbc , $_POST['notifications'] );
	$gender = mysqli_real_escape_string( $dbc ,$_POST['gender']);
	$birthdate = mysqli_real_escape_string( $dbc ,$_POST['birthdate']);
	$city=mysqli_real_escape_string ( $dbc , $_POST['city'] );
	$state = mysqli_real_escape_string( $dbc ,$_POST['state']);
	$country = mysqli_real_escape_string( $dbc ,$_POST['country']);	
$query = "REPLACE INTO `users_info` (`user_id`, `gender`, `birthdate`, `city`, `state`, `country`, `notifications`)
VALUES ('".$_COOKIE['user_id']."', '$gender', '$birthdate', '$city', '$state', '$country','$notifications')";
if(mysqli_query($dbc, $query))
echo '<script>alert("Your profile is successfully updated");getData("l1");</script>';
else
echo '<h5>there is a problem updating your profile...</h5>';
mysqli_close($dbc);
}
else if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
	include_once("data/settings.php");
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$name=mysqli_real_escape_string ( $dbc , $_POST['name'] );
	$email = mysqli_real_escape_string( $dbc ,$_POST['email']);
	$password = mysqli_real_escape_string( $dbc ,$_POST['password']);
$query = "SELECT * FROM users WHERE email = '$email'";
$data = mysqli_query($dbc, $query);
if (mysqli_num_rows($data) == 0) {
$query = "INSERT INTO users (name,password, email, join_date) VALUES ('$name',MD5('$password'),'$email',NOW())";
if(mysqli_query($dbc, $query))
echo '<h5>Your new account has been successfully created...</h5>';
else
echo '<h5>there is a problem creating your account...</h5>';
mysqli_close($dbc);
}
else
echo '<h5>An account already associated with this email....</h5>';
}
else if (isset($_POST['msg']) && isset($_POST['email'])){
	include_once("data/settings.php");
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$msg=mysqli_real_escape_string ( $dbc , $_POST['msg'] );
	$email = mysqli_real_escape_string( $dbc ,$_POST['email']);
$query = "INSERT INTO `clazzyin_default`.`feedback` (`email`, `message`,`date`) VALUES ('$email','$msg' ,NOW())";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
if(mysqli_query($dbc,$query))
echo "<h5>Your Message has been sent.....</h5>";
mysqli_close($dbc);
}}
else if (isset($_POST['password']) && isset($_POST['email'])){
	include_once("data/settings.php");
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$email=mysqli_real_escape_string ($dbc , $_POST['email']);
	$password = mysqli_real_escape_string( $dbc ,$_POST['password']);
	$query = "SELECT user_id,name,email FROM users WHERE email = '$email' AND password = MD5('$password')";
	$data = mysqli_query($dbc, $query);
if (mysqli_num_rows($data) == 1){
$row = mysqli_fetch_array($data);
setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30), '/', '.tricksworld.net');    // expires in 30 days
setcookie('email', $row['email'], time() + (60 * 60 * 24 * 30), '/', '.tricksworld.net');    // expires in 30 days
setcookie('name',$row['name'], time() + (60 * 60 * 24 * 30), '/', '.tricksworld.net');   // expires in 30 days
echo '<script>alert("Login successful");updateLogin();getData("l2");</script>';
}
else {
echo '<h5>Sorry, you must enter a valid username and password to log in.</h5>';
}
mysqli_close($dbc);
}
?>