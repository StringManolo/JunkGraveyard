<!DOCTYPE html>
<html>
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
<title>SMDFPHC</title>
</head>
<body>
  <?php
   function SMTaD($cipherText)
   {
   $cipherTextTam = strlen($cipherText);
   $cipherText = strtolower($cipherText);
   $diccionario = array('a','b','c','d','e','f','g','h','i','j','k','l',
'm','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C',
'D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S',
'T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','.',
':','/',' ');
   $diccionarioTam = count($diccionario);
   $cipherTextDec = [];


   $y = 0;
      for($i = 0; $i < $cipherTextTam; ++$i)
      {
         for($x = 0; $x < $diccionarioTam; ++$x)
         {
            if($cipherText[$i] == $diccionario[$x])
            {
            $cipherTextDec[$y] = 1+$x;
            ++$y;
            }

            else
            {
            
            }
         }
      }
   return $cipherTextDec;
   }

   function SMDpD($decimal1, $decimal2)
   {
    
   $diccionario = array('1','2','3','4','5','6','7','8','9',
'10','11','12','13','14','15','16','17','18','19','20','21',
'22','23','24','25','26','27','28','29','30','31','32','33',
'34','35','36','37','38','39','40','41','42','43','44','45',
'46','47','48','49','50','51','52','53','54','55','56','57',
'58','59','60','61','62','63','64','65','66','67','68','69');
   $diccionarioTam = count($diccionario);
   $decimal1Tam = count($decimal1);
   $decimal2Tam = count($decimal2);
   $cipherTextSum = [];

      $y = 0;
      for($i = 0; $i < $decimal1Tam; ++$i)
      {
         for($x = 0; $x < $diccionarioTam; ++$x)
         {
            if($decimal1[$i] == $diccionario[$x])
            {
            $cipherTextSum[$y] = $decimal1[$i] + $decimal2[$y];
            ++$y;
            }
         }
      }
   return $cipherTextSum;
   }

   function SMDaT($cipherText)
   {
   $cipherTextTam = count($cipherText);

   $diccionario = array('a','b','c','d','e','f','g','h','i','j','k','l',
'm','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C',
'D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S',
'T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','.',
':','/','-','!','@','^','&','*','+','=','<','>','{','}','[',']','€','%','?','_','|',
'a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s',
't','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L',
'M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z'); $diccionarioTam = count($diccionario);

   $diccionario2 = array('1','2','3','4','5','6','7','8','9',
'10','11','12','13','14','15','16','17','18','19','20','21',
'22','23','24','25','26','27','28','29','30','31','32','33',
'34','35','36','37','38','39','40','41','42','43','44','45',
'46','47','48','49','50','51','52','53','54','55','56','57',
'58','59','60','61','62','63','64','65','66','67','68','69',
'70','71','72','73','74','75','76','77','78','79','80','81',
'82','83','84','85','86','87','88','89','90','91','92','93',
'94','95','96','97','98','99','100','101','102','103',
'104','105','106','107','108','109','110','111','112',
'113','114','115','116','117','118','119','120','121',
'122','123','124','125','126','127','128','129','130',
'131','132','133','134','135','136','137','138','139'); 
   $diccionario2Tam = count($diccionario2);

   $cipherTextText = [];

$z=0; 
      for($i = 0; $i < $cipherTextTam; ++$i)
      {
         for($x =0; $x<$diccionarioTam; ++$x)
         {
            if($cipherText[$i] == $diccionario2[$x])
            {
            $cipherTextText[$z] = $diccionario[$x];
            ++$z;
            }
         }
      }
   return $cipherTextText;
   }


    $yourdomain = $_SERVER['HTTP_HOST'];
    $yourdomain = preg_replace('/^www\./' , '' , $yourdomain);
   
    $SMT_TimeStamp=gmdate("Y-m-d h:i:s",time()); 
    $SMT_IP=$_SERVER['REMOTE_ADDR'];
    $SMT_OrigenIP=$_SERVER['HTTP_X_FORWARDED_FOR'];
    $SMT_Referer=$_SERVER['HTTP_REFERER'];
    $SMT_UserAgent=$_SERVER['HTTP_USER_AGENT'];
    $SMT_HostCliente=$_SERVER['REMOTE_HOST'];
    $SMT_Cookie1=$_SERVER['HTTP_COOKIE'];
    $SMT_Cookie2=$_COOKIE;
    $SMT_Space=PHP_EOL; 

    $Contraseña = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
    $arrayContraseñaDec = SMTaD($Contraseña);
  
    $SMT_TimeStampDec = SMTaD($SMT_TimeStamp);
    $SMT_TimeStampSum = SMDpD($SMT_TimeStampDec, $arrayContraseñaDec);
    $SMT_TimeStampSum = SMDaT($SMT_TimeStampSum);


    $SMT_OrigenIPDec = SMTaD($SMT_OrigenIP);
    $SMT_OrigenIPSum = SMDpD($SMT_OrigenIPDec , $arrayContraseñaDec);
    $SMT_OrigenIPSum = SMDaT($SMT_OrigenIPSum);


    $SMT_IPDec = SMTaD($SMT_IP);
    $SMT_IPSum = SMDpD($SMT_IPDec , $arrayContraseñaDec);
    $SMT_IPSum = SMDaT($SMT_IPSum);


    $SMT_RefererDec = SMTaD($SMT_Referer);
    $SMT_RefererSum = SMDpD($SMT_RefererDec, $arrayContraseñaDec );
    $SMT_RefererSum = SMDaT($SMT_RefererSum);

    $UserAgentDec = SMTaD($SMT_UserAgent);
    $UserAgentSum = SMDpD($UserAgentDec, $arrayContraseñaDec);
    $UserAgentSum = SMDaT($UserAgentSum);

    $SMT_HostClienteDec = SMTaD($SMT_HostCliente);
    $SMT_HostClienteSum = SMDpD($SMT_HostClienteDec, $arrayContraseñaDec );
    $SMT_HostClienteSum = SMDaT($SMT_HostClienteSum);


    $SMT_Cookie1Dec = SMTaD($SMT_Cookie1);
    $SMT_Cookie1Sum = SMDpD($SMT_Cookie1Dec, $arrayContraseñaDec);
    $SMT_Cookie1Sum = SMDaT($SMT_Cookie1Sum);


    $SMT_Cookie2Dec = SMTaD($SMT_Cookie2);
    $SMT_Cookie2Sum = SMDpD($SMT_Cookie2Dec, $arrayContraseñaDec);
    $SMT_Cookie2Sum = SMDaT($SMT_Cookie2Sum);


   file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND); file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND); 
    file_put_contents("txt/SMBD.txt", $SMT_TimeStampSum, FILE_APPEND); 
     file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND); file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND);
    file_put_contents("txt/SMBD.txt", $SMT_IPSum, FILE_APPEND);
   file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND); file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND);
    file_put_contents("txt/SMBD.txt", $SMT_OrigenIPSum, FILE_APPEND);
   file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND); file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND);
    file_put_contents("txt/SMBD.txt", $SMT_RefererSum, FILE_APPEND); 
   file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND); file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND);
    file_put_contents("txt/SMBD.txt", $UserAgentSum, FILE_APPEND);
   file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND); file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND);
    file_put_contents("txt/SMBD.txt", $SMT_HostClienteSum, FILE_APPEND);
   file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND); file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND);
    file_put_contents("txt/SMBD.txt", $SMT_Cookie1Sum, FILE_APPEND);
   file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND); file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND);
    file_put_contents("txt/SMBD.txt", $SMT_Cookie2Sum, FILE_APPEND);
   file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND); file_put_contents("txt/SMBD.txt", $SMT_Space, FILE_APPEND); 


  ?>

<div id="FingerPrint">
<p><h3>Your Info:</h3></p>
<p>
  <?php
foreach($UserAgentDec as $value)
{
echo "$value" ;
}
echo "$SMT_TimeStamp" ;
echo "<br>" ;
foreach($UserAgentSum as $value)
{
echo "$value" ;
}
echo "$SMT_HostClienteSum" ;
echo "<br>" ;
echo "$SMT_IPSum" ;
echo "<br>" ;
echo "$SMT_Cookie1Sum" ;
echo "<br>" ;
echo "$SMT_OrigenIPSum" ;
echo "<br>" ;
echo "$SMT_Cookie2Sum" ;
echo "<br>" ;
echo "$SMT_RefererSum" ;
echo "<br>" ;
echo "$SMT_UserAgentSum" ;
   ?>
</p>
</div>
</body>
</html>
