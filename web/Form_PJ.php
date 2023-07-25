<?php
    require_once "topo_sem_link.php";
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<?php
  require_once "../DAO/QuestionarioPJ.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $que_1_1 = $_POST["que_1_1"];
    $que_1_2 = isset($_POST["que_1_2"]) && !empty($_POST["que_1_2"]) ? $_POST["que_1_2"] : '0';
    $que_1_3 = isset($_POST["que_1_3"]) && !empty($_POST["que_1_3"]) ? $_POST["que_1_3"] : '0';
    $que_1_texto = isset($_POST["que_1_texto"]) && !empty($_POST["que_1_texto"]) ? $_POST["que_1_texto"] : 'nda';
    $que_2_1 = $_POST["que_2_1"];
    $que_2_2 = isset($_POST["que_2_2"]) && !empty($_POST["que_2_2"]) ? $_POST["que_2_2"] : '0';
    $que_2_3 = isset($_POST["que_2_3"]) && !empty($_POST["que_2_3"]) ? $_POST["que_2_3"] : '0';
    $que_2_texto = isset($_POST["que_2_texto"]) && !empty($_POST["que_2_texto"]) ? $_POST["que_2_texto"] : 'nda';
    $que_3_1 = $_POST["que_3_1"];
    $que_3_2 = isset($_POST["que_3_2"]) && !empty($_POST["que_3_2"]) ? $_POST["que_3_2"] : '0';
    $que_3_3 = isset($_POST["que_3_3"]) && !empty($_POST["que_3_3"]) ? $_POST["que_3_3"] : '0';
    $que_3_texto = isset($_POST["que_3_texto"]) && !empty($_POST["que_3_texto"]) ? $_POST["que_3_texto"] : 'nda';
    $que_4_1 = $_POST["que_4_1"];
    $que_4_natureza = isset($_POST["que_4_natureza"]) && !empty($_POST["que_4_natureza"]) ? $_POST["que_4_natureza"] : 'nda';
    $que_4_parte = isset($_POST["que_4_parte"]) && !empty($_POST["que_4_parte"]) ? $_POST["que_4_parte"] : '0';
    $que_4_decisao = isset($_POST["que_4_decisao"]) && !empty($_POST["que_4_decisao"]) ? $_POST["que_4_decisao"] : '0';
    $que_4_texto = isset($_POST["que_4_texto"]) && !empty($_POST["que_4_texto"]) ? $_POST["que_4_texto"] : 'nda';
    $que_5_1 = $_POST["que_5_1"];
    $que_5_natureza = isset($_POST["que_5_natureza"]) && !empty($_POST["que_5_natureza"]) ? $_POST["que_5_natureza"] : 'nda';
    $que_5_parte = isset($_POST["que_5_parte"]) && !empty($_POST["que_5_parte"]) ? $_POST["que_5_parte"] : '0';
    $que_5_decisao = isset($_POST["que_5_decisao"]) && !empty($_POST["que_5_decisao"]) ? $_POST["que_5_decisao"] : '0';
    $que_5_texto = isset($_POST["que_5_texto"]) && !empty($_POST["que_5_texto"]) ? $_POST["que_5_texto"] : 'nda';
    $que_6_1 = $_POST["que_6_1"];
    $que_6_texto = isset($_POST["que_6_texto"]) && !empty($_POST["que_6_texto"]) ? $_POST["que_6_texto"] : 'nda';
    $que_7_2 = isset($_POST["que_7_2"]) && !empty($_POST["que_7_2"]) ? $_POST["que_7_2"] : '0';
    $que_7_3 = isset($_POST["que_7_3"]) && !empty($_POST["que_7_3"]) ? $_POST["que_7_3"] : '0';
    $que_7_4 = isset($_POST["que_7_4"]) && !empty($_POST["que_7_4"]) ? $_POST["que_7_4"] : '0';
    $que_7_5 = isset($_POST["que_7_5"]) && !empty($_POST["que_7_5"]) ? $_POST["que_7_5"] : '0';
    $que_7_6 = isset($_POST["que_7_6"]) && !empty($_POST["que_7_6"]) ? $_POST["que_7_6"] : '0';
    $que_7_texto = isset($_POST["que_7_texto"]) && !empty($_POST["que_7_texto"]) ? $_POST["que_7_texto"] : 'nda';
    $que_8_1 = $_POST["que_8_1"];
    $que_8_2 = isset($_POST["que_8_2"]) && !empty($_POST["que_8_2"]) ? $_POST["que_8_2"] : '0';
    $que_8_3 = isset($_POST["que_8_3"]) && !empty($_POST["que_8_3"]) ? $_POST["que_8_3"] : '0';
    $que_8_4 = isset($_POST["que_8_4"]) && !empty($_POST["que_8_4"]) ? $_POST["que_8_4"] : '0';
    $que_8_5 = isset($_POST["que_8_5"]) && !empty($_POST["que_8_5"]) ? $_POST["que_8_5"] : '0';
    $que_8_6 = isset($_POST["que_8_6"]) && !empty($_POST["que_8_6"]) ? $_POST["que_8_6"] : '0';
    $que_8_7 = isset($_POST["que_8_7"]) && !empty($_POST["que_8_7"]) ? $_POST["que_8_7"] : '0';
    $que_8_8 = isset($_POST["que_8_8"]) && !empty($_POST["que_8_8"]) ? $_POST["que_8_8"] : '0';
    $que_8_9 = isset($_POST["que_8_9"]) && !empty($_POST["que_8_9"]) ? $_POST["que_8_9"] : '0';
    $que_8_texto = isset($_POST["que_8_texto"]) && !empty($_POST["que_8_texto"]) ? $_POST["que_8_texto"] : 'nda';
    $que_9_1 = $_POST["que_9_1"];
    $que_9_texto = isset($_POST["que_9_texto"]) && !empty($_POST["que_9_texto"]) ? $_POST["que_9_texto"] : 'nda';
    $que_10_1 = $_POST["que_10_1"];
    $que_10_texto = isset($_POST["que_10_texto"]) && !empty($_POST["que_10_texto"]) ? $_POST["que_10_texto"] : 'nda';
    $que_11_texto = $_POST["que_11_texto"];
    
    $questionarioPJDAO = new QuestionarioPJDAO();

    $conclui = $questionarioPJDAO->inserirQuestionario($que_1_1, $que_1_2, $que_1_3, $que_1_texto, $que_2_1, $que_2_2, $que_2_3, $que_2_texto, $que_3_1, $que_3_2, $que_3_3, $que_3_texto, 
    $que_4_1, $que_4_natureza, $que_4_parte, $que_4_decisao, $que_4_texto, $que_5_1, $que_5_natureza, $que_5_parte, $que_5_decisao, $que_5_texto, $que_6_1, $que_6_texto,
    $que_7_2, $que_7_3, $que_7_4, $que_7_5, $que_7_6, $que_7_texto, $que_8_1, $que_8_2, $que_8_3, $que_8_4, $que_8_5, $que_8_6, $que_8_7, $que_8_8, $que_8_9, 
    $que_8_texto, $que_9_1, $que_9_texto, $que_10_1, $que_10_texto, $que_11_texto);

    if ($conclui >= 1) {
        echo "Salvo";
    } else {
        echo "Erro ao inserir o questionário PF." . mysqli_error($conexao);
    }
  } else {
      $que_1_2 = '0';
      $que_1_3 = '0';
      $que_1_texto = 'nda';
      $que_2_2 = '0';
      $que_2_3 = '0';
      $que_2_texto = 'nda';
      $que_3_2 = '0';
      $que_3_3 = '0';
      $que_3_texto = 'nda';
      $que_4_natureza = 'nda';
      $que_4_parte = '0';
      $que_4_decisao = '0';
      $que_4_texto = 'nda';
      $que_5_natureza = 'nda';
      $que_5_parte = '0';
      $que_5_decisao = '0';
      $que_5_texto = 'nda';
      $que_6_texto = 'nda';
      $que_7_2 = '0';
      $que_7_3 = '0';
      $que_7_4 = '0';
      $que_7_5 = '0';
      $que_7_6 = '0';
      $que_7_texto = 'nda';
      $que_8_2 = '0';
      $que_8_3 = '0';
      $que_8_4 = '0';
      $que_8_5 = '0';
      $que_8_6 = '0';
      $que_8_7 = '0';
      $que_8_8 = '0';
      $que_8_9 = '0';
      $que_8_texto = 'nda';
      $que_9_texto = 'nda';
      $que_10_texto = 'nda';
      $que_11_texto = 'nda';
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Formulário</title>
        <link rel="stylesheet" href="css/Form_pj.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </head>
    <body>
        <script src="js/Form_pj.js"></script>
        <form method="post" action="  ">
          <form method="post" action="../DAO/QuestionarioPJ.php">
            <div class="form">
              <div class="titulo-form">
                Auto Declaração Compliance
              </div>
                <!--
                <div class="container1">
                    <div class="retangulo"></div>
                </div>
                    <div class="linha"></div>
                -->
                <div class="pagina">
                    <form method="post" action=".php">
                        <div class="opcoes">
                            <l>1.A empresa já teve algum problema ambiental?</l><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="que_1_1" value="1" id="pro1" onclick="showSecondCheckbox()" onchange="showHideTextBox()" <?php if ($que_1_1 == '1') { echo ''; } ?>>
                                <label class="form-check-label" for="pro1" id="Sim">
                                  Sim
                                </label>
                                <div class="Nao">
                                  <input class="form-check-input" type="radio" name="que_1_1" value="0" id="N1" onclick="hideElements('N1'); limparCampos()" <?php if ($que_1_1 == '0') { echo ''; } ?>>
                                  <label class="form-check-label" for="N1">
                                    Não
                                  </label><br>
                                </div>
                                <div class="secondCheckboxContainer_1" id="secondCheckboxContainer1" style="display: none;">
                                  <div class="form-check">
                                    <label class="form-check-label" for="secondCheckbox">
                                      Há algum processo ambiental em andamento?
                                    </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                    <input class="form-check-input" type="radio" name="que_1_2"  value="1" id="secondCheckbox2" <?php if ($que_1_2 == '1') { echo ''; } ?>>
                                    <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                      Sim
                                    </label>
                                    <div class="checkbox1">
                                      <input class="form-check-input" type="radio" name="que_1_2" value="0" id="secondCheckbox2" <?php if ($que_1_2 == '0') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                        Não
                                      </label><br>
                                    </div>
                                  </div>
                                  <div id="form-check2" class="form-check">
                                    <label class="form-check-label" for="secondCheckbox2">
                                      Já houve decisão judicial?
                                    </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                    <input class="form-check-input" type="radio" name="que_1_3" value="1" id="secondCheckbox2" <?php if ($que_1_3 == '1') { echo ''; } ?>>
                                    <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                      Sim
                                    </label>
                                    <div class="checkbox1">
                                      <input class="form-check-input" type="radio" name="que_1_3" value="0" id="secondCheckbox2" <?php if ($que_1_3 == '0') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                        Não
                                      </label><br>
                                    </div>
                                  </div>
                                </div>
                                <div id="caixa-texto-pro1" class="hidden">
                                  <div class="form-floating">
                                    <textarea class="form-control" name="que_1_texto" placeholder="." value="<?php echo $que_1_texto; ?>" id="floatingTextarea1" style="height: 100px; width: 850px;"></textarea>
                                    <label for="floatingTextarea1">Comente sobre</label>
                                  </div>
                                </div>
                              </div>
                              <l>2. Na empresa já ocorreu algum vazamento de dados pessoais?</l><br>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="que_2_1" value="1" id="pro2" onclick="showSecondCheckbox()" onchange="showHideTextBox()" <?php if ($que_2_1 == '1') { echo ''; } ?>>
                                <label class="form-check-label" for="pro2" id="Sim">
                                  Sim
                                </label>
                                <div class="Nao">
                                  <input class="form-check-input" type="radio" name="que_2_1" value="0" id="N2" onclick="hideElements('N2'); limparCampos()" <?php if ($que_2_2 == '0') { echo ''; } ?>>
                                  <label class="form-check-label" for="N2">
                                    Não
                                  </label><br>
                                </div>
                                <div class="secondCheckboxContainer_2" id="secondCheckboxContainer2" style="display: none;">
                                  <div class="form-check">
                                    <label class="form-check-label" for="secondCheckbox">
                                      A algum processo judicial?
                                    </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                    <input class="form-check-input" type="radio" name="que_2_2" value="1" id="secondCheckbox2" <?php if ($que_2_2 == '1') { echo ''; } ?>>
                                    <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                      Sim
                                    </label>
                                    <div class="checkbox1">
                                      <input class="form-check-input" type="radio" name="que_2_2" value="0" id="secondCheckbox2" <?php if ($que_2_2 == '0') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                        Não
                                      </label><br>
                                    </div>
                                  </div>
                                  <div id="form-check2" class="form-check">
                                    <label class="form-check-label" for="secondCheckbox2">
                                      Já houve decisão judicial?
                                    </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                    <input class="form-check-input" type="radio" name="que_2_3" value="1" id="secondCheckbox2" <?php if ($que_2_3 == '1') { echo ''; } ?>>
                                    <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                      Sim
                                    </label>
                                    <div class="checkbox1">
                                      <input class="form-check-input" type="radio" name="que_2_3" value="0" id="secondCheckbox2" <?php if ($que_2_3 == '0') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                        Não
                                      </label><br>
                                    </div>
                                  </div>
                                </div>
                                <div id="caixa-texto-pro2" class="hidden">
                                  <div class="form-floating">
                                    <textarea class="form-control" name="que_2_text" placeholder="." value="<?php echo $que_2_texto; ?>" id="floatingTextarea2" style="height: 100px; width: 850px;"></textarea>
                                    <label for="floatingTextarea2">Comente sobre</label>
                                  </div>
                                </div>
                              </div>
                              <l>3. Na empresa, houve alguma queixa de atos inapropriados na internet?</l><br>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="que_3_1" value="1" id="pro3" onclick="showSecondCheckbox()" onchange="showHideTextBox()" <?php if ($que_3_1 == '1') { echo ''; } ?>>
                                <label class="form-check-label" for="pro3" id="Sim">
                                  Sim
                                </label>
                                <div class="Nao">
                                  <input class="form-check-input" type="radio" name="que_3_1" value="0" id="N3" onclick="hideElements('N3'); limparCampos()" <?php if ($que_3_1 == '0') { echo ''; } ?>>
                                  <label class="form-check-label" for="N3">
                                    Não
                                  </label><br>
                                </div>
                                <div class="secondCheckboxContainer_3" id="secondCheckboxContainer3" style="display: none;">
                                  <div class="form-check">
                                    <label class="form-check-label" for="secondCheckbox">
                                      A algum processo judicial?
                                    </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                    <input class="form-check-input" type="radio" name="que_3_2" value="1" id="secondCheckbox2" <?php if ($que_3_2 == '1') { echo ''; } ?>>
                                    <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                      Sim
                                    </label>
                                    <div class="checkbox1">
                                      <input class="form-check-input" type="radio" name="que_3_2" value="0" id="secondCheckbox2" <?php if ($que_3_2 == '0') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                        Não
                                      </label><br>
                                    </div>
                                  </div>
                                  <div id="form-check2" class="form-check">
                                    <label class="form-check-label" for="secondCheckbox2">
                                      Já houve decisão judicial?
                                    </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                    <input class="form-check-input" type="radio" name="que_3_3" value="1" id="secondCheckbox2" <?php if ($que_3_3 == '1') { echo ''; } ?>>
                                    <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                      Sim
                                    </label>
                                    <div class="checkbox1">
                                      <input class="form-check-input" type="radio" name="que_3_3" value="0" id="secondCheckbox2" <?php if ($que_3_3 == '0') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                        Não
                                      </label><br>
                                    </div>
                                  </div>
                                </div>
                                <div id="caixa-texto-pro3" class="hidden">
                                  <div class="form-floating">
                                    <textarea class="form-control" name="que_3_texto" placeholder="." value="<?php echo $que_3_texto; ?>" id="floatingTextarea3" style="height: 100px; width: 850px;"></textarea>
                                    <label for="floatingTextarea3">Comente sobre</label>
                                  </div>
                                </div>
                              </div>
                            <l>4. Na empresa, houve alguma queixa ou processo criminal?</l><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="que_4_1" value="1" id="pro4" onclick="showSecondCheckbox()" onchange="showHideTextBox()" <?php if ($que_4_1 == '1') { echo ''; } ?>>
                                <label class="form-check-label" for="pro4" id="Sim">
                                  Sim
                                </label>
                                <div class="Nao">
                                  <input class="form-check-input" type="radio" name="que_4_1" value="0" id="N4" onclick="hideElements('N4'); limparCampos()" <?php if ($que_4_1 == '0') { echo ''; } ?>>
                                  <label class="form-check-label" for="N4">
                                    Não
                                  </label><br>
                                </div>
                                <div id="caixa-texto-pro4" class="hidden">
                                  <div class="form-floating">
                                    <textarea class="form-control" name="que_4_natureza" placeholder="." value="<?php echo $que_4_natureza; ?>" id="natureza4" style="height: 20px; width: 850px;"></textarea>
                                    <label for="natureza4">Qual a natureza do processo?</label>
                                  </div>
                                </div>
                                <div class="secondCheckboxContainer_4" id="secondCheckboxContainer4" style="display: none;">
                                  <h5 style="margin: 20px 0 5px 0;">A empresa é qual das partes?</h5>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="0" name="que_4_parte" id="secondCheckbox_4_1" <?php if ($que_4_parte == '0') { echo ''; } ?>>
                                    <label class="form-check-label" for="secondCheckbox_4_1">
                                      Réu
                                    </label><br>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="1" name="que_4_parte" id="secondCheckbox_4_1" <?php if ($que_4_parte == '1') { echo ''; } ?>>
                                    <label class="form-check-label" for="secondCheckbox_4_1" id="testemunha_reu">
                                      Testemunha do réu
                                    </label><br>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="2" name="que_4_parte" id="secondCheckbox_4_1" <?php if ($que_4_parte == '2') { echo ''; } ?>>
                                    <label class="form-check-label" for="secondCheckbox_4_1">
                                      Testemunha do reclamante
                                    </label><br>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" value="3" type="radio" name="que_4_parte" id="secondCheckbox_4_1" <?php if ($que_4_parte == '3') { echo ''; } ?>>
                                    <label class="form-check-label" for="secondCheckbox_4_1">
                                      Reclamante
                                    </label><br>
                                  </div>
                                  <div class="form-check" id="text-p5">
                                    <label class="form-check-label" for="secondCheckbox">
                                      Já houve decisão judicial?
                                    </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                    <input class="form-check-input" type="radio" name="que_4_decisao" value="1" id="secondCheckbox2" <?php if ($que_4_decisao == '1') { echo ''; } ?>>
                                    <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                      Sim
                                    </label>
                                    <div class="checkbox1">
                                      <input class="form-check-input" type="radio" name="que_4_decisao" value="0" id="secondCheckbox2" <?php if ($que_4_decisao == '0') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                        Não
                                      </label><br>
                                    </div>
                                  </div>
                                </div>
                                <div id="caixa-texto-pro4_1" class="hidden">
                                  <div class="form-floating">
                                    <textarea class="form-control" name="que_4_texto" placeholder="." value="<?php echo $que_4_texto; ?>" id="floatingTextarea4" style="height: 100px; width: 850px;"></textarea>
                                    <label for="floatingTextarea4">Comente sobre</label>
                                  </div>
                                </div>
                              </div>
                              <l>5. Na empresa, já teve alguma queixa ou processo de fraude, suborno, corrupção, sonegação ou lavagem de dinheiro?</l><br>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="que_5_1" value="1" id="pro5" onclick="showSecondCheckbox()" onchange="showHideTextBox()" <?php if ($que_5_aberto == '1') { echo ''; } ?>>
                                <label class="form-check-label" for="pro5" id="Sim">
                                  Sim
                                </label>
                                <div class="Nao">
                                  <input class="form-check-input" type="radio" name="que_5_1" value="0" id="N5" onclick="hideElements('N5'); limparCampos()" <?php if ($que_5_aberto == '0') { echo ''; } ?>>
                                  <label class="form-check-label" for="N5">
                                    Não
                                  </label><br>
                                </div>
                                <div id="caixa-texto-pro5" class="hidden">
                                  <div class="form-floating">
                                    <textarea class="form-control" name="que_5_natureza" placeholder="."  value="<?php echo $que_5_natureza; ?>" id="natureza5" style="height: 20px; width: 850px;"></textarea>
                                    <label for="natureza5">Qual a natureza do processo?</label>
                                  </div>
                                </div>
                                <div class="secondCheckboxContainer_5" id="secondCheckboxContainer5" style="display: none;">
                                  <h5 style="margin: 20px 0 5px 0;">A empresa é qual das partes?</h5>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="que_5_parte" value="0" id="secondCheckbox_5_1" <?php if ($que_5_parte == '0') { echo ''; } ?>>
                                    <label class="form-check-label" for="secondCheckbox_5_1">
                                      Réu
                                    </label><br>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="que_5_parte" value="1" id="secondCheckbox_5_1" <?php if ($que_5_parte == '1') { echo ''; } ?>>
                                    <label class="form-check-label" for="secondCheckbox_5_1" id="testemunha_reu">
                                      Testemunha do réu
                                    </label><br>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="que_5_parte" value="2" id="secondCheckbox_5_1" <?php if ($que_5_parte == '2') { echo ''; } ?>>
                                    <label class="form-check-label" for="secondCheckbox_5_1">
                                      Testemunha do reclamante
                                    </label><br>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="que_5_parte" value="3" id="secondCheckbox_5_1" <?php if ($que_5_parte == '3') { echo ''; } ?>>
                                    <label class="form-check-label" for="secondCheckbox_5_1">
                                      Reclamante
                                    </label><br>
                                  </div>
                                  <div class="form-check" id="text-p5">
                                    <label class="form-check-label" for="secondCheckbox">
                                      Já houve decisão judicial?
                                    </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                    <input class="form-check-input" type="radio" name="que_5_decisao" value="1" id="secondCheckbox2" <?php if ($que_5_decisao == '1') { echo ''; } ?>>
                                    <label id="form-check-label2" class="form-check-label" for="secondCheckbox">
                                      Sim
                                    </label>
                                    <div class="checkbox1">
                                      <input class="form-check-input" type="radio" name="que_5_decisao" value="0" id="secondCheckbox2" <?php if ($que_5_decisao == '0') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                        Não
                                      </label><br>
                                    </div>
                                  </div>
                                </div>
                                <div id="caixa-texto-pro5_1" class="hidden">
                                  <div class="form-floating">
                                    <textarea class="form-control" name="que_5_texto" placeholder="." value="<?php echo $que_5_texto; ?>" id="floatingTextarea5" style="height: 100px; width: 850px;"></textarea>
                                    <label for="floatingTextarea5">Comente sobre</label>
                                  </div>
                                </div>
                              </div>
                              <l>6. Algum sócio, associado, terceirizado ou colaborador da empresa possui algum grau de parentesco com os sócios, ou colaboradores da ABG?</l><br>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="que_6_1" value="1" id="pro6" onclick="showSecondCheckbox()" onchange="showHideTextBox()" <?php if ($que_6_1 == '1') { echo ''; } ?>>
                                <label class="form-check-label" for="pro6" id="Sim">
                                  Sim
                                </label>
                                <div class="Nao">
                                  <input class="form-check-input" type="radio" name="que_6_1" value="0" id="N6" onclick="hideElements('N6'); limparCampos()" <?php if ($que_6_1 == '0') { echo ''; } ?>>
                                  <label class="form-check-label" for="N6">
                                    Não
                                  </label><br>
                                </div>
                                <div id="caixa-texto-pro6" class="hidden">
                                  <div class="form-floating">
                                    <textarea class="form-control" name="que_6_texto" placeholder="." value="<?php echo $que_6_texto; ?>" id="floatingTextarea6" style="height: 100px; width: 850px;"></textarea>
                                    <label for="floatingTextarea6">Comente sobre</label>
                                  </div>
                                </div>
                              </div>                          
                            <l>7. Algum sócio, associado, terceirizado ou colaborador da empresa é atuante como ou possui algum grau de parentesco com algum superior?</l><br>
                            <div class="form-check">
                                <div class="secondCheckboxContainer_7" id="secondCheckboxContainer7">
                                    <div class="form-check" id="text-p5">
                                        <label class="form-check-label" for="secondCheckbox">
                                            Executivo ou financeiro de algum setor ou departamento do governo?
                                        </label><br>
                                    </div>
                                    <div class="form-check" id="form-check1">
                                        <input class="form-check-input" type="radio" name="que_7_2" value="1" id="secondCheckbox_7_2" <?php if ($que_7_2 == '1') { echo ''; } ?>>
                                        <label id="form-check-label2" class="form-check-label" for="secondCheckbox_7_2">
                                            Sim
                                        </label>
                                        <div class="checkbox1">
                                            <input class="form-check-input" type="radio" name="que_7_2" value="0" id="secondCheckbox_7_2_1" <?php if ($que_7_2 == '0') { echo ''; } ?>>
                                            <label id="form-check-label2" class="form-check-label" for="secondCheckbox_7_2">
                                                Não
                                            </label><br>
                                        </div>
                                    </div>
                                    <div class="form-check" id="text-p5">
                                        <label class="form-check-label" for="secondCheckbox">
                                            Executivo, diretor ou funcionário de entidade estatal ou controlada pelo governo?
                                        </label><br>
                                    </div>
                                    <div class="form-check" id="form-check1">
                                        <input class="form-check-input" type="radio" name="que_7_3" value="1" id="secondCheckbox_7_3" <?php if ($que_7_3 == '1') { echo ''; } ?>>
                                        <label id="form-check-label2" class="form-check-label" for="secondCheckbox_7_3">
                                            Sim
                                        </label>
                                        <div class="checkbox1">
                                            <input class="form-check-input" type="radio" name="que_7_3" value="0" id="secondCheckbox_7_3_1" <?php if ($que_7_3 == '0') { echo ''; } ?>>
                                            <label id="form-check-label2" class="form-check-label" for="secondCheckbox_7_3">
                                                Não
                                            </label><br>
                                        </div>
                                    </div>
                                    <div class="form-check" id="text-p5">
                                        <label class="form-check-label" for="secondCheckbox">
                                            Executivo, diretor ou funcionário de organização pública internacional?
                                        </label><br>
                                    </div>
                                    <div class="form-check" id="form-check1">
                                        <input class="form-check-input" type="radio" name="que_7_4" value="1" id="secondCheckbox_7_4" <?php if ($que_7_4 == '1') { echo ''; } ?>>
                                        <label id="form-check-label2" class="form-check-label" for="secondCheckbox_7_4">
                                            Sim
                                        </label>
                                        <div class="checkbox1">
                                            <input class="form-check-input" type="radio" name="que_7_4" value="0" id="secondCheckbox_7_4_1" <?php if ($que_7_4 == '0') { echo ''; } ?>>
                                            <label id="form-check-label2" class="form-check-label" for="secondCheckbox_7_4">
                                                Não
                                            </label><br>
                                        </div>
                                    </div>
                                    <div class="form-check" id="text-p5">
                                        <label class="form-check-label" for="secondCheckbox">
                                            Candidato ou nomeado ao cargo político ou público?
                                        </label><br>
                                    </div>
                                    <div class="form-check" id="form-check1">
                                        <input class="form-check-input" type="radio" name="que_7_5" value="1" id="secondCheckbox_7_5" <?php if ($que_7_5 == '1') { echo ''; } ?>>
                                        <label id="form-check-label2" class="form-check-label" for="secondCheckbox_7_5">
                                            Sim
                                        </label>
                                        <div class="checkbox1">
                                            <input class="form-check-input" type="radio" name="que_7_5" value="0" id="secondCheckbox_7_5_1" <?php if ($que_7_5 == '0') { echo ''; } ?>>
                                            <label id="form-check-label2" class="form-check-label" for="secondCheckbox_7_5">
                                                Não
                                            </label><br>
                                        </div>
                                    </div>
                                    <div class="form-check" id="text-p5">
                                        <label class="form-check-label" for="secondCheckbox">
                                            Executivo, diretor ou funcionário de algum partido político, sindicato ou entidade de classe?
                                        </label><br>
                                    </div>
                                    <div class="form-check" id="form-check1">
                                        <input class="form-check-input" type="radio" name="que_7_6" value="1" id="secondCheckbox_7_6" <?php if ($que_7_6 == '1') { echo ''; } ?>>
                                        <label id="form-check-label2" class="form-check-label" for="secondCheckbox_7_6">
                                            Sim
                                        </label>
                                        <div class="checkbox1">
                                            <input class="form-check-input" type="radio" name="que_7_6" value="0" id="secondCheckbox_7_6_1" <?php if ($que_7_6 == '0') { echo ''; } ?>>
                                            <label id="form-check-label2" class="form-check-label" for="secondCheckbox_7_6">
                                                Não
                                            </label><br>
                                        </div>
                                    </div>
                                </div>
                                <div id="caixa-texto-pro7">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="que_7_texto" placeholder="." value="<?php echo $que_7_texto; ?>" id="floatingTextarea7" style="height: 100px; width: 850px;"></textarea>
                                        <label for="floatingTextarea2">Esclareça</label>
                                    </div>
                                </div>
                            </div>
                            <l>8. A empresa possui algum sistema de gestão certificado?</l><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="que_8_1"  value="1" id="pro8" onclick="showSecondCheckbox()" onchange="showHideTextBox()" <?php if ($que_8_1 == '1') { echo ''; } ?>>
                                <label class="form-check-label" for="pro8" id="Sim">
                                    Sim
                                </label>
                                <div class="Nao">
                                    <input class="form-check-input" type="radio" name="que_8_1" value="0" id="N8" onclick="hideElements('N8'); limparCampos()" <?php if ($que_8_1 == '0') { echo ''; } ?>>
                                    <label class="form-check-label" for="N8">
                                        Não
                                    </label><br>
                                </div>
                                <div class="secondCheckboxContainer_8" id="secondCheckboxContainer8" style="display: none;">
                                    <div class="form-check" id="text-p5">
                                        <label class="form-check-label" for="secondCheckbox">
                                            ISO 9001 – Gestão da Qualidade
                                        </label><br>
                                    </div>
                                    <div class="form-check" id="form-check1">
                                        <input class="form-check-input" type="radio" name="que_8_2" value="1" id="secondCheckbox_8_2" <?php if ($que_8_2 == '1') { echo ''; } ?>>
                                        <label id="form-check-label2" class="form-check-label" for="secondCheckbox_8_2">
                                            Sim
                                        </label>
                                        <div class="checkbox1">
                                            <input class="form-check-input" type="radio" name="que_8_2" value="0" id="secondCheckbox_8_2" <?php if ($que_8_2 == '0') { echo ''; } ?>>
                                            <label id="form-check-label2" class="form-check-label" for="secondCheckbox_8_2">
                                                Não
                                            </label><br>
                                        </div>
                                    </div>
                                    <div class="form-check" id="text-p5">
                                        <label class="form-check-label" for="secondCheckbox">
                                            ISO 14001 – Gestão Ambiental
                                        </label><br>
                                    </div>
                                    <div class="form-check" id="form-check1">
                                        <input class="form-check-input" type="radio" name="que_8_3" value="1" id="secondCheckbox_8_3" <?php if ($que_8_3 == '1') { echo ''; } ?>>
                                        <label id="form-check-label2" class="form-check-label" for="secondCheckbox_8_3">
                                            Sim
                                        </label>
                                        <div class="checkbox1">
                                            <input class="form-check-input" type="radio" name="que_8_3" value="0" id="secondCheckbox_8_3" <?php if ($que_8_3 == '0') { echo ''; } ?>>
                                            <label id="form-check-label2" class="form-check-label" for="secondCheckbox_8_3">
                                                Não
                                            </label><br>
                                        </div>
                                    </div>
                                    <div class="form-check" id="text-p5">
                                        <label class="form-check-label" for="secondCheckbox">
                                            ISO 26001 – Gestão da Responsabilidade Social
                                        </label><br>
                                    </div>
                                    <div class="form-check" id="form-check1">
                                        <input class="form-check-input" type="radio" name="que_8_4" value="1" id="secondCheckbox_8_4" <?php if ($que_8_4 == '1') { echo ''; } ?>>
                                        <label id="form-check-label2" class="form-check-label" for="secondCheckbox_8_4">
                                            Sim
                                        </label>
                                        <div class="checkbox1">
                                            <input class="form-check-input" type="radio" name="que_8_4" value="0" id="secondCheckbox_8_4" <?php if ($que_8_4 == '0') { echo ''; } ?>>
                                            <label id="form-check-label2" class="form-check-label" for="secondCheckbox_8_4">
                                                Não
                                            </label><br>
                                        </div>
                                    </div>
                                    <div class="form-check" id="text-p5">
                                        <label class="form-check-label" for="secondCheckbox">
                                            CISO 27001 – Gestão da Segurança da Informação 
                                        </label><br>
                                    </div>
                                    <div class="form-check" id="form-check1">
                                        <input class="form-check-input" type="radio" name="que_8_5" value="1" id="secondCheckbox_8_5" <?php if ($que_8_5 == '1') { echo ''; } ?>>
                                        <label id="form-check-label2" class="form-check-label" for="secondCheckbox_8_5">
                                            Sim
                                        </label>
                                        <div class="checkbox1">
                                            <input class="form-check-input" type="radio" name="que_8_5" value="0" id="secondCheckbox_8_5" <?php if ($que_8_5 == '0') { echo ''; } ?>>
                                            <label id="form-check-label2" class="form-check-label" for="secondCheckbox_8_5">
                                                Não
                                            </label><br>
                                        </div>
                                    </div>
                                    <div class="form-check" id="text-p5">
                                        <label class="form-check-label" for="secondCheckbox">
                                            ISO 31001 – Gestão de Riscos
                                        </label><br>
                                    </div>
                                    <div class="form-check" id="form-check1">
                                        <input class="form-check-input" type="radio" name="que_8_6" value="1" id="secondCheckbox_8_6" <?php if ($que_8_6 == '1') { echo ''; } ?>>
                                        <label id="form-check-label2" class="form-check-label" for="secondCheckbox_8_6">
                                            Sim
                                        </label>
                                        <div class="checkbox1">
                                            <input class="form-check-input" type="radio" name="que_8_6" value="0" id="secondCheckbox_8_6" <?php if ($que_8_6 == '0') { echo ''; } ?>>
                                            <label id="form-check-label2" class="form-check-label" for="secondCheckbox_8_6">
                                                Não
                                            </label><br>
                                        </div>
                                    </div>
                                    <div class="form-check" id="text-p5">
                                        <label class="form-check-label" for="secondCheckbox">
                                            ISO 37301 – Gestão de Compliance
                                        </label><br>
                                    </div>
                                    <div class="form-check" id="form-check1">
                                        <input class="form-check-input" type="radio" name="que_8_7" value="1" id="secondCheckbox_8_7" <?php if ($que_8_7 == '1') { echo ''; } ?>>
                                        <label id="form-check-label2" class="form-check-label" for="secondCheckbox_8_7">
                                            Sim
                                        </label>
                                        <div class="checkbox1">
                                            <input class="form-check-input" type="radio" name="que_8_7" value="0" id="secondCheckbox_8_7" <?php if ($que_8_7 == '0') { echo ''; } ?>>
                                            <label id="form-check-label2" class="form-check-label" for="secondCheckbox_8_7">
                                                Não
                                            </label><br>
                                        </div>
                                    </div>
                                    <div class="form-check" id="text-p5">
                                        <label class="form-check-label" for="secondCheckbox">
                                            ABNT PR 2030 – Prática Recomendada ESG
                                        </label><br>
                                    </div>
                                    <div class="form-check" id="form-check1">
                                        <input class="form-check-input" type="radio" name="que_8_8" value="1" id="secondCheckbox_8_8" <?php if ($que_8_8 == '1') { echo ''; } ?>>
                                        <label id="form-check-label2" class="form-check-label" for="secondCheckbox_8_8">
                                            Sim
                                        </label>
                                        <div class="checkbox1">
                                            <input class="form-check-input" type="radio" name="que_8_8" value="0" id="secondCheckbox_8_8" <?php if ($que_8_8 == '0') { echo ''; } ?>>
                                            <label id="form-check-label2" class="form-check-label" for="secondCheckbox_8_8">
                                                Não
                                            </label><br>
                                        </div>
                                    </div>
                                    <div class="form-check" id="text-p5">
                                        <label class="form-check-label" for="secondCheckbox">
                                            Outra certificação ou programa
                                        </label><br>
                                    </div>
                                    <div class="form-check" id="form-check1">
                                        <input class="form-check-input" type="radio" name="que_8_9" value="1" id="secondCheckbox_8_9" <?php if ($que_8_9 == '1') { echo ''; } ?>>
                                        <label id="form-check-label2" class="form-check-label" for="secondCheckbox_8_9">
                                            Sim
                                        </label>
                                        <div class="checkbox1">
                                            <input class="form-check-input" type="radio" name="que_8_9" value="0" id="secondCheckbox_8_9" <?php if ($que_8_9 == '0') { echo ''; } ?>>
                                            <label id="form-check-label2" class="form-check-label" for="secondCheckbox_8_9">
                                                Não
                                            </label><br>
                                        </div>
                                    </div>
                                </div>
                                <div id="caixa-texto-pro8" class="hidden">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="que_8_texto" placeholder="." value="<?php echo $que_8_texto; ?>" id="floatingTextarea8" style="height: 100px; width: 850px;"></textarea>
                                        <label for="floatingTextarea2">Esclareça</label>
                                    </div>
                                </div>
                            </div>
                            <l>9. Algum sócio, associado, terceirizado ou colaborador da empresa já atuou ou atua contra o Cliente da operação contratante ou algum Cliente do ABG? Conforme formulário  <a href="GRUPOS_DE_CLIENTES.pdf" target="_blank">FR-CQC-006 - Grupo de Clientes.</a>?</l><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="que_9_1" value="1" id="pro9" onclick="showSecondCheckbox()" onchange="showHideTextBox()" <?php if ($que_9_1 == '1') { echo ''; } ?>>
                                <label class="form-check-label" for="pro9" id="Sim">
                                    Sim
                                </label>
                                <div class="Nao">
                                    <input class="form-check-input" type="radio" name="que_9_1" value="0" id="N9" onclick="hideElements('N9'); limparCampos()" <?php if ($que_9_1 == '0') { echo ''; } ?>>
                                    <label class="form-check-label" for="N9">
                                        Não
                                    </label><br>
                                </div>
                                <div id="caixa-texto-pro9" class="hidden">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="que_9_texto" placeholder="." value="<?php echo $que_9_texto; ?>" id="floatingTextarea9" style="height: 100px; width: 850px;"></textarea>
                                        <label for="floatingTextarea9">Esclareça</label>
                                    </div>
                                </div>
                            </div>                        
                            <l>10. Algum sócio, associado, terceirizado ou colaborador da empresa possui algum grau de parentesco com o autor, ou parte adversa de algum processo que irá atuar em nome do ABG?</l><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="que_10_1" value="1" id="pro10" onclick="showSecondCheckbox()" onchange="showHideTextBox()" <?php if ($que_10_1 == '0') { echo ''; } ?>>
                                <label class="form-check-label" for="pro10" id="Sim">
                                    Sim
                                </label>
                                <div class="Nao">
                                    <input class="form-check-input" type="radio" name="que_10_1" value="0" id="N10" onclick="hideElements('N10'); limparCampos()" <?php if ($que_10_1 == '1') { echo ''; } ?>>
                                    <label class="form-check-label" for="N10">
                                        Não
                                    </label><br>
                                </div>
                                <div id="caixa-texto-pro10" class="hidden">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="que_10_texto" value="<?php echo $que_10_texto; ?>" placeholder="." id="floatingTextarea10" style="height: 100px; width: 850px;"></textarea>
                                        <label for="floatingTextarea10">Esclareça</label>
                                    </div>
                                </div>
                            </div>
                            <l for="10">11. Esclareça alguma outra situação em que a empresa tenha passado e que possa futuramente ser vinculada a<br> imagem da ABG:</l><br>
                            <div class="form-floating">
                                <textarea class="form-control" name="que_11_texto" placeholder="." value="<?php echo $que_11_texto; ?>" id="floatingTextarea11" style="height: 100px; width: 850px;"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                  <button type="submit" class="btn btn-success" name="enviar" onclick="verificarCampos(event)">Enviar</button>
            </div>  
          </form>
        </form>
    </body>
</html>