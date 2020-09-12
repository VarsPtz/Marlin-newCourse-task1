<?php
$items = [
  [
    "is_first_item" => true,
    "is_last_item" => false,
    "title" => "My tasks",
    "value" => "130 / 500",
    "background_color" => "bg-fusion-400",
    "width" => "65%",
    "value_now" => "65",
    "value_min" => "0",
    "value_max" => "100"
  ],
  [
    "is_first_item" => false,
    "is_last_item" => false,
    "title" => "Transfered",
    "value" => "440 TB",
    "background_color" => "bg-success-500",
    "width" => "34%",
    "value_now" => "34",
    "value_min" => "0",
    "value_max" => "100"
  ],
  [
    "is_first_item" => false,
    "is_last_item" => false,
    "title" => "Bugs Squashed",
    "value" => "77%",
    "background_color" => "bg-info-400",
    "width" => "77%",
    "valuenow" => "77",
    "valuemin" => "0",
    "valuemax" => "100"
  ],
  [
    "is_first_item" => false,
    "is_last_item" => true,
    "title" => "User Testing",
    "value" => "7 days",
    "background_color" => "bg-primary-400",
    "width" => "84%",
    "valuenow" => "84",
    "valuemin" => "0",
    "valuemax" => "100"
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>
    Подготовительные задания к курсу
  </title>
  <meta name="description" content="Chartist.html">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
  <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
  <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
  <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
  <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
  <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
  <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
  <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
  <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>
<body class="mod-bg-1 mod-nav-link ">
<main id="js-page-content" role="main" class="page-content">
  <div class="col-md-6">
    <div id="panel-1" class="panel">
      <div class="panel-hdr">
        <h2>
          Задание
        </h2>
        <div class="panel-toolbar">
          <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip"
                  data-offset="0,10" data-original-title="Collapse"></button>
          <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip"
                  data-offset="0,10" data-original-title="Fullscreen"></button>
        </div>
      </div>
      <div class="panel-container show">
        <div class="panel-content">
          <?php foreach ($items as $item): ?>
            <div class="d-flex <?php if ($item['is_first_item']) echo 'mt-2'; ?>">
              <?php echo $item["title"]; ?>
              <span class="d-inline-block ml-auto"><?php echo $item['value']; ?></span>
            </div>
            <div class="progress progress-sm <?php if ($item['is_last_item']) echo 'mb-g'; else echo 'mb-3'; ?>">
              <div class="progress-bar <?php echo $item['background_color']; ?>" role="progressbar"
                   style="width: <?php echo $item['width']; ?>;" aria-valuenow="<?php echo $item['value_now']; ?>"
                   aria-valuemin="<?php echo $item['value_min']; ?>"
                   aria-valuemax="<?php echo $item['vulue_max']; ?>"></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</main>


<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>
<script>
    // default list filter
    initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
    // custom response message
    initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
</script>
</body>
</html>
