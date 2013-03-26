<h1><?php echo $I18N->msg('rexseo42_help_debug'); ?></h1>

<?php
$codeExample1 = '<?php rexseo42::printDebugInfo(); ?>';
?>

<p><?php echo $I18N->msg('rexseo42_help_debug_desc'); ?></p>
<?php rex_highlight_string($codeExample1); ?>
<p><?php echo $I18N->msg('rexseo42_help_debug_output', $REX['ADDON']['rexseo42']['settings']['debug_article_id']); ?></p>
<?php 
rexseo42::printDebugInfo($REX['ADDON']['rexseo42']['settings']['debug_article_id']);
?>

<style type="text/css">
#rexseo42-debug {
	margin: 10px 0 10px 0;
	border-collapse: collapse;
	border-spacing: 0;
	background: #FAF9F5;
}

#rexseo42-debug th,
#rexseo42-debug thead td {
	font-weight: bold;
}

#rexseo42-debug td, 
#rexseo42-debug th {
	padding: 12px;
	border: 1px solid #F2353A;
	text-align: left;
}

#rexseo42-debug td.left {
	width: 280px;
}

.rex-addon-content h2 {
	font-size: 14px;
}
</style>


