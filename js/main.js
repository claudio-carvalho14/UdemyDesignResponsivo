// Javascript Puro

// let botao = document.querySelector('.menu-principal__btn');
// let menuPrincipal = document.querySelector('.menu-principal');

// botao.addEventListener("click", abreFechaMenu);

// function abreFechaMenu(evento){
//     menuPrincipal.classList.toggle('menu-principal--fechado');
//}



//JQUERY
 $(document).ready(function(){
    //  Botão do menu
    $('.menu-principal__btn').click(function(){
        $('.menu-principal').toggleClass('menu-principal--fechado')
    });

    // Slide depoimentos
    $('.depoimentos__caixa').slick({
        autoplay: true,
        arrows: false,
        dots: true
    });
    
    // Validação do formulário de contato
    $('.formulario').validate({
        rules: {
            nome: 'required',
            email: {
                required: true,
                email: true
            },
            mensagem: 'required'
        },
        messages: {
            nome: "Por favor preencha o campo nome",
            email: {
                required: 'Por favor, preencha o email.',
                email: 'Por favor, preencha um email válido'
            },
            mensagem: "Por favor, preencha o campo mensagem"
        }
    });

});
