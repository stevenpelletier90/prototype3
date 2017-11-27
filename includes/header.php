<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?></title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/font-awesome.min.css">
    <link rel="stylesheet" href="styles/animate.min.css">
    <link rel="stylesheet" href="styles/main.css">

    <!--Calendar-->
    <link rel="stylesheet" href="styles/fullcalendar.min.css">
    <link rel="stylesheet" href="styles/fullcalendar.print.css" media="print">
</head>

<body>