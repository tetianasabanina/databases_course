<?php 	function soslow(int $nmbrin) {
		$start = microtime(true);
		$sum = 0;
		for ($i=0; $i<=nmbrin; $i++) {
			$sum += $i;
		};
		$time_elapsed_secs = microtime(true) - $start;
		$time = sprintf("%f", $time_elapsed_secs);
		return ('{"sum":"'.$sum.'","time":"'.$time.'"}');
	}

	function faster(int $tocount) {
		$start = microtime(true);
		$sum = 0;
		$hesu = ($tocount+1);
		$sum = ((intdiv($tocount,2))*$hesu) + (($tocount%2)*(intdiv($hesu,2)));
		$tim_elapsed_secs = microtime(true) - $start;
		$time = sprintf("%f", $time_elapsed_secs);
		return ('{"sum":"'.$sum.'","time":"'.$time.'"}');
    	}
	$in = 40000000;
	$jsonStr = '{"testing":{"input":"'.$in.'","output":[';
	echo $jsonStr;
	$jsonStr .= soslow($in);
	$jsonStr .= ',';
	$jsonStr .= faster($in);
	$jsonStr .= ']}}';
    echo $jsonStr;
?>