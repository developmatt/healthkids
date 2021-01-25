<?php require('./components/header.php'); ?>

<body class="index">
  <div id="page-content">
  <section id="main" class="main">
    
    <?php require('./components/menu.php'); ?>

    <div class="main__container wrapper">
      <h2 class="main__title">PODEROSÍSSIMO PARA UM<br><span class="main__title--bold">SUPER POLIVITAMÍNICO INFANTIL!</span> </h2>

      <h3 class="main__subtitle">60 saborosas <span class="main__subtitle--bold">Gomas de Pectina.</span>
      </h3>

      <a href="#release" class="main__button btn btn-large btn-yellow">QUERO MEU FILHO SAUDÁVEL</a>

      <img src="./images/selo.webp" alt="Selo compra segura" class="main__safe-buy">


    </div>

    <div class="main__bottom">
      <div class="main__bottom-wrapper">
        <div class="main__bottom-block">
          <div class="main__bottom-icon-container">
            <img src="/images/icon-truck.png" alt="" class="main__bottom-icon">
          </div>

          <div class="main__bottom-text-container">
            <span class="main__bottom-text"><strong>FRETE GRÁTIS</strong> PARA TODO <strong>BRASIL</strong></span>
            <span class="main__bottom-text main__bottom-text--small">Por tempo limitado</span>
          </div>
        </div>

        <div class="main__bottom-block">
          <div class="main__bottom-icon-container">
            <img src="/images/icon-credit-card.png" alt="" class="main__bottom-icon">
          </div>

          <div class="main__bottom-text-container">
            <span class="main__bottom-text"><span class="main__bottom-text--bold main__bottom-text--big">6x</span> SEM
              JUROS NO CARTÃO DE CRÉDITO</span>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="video" class="video">
    <div class="wrapper">
      <div class="video-container">
        <iframe src="https://player.vimeo.com/video/498054388?title=false&byline=false" width="600" height="338" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>

      <div class="text-container">
        <img src="/images/strawberry-play.png" alt="" class="text-container__image strawberry-play">
        <span class="text-container__text">O melhor <strong>POLIVITAMÍNICO INFANTIL</strong> para o seu filho!</span>
      </div>
    </div>
  </section>


  <section id="advantages" class="advantages wrapper">
    <h2 class="advantages__title">QUAIS SÃO AS VANTAGES DO SUPERVITA KIDS?</h2>

    <div class="advantages__container">
      <div class="advantages__block">
        <div class="advantages__block-image-div">
          <img src="/images/vegetables-fruits.png" class="advantages__block-image" alt="">
        </div>
        <h3 class="advantages__block-title">VITAMINAS E</br>MINERAIS</h3>
        <p>Duas gomas de <strong>Supervita Kids</strong> contém <strong>10 vitaminas e 3 minerais</strong> essenciais para a complementação alimentar infantil.</p>
      </div>

      <div class="advantages__block">
        <div class="advantages__block-image-div">
          <img src="/images/gum.png" class="advantages__block-image" alt="">
        </div>
        <h3 class="advantages__block-title">GOMA DE PECTINA</h3>
        <p>A goma <strong>Supervita Kids</strong> é feita com <strong>pectina (vegetal)</strong> que são especialmente formuladas pra oferecer um eficiente apoio nutricional complementando a alimentação das crianças.</p>
      </div>

      <div class="advantages__block">
        <div class="advantages__block-image-div">
          <img src="/images/kid.png" class="advantages__block-image" alt="">
        </div>
        <h3 class="advantages__block-title">IMUNIDADE</h3>
        <p><strong>Supervita Kids</strong> é um produto que juntamente com a alimentação do dia a dia auxilia no aumento da imunidade do seu filho.</p>
      </div>
    </div>

    <a href="#release" class="advantages__button btn btn-large btn-yellow">QUERO MEU FILHO SAUDÁVEL</a>
  </section>

  <section id="user_comments" class="comments">
    <!-- VIDEO -->
    <div class="comments__content wrapper">
      <h2 class="comments__title">O QUE DIZEM DO SUPERVITA KIDS?</h2>


      <div class="comments__slider-container">
        <div class="carousel" id="carousel-video">
          <div class="comments__comment-div">

            <div class="comment">
              <div class="comment__text-block video-responsive">
                <iframe src="https://player.vimeo.com/video/498063971?title=false&byline=false" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
              </div>
            </div>

          </div>

          <div class="comments__comment-div">

            <div class="comment">
              <div class="comment__text-block video-responsive">
                <iframe src="https://player.vimeo.com/video/498064644?title=false&byline=false" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
              </div>
            </div>

          </div>

        </div>
        <span class="comments__previous comments__controller comments__controller--left" id="comments__previous__video"><i class="fas fa-chevron-left"></i></span>
        <span class="comments__next comments__controller comments__controller--right" id="comments__next__video"><i class="fas fa-chevron-right"></i></span>

      </div>
    </div>
    <br />
    <!-- TEXTO -->
    <?php
    $currentComment = [];
    $arrayComment = [
      [
        'avatar' => '/images/foto_doubt_1.png',
        'comment' => 'Incrível! Melhor forma de consumir vitaminas, meu filho adorou e sempre me lembra de dar as gominhas.',
        'name' => 'Renata',
        'city' => 'Belo Horizonte - MG',
      ],
      [
        'avatar' => '/images/foto_doubt_2.png',
        'comment' => 'Suplemento em capsula sempre foi uma dificuldade para a minha filha consumir, mais com esse suplemento em gomas resolveu meu problema e me sinto realizada em complementar sua vitaminas.',
        'name' => 'Claudia',
        'city' => 'Caxias do Sul - RS',
      ],
      [
        'avatar' => '/images/foto_doubt_3.png',
        'comment' => 'Minha filha é daquelas que só come carne, batata frita e arroz, sempre me preocupei em relação a vitaminas . Estou muito satisfeita em saber que as vitaminas em gomas vão ajudar a contribuir com a saúde do minha filha.',
        'name' => 'Fernanda',
        'city' => 'Rio de Janeiro - RJ',
      ],
      [
        'avatar' => '/images/foto_doubt_4.png',
        'comment' => 'Eu e meu marido trabalhamos, e por mais que tente acompanhar a alimentação dos meus filhos sei que ela é deficiente. Pesquisei na internet e encontrei essas gomas com vitaminas, meus filhos estão adorando!',
        'name' => 'Marcia',
        'city' => 'Curvelo - MG',
      ],
      [
        'avatar' => '/images/foto_doubt_5.png',
        'comment' => 'Amei o produto e o carinho no atendimento da empresa, pois é primordial além de ter um bom produto eles tem um bom atendimento, parabéns a empresa!',
        'name' => 'Poliana',
        'city' => 'Maceió - AL',
      ],
    ];
  ?>

    <div class="comments__content wrapper">

      <div class="comments__slider-container">
        <div class="carousel" id="carousel-text">
          <?php foreach($arrayComment as $currentComment) :  ?>
            <div class="comments__comment-div">

              <div class="comment">
                <div class="comment__image-container">
                  <img src="<?= $currentComment['avatar'] ?>" alt="" class="comment__image">
                </div>

                <div class="comment__text-block">
                  <p class="comment__text"><?= $currentComment['comment'] ?></p>

                  <span class="comment__name"><?= $currentComment['name'] ?></span>
                  <spann class="comment__nick"><?= $currentComment['city'] ?></spann>
                </div>
              </div>

            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <span class="comments__previous comments__controller comments__controller--left" id="comments__previous__text"><i class="fas fa-chevron-left"></i></span>
      <span class="comments__next comments__controller comments__controller--right" id="comments__next__text"><i class="fas fa-chevron-right"></i></span>


      <a href="#release" class="comments__button btn btn-large btn-yellow">QUERO MEU FILHO SAUDÁVEL</a>


    </div>
  </section>

  <section id="best" class="best">
    <h2 class="best__title">PORQUE O SUPERVITA KIDS É O MELHOR?</h2>

    <div class="best__container wrapper">
      <div class="best__block">
        <img src="/images/s-flying.png" alt="Morango com roupa de super herói voando" class="best__image">

        <div class="best__text-container">
          <h3 class="best__text-title">Fórmula exclusiva</h3>
          <p class="best__text">A fórmula exclusiva do Supervita Kids conta com minerais quelatados proporcionando até 90% de absorção. Componentes naturais com mínimo teor de açucar e sem glúten.</p>
        </div>
      </div>

      <div class="best__block">
        <img src="/images/point-grape.png" alt="Morango com roupa de super herói voando" class="best__image">

        <div class="best__text-container">
          <h3 class="best__text-title">Deliciosa Goma</h3>
          <p class="best__text">Polivitamínico infantil em goma.</br>Uma forma eficiente e gostosa para ajudar a complementar diariamente a alimentação infantil com vitaminas e mineirais.</p>
        </div>
      </div>

      <div class="best__block">
        <img src="/images/point-banana.png" alt="Morango com roupa de super herói voando" class="best__image">

        <div class="best__text-container">
          <h3 class="best__text-title">Crescimento Saudável</h3>
          <p class="best__text">As gomas proporcionam a ingestão e absorção de vitaminas e minerais indispensáveis para o crescimento e desenvolvimento infantil.</p>
        </div>
      </div>

      <div class="best__block">
        <img src="/images/point-pear.png" alt="Morango com roupa de super herói voando" class="best__image">

        <div class="best__text-container">
          <h3 class="best__text-title">Melhor Alimentação</h3>
          <p class="best__text">O Supervita Kids aliado com os alimentos ingeridos no dia a dia proporcionam uma alimentação balanceada, promovendo uma adequação nutricional no organismo. </p>
        </div>
      </div>
    </div>
  </section>

  <?php
    $currentRelease = [];
    $arrayRelease = [
      [
        'url' => 'http://mon.net.br/144hmc',
        'image_url' => '/images/kit-1.png',
        'price' => '24',
        'price_cents' => '12',
        'selling_champion' => false,
        'off' => false,
        'free_freight' => true,
        'ammount' => 1,
        'total' => 'Total: 144,70'
      ],
      [
        'url' => 'http://mon.net.br/144i3g',
        'image_url' => '/images/kit-3.png',
        'price' => '58',
        'price_cents' => '00',
        'selling_champion' => true,
        'off' => false,
        'free_freight' => true,
        'ammount' => 3,
        'total' => 'De: <span class="striked">434,10</span class="striked"> Por: 348,00'
      ],
      [
        'url' => 'http://mon.net.br/144icq',
        'image_url' => '/images/kit-5.png',
        'price' => '101',
        'price_cents' => '92',
        'selling_champion' => false,
        'off' => false,
        'free_freight' => true,
        'ammount' => 5,
        'total' => 'De: <span class="striked">723,50</span class="striked"> Por: 611,50'
      ]
    ];
  ?>


  <section id="release" class="release">
    <h2 class="release__title">APROVEITE ESSE <span class="bold">LANÇAMENTO</span></h2>
    
    <h3 class="release__subtitle">Polivitamínico infantil delicioso para crianças em formato de <span class="bold">goma de pectina</span>.</h3>
    
    <div class="wrapper column__container">
      
      <?php foreach($arrayRelease as $currentRelease) :  ?>
      
      <div class="column">
        <span class="column__title">Compre <?= $currentRelease['ammount'] == 1 ? $currentRelease['ammount']. ' mês': $currentRelease['ammount']. ' meses'?> de SuperVita Kids</span>
        <div class="column__card">
          <?php if($currentRelease['selling_champion']) : ?>
            <span class="column__subtitle">CAMPEÃO DE VENDAS</span>
          <?php endif; ?>

          <?php if($currentRelease['free_freight']) : ?>
            <span class="column__freight">
              <span class="column__freight-text">FRETE GRÁTIS</span>
            </span>
          <?php endif; ?>

          <div class="column__image-div">
            <img src="<?= $currentRelease['image_url'] ?>" alt="" class="column__image">

            <?php if($currentRelease['off'] != false) : ?>
              <div class="discount__badge">
                <span class="discount__row discount__value">21<span class="small">%</span></span>
                <span class="discount__row discount__text">OFF</span>
              </div>
            <?php endif; ?>
          </div>
          <div class="column__data-row">
            <div class="column__data column__data--parcels-div">
              <span class="column__data--parcels">
                <span class="bold"><span class="big">6</span>X</span> SEM JUROS DE</span></div>
            <div class="column__data">
              <span class="column__data--value">
                <span class="column__data--cypher">R$</span><?= $currentRelease['price'] ?></span><span class="column__data--cents">,<?= $currentRelease['price_cents'] ?></span>
            </div>
          </div>

          <span class="column__total"><?= $currentRelease['total'] ?></span>

          <a href="<?= $currentRelease['url'] ?>" class="btn btn-pink column__button">COMPRAR AGORA</a>
        </div>
      </div>

      <?php endforeach; ?>

    </div>
  </section>

  <section id="shields" class="shields">
    <div class="wrapper shields__container">
      <div class="shields__block shield__block">
        <div class="shield__image-block">
          <img src="/images/icon-shield.png" alt="" class="shield__image shield__image--shield">
        </div>

        <div class="shield__text-container">
          <span class="shield__text">AQUI SUA <strong>COMPRA SEGURA</strong></span>
        </div>
      </div>
      <div class="shields__block shield__block">
        <div class="shield__image-block">
          <img src="/images/icon-truck.png" alt="" class="shield__image">
        </div>

        <div class="shield__text-container">
          <span class="shield__text"><strong>FRETE GRÁTIS</strong> PARA <strong>TODO BRASIL</strong></span>
          <span class="shield__text--small">Por tempo limitado</span>
        </div>
      </div>
    </div>
  </section>

  <section id="credit-card" class="credit-card">
    <div class="wrapper credit-card__wrapper">

      <div class="credit-card__block credit-card__block--large">
        <span class="credit-card__text">Formas de pagamento</span>

        <div class="credit-card__card-row">
          <div class="credit-card__card credit-card__card--visa"></div>
          <div class="credit-card__card credit-card__card--master"></div>
          <div class="credit-card__card credit-card__card--american"></div>
          <div class="credit-card__card credit-card__card--dinners"></div>
          <div class="credit-card__card credit-card__card--elo"></div>
          <div class="credit-card__card credit-card__card--hypercard"></div>
          <div class="credit-card__card credit-card__card--slip"></div>
        </div>
      </div>

      <div class="credit-card__block credit-card__block--medium">
        <div class="credit-card__parcels-image-block">
          <img src="/images/icon-pink-card.png" alt="" class="credit-card__parcels-image">
        </div>
        <div class="credit-card__parcels-block">
          <span class="parcels"><strong class="big">6</strong><strong>x</strong>SEM JUROS <br> NO CARTÃO DE
            CRÉDITO</span>
        </div>
      </div>

      <div class="credit-card__block credit-card__block--small">
        <span class="credit-card__text">Formas de envio</span>
        <div class="credit-card__correios-div"></div>
      </div>
    </div>
  </section>

  <section class="doubts wrapper">
        <h2 class="page-title doubts__title">DÚVIDAS FREQUENTES SOBRE SUPERVITA KIDS</h2>

        <h3 class="doubts__description">Tire todas suas dúvidas sobre o Supervita Kids:</h3>

        <div class="doubts__container">
            <?php
                $doubts = [
                    [
                        'title' => 'O que é Supervita Kids?',
                        'description' => 'Supervita Kids é um Polivitamínico infantil que possui <strong>10 vitaminas e 3 minerais</strong> que ajudam na complementação diária da alimentação infantil.'
                    ],

                    [
                        'title' => 'Do que é feito o Supervita Kids?',
                        'description' => 'Supervita Kids foi desenvolvido em formato de goma de pectina, ou seja, de origem vegetal, que além de ser saudável proporciona uma fácil ingestão e absorção dos nutrientes e tem um sabor delicioso. Comprometidos em produzir gomas usando ingredientes da mais alta qualidade Supervita Kids contém vitaminas: <strong>A, D3, C, E, K, B6, B9, B12, B5, Biotina e minerais:  Iodo, Selênio e Zinco.</strong>'
                    ],

                    [
                        'title' => 'Quantas gomas ingerir?',
                        'description' => '2 (duas) gominhas por dia são o suficiente para que a criança tenha uma complementação eficaz de acordo com a necessidade diária recomendada.'
                    ],

                    [
                        'title' => 'Quem pode consumir o Supervita Kids?',
                        'description' => 'Recomendado para <strong>crianças de 2 anos a 10 anos</strong>, adultos podem consumir mais o produto foi desenvolvido para atender as necessidades das crianças na faixa etária mencionada.'
                    ],

                    [
                        'title' => 'Supervita Kids engorda?',
                        'description' => 'Supervita Kids é um polivitamínico infantil formulado para ajudar a complementar as vitaminas e minerais de nossas crianças, apesar de conter açúcar <strong>ele não engorda</strong>, pois possui <strong>28 calorias</strong> em sua dose diária de 2 gomas.'
                    ],

                    [
                        'title' => 'Como posso armazenar o produto?',
                        'description' => 'Supervita Kids deve ser conservado em local fresco, fora da geladeira, longe da umidade e da luz solar.'
                    ],

                    [
                        'title' => 'Supervita kids causa alergia?',
                        'description' => 'Sua fórmula não possui ingredientes alergênicos, porém, por questões de regulação técnica da Anvisa e segurança do fabricante, o produto pode conter resquícios de: leite, soja e peixe, devido a outros produtos que também são criados na fábrica (linha de produção). Apesar de o produto não possuir efeitos colaterais, recomendamos fortemente que crianças com restrições em sua dieta por alguma causa, consultem primeiro o seu médico pediatra antes de consumi-lo.'
                    ],

                    [
                        'title' => 'Quantas gomas vem em cada embalagem?',
                        'description' => 'Cada embalagem possui 60 gomas.'
                    ],
                ];

                foreach($doubts as $doubt) {
                    require('./components/doubt_label.php');
                } ?>
        </div>
    </section>
  <?php require('./components/offer.php'); ?>
  
  </div>

  <?php require('./components/footer.php'); ?>

</body>

</html>