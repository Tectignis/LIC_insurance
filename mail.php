<?php
//clients Password

if(isset($_POST['submit1'])){
    $status=1;
    $name=$_POST['name'];  
    $email=$_POST['email'];  
    $mob_number=$_POST['mob_number'];  
    $select=$_POST['select'];


$from = 'Enquiry <'.$email.'>' . "\r\n";
$sendTo = 'Enquiry <yadavpriya1425@gmail.com>';
$subject = 'quote Form Submission';
// $fields = array( 'name' => 'name' );
$from = 'Vaishali Enterprises: 1.0' . "\r\n";
$from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$emailText = '
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="x-apple-disable-message-reformatting"> 
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
  <style>
      html,
body {
  margin: 0 auto !important;
  padding: 0 !important;
  height: 100% !important;
  width: 100% !important;
  background: #f1f1f1;
}
* {
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
  </style>
</head>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
<div style="margin:50px auto;width:70%;padding:20px 0">
<p style="font-size:1.1em">'.$name.'</p>
<p style="font-size:1.1em">'.$email.'</p>
<p style="font-size:1.1em">'.$mob_number.'</p>
<p style="font-size:1.1em">'.$select.'</p>
<h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;"></h2>
<p style="font-size:0.9em;">Regards,<br />Your Brand</p>
<hr style="border:none;border-top:1px solid #eee" />
<div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">

</div>
</div>
</div>
</body>
</html>';

try{
foreach($_POST as $key => $value){
  if(isset($fields[$key])){
    $emailText.="$fields[$key]: $value\n";
  }
}
if( mail($sendTo,$subject,$emailText, "From:" .$from)){
   header('Location: index.php');
 
}else{
  echo "eeee $sendTo $subject $emailText $from";
}
}
catch(\Exception $e){
echo "not done";
}

}
?>

<?php
//clients Password

if(isset($_POST['submitt'])){
    $status=1;
    $name=$_POST['name'];  
    $email=$_POST['email'];  
    $phone=$_POST['phone'];  
    $subject=$_POST['subject'];
    $message=$_POST['message'];

$from = 'Enquiry <'.$email.'>' . "\r\n";
$sendTo = 'Enquiry <yadavpriya1425@gmail.com>';
$subject = 'Contact Form Submission';
// $fields = array( 'name' => 'name' );
$from = 'Vaishali Enterprises: 1.0' . "\r\n";
$from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$emailText = '
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="x-apple-disable-message-reformatting"> 
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
  <style>
      html,
body {
  margin: 0 auto !important;
  padding: 0 !important;
  height: 100% !important;
  width: 100% !important;
  background: #f1f1f1;
}
* {
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
  </style>
</head>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
<div style="margin:50px auto;width:70%;padding:20px 0">
<p style="font-size:1.1em">'.$name.'</p>
<p style="font-size:1.1em">'.$email.'</p>
<p style="font-size:1.1em">'.$phone.'</p>
<p style="font-size:1.1em">'.$subject.'</p>
<p style="font-size:1.1em">'.$message.'</p>

<h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;"></h2>
<p style="font-size:0.9em;">Regards,<br />Your Brand</p>
<hr style="border:none;border-top:1px solid #eee" />
<div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">

</div>
</div>
</div>
</body>
</html>';

try{
foreach($_POST as $key => $value){
  if(isset($fields[$key])){
    $emailText.="$fields[$key]: $value\n";
  }
}
if( mail($sendTo,$subject,$emailText, "From:" .$from)){
   header('Location: index.php');
 
}else{
  echo "eeee $sendTo $subject $emailText $from";
}
}
catch(\Exception $e){
echo "not done";
}


}
?>