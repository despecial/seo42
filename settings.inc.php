<?php

// --- DYN
$REX["ADDON"]["rexseo42"]["settings"] = array (
  'install_subdir' => '',
  'url_schema' => 'rexseo',
  'url_ending' => '.html',
  'homeurl' => 1,
  'allow_articleid' => 0,
  'robots' => '',
  'def_desc' => 
  array (
  ),
  'def_keys' => 
  array (
  ),
  'homelang' => 0,
  'rewrite_params' => 0,
  'hide_langslug' => 0,
  'urlencode' => 0,
  'one_page_mode' => 0,
);
// --- /DYN

$REX["ADDON"]["rexseo42"]["settings"]['levenshtein'] = 0; // 0 = Strikte URL-Übereinstimmung, sonst Fehlerseite (404) | 1 = Artikel mit ähnlichster URL anzeigen
$REX["ADDON"]["rexseo42"]["settings"]['compress_pathlist'] = 1;
$REX["ADDON"]["rexseo42"]["settings"]['url_whitespace_replace']  = '-';
$REX["ADDON"]["rexseo42"]["settings"]['params_starter']  = '++';
$REX["ADDON"]["rexseo42"]["settings"]['drop_dbfields_on_uninstall'] = true; // switch to false to maintain all rexseo42 db fields on uninstall

