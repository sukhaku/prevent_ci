<?php 
foreach($news as $data_news){
	echo"<h2>$data_news->title</h2><br>";
	echo"<h5>$data_news->date_news </b> </h5><br><br>";
	echo"<p>$data_news->content_news</p>";
}

?>