<html>
<form method="post" action="//#" onSubmit="return validateForm();">
<div style="width: 400px;">
</div>
<div style="padding-bottom: 18px;font-size : 24px;">Hotel Reservation</div>
<div style="display: flex; padding-bottom: 18px;width : 450px;">
<div style=" margin-left : 0; margin-right : 1%; width : 49%;">First name<span style="color: red;"> *</span><br/>
<input type="text" id="fname" name="fname" style="width: 100%;" class="form-control"/>
</div>
<div style=" margin-left : 1%; margin-right : 0; width : 49%;">Last name<span style="color: red;"> *</span><br/>
<input type="text" id="lname" name="lname" style="width: 100%;" class="form-control"/>
</div>
</div><div style="padding-bottom: 18px;">Phone<span style="color: red;"> *</span><br/>
<input type="text" id="phone" name="phone" style="width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Email<span style="color: red;"> *</span><br/>
<input type="text" id="email" name="email" style="width : 450px;" class="form-control"/>
</div>
<script type="text/javascript">new Pikaday({ field: document.getElementById('ddate') });</script>
<div style="padding-bottom: 18px;">Arrival date<span style="color: red;"> *</span><br/>
<input type="text" id="adate" name="adate" style="width : 250px;" class="form-control"/>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/pikaday.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/css/pikaday.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">new Pikaday({ field: document.getElementById('ddate') });</script>
<div style="padding-bottom: 18px;">Departure date<span style="color: red;"> *</span><br/>
<input type="text" id="ddate" name="ddate" style="width : 250px;" class="form-control"/>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/pikaday.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/css/pikaday.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">new Pikaday({ field: document.getElementById('data_7') });</script>
<div style="padding-bottom: 18px;">Number of adults<span style="color: red;"> *</span><br/>
<input type="number" id="adults" name="adults" style="width : 250px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Number of children<br/>
<input type="number" id="child" name="child" style="width : 250px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Questions / Comments<br/>
<textarea id="question" false name="question" style="width : 450px;" rows="6" class="form-control"></textarea>
</div>
<div style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/>
<a href="./roomd.php"></a></div>
<div>
<script src="./roomd.php" type="text/javascript"></script>
</div>
</form>

<script type="text/javascript">
function validateForm() {
if (isEmpty(document.getElementById('fname').value.trim())) {
alert('First name is required!');
return false;
}
if (isEmpty(document.getElementById('lname').value.trim())) {
alert('Last name is required!');
return false;
}
if (isEmpty(document.getElementById('phone').value.trim())) {
alert('Phone is required!');
return false;
}
if (isEmpty(document.getElementById('email').value.trim())) {
alert('Email is required!');
return false;
}
if (!validateEmail(document.getElementById('email').value.trim())) {
alert('Email must be a valid email address!');
return false;
}
if (isEmpty(document.getElementById('adate').value.trim())) {
alert('Arrival date is required!');
return false;
}
if (isEmpty(document.getElementById('ddate').value.trim())) {
alert('Departure date is required!');
return false;
}
if (isEmpty(document.getElementById('child').value.trim())) {
alert('Number of adults is required!');
return false;
}
return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }
function validateEmail(email) {
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
return isEmpty(email) || re.test(email);
}
</script>

</html>

