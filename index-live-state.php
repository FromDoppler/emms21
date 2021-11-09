<?php
require_once("config.php");
include("db.php");
$db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
$settings = $db->query('SELECT * FROM settings ORDER BY id DESC LIMIT 1')->fetchArray();
if (trim($settings['youtube']) !== "") {
	$src_video = "https://www.youtube.com/embed/" . $settings['youtube'] . "?autoplay=1&mute=1";
	$src_chat = "https://www.youtube.com/live_chat?v=" . $settings['youtube'] . "&embed_domain=" . DOMAIN_IFRAME_CHAT;
	$title = "YouTube video player";
} else {
	$src_video = "https://player.twitch.tv/?channel=" . $settings['twitch'] . "&parent=" . DOMAIN_IFRAME_CHAT;
	$src_chat = "https://www.twitch.tv/embed/" . $settings['twitch'] . "/chat?parent=" . DOMAIN_IFRAME_CHAT;
	$title = "Twitch video player";
}
?>
<div id="live-state" class="live-state">
	<div class="dp-container-fluid" id="header">
		<div class="dp-container">
			<div class="dp-rowflex">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="live-container">
						<span class="live-icon-container"><img src="app/<?= VERSION ?>/img/liveIcon.png" alt="En vivo" class="live-icon"> EN VIVO </span>

						<iframe width="100%" height="100%" src="<?= $src_video ?>" title="<?= $title ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="chat">
						<iframe id="chat_embed" src="<?= $src_chat ?>"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>