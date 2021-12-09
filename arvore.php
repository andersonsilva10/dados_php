<?php include_once('includes/header.php'); ?>

<!-- inicio do conteudo -->

<main class="container">


  <article>

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Árvore</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Árvore PHP</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <p>Árvore é uma estrutura de dados que herda as características das topologias em árvore. Conceptualmente diferente das listas encadeadas, em que os dados se encontram numa sequência, nas árvores os dados estão dispostos de forma hierárquica.</p>
        <p>A árvore é composta por um elemento principal chamado raiz, que possui ligações para outros elementos, que são denominados de galhos ou filhos. Estes galhos levam a outros elementos que também possuem outros galhos. O elemento que não possui galhos é conhecido como folha ou nó terminal.</p>
        <p>O número máximo de galhos em um elemento é chamado ordem da árvore. Uma árvore binária é aquela de ordem 2, i.e., em que cada elemento possui no máximo 2 galhos.</p>
        <p>Uma das operações importantes consiste em percorrer cada elemento da árvore uma única vez. Esse percurso, também chamado de travessia da árvore, pode ser feito em pré-ordem (os filhos de um nó são processados após o nó) ou em pós-ordem (os filhos são processados antes do nó). Em árvores binárias é possível ainda fazer uma travessia em-ordem, em que se processa o filho à esquerda, o nó, e finalmente o filho à direita.</p>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">teste2</div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">teste3</div>
    </div>

  </article>

</main>

<!-- fim do conteudo -->
<?php include_once('includes/footer.php'); ?>