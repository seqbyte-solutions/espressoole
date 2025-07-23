

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espressoole</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .maintenance-page-main {
            background: #1a1a1a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100dvh;
            width: 100%;
            color: #fafafa;

        }

        .maintenance-logo-container {
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
      
            transform-origin: bottom;
        }

        .maintenance-logo-container svg {
            width: 100%;
        }

        .maintenance-title{
            text-transform: uppercase;
            font-family: 'Acumin', sans-serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-variation-settings:
                "wdth" 100;
            font-size: 3.5rem;
            text-align: center;
            margin: 0;
            padding: 0;
           
            transform-origin: bottom;
            color: #f0e2c5;
        }
    </style>
</head>

<body>
    <main class="maintenance-page-main">
        <div class="maintenance-page">
            <div class="maintenance-logo-container">
                <img src="<?= ESPRESSOOLE_URL ?>/assets/img/espressoole_logo.svg" alt="Espressoole Logo" />
            </div>
            <h1 class="maintenance-title">
                Coming Soon
            </h1>

        </div>
    </main>

    <?php wp_footer(); ?>

</body>

</html>