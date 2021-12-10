<?php include_once('includes/header.php'); ?>

<!-- inicio do conteudo -->

<main class="container">


  <article class="row justify-content-center">
    <div class="col-10">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
            type="button" role="tab" aria-controls="pills-home" aria-selected="true">Pilha</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
            type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Pilha PHP</button>
        </li>
      </ul>
    </div>

    <div class="tab-content col-8" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <h2>Conceito de Pilha</h2>
        <p>Pilhas são estruturas de dados que armazenam os elementos em um formato sequencial, empilhando um item acima
          do outro (imagine uma pilha de pratos, por exemplo). Estas estruturas permitem “empilhar” os itens que serão
          armazenados e “desempilhar” estes elementos da pilha quando precisarmos removê-lo. Sempre que um novo elemento
          é inserido (ou empilhado) damos a ele o nome de “topo”, pois é o primeiro elemento ao qual teremos acesso.</p>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


        <h3>Exemplo</h3>
        <div class="row justify-content-center">
          <div class="col-10 col-sm-10 col-md-10 col-lg-6">
            <h4>Código</h4>
            <code>


              <p>$baralho = new SplStack(); </p>
              <p>$baralho->push("carta 1");</p>
              <p>$baralho->push("carta 2");</p>
              <p>$baralho->push("carta 3");</p>
              <p>$baralho->push("carta 4");</p>
              <p>$baralho->push("carta 5");</p>
              <p>$baralho->push("carta 6");</p>
              <p>$baralho->push("carta 7");</p>

              <p>foreach ($baralho as $carta) {</p>
              <p>echo "$carta"."&lt;br/&gt;";</p>
              <p>}</p>
              <p>//AQUI REMOVEMOS 2 ITENS</p>
              <p>$baralho->pop();</p>
              <p>$baralho->pop();</p>
              <p>echo "-----------------------&lt;br/&gt;";</p>
              <p>//PILHA DEPOIS DA REMOCAO</p>
              <p>foreach ($baralho as $carta) {</p>
              <p class="offset-1">echo "$carta"."&lt;br/&gt;";</p>
              <p>}</p>

            </code>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-5">
            <h4>Saida</h4>
            <?php

              $baralho = new SplStack();
              $baralho->push("carta 1");
              $baralho->push("carta 2");
              $baralho->push("carta 3");
              $baralho->push("carta 4");
              $baralho->push("carta 5");
              $baralho->push("carta 6");
              $baralho->push("carta 7");

              foreach ($baralho as $carta) {
                  echo "$carta"."</br>";
              }
              $baralho->pop();
              $baralho->pop();
              echo "-----------------------<br/>";
              foreach ($baralho as $carta) {
                  echo "$carta"."</br>";
              }
            ?>
          </div>
        </div>

      </div>
    </div>

  </article>

</main>

<!-- fim do conteudo -->
<?php include_once('includes/footer.php'); ?>