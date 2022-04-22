<?php
	$nilai=70;

	if($nilai >0 and $nilai < 70 ) //syarat1 : nilai lebih dari atau saa dengan 0 dan nilai kurang dari 70
	{
		echo "kurang";
		//hasil yang memeuhi syarat1
	}
	elseif($nilai>=70 and $nilai <80) //syarat2 : nilai lebih dari atauu sama dengan 30 dan nilai kurang dari 50
	{
		echo "cukup";
		//hasil tidak memenuhi syarat2
	}
	elseif($nilai>=80 and $nilai <= 100) //syarat3 : nilai lebih dari atauu sama dengan 80 dan nilai kurang dari 100
	{
		echo "baik";
		//hasil ang memenuhi syarat3
	}
	else
	{
		echo "sangat baik";
		//hasil yang memenuhi syarat
	}
	
?>