<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Now It's Me | Tasks</title>
    <link rel="icon" href="resources/app/img/favicon.ico" type="image/x-icon">

    <?php require_once "controller.php"; ?>

    <?php setStyles(); ?>

</head>
<body class="theme-teal">

    <?php setHeader(); ?>

    <?php setContent( isset( $_GET["page"] ) ? $_GET["page"] : NULL ); ?>

    <?php setScripts(); ?>

</body>
</html>
