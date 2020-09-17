 <?php 
     global $tituloPagina;
     $tituloPagina = "Contato";
     include('partes/cabecalho.php');
     $nome = '';
     $email = '';
     $mensagem = '';
     $erroFormulario = '';
     $sucessoFormulario = '';
     if( isset($_POST['submit']) ){
          $nome = $_POST['nome'];
          $email = $_POST['email'];
          $mensagem = $_POST['mensagem'];
          if(
               $nome != '' 
               && $email != ''
               && $mensagem != '')
          {
                    // usuário preencheu corretamente
                    $mensagemEmail = 'Nome: '. $nome . ' - ';
                    $mensagemEmail .= 'Email: '. $email . ' - ';
                    $mensagemEmail .= 'Mensagem: '. $mensagem;
                    if(mail('contato@site.com.br', 'Mensagem de contato', $mensagemEmail)){ // Endereço de envio, assunto e mensagem
                         //Email enviado
                         $sucessoFormulario = "Mensagem enviada com sucesso";
                    }
                    else{
                         // email nao enviado
                         $erroFormulario = "Falha ao enviar a mensagem, tente mais tarde ou através do email xxx.xxx.com";
                    }
          
          }
          else{
                    // usuário não preencheu todos os campos
                    $erroFormulario = "Por favor verifique o preenchimento dos campos";
          }
     }
?>
       <header class="pagina-cabecalho">
           <h1 class="pagina-cabecalho__titulo">Contato</h1>
       </header>
       <section class="container pagina-conteudo"> 
           <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique hic ea provident at pariatur omnis dolorum id blanditiis</p>
           <form action="contato.php" class="formulario" method="post">
                <?php if($erroFormulario != ''): ?>
                    <div class="formulario__erro">
                         <?php echo $erroFormulario ?>
                    </div>
                <?php endif; ?>
                <?php if($sucessoFormulario != ''): ?>
                    <div class="formulario__sucesso">
                         <?php echo $sucessoFormulario ?>
                    </div>
                <?php endif; ?>
               <div class="formulario__grupo formulario__grupo--coluna-esq">
                    <label class="formulario__label" for="nome">Nome</label><br>
                    <input class="formulario__campo" id="nome" type="text" name="nome">
               </div>
               <div class="formulario__grupo formulario__grupo--coluna-dir">
                    <label class="formulario__label" for="email">E-mail</label><br>
                    <input class="formulario__campo" id="email" type="email" name="email">
               </div>
               <div class="formulario__grupo">
                    <label class="formulario__label" for="mensagem">Mensagem</label><br>
                    <textarea class="formulario__campo" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
               </div>
               <input type="submit" class="formulario__botao" value="Enviar" name="submit">
           </form>
           <p class="text-center">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Similique hic ea provident at pariatur omnis dolorum id blanditiis
                Similique hic ea provident at pariatur omnis dolorum id blanditiis
           </p>
       </section>
       <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1733.973479952498!2d-43.34181685364089!3d-22.944263207524333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd8325c12e781%3A0x2e4fd360941c28ab!2sEstr.%20de%20Jacarepagu%C3%A1%2C%207357%20-%20Freguesia%20de%20Jacarepagu%C3%A1%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2022755-155!5e0!3m2!1spt-BR!2sbr!4v1594039230264!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <?php include('partes/rodape.php'); ?>