<?php include_once('includes/header.php'); ?>

<!-- inicio do conteudo -->

<main class="container">


  <article class="row justify-content-center">
    <div class="col-10">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Fila</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Fila PHP</button>
        </li>

      </ul>
    </div>
    <div class="tab-content col-8" id="pills-tabContent">
      <div class="tab-pane fade show active corfonte" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <h2>Conceito de Fila</h2>
        <p>Fila são estruturas de dados bastante utilizadas na computação, onde o primeiro elemento a ser inserido, será também o primeiro a ser retirado. Desta forma, serão adicionados elementos no fim e removê-los pelo início.</p>
        <p>A estrutura de dados fila segue um padrão conhecido como FIFO (first-in first-out), onde o primeiro a entrar é o primeiro a sair.</p>
        <p>Entre os exemplos de uso de uma fila em um sistema, podemos citar a troca de mensagens entre computadores conectados em uma rede ou até mesmo o controle de documentos para impressão, onde as páginas serão impressas da 1 até a 100, por exemplo.</p>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <h3>Exemplo 1</h3>
        <p>Um exmplo simple é a chegada de carros em um lava rapido.</p>
        <p>O primeiro carro a chegar é o primeiro a ser limpo</p>

        <div class="row justify-content-center">
          <div class="col-10 col-sm-10 col-md-10 col-lg-5">

            <h4>Código</h4>

            <code>
              <p>$carros = new SplQueue();</p>
              <p>$carros->enqueue("carro 1");</p>
              <p>$carros->enqueue("carro 2");</p>
              <p>$carros->enqueue("carro 3");</p>
              <p>$carros->enqueue("carro 4");</p>
              <p>$carros->enqueue("carro 5");</p>
              <p>$carros->enqueue("carro 6");</p>

              <p>foreach ($carros as $fim) {</p>
              <p> echo $fim .; }</p>

            </code>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-5">
            <h4>Saida</h4>
            <?php

            $carros = new SplQueue();
            $carros->enqueue("carro 1");
            $carros->enqueue("carro 2");
            $carros->enqueue("carro 3");
            $carros->enqueue("carro 4");
            $carros->enqueue("carro 5");
            $carros->enqueue("carro 6");

            foreach ($carros as $fim) {
              echo $fim . "<br>";
            }

            ?>
          </div>

          <h3>Exemplo 2</h3>
          <p>Seguindo o exemplo do lava rapido para remover da fila segue a mesma ordem de entrada</p>
          <p>O primeiro carro a chegar vai ser o primeiro a sair</p>
          <div class="row justify-content-center">
            <div class="col-10 col-sm-10 col-md-10 col-lg-5">
              <h4>Código</h4>

              <code>
                <p>$carros = new SplQueue();</p>
                <p>$carros->enqueue("carro 1");</p>
                <p>$carros->enqueue("carro 2");</p>
                <p>$carros->enqueue("carro 3");</p>
                <p>$carros->enqueue("carro 4");</p>
                <p>$carros->enqueue("carro 5");</p>
                <p>$carros->enqueue("carro 6");</p>


                <p>$carros->dequeue();</p>


                <p>foreach ($carros as $fim) {</p>
                <p> echo $fim . ; }</p>
              </code>
            </div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-5">

              <h4>Saida</h4>
              <?php

              $carros = new SplQueue();
              $carros->enqueue("carro 1");
              $carros->enqueue("carro 2");
              $carros->enqueue("carro 3");
              $carros->enqueue("carro 4");
              $carros->enqueue("carro 5");
              $carros->enqueue("carro 6");


              $carros->dequeue();


              foreach ($carros as $fim) {
                echo $fim . "<br>";
              }

              ?>



            </div>
          </div>
        </div>

  </article>

</main>

<!-- fim do conteudo -->
<?php include_once('includes/footer.php'); ?>