<!-- Google Tag Manager -->
<script>
	(function(w, d, s, l, i) {
		w[l] = w[l] || [];
		w[l].push({
			'gtm.start': new Date().getTime(),
			event: 'gtm.js'
		});
		var f = d.getElementsByTagName(s)[0],
			j = d.createElement(s),
			dl = l != 'dataLayer' ? '&l=' + l : '';
		j.async = true;
		j.src =
			'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
		f.parentNode.insertBefore(j, f);
	})(window, document, 'script', 'dataLayer', 'GTM-M768WZR');
</script>
<!-- End Google Tag Manager -->

<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png?version=<?= VERSION ?>">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png?version=<?= VERSION ?>">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png?version=<?= VERSION ?>">


<link rel="stylesheet" type="text/css" href="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/css/styles.css?version=<?= VERSION ?>">
<link href="app/<?= VERSION ?>/css/libs/intl-tel-input/intlTelInput.min.css?version=<?= VERSION ?>" rel="stylesheet" media="all">
<link href="app/<?= VERSION ?>/css/libs/intl-tel-input/intlTellInput.css?version=<?= VERSION ?>" rel="stylesheet" media="all">
<link rel="stylesheet" type="text/css" href="app/<?= VERSION ?>/css/styles.css?version=<?= VERSION ?>">
<link rel="stylesheet" type="text/css" href="app/<?= VERSION ?>/css/post.css?version=<?= VERSION ?>">
<link rel="preload" as="font" href="https://use.typekit.net/fbq8dbp.css?version=<?= VERSION ?>">
<?php if (PRODUCTION) { ?>
	<!-- El aviso de consentimiento de cookies de OneTrust comienza para goemms.com. -->
	<script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="02d37671-cb77-4e6a-804f-9955eb1f7c97"></script>
	<script type="text/javascript">
		function OptanonWrapper() {}
	</script>
	<!-- El aviso de consentimiento de cookies de OneTrust finaliza para goemms.com. -->
<?php } else { ?>
	<!-- El aviso de consentimiento de cookies de OneTrust comienza para goemms.com. -->
	<script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="02d37671-cb77-4e6a-804f-9955eb1f7c97-test"></script>
	<script type="text/javascript">
		function OptanonWrapper() {}
	</script>
	<!-- El aviso de consentimiento de cookies de OneTrust finaliza para goemms.com. -->
<?php  } ?>