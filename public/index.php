<?php
try {
  require_once('../conf.php');
} catch (Error $e) {
  echo 'Error loading ../conf.php, ensure this file exists';
}

require_once('../constants.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title><?php echo NAME."'s Portfolio" ?></title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="" />
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

$photos = array_filter(scandir(PREVIEW_DIR), function($v) {
  return in_array(pathinfo($v, PATHINFO_EXTENSION), PHOTO_FILE_TYPES);
});

foreach ($photos as $photo) {
    $fullresPath = PHOTO_DIR.'/'.$photo;
    $previewPath = PREVIEW_DIR.'/'.$photo;

    echo '<a href="'.$fullresPath.'"><img src="'.$previewPath.'"></a>';
}

?>
</body>
</html>
