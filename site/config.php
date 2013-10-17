<?php
/**
 * Site configuration, this file is changed by user per site.
 *
 */

/**
 * Set level of error reporting
 */
error_reporting(-1);
ini_set('display_errors', 1);


/**
 * Set what to show as debug or developer information in the get_debug() theme helper.
 */
$olina->config['debug']['olina'] = false;
$olina->config['debug']['session'] = false;
$olina->config['debug']['timer'] = true;
$olina->config['debug']['db-num-queries'] = true;
$olina->config['debug']['db-queries'] = true;


/**
 * Set database(s).
 */
$olina->config['database'][0]['dsn'] = 'sqlite:' . OLINA_SITE_PATH . '/data/.ht.sqlite';


/**
 * What type of urls should be used?
 * 
 * default      = 0      => index.php/controller/method/arg1/arg2/arg3
 * clean        = 1      => controller/method/arg1/arg2/arg3
 * querystring  = 2      => index.php?q=controller/method/arg1/arg2/arg3
 */
$olina->config['url_type'] = 1;


/**
 * Set a base_url to use another than the default calculated
 */
$olina->config['base_url'] = null;


/**
 * How to hash password of new users, choose from: plain, md5salt, md5, sha1salt, sha1.
 */
$olina->config['hashing_algorithm'] = 'sha1salt';


/**
 * Allow or disallow creation of new user accounts.
 */
$olina->config['create_new_users'] = true;


/**
 * Define session name
 */
$olina->config['session_name'] = preg_replace('/[:\.\/-_]/', '', __DIR__);
$olina->config['session_key']  = 'olina';


/**
 * Define default server timezone when displaying date and times to the user. All internals are still UTC.
 */
$olina->config['timezone'] = 'Europe/Stockholm';


/**
 * Define internal character encoding
 */
$olina->config['character_encoding'] = 'UTF-8';


/**
 * Define language
 */
$olina->config['language'] = 'en';


/**
 * Define the controllers, their classname and enable/disable them.
 *
 * The array-key is matched against the url, for example: 
 * the url 'developer/dump' would instantiate the controller with the key "developer", that is 
 * CCDeveloper and call the method "dump" in that class. This process is managed in:
 * $olina->FrontControllerRoute();
 * which is called in the frontcontroller phase from index.php.
 */
$olina->config['controllers'] = array(
  'index'     => array('enabled' => true,'class' => 'CCIndex'),
  'developer' => array('enabled' => true,'class' => 'CCDeveloper'),
  'theme'     => array('enabled' => true,'class' => 'CCTheme'),
  'guestbook' => array('enabled' => true,'class' => 'CCGuestbook'),
  'content'   => array('enabled' => true,'class' => 'CCContent'),
  'blog'      => array('enabled' => true,'class' => 'CCBlog'),
  'page'      => array('enabled' => true,'class' => 'CCPage'),
  'user'      => array('enabled' => true,'class' => 'CCUser'),
  'acp'       => array('enabled' => true,'class' => 'CCAdminControlPanel'),
);


/**
 * Settings for the theme.
 */
$olina->config['theme'] = array(
  'name'            => 'grid',            // The name of the theme in the theme directory
  'stylesheet'      => 'style.php',       // Main stylesheet to include in template files
  'template_file'   => 'index.tpl.php',   // Default template file, else use default.tpl.php
  // A list of valid theme regions
  'regions' => array('flash','featured-first','featured-middle','featured-last',
    'primary','sidebar','triptych-first','triptych-middle','triptych-last',
    'footer-column-one','footer-column-two','footer-column-three','footer-column-four',
    'footer',
  ),
  // Add static entries for use in the template file. 
  'data' => array(
    'header' => 'Olina',
    'slogan' => 'A PHP-based MVC-inspired CMF',
    'favicon' => 'logo_80x80.png',
    'logo' => 'logo_80x80.png',
    'logo_width'  => 80,
    'logo_height' => 80,
    'footer' => '<p>Olina &copy; by Linnea Levin</p>',
  ),
);
