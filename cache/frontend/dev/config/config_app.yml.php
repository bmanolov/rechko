<?php
// auto-generated by sfDefineEnvironmentConfigHandler
// date: 2016/11/26 13:22:34
sfConfig::add(array(
  'app_sitename' => 'Речник на българския език',
  'app_sitename_short' => 'Речко',
  'app_site_domain' => 'rechnik.chitanka.info',
  'app_feedback_title' => 'Обратна връзка',
  'app_feedback_thankyou' => 'Благодарим ви за коментара.',
  'app_feedback_button' => 'Изпращане',
  'app_feedback_form' => array (
  'message' => 
  array (
    'label' => 'Коментар',
    'required_msg' => 'Въвеждането на коментар е задължително.',
    'min_length_msg' => 'Коментарът трябва да съдържа поне %min_length% знака.',
  ),
  'name' => 
  array (
    'label' => 'Име',
  ),
  'email' => 
  array (
    'label' => 'Е-поща',
    'invalid_msg' => 'Посочен е невалиден пощенски адрес.',
  ),
),
  'app_feedback_email' => array (
  'contact@chitanka.info' => 'Речко Админ',
),
  'app_feedback_subject' => 'Обратна връзка от Речко',
  'app_js_library' => '//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js',
  'app_openid_cookie_expire' => 180,
  'app_list_max_words' => 90,
  'app_sf_phpopenid_plugin_lib_path' => '/home/bo/projects/chitanka-rechnik/lib/vendor/php-openid',
  'app_openid_google' => 'https://www.google.com/accounts/o8/id',
  'app_openid_yahoo' => 'http://yahoo.com',
));