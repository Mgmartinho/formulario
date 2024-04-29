<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two requigreen darken-1 files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 *
 * Template Name : Ohio
 *
 * Descrição : Test
 */

get_header(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container mt-5 mb-5">
    <form class="text-uppercase needs-validation" id="myForm" novalidate>
      <!-- Linha 1 DADOS PESSOAIS-->
      <div class="row g-3">
        <div class="col-md-3">
          <div class="form-floating">
            <label for="nome">Nome Completo: *</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo" required>
            <div class="invalid-feedback">
              <!--Por favor, insira um nome válido.-->
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating">
            <label for="celular">Celular/WhatsApp:*</label>
            <input type="tel" class="form-control" id="celular" placeholder="Digite seu celular (XX)XXXXX-XXXX"
              required>
            <div class="invalid-feedback">
              <!--Por favor, insira um número de celular válido.-->
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating">
            <label for="email">Email: *</label>
            <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
            <div class="invalid-feedback">
              <!--Por favor, insira um email válido.-->
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating">
            <label for="cpf">CPF: *</label>
            <input type="text" class="form-control" id="cpf" placeholder="Digite seu CPF " required>
            <div class="invalid-feedback">
              <!--Por favor, insira um CPF válido.-->
            </div>
          </div>
        </div>
      </div>

      <!-- Linha ENDEREÇO E LINKEDIN -->
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" id="bairro" placeholder="Digite seu bairro" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" placeholder="Digite sua cidade" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="uf">UF:</label>
            <select class="form-control" id="uf" required>
              <option selected>Escolha...</option>
              <option>AC</option>
              <option>AL</option>
              <option>AP</option>
              <option>AM</option>
              <option>BA</option>
              <option>CE</option>
              <option>DF</option>
              <option>ES</option>
              <option>GO</option>
              <option>MA</option>
              <option>MT</option>
              <option>MS</option>
              <option>MG</option>
              <option>PA</option>
              <option>PB</option>
              <option>PR</option>
              <option>PE</option>
              <option>PI</option>
              <option>RJ</option>
              <option>RN</option>
              <option>RS</option>
              <option>RO</option>
              <option>RR</option>
              <option>SC</option>
              <option>SP</option>
              <option>SE</option>
              <option>TO</option>
              <!-- Adicione outras opções de estado aqui -->
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="linkedin1">LinkedIn:</label>
            <input type="text" class="form-control" id="linkedin1" placeholder="Digite seu LinkedIn">
          </div>
        </div>
      </div>

      <!-- FORMAÇÃO ACADEMICA-->
      <div class="row formacao-academica">
        <div class="col-md-12">
          <h4>Formação Acadêmica:</h4>
        </div>
      </div>
      <div class="row formacao-academica">
        <div class="col-md-3">
          <div class="form-group">
            <label for="curso1">Curso:</label>
            <input type="text" class="form-control" id="curso1" placeholder="Digite o curso" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="instituicao1">Instituição:</label>
            <input type="text" class="form-control" id="instituicao1" placeholder="Digite a instituição" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="data1">Data:</label>
            <input type="text" class="form-control" id="data1" placeholder="Digite a data" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="adicionar">&nbsp;</label>
            <button type="button" class="btn btn-primary btn-block btnAdicionarFormacao">Adicionar +</button>
          </div>
        </div>
      </div>

      <!--SISTEMAS E INFORMATICA-->
      <div class="row">
        <div class="col-md-12">
          <h4>Sistemas e Informática:</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="titulo_sistemas">Título:</label>
            <input type="text" class="form-control" id="titulo_sistemas" placeholder="Digite o título" required>
          </div>
        </div>
      </div>

      <!--CARGOS DE INTERESSE OBJETIVO-->
      <div class="row">
        <div class="col-md-12">
          <h4>Cargos de Interesse/Objetivo:</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="cargos_interesse">Cargos de Interesse/Objetivo:</label>
            <input type="text" class="form-control" id="cargos_interesse"
              placeholder="Digite os cargos de interesse ou objetivo" required>
          </div>
        </div>
      </div>

      <!-- TRAJETORIA PROFISSIONAL -->
      <div class="row">
        <div class="col-md-12">
          <h4>Trajetória Profissional:</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="nome_empresa">Nome da Empresa:</label>
            <input type="text" class="form-control" id="nome_empresa" placeholder="Digite o nome da empresa" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="cargo">Cargo:</label>
            <input type="text" class="form-control" id="cargo" placeholder="Digite o cargo" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="data_entrada">Data de Entrada:</label>
            <input type="text" class="form-control" id="data_entrada" placeholder="Digite a data de entrada" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="data_saida">Data de Saída:</label>
            <input type="text" class="form-control" id="data_saida" placeholder="Digite a data de saída">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="atividades_realizadas">Atividades Realizadas:</label>
            <textarea class="form-control" id="atividades_realizadas" rows="3"
              placeholder="Descreva as atividades realizadas" required></textarea>
          </div>
        </div>
      </div>

      <!-- Linha 5 -->
      <div class="row cursos-livres">
        <div class="col-md-12">
          <h4>Cursos Livres:</h4>
        </div>
      </div>
      <div class="row cursos-livres">
        <div class="col-md-3">
          <div class="form-group">
            <label for="curso_realizado">Curso:</label>
            <input type="text" class="form-control" id="curso_realizado1" placeholder="Digite o curso">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="instituicao_curso">Instituição:</label>
            <input type="text" class="form-control" id="instituicao_curso1" placeholder="Digite a instituição">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="data_curso">Data:</label>
            <input type="text" class="form-control" id="data_curso1" placeholder="Digite a data">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="adicionar_curso">&nbsp;</label>
            <button type="button" class="btn btn-primary btn-block btnAdicionarCurso">Adicionar +</button>
          </div>
        </div>
      </div>

      <!-- IDIOMA -->
      <div class="row idiomas">
        <div class="col-md-12">
          <h4>Idiomas:</h4>
        </div>
      </div>
      <div class="row idiomas">
        <div class="col-md-9">
          <div class="form-group">
            <label for="idioma">Idioma:</label>
            <input type="text" class="form-control" id="idioma1" placeholder="Digite o idioma" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="adicionar_idioma">&nbsp;</label>
            <button type="button" class="btn btn-primary btn-block btnAdicionarIdioma">Adicionar +</button>
          </div>
        </div>
      </div>

      <!-- Linha 7 -->
      <div class="row">
        <div class="col-md-12">
          <button id="btnCallAPI" type="button" class="btn btn-primary btn-block">Enviar</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- jQuery Mask Plugin -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  <!--Chamada para API  -->
  <script>
    // Função para validar os campos obrigatórios
    // function validarCamposObrigatorios() {
    //   let form = document.getElementById('myForm');
    //   if (form.checkValidity() === false) {
    //     event.preventDefault();
    //     event.stopPropagation();
    //     form.classList.add('was-validated');
    //     return false;
    //   }
    //   form.classList.add('was-validated');
    //   return true;
    // }

    function validarCamposObrigatorios() {
      let form = document.getElementById('myForm');
      let inputs = form.querySelectorAll('input[required]'); // Seleciona todos os campos obrigatórios
      let isValid = true;

      inputs.forEach(input => {
        if (input.type === 'email') { // Verifica se é um campo de e-mail
          if (!validarEmail(input.value)) { // Chama a função para validar o email
            isValid = false;
            input.classList.add('is-invalid'); // Adiciona classe de inválido se o email não for válido
          } else {
            input.classList.remove('is-invalid'); // Remove classe de inválido se o email for válido
          }
        }
      });

      if (form.checkValidity() === false && !isValid) { // Verifica se há campos inválidos
        event.preventDefault();
        event.stopPropagation();
        form.classList.add('was-validated');
        return false;
      }
      form.classList.add('was-validated');
      return true;
    }

    function validarEmail(email) {
      // Expressão regular para validar e-mail
      let re = /\S+@\S+\.\S+/;
      return re.test(email);
    }

    // Função para capturar os valores dos campos do formulário
    function capturarValoresFormulario() {





      let dadosFormulario = {
        // DADOS PESSOAIS
        firstname: document.getElementById("nome").value,
        phone: document.getElementById("celular").value,
        email: document.getElementById("email").value,
        cpf: document.getElementById("cpf").value,
        bairro: document.getElementById("bairro").value,
        cidade: document.getElementById("cidade").value,
        uf: document.getElementById("uf").value,
        linkedin1: document.getElementById("linkedin1").value,
        titulo_sistemas: document.getElementById("titulo_sistemas").value,
        cargos_interesse: document.getElementById("cargos_interesse").value,
        nome_empresa: document.getElementById("nome_empresa").value,
        cargo: document.getElementById("cargo").value,
        data_entrada: document.getElementById("data_entrada").value,
        data_saida: document.getElementById("data_saida").value,
        atividades_realizadas: document.getElementById("atividades_realizadas").value,
      };


      //Formacao Academica
      for (var i = 1; i < 10; i++) {
        var elemento = document.getElementById("curso" + i);
        if (elemento) {
          dadosFormulario["curso" + i] = elemento.value;
        }

        var elemento = document.getElementById("data" + i);
        if (elemento) {
          dadosFormulario["data" + i] = elemento.value;
        }

        var elemento = document.getElementById("instituicao" + i);
        if (elemento) {
          dadosFormulario["instituicao" + i] = elemento.value;
        }
      }

      //TODO: Cursos Livres
      for (var i = 1; i < 10; i++) {
        var elemento = document.getElementById("curso_realizado" + i);
        if (elemento) {
          dadosFormulario["curso_realizado" + i] = elemento.value;
        }

        var elemento = document.getElementById("instituicao_curso" + i);
        if (elemento) {
          dadosFormulario["instituicao_curso" + i] = elemento.value;
        }

        var elemento = document.getElementById("data_curso" + i);
        if (elemento) {
          dadosFormulario["data_curso" + i] = elemento.value;
        }
      }

      //TODO: Idioma
      for (var i = 1; i < 10; i++) {
        var elemento = document.getElementById("idioma" + i);
        if (elemento) {
          dadosFormulario["idioma" + i] = elemento.value;
        }
      }


      console.log("dadosFormulario: ", dadosFormulario);

      return dadosFormulario;
    }
    // Event listener para o botão de envio do formulário
    document.getElementById('btnCallAPI').addEventListener('click', function () {
      if (validarCamposObrigatorios()) {
        let dadosFormulario = capturarValoresFormulario();
        // Aqui você pode chamar sua API para enviar os dados do formulário
        console.log("Dados do formulário:", dadosFormulario);
        // Exemplo de chamada de API com jQuery

        const options = {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Basic YXBpc2VydmljZWZvcm06N2xZK1RUUSc5N1J3'
          },
          body: JSON.stringify(dadosFormulario)
        };

        // Fazer a solicitação para a API
        fetch("https://conteudo.triadecarreira.com.br/api/contacts/new", options)
          .then(response => {
            if (!response.ok) {
              throw new Error('Erro ao enviar os dados para a API');
            }
            return response.json();
          })
          .then(data => {
            // Tratar a resposta da API, se necessário
            console.log('Dados enviados com sucesso:', data);
            // Aqui você pode fazer algo após o envio bem-sucedido, como exibir uma mensagem de sucesso ou redirecionar o usuário para outra página
          })
          .catch(error => {
            console.error('Erro:', error);
            // Aqui você pode lidar com o erro, como exibir uma mensagem de erro para o usuário
          }).finally(() => {
            // window.location.href = "https://triadecarreira.com.br/obrigado/";
          });
      }

    });

    $(document).ready(function () {
      $('#celular').mask('(00)00000-0000');
      $('#cpf').mask('000.000.000-00', {
        reverse: true
      });
      $('#data1').mask('00/00/0000');
      $('#data_saida').mask('00/00/0000');
      $('#data_entrada').mask('00/00/0000');
      $('#data_curso1').mask('00/00/0000');

      var formacaoCount = 1;
      $(".btnAdicionarFormacao").click(function () {
        formacaoCount++;
        var newRow = '<div class="row formacao-academica">' +
          '<div class="col-md-3">' +
          '<div class="form-group">' +
          '<label for="curso' + formacaoCount + '">Curso:</label>' +
          '<input type="text" class="form-control" id="curso' + formacaoCount + '" placeholder="Digite o curso">' +
          '</div>' +
          '</div>' +
          '<div class="col-md-3">' +
          '<div class="form-group">' +
          '<label for="instituicao' + formacaoCount + '">Instituição:</label>' +
          '<input type="text" class="form-control" id="instituicao' + formacaoCount + '" placeholder="Digite a instituição">' +
          '</div>' +
          '</div>' +
          '<div class="col-md-3">' +
          '<div class="form-group">' +
          '<label for="data' + formacaoCount + '">Data:</label>' +
          '<input type="text" class="form-control" id="data' + formacaoCount + '" placeholder="Digite a data">' +
          '</div>' +
          '</div>' +
          '<div class="col-md-3">' +
          '<div class="form-group">' +
          '<label for="adicionar">&nbsp;</label>' +
          '<button type="button" class="btn btn-danger btn-block btnRemoverFormacao">Remover</button>' +
          '</div>' +
          '</div>' +
          '</div>';
        $(".formacao-academica:last").after(newRow);
        // Aplicar a máscara de data no novo campo de data
        $('#data' + formacaoCount).mask('00/00/0000');
      });

      // Remover campos de formação acadêmica
      $(".container").on('click', '.btnRemoverFormacao', function () {
        $(this).closest('.formacao-academica').remove();
      });

      var cursosCount = 1;
      $(".btnAdicionarCurso").click(function () {
        cursosCount++; //CURSOS LIVRES
        var newRow = '<div class="row cursos-livres">' +
          '<div class="col-md-3">' +
          '<div class="form-group">' +
          '<label for="curso_realizado' + cursosCount + '">Curso:</label>' +
          '<input type="text" class="form-control" id="curso_realizado' + cursosCount + '" placeholder="Digite o curso">' +
          '</div>' +
          '</div>' +
          '<div class="col-md-3">' +
          '<div class="form-group">' +
          '<label for="instituicao_curso' + cursosCount + '">Instituição:</label>' +
          '<input type="text" class="form-control" id="instituicao_curso' + cursosCount + '" placeholder="Digite a instituição">' +
          '</div>' +
          '</div>' +
          '<div class="col-md-3">' +
          '<div class="form-group">' +
          '<label for="data_curso' + cursosCount + '">Data:</label>' +
          '<input type="text" class="form-control" id="data_curso' + cursosCount + '" placeholder="Digite a data">' +
          '</div>' +
          '</div>' +
          '<div class="col-md-3">' +
          '<div class="form-group">' +
          '<label for="adicionar_curso">&nbsp;</label>' +
          '<button type="button" class="btn btn-danger btn-block btnRemoverCurso">Remover</button>' +
          '</div>' +
          '</div>' +
          '</div>';
        $(".cursos-livres:last").after(newRow);
        // Aplicar a máscara de data no novo campo de data
        $('#data_curso' + cursosCount).mask('00/00/0000');
      });

      $(".container").on('click', '.btnRemoverCurso', function () {
        $(this).closest('.cursos-livres').remove();
      });

      var idiomasCount = 1;
      $(".btnAdicionarIdioma").click(function () {
        idiomasCount++; //IDIOMAS
        var newRow = '<div class="row idiomas">' +
          '<div class="col-md-9">' +
          '<div class="form-group">' +
          '<label for="idioma' + idiomasCount + '">Idioma:</label>' +
          '<input type="text" class="form-control" id="idioma' + idiomasCount + '" placeholder="Digite o idioma">' +
          '</div>' +
          '</div>' +
          '<div class="col-md-3">' +
          '<div class="form-group">' +
          '<label for="adicionar_idioma">&nbsp;</label>' +
          '<button type="button" class="btn btn-danger btn-block btnRemoverIdioma">Remover</button>' +
          '</div>' +
          '</div>' +
          '</div>';
        $(".idiomas:last").after(newRow);
      });

      $(".container").on('click', '.btnRemoverIdioma', function () {
        $(this).closest('.idiomas').remove();
      });

    });

  </script>
</body>

</html>


<?php get_footer(); ?>