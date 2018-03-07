<?php
$query = $_POST['q'];
$str=file_get_content('https://newsapi.org/v2/top-headlines?apiKey=cd1db87dec794c2288c915ba6abeee94&country=in');
$json=json_decode($str,true);
//ini-set("allow_url_fopen",1);
//echo $query;
function searchjson($json,$article, $title){
	foreach($json as $item){
		
	}
}
}					