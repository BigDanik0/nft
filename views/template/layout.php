<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title><?php echo $title ?></title>
    <link href="public/css/style.css" rel="stylesheet">

</head>

<body>


                    <?php
                    if (isset($content)) echo $content;
                    ?>

</body>
</html>