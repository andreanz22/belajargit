<!DOCTYPE html>
<html>
<head>
<title>Simple JavaScript Captcha Example</title>
<script type="text/javascript">
/* Function to Generat Captcha */
function GenerateCaptcha() {
var chr1 = Math.ceil(Math.random() * 10)+ '';
var chr2 = Math.ceil(Math.random() * 10)+ '';
var chr3 = Math.ceil(Math.random() * 10)+ '';
var chr4 = Math.ceil(Math.random() * 10)+ '';
var chr5 = Math.ceil(Math.random() * 10)+ '';
var chr6 = Math.ceil(Math.random() * 10)+ '';
var chr7 = Math.ceil(Math.random() * 110)+ '';
 
var captchaCode = chr1 + ' ' + chr2 + ' ' + chr3 + ' ' + chr4 + ' ' + chr5 + ' '+ chr6 + ' ' + chr7;
document.getElementById("txtCaptcha").value = captchaCode
}
 
/* Validating Captcha Function */
function ValidCaptcha() {
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('txtCompare').value);
 
if (str1 == str2) return true;
return false;
}
 
/* Remove spaces from Captcha Code */
function removeSpaces(string) {
return string.split(' ').join('');
}
</script>
 
</head>
<body onload="GenerateCaptcha();">
<h2>Generating Captcha Demo</h2>
<input type="text" id="txtCaptcha" style="text-align: center; border: none; font-weight: bold; font-family: Modern" />
<input type="button" id="btnrefresh" value="Refresh" onclick="GenerateCaptcha();" />
<input type="text" id="txtCompare" />
<input id="btnValid" type="button" value="Check" onclick="alert(ValidCaptcha());" />
</body>
</html>
