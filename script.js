/* *** CRIA UM EFEITO DE ROLAGEM SUAVE AO CLICAR NOS LINKS DA PÁGINA *** */
$(document).ready(function () {
  $('a[href^="#"]').on('click', function (event) {
    let target = $(this.getAttribute('href'));
    if (target.length) {
      event.preventDefault();
      $('html, body').stop().animate({
        scrollTop: target.offset().top
      }, 1000);
    }
  });
});

/* *** ATUALIZA O ANO NO RODAPÉ DO SITE *** */
document.getElementById("ano-atual").textContent = new Date().getFullYear();

function mostrarConteudo(conteudo) {
  let divsImagens = document.querySelectorAll('.imagem-texto > div');
  divsImagens.forEach(function (div) {
    div.style.display = 'none';
  });

  let divSelecionada = document.querySelector('.' + conteudo);
  divSelecionada.style.display = 'block';

  let menuItems = document.querySelectorAll('.menu-item');
  menuItems.forEach(function (item) {
    item.classList.remove('active');
  });

  let itemClicado = document.querySelector('[onclick="mostrarConteudo(\'' + conteudo + '\')"]');
  itemClicado.classList.add('active');
}

function toggleAnswer(id) {
  let answer = document.getElementById(id + '-answer');
  if (answer.style.display === 'none') {
    answer.style.display = 'block';
  } else {
    answer.style.display = 'none';
  }
}

function toggleMenu() {
  let linksHeader = document.getElementById("linksHeader");
  if (linksHeader.style.display === "block") {
    linksHeader.style.display = "none";
  } else {
    linksHeader.style.display = "block";
  }
}
