<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dúvidas frequentes</title>

    <link rel="stylesheet" href="assets/bundle.css" />
</head>
<body class="doubts">
    <section id="main" class="main">
        <?php require('./components/internal_menu.php'); ?>
    </section>

    <section class="doubts wrapper">
        <h2 class="doubts__title">DÚVIDAS FREQUENTES SOBRE HEALTH KIDS</h2>

        <h3 class="doubts__description">Tire todas suas dúvidas sobre o Health Kids:</h3>

        <div class="doubts__container">
            <div class="doubts__doubt doubt closed">
                <span class="doubt__label">
                    <span class="doubt__title">O titulo da dúvida</span>
                    <i class="fas fa-chevron-down icon-closed"></i>
                    <i class="fas fa-chevron-up icon-opened"></i>
                </span>
                <span class="doubt__description-body">
                    <span class="doubt__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ipsum ducimus aliquid. Recusandae, non debitis id doloremque placeat deserunt, minima incidunt sint similique ipsa amet perspiciatis ad quae, explicabo et?</span>
                </span>
            </div>
        </div>
    </section>
    <footer>
        <script src="assets/bundle.js"></script>
    </footer>
</body>
</html>