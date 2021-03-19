<?php
  $page_title = (isset($param['page_title']) && !empty($param['page_title'])) ? $param['page_title'] : '...';
  $page_description = (isset($param['page_description']) && !empty($param['page_description'])) ? $param['page_description'] : '...';
  $page_keywords = (isset($param['page_keywords']) && !empty($param['page_keywords'])) ? $param['page_keywords'] : '...';
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html>

<head>
    <title><?php echo $page_title; ?></title>
    <link rel="shortcut icon" href="/images/icons/ScreenBrush.ico?<?php echo time();?>" type="image/x-icon">

    <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
    <meta name="title" content="<?php echo $page_title; ?>">
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#000000">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">

    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:image" content="/images/icons/favicon.ico?2">
    <meta property="og:description" content="<?php echo $page_description; ?>">

    <meta name="viewport" content="width=device-width, user-scalable=yes">

    <link href="/css/common.css?<?php echo time(); ?>" rel="stylesheet">

<?php 

if(!empty($param['css'])) {

  if(is_array($param['css'])) {
    foreach($param['css'] as $v) {
      echo '<link rel="stylesheet" type="text/css" href="/css/'.$v.'?v='.rand().'">';
    }
  } else {
    echo '<link rel="stylesheet" type="text/css" href="/css/'.$param['css'].'?v='.rand().'">';
  }
}
?>


</head>
<body>

  
<?php
  if(isset($content_view) && !empty($content_view)) {
    require_once SITE_ROOT.'application/views/'.$content_view;
  } else {
    echo '...';
  }
?>

<?php 

if(!empty($param['js'])) {

  if(is_array($param['js'])) {
    foreach($param['js'] as $v) {
      echo '<script src="/js/'.$v.'?v='.rand().'" type="text/javascript"></script>';
    }
  } else {
    echo '<script src="/js/'.$param['js'].'?v='.rand().'" type="text/javascript"></script>';
  }
}
?>


</body>
</html>