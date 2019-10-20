<!DOCTYPE html>
<html>
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
<!-- Para Dispositivos Android.
To Android Devices. 
--!>
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
            /*Caracter no está en el diccionario
            Do something here if char is not found inside array*/
            }
         }
      }
   return $cipherTextDec;
   }
/*StringManolo Texto a Decimal(SMTaD)
Esta función toma como argumento un
string $cipherText. 

StringManolo Text to Decimal(SMTaD)
This function takes as argument a 
$cipherText string.


*Se recorre todo el string y se compara cada
caracter con los caracteres que contiene el diccionario.

*The entire string is traversed and every
character is compared one-by-one with the characters that 
the dictionary contains.


*En el caso de que el caracter a comprobar del
$cipherText coincida con alguno de los caracteres
del diccionario, se añade a un array la posición de
ese caracter+1 (alfabéticamente) en el diccionario.

*In the case that the character to check from
$cipherText matches any of the characters
from the dictionary, it's appended to a new array the position of
that character+1 (alphabetically) in the dictionary.


*Finalmente se retorna este array que hace referencia
al orden alfabético de cada caracter.

*At last, the array holding each number related to the
alfabetic position is returned.

*EJEMPLO:
-Si $cipherText contiene la frase "Me van a cifrar".

1) -Se busca el caracter M en el diccionario.

-La letra 'M' ocupa la posición 40 en el diccionario.

-En el array diccionario 'M' en realidad corresponde al
índice 39. Debido a que el array utiliza el 0 como
primer índice y no el 1. Debido a esto se suma +1 para
obtener 40.

-Si no se encuentra 'M' en el diccionario o si
ya se añadio el numero 40 se pasa a la siguiente letra.

2) Se repite el proceso anterior para la letra 'e'.

3) El resultado final de pasar el string "Me van a cifrar"
seria el mismo que al hacer:
$TextoEnDecimal = array('40','5','68','23','1','14','68','1','68','3','9','6','19','1','19');
Hace referencia a: array('M','e',' ','v','a','n',' ','a',' ','c','i','f','r','a','r');

*EXAMPLE:
-If $cipherText hold "Me van a cifrar".

1) -The function search for the M character inside the dicctionary.

-The 'M' character is found at possition number 40 at the dicctionary.

-By alfabetic order, 'M' it's actually found at possition number 39 but we add
+1 to it because array index start at 0. (a = 0)

-When 'M' character is not found inside the dicctionary (array)
or if we already finished to get it's possition, we go to next character.

2)-We keep on it char by char until finish.

3)- The end result of the string "Me van a cifrar" returns an array as we do:
$TextoEnDecimal = array('40','5','68','23','1','14','68','1','68','3','9','6','19','1','19');
It's actually the alfabetic order from('M','e',' ','v','a','n',' ','a',' ','c','i','f','r','a','r');

*I'm using strToLower to get the lowercase version of the string.
I think you don't need to. Check it well just in case to be sure if you remove the line.

*Make sure you got all the characters from the texto to cipher at the dicctionary.
You can make a function in order to get each character and make a custom
dicctionary from them. By doing that you make sure you're not checking characters
what never will be inside your string.
Usefull for example if you're working at base64 don't search for characters like:':','.'

*This function is usefull to apply maths to characters.

*/



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
/*StringManolo Decimal plus Decimal(SMDpD)
StringManolo Decimal + Decimal. 
Esta función toma como argumentos 2 arrays
que contienen numeros y los suma.

*This function take 2 arrays holding numbers as arguments and 
return an array holding the addition of both of them.


Ejemplo: //Example:
$Saludo = "Hola"; 
$Contraseña = "ceaf";

$Saludo = SMTaD($Saludo);
$Contraseña = SMTaD($Contraseña);

$SaludoCifrado = SMDpD($Saludo, $Contraseña);

$SaludoCifrado = SMDaT($SaludoCifrado);

Sucede lo siguiente: 
SMTaD($Saludo); devuelve el array 8,16,12,1
SMTaD($Contraseña); devuelve el array 3,5,1,6
SMDpD($Saludo, $Contraseña); devuelve el array 11,21,13,7

La siguiente función SMDaT($array); utiliza un diccionario para
convertir los decimales a texto.

SMDaT($SaludoCifrado); devuelve el array k,t,m,g

Puedes usar:
Un diccionario de 27 caracteres (a-z) y usar el operador módulo
o restar el tamaño del diccionario. En este caso a+z seria 28.
28-27 es 1.
1 es igual a 'a'.

Un diccionario de 54 caracteres (a-Z).
Un diccionario de 64 caracteres (a-9).

O un diccionario que contemple las máximas posibilidades.
En caso de solo operar con minúsuculas tanto en la clave
como en la contraseña (a-z) tendrías un valor máximo posible
de z+z (27+27). Es decir, puedes representar todos
los resultados en un diccionario de 54 caracteres.
Por ejemplo (a-Z). Así z+a = 28. que sería 'A'.
Esta última opción puede ser menos o más segura criptográficamente.
Pero sigue siendo irrompible si se siguen todas las pautas.
Ya que 'A' puede ser a+z, b+y, c+x, d+w, e+v, f+u ...
En conclusión 'A' puede ser cualquier letra del abecedario
en conjunto con otra letra opuesta (en relación con su orden alfabético).
Es difícil analizar que método es mejor.
Teoricamente ninguno da información relevante en el supuesto de 
utilizar una clave aleatoria y cifrando por transposición el texto.

Debido a que la seguridad del cifrado se basa en el desconocimiento de la clave
por parte del atacante, recomiendo utilizar la propia clave para aplicar transposición
al texto que se va a cifrar, o al propio resultado del cifrado.
Siguiendo el ejemplo anterior:
texto -> h o l a
contraseña -> c e a f 
resultado -> k t m g

Puedes utilizar el propio orden alfabético de la clave para reordenar el resultado:
c e a f -> 1c=2, 2e=3, 3a=1, 4f=4
k t m g -> 1k pos2, 2t pos3, 3m pos1, 4g pos4
resultado -> m k t g

*Esta funcion puede ser utilizada sin modificaciones para cifrar utilizando varios
cifrados comunes.
Por ejemplo para cifrar con cifrado Cesar introduce como clave la letra
que corresponda alfabéticamente al numero de vueltas.
$Saludo = "Hola";
$Contraseña = "bbbb";
$Saludo = SMTaD($Saludo);
$Contraseña = SMTaD($Contraseña);
$SaludoCifrado = SMDpD($Saludo, $Contraseña);
$SaludoCifrado = SMDaT($SaludoCifrado);
El resultado de cifrar hola con bbbb es j q n c.

Para cifrar con vigenere:
$Saludo = "Hola";
$Contraseña = "abcd";
$Saludo = SMTaD($Saludo);
$Contraseña = SMTaD($Contraseña);
$SaludoCifrado = SMDpD($Saludo, $Contraseña);
$SaludoCifrado = SMDaT($SaludoCifrado);
El resultado de cifrar hola con abcd es iqñe
en el diccionario incluí la ñ. Si la eliminas el
resultado seria el mismo que en el diccionario
inglés de uso común resultado -> iqoe.
Se obtiene el mismo resultado que cifrando hola
con vigenere y la clave bcde.
Con un par de modificaciones se puede conseguir el
mismo resultado.

Si quieres imprimir el contenido del array puedes usar:
foreach($SaludoCifrado as $value)
{
echo "$value" ;
}

Y para imprimirlo en un documento de texto:
file_put_contents("carpeta/resultado.txt", $SaludoCifrado, FILE_APPEND); 
 
*/


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
   
    $SMT_TimeStamp=gmdate("Y-m-d h:i:s",time()); /*Date*/
    $SMT_IP=$_SERVER['REMOTE_ADDR'];/*Client IP */
    $SMT_OrigenIP=$_SERVER['HTTP_X_FORWARDED_FOR'];/*Original IP if using Non-Transparent Proxy*/
    $SMT_Referer=$_SERVER['HTTP_REFERER'];/*Redirected from url*/
    $SMT_UserAgent=$_SERVER['HTTP_USER_AGENT'];/*User-Agent (Browser/Client identificator like: Mozilla...*/
    $SMT_HostCliente=$_SERVER['REMOTE_HOST'];/*If request is made from an IP accesible from HTTP return hostname*/
    $SMT_Cookie1=$_SERVER['HTTP_COOKIE'];/*Get the cookie issued from your site*/
    $SMT_Cookie2=$_COOKIE;/*Just for compaitibility*/
    $SMT_Space=PHP_EOL; /*.txt breakline*/

    $Contraseña = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
  /*The password you use to cipher. Chose a big random one (always bigger than string what's going to be cipher).*/

    $arrayContraseñaDec = SMTaD($Contraseña);
  /*Get an array holding the password as decimal numbers. a=1, b=2 ... */

    $SMT_TimeStampDec = SMTaD($SMT_TimeStamp);
  /*Get an array holding the Time Stamp as decimal numbers.*/
    $SMT_TimeStampSum = SMDpD($SMT_TimeStampDec, $arrayContraseñaDec);
  /*Addition from Time Stamp + Password set. Return a decimal array holding the values.*/
    $SMT_TimeStampSum = SMDaT($SMT_TimeStampSum);
  /*Decimal array to characteres*/

/*Example of what is going on:
$Contraseña ="abdgha" //example of password
$SMT_TimeStamp = "oct 20" //example of TimeStamp

$arrayContraseñaDec = SMTaD($Contraseña);
a=1, b=2, d=4, g=6 ...
array returned -> 1,2,4,6,7,1

$SMT_TimeStampDec = SMTaD($SMT_TimeStamp);
o=16, c=3, t=21 ...
array returned -> 16,3,21,65,56,64 

$SMT_TimeStampSum = SMDpD($SMT_TimeStampDec, $arrayContraseñaDec);
array returned -> 17,5,25,71,63,65

$SMT_TimeStampSum = SMDaT($SMT_TimeStampSum);
array returned -> p,e,x,^,9,.

"pex^9" is the TimeStamp "oct 20" ciphered using the password "abdgha".
*/

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


/*Append to the file SMBD.txt the returned ciphered strings:*/
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

/*Code Work-In-Progress. It's working, but needs some tweaking by the developer. I will automatice the tweaking and improve the security of the cipher.*/

  ?>

<div id="FingerPrint">
<p><h3>Your Info:</h3></p>
<p>
  <?php
/*This is just an example of outputs:*/
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
