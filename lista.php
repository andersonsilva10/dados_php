<?php include_once('includes/header.php'); ?>

<!-- inicio do conteudo -->

<main class="container">


  <article>

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Lista</button>
      </li>
      <li class="nav-item " role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Lista PHP</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <p class="corfonte"> Uma Lista é um conjunto de dados dispostos e/ou acessáveis em uma sequência determinada. Um exemplo de lista são lista duplamente ligada (ou lista duplamente encadeada) são lista onde cada elemento tem um ponteiro para o próximo elemento e um ponteiro para o elemento anterior. Desta forma, dado um elemento, podemos acessar ambos os elementos adjacentes: o próximo e o anterior. Se tivermos um ponteiro para o último elemento da lista, podemos percorrer a lista em ordem inversa, bastando acessar continuamente o elemento anterior, até alcançar o primeiro elemento da lista, que não tem elemento anterior.
        </p>
      </div>
      <div class="tab-pane fade corfonte" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <p>Exemplo 1</p>
        <code>

          <p> $exemplo1 = array('vermelho', 'azul', 'rosas', 'violetas'); </p>
          <p> list($cor1, $cor2, $flor1, $flor2) = $exemplo1; </p>
          <p> echo "$flor1 são $cor1, $flor2 são $cor2."; </p>
        </code>

        <p>Saida:</p>

        <?php

        $exemplo1 = array('vermelho', 'azul', 'rosas', 'violetas');

        // Listando todas as variáveis
        list($cor1, $cor2, $flor1, $flor2) = $exemplo1;
        echo "$flor1 são $cor1, $flor2 são $cor2.<br>";

        ?>
        <br>
        <p>Exemplo 2</p>


        <code>

          <!-- utilizando apenas os dois primeiros valores -->
          <p>$exemplo2 = array('vermelho', 'azul', 'rosas', 'violetas');</p>
          <p>list($cor1, $cor2,,) = $exemplo2;</p>
          <p>echo "$cor1 é uma cor quente e $cor2 é uma cor frio.";</p>
        </code>
        <p>Saida:</p>
        <?php

        $exemplo2 = array('vermelho', 'azul', 'rosas', 'violetas');
        list($cor1, $cor2,,) = $exemplo2;
        echo "$cor1 é uma cor quente e $cor2 é uma cor frio.";


        ?>

        <br>
        <br>

        <p>Exemplo 3</p>


        <code>

          <!-- utilizando apenas os dois primeiros valores -->
          <p>$exemplo3 = array('vermelho', 'azul', 'rosas', 'violetas');</p>


          <p>list(,,, $flor2) = $exemplo3;</p>
          <p>echo "$flor2 são lindas.";</p>

        </code>
        <p>Saida:</p>
        <?php


        $exemplo3 = array('vermelho', 'azul', 'rosas', 'violetas');


        list(,,, $flor2) = $exemplo3;
        echo "$flor2 são lindas.";

        ?>












      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">teste3</div>
    </div>

  </article>

</main>

<!-- fim do conteudo -->
<?php include_once('includes/footer.php'); ?>