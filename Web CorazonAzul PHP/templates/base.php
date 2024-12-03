<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/images/logo.png" type="image/png">
    <title>#CorazonAzul - <?php echo $page_title; ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap">
</head>
<body>
    <?php include('header.php'); ?>

    <main class="w-100">
        <?php include $template; ?>
    </main>

    <?php include('footer.php'); ?>  
    
    <a href="https://api.whatsapp.com/send/?phone=5491154030034" class="whatsapp-float" target="_blank" aria-label="WhatsApp">
        <img src="/assets/images/whatsapp.png" alt="WhatsApp" class="whatsapp-icon">
    </a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/js/team-carousel.js"></script>
    <script src="/assets/js/header-highlight.js"></script>
</body>
</html>




