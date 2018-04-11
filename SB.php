<?php
ini_set('memory_limit', '1024M');
ini_set('default_socket_timeout', 1800);

function geiwoxia($durl) {
        $sfilename = basename($durl);
        file_put_contents('./temp/'.$sfilename, file_get_contents($durl));
}

if (isset($_POST['link'])) {
        $POSTurl = $_POST['link'];
        geiwoxia($POSTurl);
}

?>

<form method="POST">
  <input type="text" name="link">
  <button type="submit">给我下</button>
</form>
<p>File save to temp folder.</p>
