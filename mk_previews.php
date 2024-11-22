<?php

try {
  require_once('./conf.php');
} catch (Error $e) {
  echo 'Error loading ./conf.php, ensure this file exists';
}

require_once('./constants.php');

if (!file_exists('./public/'.PREVIEW_DIR) || !is_dir('./public/'.PREVIEW_DIR)) {
  echo 'Specified preview directory does not exist or is not a directory';
  exit;
}

$photos = array_filter(scandir('./public/'.PHOTO_DIR), function($v) {
  return in_array(pathinfo($v, PATHINFO_EXTENSION), PHOTO_FILE_TYPES);
});

foreach ($photos as $photo) {
  $preview = imagescale(imagecreatefromjpeg('./public/'.PHOTO_DIR.'/'.$photo), 500);
  imagejpeg($preview, './public/'.PREVIEW_DIR.'/'.$photo);
}
