<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $title ?? '';?> | RSL, líderes de electromecánica en Costa Rica. Expertos en redes eléctricas, telecomunicaciones y más. ¡Contáctanos hoy! #Electromecanica #CR">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>RSL <?php echo $separator = ' | ' . $title ?? ''; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Poppins:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/app.css">
    <!-- reCAPTCHA Script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

    <?php echo $content; ?>
    <?php echo $script ?? ''; ?>

</body>
</html>