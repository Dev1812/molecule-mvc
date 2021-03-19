<?php
  require_once SITE_ROOT.'application/core/view.php';
  require_once SITE_ROOT.'application/core/route.php';
  require_once SITE_ROOT.'application/core/controller.php';

  require_once SITE_ROOT.'application/core/captcha.php';
  require_once SITE_ROOT.'application/core/common.php';
  require_once SITE_ROOT.'application/core/crypto.php';

  require_once SITE_ROOT.'application/core/mail.php';
  require_once SITE_ROOT.'application/core/debug_log.php';
  require_once SITE_ROOT.'application/core/security.php';

  require_once SITE_ROOT.'application/core/database.php';
  require_once SITE_ROOT.'application/core/security.php';
  require_once SITE_ROOT.'application/core/i18n.php';;
  require_once SITE_ROOT.'application/core/model.php';
  Route::start();
?>