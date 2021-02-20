<!DOCTYPE html>
<html>
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
<title>SMGSC</title>
<link href="css/prism.css" rel="stylesheet" />
</head>
<body>
  <? 
    $yourdomain = $_SERVER['HTTP_HOST'];
    $yourdomain = preg_replace('/^www\./' , '' , $yourdomain);
    $data = file_get_contents("https://www.google.com/");
    $SC = "<pre><code class='language-html'><xmp>".$data."</xmp></code></pre>" ;
    $links = "1. ";
    $dataTam = strlen($data);
    $dataP = strtolower($data);

    for ($i = 0; $i < $dataTam; ++$i)
    {
        if ($dataP[$i] == 'h' && $dataP[1+$i] == 't' && $dataP[2+$i] == 't' && $dataP[3+$i] == 'p' && $dataP[4+$i] == ':' && $dataP[5+$i] == '/' && $dataP[6+$i] == '/' )
        {
            while ($dataP[$i] != '>'  && $dataP[$i] != '"')
            {
             $links=$links.$dataP[$i]; 
            ++$i;
             } 
        $links=$links.'<br><br>';
        }

        if ($dataP[$i] == 'h' && $dataP[1+$i] == 't' && $dataP[2+$i] == 't' && $dataP[3+$i] == 'p' && $dataP[4+$i] == 's' && $dataP[5+$i] == ':' && $dataP[6+$i] == '/' && $dataP[7+$i] == '/')
        {
            while ($dataP[$i] != '>'  && $dataP[$i] != '"')
            {
             $links=$links.$dataP[$i]; 
            ++$i;
             } 
        $links=$links.'<br><br>';
        }

        if ($dataP[$i] == 'w' && $dataP[1+$i] == 'w' && $dataP[2+$i] == 'w' && $dataP[3+$i] == '.')
        {
            while ($dataP[$i] != '>'  && $dataP[$i] != '"')
            {
             $links=$links.$dataP[$i]; 
            ++$i;
             } 
        $links=$links.'<br><br>';
        }
    } 

   ?>

<div id="mid">
<p>
Date: 
<?php 
echo gmdate ("M d Y H:i:s",time());
?>
</p>
<h3>Source Code from https://www.google.com/:</h3> 
<p>
<?php
echo "$SC" ;
?>
</p>
</div>
<a href="php/download.php">Download Source Code!</a>
<p>
<h4>Links</h4>
<?php
echo "$links" ;
?>
</p>
<script src="js/prism.js"></script>
</body>
</html>
