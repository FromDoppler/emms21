<?php
require_once("config.php");
include("db.php");
$db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
$settings = $db->query('SELECT * FROM settings ORDER BY id DESC LIMIT 1')->fetchArray();
?>
<div id="live-state" class="live-state">
	<div class="dp-container-fluid" id="header">
		<div class="dp-container">
			<div class="dp-rowflex">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="live-container">
						<span class="live-icon-container"><img src="app/1.0.0/img/liveIcon.png" alt="En vivo" class="live-icon"> EN VIVO </span>
						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?= $settings['youtube'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="chat">
						<iframe src="https://www.youtube.com/live_chat?v=<?= $settings['youtube'] ?>&embed_domain=<?= DOMAIN_IFRAME_CHAT ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>