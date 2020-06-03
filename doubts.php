<?php require('./components/header.php'); ?>

<body class="doubts">
    <div id="page-content">
    <section id="main" class="main">
        <?php require('./components/internal_menu.php'); ?>
    </section>

    <section class="doubts wrapper">
        <h2 class="doubts__title">DÚVIDAS FREQUENTES SOBRE HEALTH KIDS</h2>

        <h3 class="doubts__description">Tire todas suas dúvidas sobre o Health Kids:</h3>

        <div class="doubts__container">
            <?php
                $doubts = [
                    [
                        'title' => 'Título da dúvida 1',
                        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ipsum ducimus aliquid. Recusandae, non debitis id doloremque placeat deserunt, minima incidunt sint similique ipsa amet perspiciatis ad quae, explicabo et?'
                    ],

                    [
                        'title' => 'Título da dúvida 2',
                        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ipsum ducimus aliquid. Recusandae, non debitis id doloremque placeat deserunt, minima incidunt sint similique ipsa amet perspiciatis ad quae, explicabo et?'
                    ],

                    [
                        'title' => 'Título da dúvida 3',
                        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ipsum ducimus aliquid. Recusandae, non debitis id doloremque placeat deserunt, minima incidunt sint similique ipsa amet perspiciatis ad quae, explicabo et?'
                    ],

                    [
                        'title' => 'Título da dúvida 4',
                        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ipsum ducimus aliquid. Recusandae, non debitis id doloremque placeat deserunt, minima incidunt sint similique ipsa amet perspiciatis ad quae, explicabo et?'
                    ],
                ];

                foreach($doubts as $doubt) {
                    require('./components/doubt_label.php');
                } ?>
        </div>
    </section>
    </div>
    
    <?php require('./components/footer.php'); ?>
    
</body>
</html>