<?php
//clients POST & Email->Password

if(isset($_POST['submit1'])){
    $status=1;
    $name=$_POST['name'];  
    $email=$_POST['email'];  
    $mob_number=$_POST['mob_number'];  
    $select=$_POST['select'];

$from = 'Enquiry <snehal7039@gmail.com>' . "\r\n";
$sendTo = 'Enquiry <dkeshari094@gmail.com>';
$subject = 'Contact form';
// $fields = array( 'name' => 'name' );
$from = 'Vaishali Enterprise' . "\r\n";
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

<p>Dear '.$name.',</p>
<p>Thank you for your interest in Vaishali Enterprise. We will get back to you soon.</p>

</body>
</html>';

try{
foreach($_POST as $key => $value){
  if(isset($fields[$key])){
    $emailText.="$fields[$key]: $value\n";
  }
}
if( mail($sendTo,$subject,$emailText, "From:" .$from)){

    echo"submit";
 
}else{
  echo "eeee $sendTo $subject $emailText $from";
}
}
catch(\Exception $e){
echo "not done";
}


}
?>