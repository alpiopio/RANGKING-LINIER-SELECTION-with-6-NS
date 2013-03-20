<?php
for ($i=0;$i<10;$i++){/*random nilai individu*/
  $cromosom[($i+1)] = round(mt_rand(0,15),2);
}
echo "<b>nilai populasi = ".implode(',',$cromosom)."</b><br>";/*menampilkan nilai individu*/
echo "<br><b>POPULASI</b>";
for ($i=0;$i<10;$i++){/*menampilkan nilai individu menurun*/
	echo "<br>individu[".($i+1)."] pada index ke-".($i+1)." dengan nilai = ".$cromosom[($i+1)];
}
$x = 1;
echo "<br><br><b>FITNES</b>";
foreach($cromosom as $fitness){
	$in = $x++;
	$final_fitness = (15*$fitness)-pow($fitness,2);
	$array_fitness[$in] = (15*$fitness)-pow($fitness,2);
	echo "<br>individu[".$in."] pada index ke-".$in." dengan fitness = ".$final_fitness;
}
$randommember = array_rand($array_fitness,6);/*random member turnamen*/
for ($i=0;$i<6;$i++){
	$member[] = $array_fitness[$randommember[$i]];/*mengambil member turnamen ke array*/
}
for( $i = 0; $i < 6; $i++ ){
		for( $j = 0; $j < 6; $j++ ){
			if($member[$i]<$member[$j]){
				$temp = $member[$i];
				$member[$i] = $member[$j];
				$member[$j] = $temp;
			}
		}
}
echo "<br><br><b>MEMBER TERPILIH SETELAH DIURUTKAN</b>";
foreach($member as $key=>$value){
	echo "<br>individu ke-".$key." dengan nilai = ".$value;
}
echo "<br>";
$s = rand(1,20)/10;
for( $i = 0; $i < 6; $i++ ){
	$Qs = ((2-$s)/10)+((2*($i)*($s-1))/(10*(10-1)));
	echo "<br>Qs.proporsional = ".$Qs;
}
?>
