<?php

header("Content-Type: text/html; charset=utf-8");


if(!isset($_SESSION))
{
 session_start();
}

setlocale(LC_TIME, 'et_EE.UTF-8');
ini_set('display_errors', 1);
if (defined('E_DEPRECATED'))
{
 error_reporting(E_ALL & E_DEPRECATED & E_STRICT);
}
else
{
 error_reporting(E_ALL & ~E_STRICT);
}
date_default_timezone_set('Europe/Tallinn');


$firstPart = "esimene osa";
$secondPart = " ja teine osa";

 echo $firstPart . $secondPart; echo "<br /><br />";

echo 10 * "s�ne";    #jutum�rkide vahel on tulemus alati 0, v�lja arvatud, kui " " vahel on arv
echo "<br /><br />";   

echo (int) 0.25;  
echo "<br /><br />"; 

echo (int) 1.75;  
echo "<br /><br />";

echo "s�ne"; 
echo "<br /><br />";

echo "s�ne<br />kahel real"; # \n html-is ei kehti
echo "<br /><br />";

echo "s�ne<br />kolmel<br />real";
echo "<br /><br />";

echo 's�ne sees \'�lakoma\'';
echo "<br /><br />"; 

echo "<br /><br />";

print_r (PHP_INT_MAX); 
echo "<br /><br />";# saab echo asemel kasutada
var_dump (PHP_INT_MAX);
echo "<br /><br />";
echo 32.0;
echo "<br /><br />";

echo 2**64/2;
echo "<br /><br />";

echo pow(2,64)/2 - 1;
echo "<br /><br />";

$muutuja = 0;
$muutuja++; # suurendab muutujat �he v�rra ($muutuja = $muutuja + 1 ehk muutuja = 1)
echo "<br /><br />";

$muutuja2 = 5;
$muutuja == $muutuja2; # kas esimene muutuja on v�rdne teisega (siin mitte, ekraan seega t�hi)
$muutuja != $muutuja2; # kas esimene muutuja ei ole v�rdne teisega (peaks v�ljastama true)
$muutuja += 4; #liidab 4 muutujale;
echo "<br /><br />";

if($muutuja == $muutuja2)
{
 echo "44";
}
else {
 echo "47";
}
# exit;    # ei l�he edasi, j��b 78-nda rea peale
# die("l�pp");   #

echo "<br /><br />";

echo ($muutuja != $muutuja2) ? "44" : "47"; # sama, mis if v�rdlus, aga != ei v�rdu
echo "<br /><br />";
?>




<p>"Kas Teil on �hiseid "alaealisi" lapsi?"</p>
<?php 

echo "\"Kas Teil on �hiseid \"alaealisi\" lapsi?\""; 
echo "<br /><br />";

echo "Kas Teil on �hiseid \"alaealisi\" lapsi?";
echo "<br /><br />";

echo '\'Kas Teil on �hiseid \'alaealisi\' lapsi?\'';
echo "<br /><br />";

echo 'Kas Teil on �hiseid "alaealisi" lapsi?';
echo "<br /><br />";

$children = "\"alaealisi\"";
echo "\"Kas Teil on �hiseid $children lapsi?\"";
echo "<br /><br />";

$children = "alaealisi";
echo "Kas Teil on �hiseid $children lapsi?";
echo "<br /><br />";

$sentence = "Kas Teil on �hiseid \"alaealisi\" lapsi?";
echo print_r("<br />" . $sentence, true); # print_r t�rkib v�lja teksti sulgude seest, echo v�tab teise v��rtuse (1)
echo "<br /><br />";

#var-dump�iga saab anda �ksk�ik kui palju asju kaasa nagu echo�gagi


$songs = array(array("s�nad" => "meil", "esinemise arv" => "1"), array("s�nad" => "ma", "esinemise arv" => "1"), 
array("s�nad" => "lapsed", "esinemise arv" => "1"), array("s�nad" => "magama", "esinemise arv" => "1"), 
array("s�nad" => "tuppa", "esinemise arv" => "1"));
echo "<br /><br />";



$muutuja1 = "raha";
$muutuja2 = "Mul on alati {$muutuja1} puudu";
$muutuja3 ="{$muutuja2}, nagu k�igil!";
echo $muutuja3;


echo "<br /><br />";



echo "<br /><br />";



echo "<br /><br />";



echo "<br /><br />";

//ts�klid
$i = 0;      // vastus 0, 1, 2
while ($i<3)
{
	echo ('<br/>' . $i);
	$i++;
}
echo "<br /><br />";


$i = 0;     // vastus 0, 1, 2
do{
	echo('<br/>' . $i);
	$i++;
}
while ($i < 3);
echo "<br /><br />";




// Date - kuup�evad

echo '<br/>' . date("d.m.Y H:i:s");
echo "<br /><br />";

echo '<br/>' . date("omd");
echo "<br /><br />";

echo '<br/>' . date("m");
echo "<br /><br />";

echo '<br/>' . date("d");
echo "<br /><br />";

echo '<br/>' . date("H:i");
echo "<br /><br />";



$tekst = 'S��tuse eeldamine';
echo strlen($tekst);            //34
echo '<br>';
echo str_word_count($tekst);    //6


echo'<pre>'; var_dump(explode);
// explode

$sentence= "k�lmast tulest langes pime leek";
echo "<pre>"; var_dump(explode(" ", $sentence));
echo "<br /><br />";

$muutuja4 = explode(" ", $sentence);

echo $muutuja4[2] . " " . $muutuja4[1] . " " . $muutuja4[0] . " " . $muutuja4[4] . " " . $muutuja4[3];

echo "<br /><br />";


function rearraange ($parameters)
{
	$arrayOfrigin = explode(' ', $parameters['orgin']);
	$arrayOfResult[] = array ();
	foreach ($parameters ['newOeder'] as $order)
	{
		$arrayOfResult[] = $arrayOfOrign[$order];
	}
	echo ' 76 ', implode(' ', $arrayOfResult);
}
rearrange (array (
		"orign" => 'k�lmast tulest langes pime leek','
		"newOrder' => array (2, 1, 0, 4, 3)
));

if(statement) {
	echo '<button style="background: green;">BUTTON</button>';
} else {
	echo '<button style="background: red;">BUTTON</button>';
}