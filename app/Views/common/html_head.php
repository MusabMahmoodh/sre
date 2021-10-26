<?php
$GLOBALS["page_start_at"]=time();
$GLOBALS["ga_id"] = 'G-FMV6D43RVR';
?><meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="Venera CMS, Common solution for a company" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Venera</title>

<link rel="icon" href="<?php echo base_url("/favicon.ico"); ?>" type="image/x-icon">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url("/theme/oct/img/favicon/apple-touch-icon.png"); ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url("/theme/oct/img/favicon/favicon-32x32.png"); ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("/theme/oct/img/favicon/favicon-16x16.png"); ?>">
<link rel="manifest" href="<?php echo base_url("/theme/oct/img/favicon/manifest.json"); ?>">
<link rel="mask-icon" href="<?php echo base_url("/theme/oct/img/favicon/safari-pinned-tab.svg"); ?>" color="#5bbad5">
<meta name="theme-color" content="#ffffff">



<?php $GLOBALS["user"] = json_decode(json_encode(wp_get_current_user()),TRUE); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!--https://developers.google.com/analytics/devguides/collection/gtagjs/custom-dims-mets-->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $GLOBALS["ga_id"]; ?>"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', '<?php echo $GLOBALS["ga_id"]; ?>', {
    'linker': {
        'domains': ['canopuz.com']
    }
    <?php if(isset($GLOBALS["user"]['data']['user_login'])){ ?>,'user_id': '<?php echo $GLOBALS["user"]['data']['user_login']; ?>'<?php } ?>
});

<?php if(isset($GLOBALS["user"]['data']['ID'])){ ?>
<?php $GLOBALS['avatar'] = get_avatar_url($GLOBALS["user"]['data']['ID']); ?>
// Maps 'dimension1' to 'user'.
gtag('config', '<?php echo $GLOBALS["ga_id"]; ?>', {
    'custom_map': {'dimension1': 'user'}
});

// Sends an event that passes 'age' as a parameter.
gtag('event', 'user_dimension', {'user': '<?php echo $GLOBALS["user"]['data']['user_login']; ?>'});
<?php } ?>
</script>