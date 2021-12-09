<?php include_once('includes/header.php'); ?>

<!-- inicio do conteudo -->

<main class="container">


  <article>

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
          type="button" role="tab" aria-controls="pills-home" aria-selected="true">Árvore</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
          type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Árvore PHP</button>
      </li>

    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <p>Árvore é uma estrutura de dados que herda as características das topologias em árvore. Conceptualmente
          diferente das listas encadeadas, em que os dados se encontram numa sequência, nas árvores os dados estão
          dispostos de forma hierárquica.</p>
        <p>A árvore é composta por um elemento principal chamado raiz, que possui ligações para outros elementos, que
          são denominados de galhos ou filhos. Estes galhos levam a outros elementos que também possuem outros galhos. O
          elemento que não possui galhos é conhecido como folha ou nó terminal.</p>
        <p>O número máximo de galhos em um elemento é chamado ordem da árvore. Uma árvore binária é aquela de ordem 2,
          i.e., em que cada elemento possui no máximo 2 galhos.</p>
        <p>Uma das operações importantes consiste em percorrer cada elemento da árvore uma única vez. Esse percurso,
          também chamado de travessia da árvore, pode ser feito em pré-ordem (os filhos de um nó são processados após o
          nó) ou em pós-ordem (os filhos são processados antes do nó). Em árvores binárias é possível ainda fazer uma
          travessia em-ordem, em que se processa o filho à esquerda, o nó, e finalmente o filho à direita.</p>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <h3>Exemplo</h3>
        <div class="row justify-content-center">
          <div class="col-10 col-sm-10 col-md-10 col-lg-5">
            <h4>Código</h4>
            <code>


              <p>class MangaMaisVendidos extends SplHeap</p>
              <p>{</p>
              <div class="row justify-content-center">
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 ">
                  <p> public function compare($array1, $array2)</p>
                  <p>{</p>
                  <p> $values1 = array_values($array1);</p>
                  <p> $values2 = array_values($array2);</p>
                  <p> if ($values1[0] === $values2[0]) return 0;</p>
                  <p> return $values1[0] < $values2[0] ? -1 : 1;</p> <p>}</p>
                </div>
              </div>
              <p>}</p>

              <br />
              <p>$arvore = new MangaMaisVendidos();</p>
              <p>$arvore->insert(array ('One Piece' => 7));</p>
              <p>$arvore->insert(array ('Chainsaw Man' => 5.21));</p>
              <p>$arvore->insert(array ('Tokyo Revengers' => 24.98));</p>
              <p>$arvore->insert(array ('Haikyu!' => 4.35));</p>
              <p>$arvore->insert(array ('Jujutsu Kaisen' => 30.91));</p>
              <p>$arvore->insert(array ('My Hero Academia' => 7.02));</p>
              <p>$arvore->insert(array ('Kimetsu no Yaiba' => 29.5));</p>
              <p>$arvore->insert(array ('Kingdom' => 4.67));</p>
              <p>$arvore->insert(array ('Spy Family' => 4.97));</p>
              <p>$arvore->insert(array ('Atack on Titan' => 7.33));</p>

              <p>$arvore->top();</p>
              <br />

              <p>foreach ($arvore as $item) {</p>
              <div class="row justify-content-center">
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 ">
                  <p>foreach ($item as $key => $value) {</p>
                  <p class="offset-1">echo "$key".":"."$value"."</br>";</p>
                  <p>}</p>
                </div>
              </div>
              <p>}</p>


            </code>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-5">
            <h4>Saida</h4>
            <?php

              class MangaMaisVendidos extends SplHeap
              {

                public function compare($array1, $array2)
                {
                  $values1 = array_values($array1);
                  $values2 = array_values($array2);
                  if ($values1[0] === $values2[0]) return 0;
                  return $values1[0] < $values2[0] ? -1 : 1;
                }
              }   


                $arvore = new MangaMaisVendidos();
                $arvore->insert(array ('One Piece' => 7));
                $arvore->insert(array ('Chainsaw Man' => 5.21));
                $arvore->insert(array ('Tokyo Revengers' => 24.98));
                $arvore->insert(array ('Haikyu!' => 4.35));
                $arvore->insert(array ('Jujutsu Kaisen' => 30.91));
                $arvore->insert(array ('My Hero Academia' => 7.02));
                $arvore->insert(array ('Kimetsu no Yaiba' => 29.5));
                $arvore->insert(array ('Kingdom' => 4.67));
                $arvore->insert(array ('Spy Family' => 4.97));
                $arvore->insert(array ('Atack on Titan' => 7.33));


                $arvore->top();

              foreach ($arvore as $item) {
                  foreach ($item as $key => $value) {
                      echo "$key".":"."$value"."</br>";
                  }
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