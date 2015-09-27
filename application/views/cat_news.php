<?php
foreach($cat as $data_cat_news){
	echo"<h2><a href=".site_url()."main/news/$data_cat_news->id_news>$data_cat_news->title</a></h2><br>";
	echo"<h5>$data_cat_news->date_news</h5><br><br>";
	echo"<p>".substr($data_cat_news->content_news, 0,20)."..<a href=".site_url()."main/news/$data_cat_news->id_news>Readmore</></p><hr>";
}

?>