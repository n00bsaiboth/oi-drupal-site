<?php 

if(file_exists($app_root . '/' . $site_path . '/cors.services.yml')) {
  $settings['container_yamls'][] = $app_root . '/' . $site_path . '/cors.services.yml';
}