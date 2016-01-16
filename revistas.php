[insert_php]
$base="https://s3-eu-west-1.amazonaws.com/revistas/";
$num_rev=1;
echo'<table border="0">';
echo'<tbody>';
for($i=1;$i< $num_rev+1;$i++)
{
	$rev=(string)$i;	
	if(strlen($rev)==1) $rev="0".$rev;
	$lines = file($base.$rev."/info.txt");
	$nombre=$lines[0];
	$url=trim($lines[1]);
	array_splice($lines, 0, 2);
	$cant_rev=count($lines);
	$desc  = file($base.$rev."/desc.txt");
	$desc=$desc[0];
	$ult_publicacion=$lines[$cant_rev-1];
    echo'<tr>';
	echo '<td width="20%"><img src="'.$base.$rev.'/'.$cant_rev.'.jpg" alt="0" width="100px" height="120px" border="0" hspace="0" vspace="0" /></td>';
	echo'<td width="80%">';
	echo'<h1><a href="http://www.josedomingo.org/pledin/unarevista/?id=1 ">'.$nombre.'</a></h1>';
	echo'<a href="'.$url.'">Página Web</a><br />';
	echo $desc;
	echo '<strong>Última publicación:'.$ult_publicacion.'</strong></td>';
}
echo '</tbody></table>';


[/insert_php]