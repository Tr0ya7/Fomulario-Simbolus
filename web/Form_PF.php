<?php
    require_once "topo_sem_link.php";
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<?php
  require_once "../DAO/QuestionarioPF.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $que_1_1 = $_POST["que_1_1"];
    $que_1_2 = isset($_POST["que_1_2"]) && !empty($_POST["que_1_2"]) ? $_POST["que_1_2"] : '0';
    $que_1_3 = isset($_POST["que_1_3"]) && !empty($_POST["que_1_3"]) ? $_POST["que_1_3"] : '0';
    $que_1_texto = isset($_POST["que_1_texto"]) && !empty($_POST["que_1_texto"]) ? $_POST["que_1_texto"] : 'nda';
    $que_2_1 = $_POST["que_2_1"];
    $que_2_2 = isset($_POST["que_2_2"]) && !empty($_POST["que_2_2"]) ? $_POST["que_2_2"] : '0';
    $que_2_texto = isset($_POST["que_2_texto"]) && !empty($_POST["que_2_texto"]) ? $_POST["que_2_texto"] : 'nda';
    $que_3_1 = $_POST["que_3_1"];
    $que_3_2 = isset($_POST["que_3_2"]) && !empty($_POST["que_3_2"]) ? $_POST["que_3_2"] : '0';
    $que_3_3 = isset($_POST["que_3_3"]) && !empty($_POST["que_3_3"]) ? $_POST["que_3_3"] : '0';
    $que_3_texto = isset($_POST["que_3_texto"]) && !empty($_POST["que_3_texto"]) ? $_POST["que_3_texto"] : 'nda';
    $que_4_1 = $_POST["que_4_1"];
    $que_4_2 = isset($_POST["que_4_2"]) && !empty($_POST["que_4_2"]) ? $_POST["que_4_2"] : '0';
    $que_4_texto = isset($_POST["que_4_texto"]) && !empty($_POST["que_4_texto"]) ? $_POST["que_4_texto"] : 'nda';
    $que_5_1 = $_POST["que_5_1"];
    $que_5_natureza = isset($_POST["que_5_natureza"]) && !empty($_POST["que_5_natureza"]) ? $_POST["que_5_natureza"] : 'nda';
    $que_5_parte = isset($_POST["que_5_parte"]) && !empty($_POST["que_5_parte"]) ? $_POST["que_5_parte"] : '0';
    $que_5_aberto = isset($_POST["que_5_aberto"]) && !empty($_POST["que_5_aberto"]) ? $_POST["que_5_aberto"] : '0';
    $que_5_texto = isset($_POST["que_5_texto"]) && !empty($_POST["que_5_texto"]) ? $_POST["que_5_texto"] : 'nda';
    $que_6_1 = $_POST["que_6_1"];
    $que_6_natureza = isset($_POST["que_6_natureza"]) && !empty($_POST["que_6_natureza"]) ? $_POST["que_6_natureza"] : 'nda';
    $que_6_parte = isset($_POST["que_6_parte"]) && !empty($_POST["que_6_parte"]) ? $_POST["que_6_parte"] : '0';
    $que_6_aberto = isset($_POST["que_6_aberto"]) && !empty($_POST["que_6_aberto"]) ? $_POST["que_6_aberto"] : '0';
    $que_6_texto = isset($_POST["que_6_texto"]) && !empty($_POST["que_6_texto"]) ? $_POST["que_6_texto"] : 'nda';
    $que_7_1 = $_POST["que_7_1"];
    $que_7_natureza = isset($_POST["que_7_natureza"]) && !empty($_POST["que_7_natureza"]) ? $_POST["que_7_natureza"] : 'nda';
    $que_7_parte = isset($_POST["que_7_parte"]) && !empty($_POST["que_7_parte"]) ? $_POST["que_7_parte"] : '0';
    $que_7_aberto = isset($_POST["que_7_aberto"]) && !empty($_POST["que_7_aberto"]) ? $_POST["que_7_aberto"] : '0';
    $que_7_texto = isset($_POST["que_7_texto"]) && !empty($_POST["que_7_texto"]) ? $_POST["que_7_texto"] : 'nda';
    $que_8_1 = $_POST["que_8_1"];
    $que_8_2 = isset($_POST["que_8_2"]) && !empty($_POST["que_8_2"]) ? $_POST["que_8_2"] : '0';
    $que_8_3 = isset($_POST["que_8_3"]) && !empty($_POST["que_8_3"]) ? $_POST["que_8_3"] : '0';
    $que_8_texto = isset($_POST["que_8_texto"]) && !empty($_POST["que_8_texto"]) ? $_POST["que_8_texto"] : 'nda';
    $que_9_1 = $_POST["que_9_1"];
    $que_9_2 = isset($_POST["que_9_2"]) && !empty($_POST["que_9_2"]) ? $_POST["que_9_2"] : '0';
    $que_9_texto = isset($_POST["que_9_texto"]) && !empty($_POST["que_9_texto"]) ? $_POST["que_9_texto"] : 'nda';
    $que_10_1 = $_POST["que_10_1"];
    $que_10_texto = isset($_POST["que_10_texto"]) && !empty($_POST["que_10_texto"]) ? $_POST["que_10_texto"] : 'nda';
    $que_11_1 = $_POST["que_11_1"];
    $que_11_texto = isset($_POST["que_11_texto"]) && !empty($_POST["que_11_texto"]) ? $_POST["que_11_texto"] : 'nda';
    $que_12_texto = $_POST["que_12_texto"];
    
    $questionarioPFDAO = new QuestionarioPFDAO();

    $conclui = $questionarioPFDAO->inserirQuestionario($que_1_1, $que_1_2, $que_1_3, $que_1_texto, $que_2_1, $que_2_2, $que_2_texto, $que_3_1, $que_3_2, $que_3_3, $que_3_texto, 
    $que_4_1, $que_4_2, $que_4_texto, $que_5_1, $que_5_natureza, $que_5_parte, $que_5_aberto, $que_5_texto, $que_6_1, $que_6_natureza, $que_6_parte, $que_6_aberto,
    $que_6_texto, $que_7_1, $que_7_natureza, $que_7_parte, $que_7_aberto, $que_7_texto, $que_8_1, $que_8_2, $que_8_3, $que_8_texto, $que_9_1, $que_9_2, 
    $que_9_texto, $que_10_1, $que_10_texto, $que_11_1, $que_11_texto, $que_12_texto);

    if ($conclui >= 1) {
      echo '<script>window.location.href = "index.php";</script>';
      exit;
    } else {
      echo '<script>alert("Erro");</script>';
    }

  } else {
      $que_1_2 = '0';
      $que_1_3 = '0';
      $que_1_texto = 'nda';
      $que_2_2 = '0';
      $que_2_texto = 'nda';
      $que_3_2 = '0';
      $que_3_3 = '0';
      $que_3_texto = 'nda';
      $que_4_2 = '0';
      $que_4_texto = 'nda';
      $que_5_natureza = 'nda';
      $que_5_parte = '0';
      $que_5_aberto = '0';
      $que_5_texto = 'nda';
      $que_6_natureza = 'nda';
      $que_6_parte = '0';
      $que_6_aberto = '0';
      $que_6_texto = 'nda';
      $que_7_natureza = 'nda';
      $que_7_parte = '0';
      $que_7_aberto = '0';
      $que_7_texto = 'nda';
      $que_8_2 = '0';
      $que_8_3 = '0';
      $que_8_texto = 'nda';
      $que_9_2 = '0';
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
        <link rel="stylesheet" href="css\Form_PF.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </head>
    <body>
        <script src="js\Form_PF.js"></script>
        <form method="post" action="  ">
          <form method="post" action="../DAO/QuestionarioPF.php">
            <form name="form" method="post" action="index.php">
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
                      <div class="opcoes">
                          <l>1. Alguma empresa em que trabalhou já teve algum problema ambiental?</l><br>
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
                                  <div class="form-check" id="form-id">
                                      <label class="form-check-label" for="secondCheckbox">
                                          Sua área de trabalho foi envolvida neste problema ambiental?
                                      </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                      <input class="form-check-input" type="radio" name="que_1_2" value="1" id="que_1" <?php if ($que_1_2 == '1') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox">
                                          Sim
                                      </label>
                                      <div class="checkbox1">
                                          <input class="form-check-input" type="radio" name="que_1_2" value="0" id="que_2" <?php if ($que_1_2 == '0') { echo ''; } ?>>
                                          <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                              Não
                                          </label><br>
                                      </div>
                                  </div>
                                  <div id="form-check2" class="form-check" name="form-id">
                                      <label class="form-check-label" for="secondCheckbox2">
                                      Sua função foi envolvida neste problema ambiental?
                                      </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                      <input class="form-check-input" type="radio" name="que_1_3" value="1" id="que_1" <?php if ($que_1_3 == '1') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox">
                                          Sim
                                      </label>
                                      <div class="checkbox1">
                                          <input class="form-check-input" type="radio" name="que_1_3" value="0" id="que_1" <?php if ($que_1_3 == '0') { echo ''; } ?>>
                                          <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                              Não
                                          </label><br>
                                      </div>
                                  </div>
                              </div>
                              <div id="caixa-texto-pro1" class="hidden">
                                <div class="form-floating">
                                  <textarea class="form-control" type="text" name="que_1_texto" value="<?php echo $que_1_texto; ?>" placeholder="." id="floatingTextarea1" style="height: 100px; width: 850px;"></textarea>
                                  <label for="floatingTextarea1">Comente sobre</label>
                                </div>
                              </div>
                            </div>
                          <l>2. Você já teve envolvimento em alguma queixa ou processo ambiental?</l><br>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="que_2_1" value="1" id="pro2" onclick="showSecondCheckbox()" onchange="showHideTextBox()" <?php if ($que_2_1 == '1') { echo ''; } ?>>
                              <label class="form-check-label" for="pro2" id="Sim">
                                  Sim
                              </label>
                              <div class="Nao">
                                  <input class="form-check-input" type="radio" name="que_2_1" value="0" id="N2" onclick="hideElements('N2'); limparCampos()" <?php if ($que_2_1 == '0') { echo ''; } ?>>
                                  <label class="form-check-label" for="N2">
                                      Não
                                  </label><br>
                              </div>
                              <div class="secondCheckboxContainer_2" id="secondCheckboxContainer2" style="display: none;">
                                  <div class="form-check" id="form-id">
                                      <label class="form-check-label" for="secondCheckbox">
                                          A queixa ou processo continua aberto?
                                      </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                      <input class="form-check-input" type="radio" name="que_2_2" value="1" id="que_2" <?php if ($que_2_2 == '1') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox">
                                          Sim
                                      </label>
                                      <div class="checkbox1">
                                          <input class="form-check-input" type="radio" name="que_2_2" value="0" id="que_2" <?php if ($que_2_2 == '0') { echo ''; } ?>>
                                          <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                              Não
                                          </label><br>
                                      </div>
                                  </div>
                              </div>
                              <div id="caixa-texto-pro2" class="hidden">
                                <div class="form-floating">
                                  <textarea class="form-control" type="text" name="que_2_texto" value="<?php echo $que_2_texto; ?>" placeholder="." id="floatingTextarea2" style="height: 100px; width: 850px;"></textarea>
                                  <label for="floatingTextarea1">Comente sobre</label>
                                </div>
                              </div>
                            </div>
                          <l>3. Alguma empresa em que trabalhou já teve algum problema de vazamento de dados pessoais?</l><br>
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
                                  <div class="form-check" id="form-id">
                                      <label class="form-check-label" for="secondCheckbox">
                                          Sua área de trabalho foi envolvida neste problema de vazamento?
                                      </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                      <input class="form-check-input" type="radio" name="que_3_2" value="1" id="que_3" <?php if ($que_3_2 == '1') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox">
                                          Sim
                                      </label>
                                      <div class="checkbox1">
                                          <input class="form-check-input" type="radio" name="que_3_2" value="0" id="que_3" <?php if ($que_3_2 == '0') { echo ''; } ?>>
                                          <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                              Não
                                          </label><br>
                                      </div>
                                  </div>
                                  <div id="form-check2" class="form-check" name="form-id">
                                      <label class="form-check-label" for="secondCheckbox2">
                                          Sua função foi envolvida neste problema de vazamento?
                                      </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                      <input class="form-check-input" type="radio" name="que_3_3" value="1" id="que_3" <?php if ($que_3_3 == '1') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox">
                                          Sim
                                      </label>
                                      <div class="checkbox1">
                                          <input class="form-check-input" type="radio" name="que_3_3" value="0" id="que_3" <?php if ($que_3_3 == '0') { echo ''; } ?>>
                                          <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                              Não
                                          </label><br>
                                      </div>
                                  </div>
                              </div>
                              <div id="caixa-texto-pro3" class="hidden">
                                <div class="form-floating">
                                  <textarea class="form-control" type="text" name="que_3_texto" value="<?php echo $que_3_texto; ?>" placeholder="." id="floatingTextarea3" style="height: 100px; width: 850px;"></textarea>
                                  <label for="floatingTextarea1">Comente sobre</label>
                                </div>
                              </div>
                            </div>
                          <l>4. Você já teve envolvimento em alguma queixa ou processo referente a atos inapropriados na internet?</l><br>
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
                              <div class="secondCheckboxContainer_4" id="secondCheckboxContainer4" style="display: none;">
                                  <div class="form-check" id="form-id">
                                      <label class="form-check-label" for="secondCheckbox">
                                          A queixa ou processo continua aberto?
                                      </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                      <input class="form-check-input" type="radio" name="que_4_2" value="1" id="que_4" <?php if ($que_4_2 == '1') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox">
                                          Sim
                                      </label>
                                      <div class="checkbox1">
                                          <input class="form-check-input" type="radio" name="que_4_2" value="1" id="que_4" <?php if ($que_4_2 == '0') { echo ''; } ?>>
                                          <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                              Não
                                          </label><br>
                                      </div>
                                  </div>
                              </div>
                              <div id="caixa-texto-pro4" class="hidden">
                                <div class="form-floating">
                                  <textarea class="form-control" type="text" name="que_4_texto" value="<?php echo $que_4_texto; ?>" placeholder="." id="floatingTextarea4" style="height: 100px; width: 850px;"></textarea>
                                  <label for="floatingTextarea1">Comente sobre</label>
                                </div>
                              </div>
                            </div>
                          <l>5. Você já se envolveu em alguma queixa ou processo cível?</l><br>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="que_5_1" value="1" id="pro5" onclick="showSecondCheckbox()" onchange="showHideTextBox()" <?php if ($que_5_1 == 'true') { echo ''; } ?>>
                              <label class="form-check-label" for="pro5" id="Sim">
                                  Sim
                              </label>
                              <div class="Nao">
                                  <input class="form-check-input" type="radio" name="que_5_1" value="0" id="N5" onclick="hideElements('N5'); limparCampos()" <?php if ($que_5_1 == 'false') { echo ''; } ?>>
                                  <label class="form-check-label" for="N5">
                                      Não
                                  </label><br>
                              </div>
                              <div id="caixa-texto-pro5" class="hidden">
                                <div class="form-floating">
                                  <textarea class="form-control" type="text" name="que_5_natureza" value="<?php echo $que_5_natureza; ?>" placeholder="." id="natureza5" style="height: 20px; width: 850px;"></textarea>
                                  <label for="natureza5">Qual a natureza do processo?</label>
                                </div>
                              </div>
                              <div class="secondCheckboxContainer_5" id="secondCheckboxContainer5" style="display: none;">
                                <h5 style="margin: 20px 0 5px 0;">Você é qual das partes?</h5>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="que_5_parte" value="0" id="secondCheckbox1" <?php if ($que_5_parte == '0') { echo ''; } ?>>
                                  <label class="form-check-label" for="secondCheckbox1">
                                    Réu
                                  </label><br>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="que_5_parte" value="1" id="que_5" <?php if ($que_5_parte == '1') { echo ''; } ?>>
                                  <label class="form-check-label" for="secondCheckbox2" id="testemunha_reu">
                                    Testemunha do réu
                                  </label><br>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="que_5_parte" value="2" id="secondCheckbox3" <?php if ($que_5_parte == '2') { echo ''; } ?>>
                                  <label class="form-check-label" for="secondCheckbox3">
                                    Testemunha do reclamante
                                  </label><br>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="que_5_parte" value="3" id="secondCheckbox4" <?php if ($que_5_parte == '3') { echo ''; } ?>>
                                  <label class="form-check-label" for="secondCheckbox4">
                                    Reclamante
                                  </label><br>
                                </div>
                                <div class="form-check" id="text-p5" name="form-id">
                                  <label class="form-check-label" for="secondCheckbox">
                                      A queixa ou processo continua aberto?
                                  </label><br>
                              </div>
                              <div class="form-check" id="form-check1">
                                  <input class="form-check-input" type="radio" name="que_5_aberto" value="1" id="que_5" <?php if ($que_5_aberto == '1') { echo ''; } ?>>
                                  <label id="form-check-label2" class="form-check-label" for="secondCheckbox">
                                      Sim
                                  </label>
                                  <div class="checkbox1">
                                      <input class="form-check-input" type="radio" name="que_5_aberto" value="0" id="que_5" <?php if ($que_5_aberto == '0') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                          Não
                                      </label><br>
                                  </div>
                              </div>
                              </div>
                              <div id="caixa-texto-pro5_1" class="hidden">
                                <div class="form-floating">
                                  <textarea class="form-control" type="text" name="que_5_texto" value="<?php echo $que_5_texto; ?>" placeholder="." id="floatingTextarea5" style="height: 100px; width: 850px;"></textarea>
                                  <label for="floatingTextarea2">Comente sobre</label>
                                </div>
                              </div>
                            </div>
                          <l>6. Você já se envolveu em alguma queixa ou processo criminal?</l><br>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="que_6_1" value="1" id="pro6" onclick="showSecondCheckbox()" onchange="showHideTextBox()" <?php if ($que_6_1 == '1') { echo ''; } ?>>
                              <label class="form-check-label" for="pro5" id="Sim">
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
                                  <textarea class="form-control" type="text" name="que_6_natureza" value="<?php echo $que_6_natureza; ?>" placeholder="." id="natureza6" style="height: 20px; width: 850px;"></textarea>
                                  <label for="natureza6">Qual a natureza do processo?</label>
                                </div>
                              </div>
                              <div class="secondCheckboxContainer_6" id="secondCheckboxContainer6" style="display: none;">
                                <h5 style="margin: 20px 0 5px 0;">Você é qual das partes?</h5>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="que_6_parte" value="0" id="secondCheckbox1" <?php if ($que_6_parte == '0') { echo ''; } ?>>
                                  <label class="form-check-label" for="secondCheckbox1">
                                    Réu
                                  </label><br>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="que_6_parte" value="1" id="que_6" <?php if ($que_6_parte == '1') { echo ''; } ?>>
                                  <label class="form-check-label" for="secondCheckbox2" id="testemunha_reu">
                                    Testemunha do réu
                                  </label><br>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="que_6_parte" value="2" id="secondCheckbox3" <?php if ($que_6_parte == '2') { echo ''; } ?>>
                                  <label class="form-check-label" for="secondCheckbox3">
                                    Testemunha do reclamante
                                  </label><br>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="que_6_parte" value="3" id="secondCheckbox4" <?php if ($que_6_parte == '3') { echo ''; } ?>>
                                  <label class="form-check-label" for="secondCheckbox4">
                                    Reclamante
                                  </label><br>
                                </div>
                                <div class="form-check" id="text-p5" name="form-id">
                                  <label class="form-check-label" for="secondCheckbox">
                                      A queixa ou processo continua aberto?
                                  </label><br>
                              </div>
                              <div class="form-check" id="form-check1">
                                  <input class="form-check-input" type="radio" name="que_6_aberto" value="1" id="que_6" <?php if ($que_6_aberto == '1') { echo ''; } ?>>
                                  <label id="form-check-label2" class="form-check-label" for="secondCheckbox">
                                      Sim
                                  </label>
                                  <div class="checkbox1">
                                      <input class="form-check-input" type="radio" name="que_6_aberto" value="0" id="que_6" <?php if ($que_6_parte == '0') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                          Não
                                      </label><br>
                                  </div>
                              </div>
                              </div>
                              <div id="caixa-texto-pro6_1" class="hidden">
                                <div class="form-floating">
                                  <textarea class="form-control" type="text" name="que_6_texto" value="<?php echo $que_6_texto; ?>" id="floatingTextarea6" placeholder="." style="height: 100px; width: 850px;"></textarea>
                                  <label for="floatingTextarea2">Comente sobre</label>
                                </div>
                              </div>
                            </div>
                          <l>7. Você já se envolveu em alguma queixa ou processo trabalhista?</l><br>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="que_7_1" value="1" id="pro7" onclick="showSecondCheckbox()" onchange="showHideTextBox()" <?php if ($que_7_1 == '1') { echo ''; } ?>>
                              <label class="form-check-label" for="pro7" id="Sim">
                                  Sim
                              </label>
                              <div class="Nao">
                                  <input class="form-check-input" type="radio" name="que_7_1" value="0" id="N7" onclick="hideElements('N7'); limparCampos()" <?php if ($que_7_1 == '0') { echo ''; } ?>>
                                  <label class="form-check-label" for="N7">
                                      Não
                                  </label><br>
                              </div>
                              <div id="caixa-texto-pro7" class="hidden">
                                <div class="form-floating">
                                  <textarea class="form-control" type="text" name="que_7_natureza" value="<?php echo $que_7_natureza; ?>" placeholder="." id="natureza7" style="height: 20px; width: 850px;"></textarea>
                                  <label for="natureza7">Qual a natureza do processo?</label>
                                </div>
                              </div>
                              <div class="secondCheckboxContainer_7" id="secondCheckboxContainer7" style="display: none;">
                                <h5 style="margin: 20px 0 5px 0;">Você é qual das partes?</h5>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="que_7_parte" value="0" id="secondCheckbox1" <?php if ($que_7_parte == '0') { echo ''; } ?>>
                                  <label class="form-check-label" for="secondCheckbox1">
                                    Réu
                                  </label><br>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="que_7_parte" value="1" id="que_7" <?php if ($que_7_parte == '1') { echo ''; } ?>>
                                  <label class="form-check-label" for="secondCheckbox2" id="testemunha_reu">
                                    Testemunha do réu
                                  </label><br>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="que_7_parte" value="2" id="secondCheckbox3" <?php if ($que_7_parte == '2') { echo ''; } ?>>
                                  <label class="form-check-label" for="secondCheckbox3">
                                    Testemunha do reclamante
                                  </label><br>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="que_7_parte" value="3" id="secondCheckbox4" <?php if ($que_7_parte == '3') { echo ''; } ?>>
                                  <label class="form-check-label" for="secondCheckbox4">
                                    Reclamante
                                  </label><br>
                                </div>
                                <div class="form-check" id="text-p5" name="form-id">
                                  <label class="form-check-label" for="secondCheckbox">
                                      A queixa ou processo continua aberto?
                                  </label><br>
                              </div>
                              <div class="form-check" id="form-check1">
                                  <input class="form-check-input" type="radio" name="que_7_aberto" value="1" id="que_7" <?php if ($que_7_aberto == '1') { echo ''; } ?>>
                                  <label id="form-check-label2" class="form-check-label" for="secondCheckbox">
                                      Sim
                                  </label>
                                  <div class="checkbox1">
                                      <input class="form-check-input" type="radio" name="que_7_aberto" value="0" id="que_7" <?php if ($que_7_aberto == '0') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                          Não
                                      </label><br>
                                  </div>
                              </div>
                              </div>
                              <div id="caixa-texto-pro7_1" class="hidden">
                                <div class="form-floating">
                                  <textarea class="form-control" type="text" name="que_7_texto" value="<?php echo $que_7_texto; ?>" id="floatingTextarea7" placeholder="." style="height: 100px; width: 850px;"></textarea>
                                  <label for="floatingTextarea2">Comente sobre</label>
                                </div>
                              </div>
                            </div>
                          <l>8. Alguma empresa em que trabalhou já teve algum problema de suborno ou sonegação?</l><br>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="que_8_1" value="1" id="pro8" onclick="showSecondCheckbox()" onchange="showHideTextBox()" <?php if ($que_8_1 == '1') { echo ''; } ?>>
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
                                  <div class="form-check" id="form-id">
                                      <label class="form-check-label" for="secondCheckbox">
                                          A queixa ou processo continua aberto?
                                      </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                      <input class="form-check-input" type="radio" name="que_8_2" value="1" id="que_8" <?php if ($que_8_2 == '1') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox">
                                          Sim
                                      </label>
                                      <div class="checkbox1">
                                          <input class="form-check-input" type="radio" name="que_8_2" value="0" id="que_8" <?php if ($que_8_2 == '0') { echo ''; } ?>>
                                          <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                              Não
                                          </label><br>
                                      </div>
                                  </div>
                                  <div id="form-check2" class="form-check">
                                      <label class="form-check-label" for="secondCheckbox2">
                                          Sua função foi envolvida neste problema financeiro?
                                      </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                      <input class="form-check-input" type="radio" name="que_8_3" value="1" id="que_8" <?php if ($que_8_3 == '1') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox">
                                          Sim
                                      </label>
                                      <div class="checkbox1">
                                          <input class="form-check-input" type="radio" name="que_8_3" value="0" id="que_8" <?php if ($que_8_3 == '0') { echo ''; } ?>>
                                          <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                              Não
                                          </label><br>
                                      </div>
                                  </div>
                              </div>
                              <div id="caixa-texto-pro8" class="hidden">
                                <div class="form-floating">
                                  <textarea class="form-control" type="text" name="que_8_texto" value="<?php echo $que_8_texto; ?>" id="floatingTextarea8" placeholder="." style="height: 100px; width: 850px;"></textarea>
                                  <label for="floatingTextarea1">Comente sobre</label>
                                </div>
                              </div>
                            </div>
                          <l>9. Você já teve envolvimento em alguma queixa ou processo referente a atos suborno ou sonegação?</l><br>
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
                              <div class="secondCheckboxContainer_9" id="secondCheckboxContainer9" style="display: none;">
                                  <div class="form-check" id="form-id">
                                      <label class="form-check-label" for="secondCheckbox">
                                          A queixa ou processo continua aberto?
                                      </label><br>
                                  </div>
                                  <div class="form-check" id="form-check1">
                                      <input class="form-check-input" type="radio" name="que_9_2" value="1" id="que_9" <?php if ($que_9_2 == '1') { echo ''; } ?>>
                                      <label id="form-check-label2" class="form-check-label" for="secondCheckbox">
                                          Sim
                                      </label>
                                      <div class="checkbox1">
                                          <input class="form-check-input" type="radio" name="que_9_2" value="0" id="que_9" <?php if ($que_9_2 == '0') { echo ''; } ?>>
                                          <label id="form-check-label2" class="form-check-label" for="secondCheckbox2">
                                              Não
                                          </label><br>
                                      </div>
                                  </div>
                              </div>
                              <div id="caixa-texto-pro9" class="hidden">
                                <div class="form-floating">
                                  <textarea class="form-control" type="text" name="que_9_texto" value="<?php echo $que_9_texto; ?>" placeholder="." id="floatingTextarea9" style="height: 100px; width: 850px;"></textarea>
                                  <label for="floatingTextarea1">Comente sobre</label>
                                </div>
                              </div>
                            </div>
                          <l>10. Você já atuou ou atua contra o Cliente da operação contratante ou algum Cliente do ABG? Conforme formulário<br> <a href="GRUPOS_DE_CLIENTES.pdf" target="_blank">FR-CQC-006 - Grupo de Clientes.</a>?</l><br>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="que_10_1" value="1" id="pro10" onclick="showSecondCheckbox()" onchange="showHideTextBox()" <?php if ($que_10_1 == '1') { echo ''; } ?>>
                              <label class="form-check-label" for="pro10" id="Sim">
                                  Sim
                              </label>
                              <div class="Nao">
                                  <input class="form-check-input" type="radio" name="que_10_1" value="0" id="N10" onclick="hideElements('N10'); limparCampos()" <?php if ($que_10_1 == '0') { echo ''; } ?>>
                                  <label class="form-check-label" for="N10">
                                      Não
                                  </label><br>
                              </div>
                              <div id="caixa-texto-pro10" class="hidden">
                                <div class="form-floating">
                                  <textarea class="form-control" type="text" name="que_10_texto" value="<?php echo $que_10_texto; ?>" placeholder="." id="floatingTextarea10" style="height: 100px; width: 850px;"></textarea>
                                  <label for="floatingTextarea1">Comente sobre</label>
                                </div>
                              </div>
                            </div>
                          <l>11. Você possui algum grau de parentesco com o autor, ou parte adversa de algum processo que irá atuar em nome<br> do ABG?</l><br>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="que_11_1" value="1" id="pro11" onclick="showSecondCheckbox()" onchange="showHideTextBox()" <?php if ($que_11_1 == '1') { echo ''; } ?>>
                              <label class="form-check-label" for="pro11" id="Sim">
                                  Sim
                              </label>
                              <div class="Nao">
                                  <input class="form-check-input" type="radio" name="que_11_1" value="0" id="N11" onclick="hideElements('N11'); limparCampos()" <?php if ($que_11_1 == '0') { echo ''; } ?>>
                                  <label class="form-check-label" for="N11">
                                      Não
                                  </label><br>
                              </div>
                              <div id="caixa-texto-pro11" class="hidden">
                                <div class="form-floating">
                                  <textarea class="form-control" type="text" name="que_11_texto" value="<?php echo $que_11_texto; ?>" placeholder="." id="floatingTextarea11" style="height: 100px; width: 850px;"></textarea>
                                  <label for="floatingTextarea1">Comente sobre</label>
                                </div>
                              </div>
                            </div>
                          <l for="10">12. Esclareça alguma outra situação em que passou que possa futuramente ser vinculada a imagem da empresa:</l><br>
                          <div class="form-floating">
                              <textarea class="form-control" type="text" name="que_12_texto" value="<?php echo $que_12_texto; ?>" placeholder="." id="floatingTextarea12" style="height: 100px; width: 850px;"></textarea>
                              <label for="floatingTextarea2">Comente sobre</label>
                          </div>
                      </div>
            </div>
            <form method="post" action="index.php">
                <button type="submit" class="btn btn-success" name="enviar" onclick="verificarCampos()">Enviar</button>
            </form>
        </div>
  </form>
  </form>
  </form>
        </body>
</html>

<div class="hr-line-dashed col-sm-12"></div>
<?php
    require_once("rodape.php");
?>