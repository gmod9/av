<?php
if (isset($_GET['a']) AND $_GET['a'] == "kv" AND isset($_GET['s']) AND isset($_GET['vnum'])){
    header("Content-Type: text/plain");
    if (intval($_GET['vnum']) AND intval(substr($_GET['s'],10)) AND file_exists("./av/avatars/" . substr($_GET['s'],10) . ".jpg")){
        echo '-go-
"Player Info"
{
"Avatar" "' . substr($_GET['s'],10) . '"
"vnum" "' . $_GET['vnum'] .'"
}

';
}
else{
    echo 'none';
}
} else {
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/av/');
	exit;


}

?>