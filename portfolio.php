<?php 
     global $tituloPagina;
     $tituloPagina = "Portfolio";
     include('partes/cabecalho.php'); 
?>
       <header class="pagina-cabecalho">
        <h1 class="pagina-cabecalho__titulo">Portfolio</h1>
       </header>
       <section class="pagina-conteudo">
           <p class="text-center">
                Integer vulputate vulputate nulla, nec malesuada nibh imperdiet<br>
                Integer vulputate vulputate nulla, nec malesuada nibh imperdietLorem ipsum dolor sit, amet consectetur adipisicing elit.<br>
                Integer vulputate vulputate nulla, nec malesuada nibh imperdiet<br>
          </p>
          <nav>
              <ul class="lista-trabalhos">
                  <li class="lista-trabalhos__item">
                      <a data-fancybox="gallery" href="img/portfolio/aircraft-2806035_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/aircraft-2806035_min.jpg" alt="">
                            <h2 class="lista-trabalhos__titulo">Nome do Trabalho</h2>
                      </a>
                 </li>
                 <li class="lista-trabalhos__item">
                     <a data-fancybox="gallery" href="img/portfolio/gear-2291916_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/gear-2291916_min.jpg" alt="">
                            <h2 class="lista-trabalhos__titulo">Nome do Trabalho</h2>
                     </a>
                 </li>
                 <li class="lista-trabalhos__item">
                     <a data-fancybox="gallery" href="img/portfolio/hong-kong-1990268_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/hong-kong-1990268_min.jpg" alt="">
                            <h2 class="lista-trabalhos__titulo">Nome do Trabalho</h2>
                      </a>
                 </li>
                 <li class="lista-trabalhos__item"> 
                     <a data-fancybox="gallery" href="img/portfolio/landscape-2268775_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/landscape-2268775_min.jpg" alt="">
                            <h2 class="lista-trabalhos__titulo">Nome do Trabalho</h2>
                      </a>
                 </li>
                 <li class="lista-trabalhos__item">
                     <a data-fancybox="gallery" href="img/portfolio/saddle-2614038_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/saddle-2614038_min.jpg" alt="">
                            <h2 class="lista-trabalhos__titulo">Nome do Trabalho</h2>
                      </a>
                 </li>
                 <li class="lista-trabalhos__item">
                      <a data-fancybox="gallery" href="img/portfolio/town-2430571_1920.jpg">
                           <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/town-2430571_min.jpg" alt="">
                           <h2 class="lista-trabalhos__titulo">Nome do Trabalho</h2>
                      </a>
                 </li>
              </ul>
          </nav>
       </section>
       <?php include('partes/rodape.php'); ?>