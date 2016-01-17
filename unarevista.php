[insert_php]
$base="https://dl.dropboxusercontent.com/u/50678558/Revistas/";
$d=$_GET["id"];
$rev=(string)$d;
if(strlen($rev)==1) $rev="0".$rev;
$lines = file($base.$rev."/info.txt");
echo '<h1><a href="http://www.josedomingo.org/pledin/revistas">Revistas Informáticas</a></h1>';
echo '<h2>'.$lines[0].'</h2>';
echo '<a href="'.trim($lines[1]).'">Página web</a>';
array_splice($lines, 0, 2);
$lines=array_reverse($lines);
$cont2=1;

echo '<table width="100%" border="0"><tbody>';
echo '<tr>';
foreach ($lines as $line_num => $line) { 
	$dimg=$base.$rev.'/'.(count($lines)-$cont2+1).'.jpg';  
	$dnum=$base.$rev.'/'.(count($lines)-$cont2+1).'.pdf'; 
	echo '<td width="25%" valign="top"><a href="'.$dnum.'"><img src="'.$dimg.'" alt="'.$cont.'" width="100px" height="150px" border="0" hspace="0" vspace="0" /></a><br />'.$line.'<br /> <br /></td>';
	if($cont2%4==0) echo '</tr><tr>'; 
	$cont2++;
}
echo '</tr></tbody></table>';

[/insert_php]
