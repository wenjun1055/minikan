<?php
include dirname(__FILE__).'/../init.php';

$spider = new spiderService();
$spider->updateEpisodeVideo("where vtype=3 and   epsign <>2 ");
?>
