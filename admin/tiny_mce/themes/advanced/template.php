<?php
function phptemplate_tinymce_theme($init, $textarea_name, $theme_name, $is_running) {
  static $access, $integrated;

  if (!isset($access)) {
    $access = function_exists('imce_access') && imce_access();
  }

  $init = theme_tinymce_theme($init, $textarea_name, $theme_name, $is_running);

  if ($init && $access) {
    $init['file_browser_callback'] = 'imceImageBrowser';
    if (!isset($integrated)) {
      $integrated = TRUE;
      drupal_add_js("function imceImageBrowser(fid, url, type, win) {win.open(Drupal.settings.basePath +'?q=imce&app=TinyMCE|url@'+ fid, '', 'width=760,height=560,resizable=1');}", 'inline');
    }
  }

  return $init;
}
?>