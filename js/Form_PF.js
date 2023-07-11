function limparCampos() {
  var subCheckboxInputs1 = document.querySelectorAll('.secondCheckboxContainer_1 input[type="radio"]');
  var N1 = document.getElementById('N1');
  var textarea1 = document.getElementById('floatingTextarea1');
  var subCheckboxInputs2 = document.querySelectorAll('.secondCheckboxContainer_2 input[type="radio"]');
  var N2 = document.getElementById('N2');
  var textarea2 = document.getElementById('floatingTextarea2');
  var subCheckboxInputs3 = document.querySelectorAll('.secondCheckboxContainer_3 input[type="radio"]');
  var N3 = document.getElementById('N3');
  var textarea3 = document.getElementById('floatingTextarea3');
  var subCheckboxInputs4 = document.querySelectorAll('.secondCheckboxContainer_4 input[type="radio"]');
  var N4 = document.getElementById('N4');
  var textarea4 = document.getElementById('floatingTextarea4');
  var subCheckboxInputs5 = document.querySelectorAll('.secondCheckboxContainer_5 input[type="radio"]');
  var N5 = document.getElementById('N5');
  var textarea5 = document.getElementById('floatingTextarea5');
  var natureza5 = document.getElementById('natureza5');
  var N6 = document.getElementById('N6');
  var textarea6 = document.getElementById('floatingTextarea6');
  var natureza6 = document.getElementById('natureza6');
  var subCheckboxInputs7 = document.querySelectorAll('.secondCheckboxContainer_7 input[type="radio"]');
  var N7 = document.getElementById('N7');
  var textarea7 = document.getElementById('floatingTextarea7');
  var natureza7 = document.getElementById('natureza7');
  var subCheckboxInputs8 = document.querySelectorAll('.secondCheckboxContainer_8 input[type="radio"]');
  var N8 = document.getElementById('N8');
  var textarea8 = document.getElementById('floatingTextarea8');
  var N9 = document.getElementById('N9');
  var textarea9 = document.getElementById('floatingTextarea9');
  var subCheckboxInputs9 = document.querySelectorAll('.secondCheckboxContainer_9 input[type="radio"]');
  var N10 = document.getElementById('N10');
  var textarea10 = document.getElementById('floatingTextarea10');
  var textarea11 = document.getElementById('floatingTextarea11');
  
  if (N1.checked) {
    for (var i = 0; i < subCheckboxInputs1.length; i++) {
      subCheckboxInputs1[i].checked = false;
    }
    textarea1.value = '';
  } 
  
  if (N2.checked) {
    for (var i = 0; i < subCheckboxInputs2.length; i++) {
      subCheckboxInputs2[i].checked = false;
    }
    textarea2.value = '';
  } 
  
  if (N3.checked) {
    for (var i = 0; i < subCheckboxInputs3.length; i++) {
      subCheckboxInputs3[i].checked = false;
    }
    textarea3.value = '';
  }
  
  if (N4.checked) {
    for (var i = 0; i < subCheckboxInputs4.length; i++) {
      subCheckboxInputs4[i].checked = false;
    }
    textarea4.value = '';
  } 
  
  if (N5.checked) {
    natureza5.value = '';
    for (var i = 0; i < subCheckboxInputs5.length; i++) {
      subCheckboxInputs5[i].checked = false;
    }
    textarea5.value = '';
  } 
  if (N6.checked) {
    natureza6.value = '';
    textarea6.value = '';
  } 
  
  if (N7.checked) {
    natureza7.value = '';
    for (var i = 0; i < subCheckboxInputs7.length; i++) {
      subCheckboxInputs7[i].checked = false;
    }
    textarea7.value = '';
  }
  
  if (N8.checked) {
    for (var i = 0; i < subCheckboxInputs8.length; i++) {
      subCheckboxInputs8[i].checked = false;
    }
    textarea8.value = '';
  }
  
  if (N9.checked) {
    for (var i = 0; i < subCheckboxInputs9.length; i++) {
      subCheckboxInputs9[i].checked = false;
    }
    textarea9.value = '';
  } 
  
  if (N10.checked) {
    textarea10.value = '';
  }

  if (N11.checked) {
    textarea11.value = '';
  }
}

function showSecondCheckbox() {
    var checkbox1 = document.getElementById("pro1");
    var secondCheckboxContainer1 = document.getElementById("secondCheckboxContainer1");
    var checkbox2 = document.getElementById("pro2");
    var secondCheckboxContainer2 = document.getElementById("secondCheckboxContainer2");
    var checkbox3 = document.getElementById("pro3");
    var secondCheckboxContainer3 = document.getElementById("secondCheckboxContainer3");
    var checkbox4 = document.getElementById("pro4");
    var secondCheckboxContainer4 = document.getElementById("secondCheckboxContainer4");
    var checkbox5 = document.getElementById("pro5");
    var secondCheckboxContainer5 = document.getElementById("secondCheckboxContainer5");
    var checkbox5 = document.getElementById("pro5");
    var secondCheckboxContainer5 = document.getElementById("secondCheckboxContainer5");
    var checkbox6 = document.getElementById("pro6");
    var secondCheckboxContainer6 = document.getElementById("secondCheckboxContainer6");
    var checkbox6 = document.getElementById("pro6");
    var secondCheckboxContainer6 = document.getElementById("secondCheckboxContainer6");
    var checkbox7 = document.getElementById("pro7");
    var secondCheckboxContainer7 = document.getElementById("secondCheckboxContainer7");
    var checkbox8 = document.getElementById("pro8");
    var secondCheckboxContainer8 = document.getElementById("secondCheckboxContainer8");
    var checkbox9 = document.getElementById("pro9");
    var secondCheckboxContainer9 = document.getElementById("secondCheckboxContainer9");
    
    if (checkbox1.checked) {
        secondCheckboxContainer1.style.display = "block";
    } else {
        secondCheckboxContainer1.style.display = "none";
    }

    if (checkbox2.checked) {
        secondCheckboxContainer2.style.display = "block";
    } else {
        secondCheckboxContainer2.style.display = "none";
    }

    if (checkbox3.checked) {
        secondCheckboxContainer3.style.display = "block";
    } else {
        secondCheckboxContainer3.style.display = "none";
    }

    if (checkbox4.checked) {
        secondCheckboxContainer4.style.display = "block";
    } else {
        secondCheckboxContainer4.style.display = "none";
    }
    
    if (checkbox5.checked) {
        secondCheckboxContainer5.style.display = "block";
    } else {
        secondCheckboxContainer5.style.display = "none";
    }

    if (checkbox6.checked) {
        secondCheckboxContainer6.style.display = "block";
    } else {
        secondCheckboxContainer6.style.display = "none";
    }

    if (checkbox7.checked) {
        secondCheckboxContainer7.style.display = "block";
    } else {
        secondCheckboxContainer7.style.display = "none";
    }

    if (checkbox8.checked) {
        secondCheckboxContainer8.style.display = "block";
    } else {
        secondCheckboxContainer8.style.display = "none";
    }

    if (checkbox9.checked) {
        secondCheckboxContainer9.style.display = "block";
    } else {
        secondCheckboxContainer9.style.display = "none";
    }
}

function showHideTextBox() {   
    var checkbox1 = document.getElementById("pro1");
    var caixaTexto1 = document.getElementById("caixa-texto-pro1");
    var checkbox2 = document.getElementById("pro2");
    var caixaTexto2 = document.getElementById("caixa-texto-pro2");
    var checkbox3 = document.getElementById("pro3");
    var caixaTexto3 = document.getElementById("caixa-texto-pro3");
    var checkbox4 = document.getElementById("pro4");
    var caixaTexto4 = document.getElementById("caixa-texto-pro4");
    var checkbox5 = document.getElementById("pro5");
    var caixaTexto5 = document.getElementById("caixa-texto-pro5");
    var checkbox5 = document.getElementById("pro5");
    var caixaTexto5_1 = document.getElementById("caixa-texto-pro5_1");
    var checkbox6 = document.getElementById("pro6");
    var caixaTexto6 = document.getElementById("caixa-texto-pro6");
    var checkbox6 = document.getElementById("pro6");
    var caixaTexto6_1 = document.getElementById("caixa-texto-pro6_1");
    var checkbox7 = document.getElementById("pro7");
    var caixaTexto7 = document.getElementById("caixa-texto-pro7");
    var checkbox7 = document.getElementById("pro7");
    var caixaTexto7_1 = document.getElementById("caixa-texto-pro7_1");
    var checkbox8 = document.getElementById("pro8");
    var caixaTexto8 = document.getElementById("caixa-texto-pro8");
    var checkbox9 = document.getElementById("pro9");
    var caixaTexto9 = document.getElementById("caixa-texto-pro9");
    var checkbox10 = document.getElementById("pro10");
    var caixaTexto10 = document.getElementById("caixa-texto-pro10");
    var checkbox11 = document.getElementById("pro11");
    var caixaTexto11 = document.getElementById("caixa-texto-pro11");

    if (checkbox1.checked) {
        caixaTexto1.classList.remove("hidden");
    } else {
        caixaTexto1.classList.add("hidden");
    }

    if (checkbox2.checked) {
        caixaTexto2.classList.remove("hidden");
    } else {
        caixaTexto2.classList.add("hidden");
    }

    if (checkbox3.checked) {
        caixaTexto3.classList.remove("hidden");
    } else {
        caixaTexto3.classList.add("hidden");
    }

    if (checkbox4.checked) {
        caixaTexto4.classList.remove("hidden");
    } else {
        caixaTexto4.classList.add("hidden");
    }

    if (checkbox5.checked) {
        caixaTexto5.classList.remove("hidden");
    } else {
        caixaTexto5.classList.add("hidden");
    }

    if (checkbox5.checked) {
        caixaTexto5_1.classList.remove("hidden");
    } else {
        caixaTexto5_1.classList.add("hidden");
    }

    if (checkbox6.checked) {
        caixaTexto6.classList.remove("hidden");
    } else {
        caixaTexto6.classList.add("hidden");
    }

    if (checkbox6.checked) {
        caixaTexto6_1.classList.remove("hidden");
    } else {
        caixaTexto6_1.classList.add("hidden");
    }

    if (checkbox7.checked) {
        caixaTexto7.classList.remove("hidden");
    } else {
        caixaTexto7.classList.add("hidden");
    }

    if (checkbox7.checked) {
        caixaTexto7_1.classList.remove("hidden");
    } else {
        caixaTexto7_1.classList.add("hidden");
    }

    if (checkbox8.checked) {
        caixaTexto8.classList.remove("hidden");
    } else {
        caixaTexto8.classList.add("hidden");
    }

    if (checkbox9.checked) {
        caixaTexto9.classList.remove("hidden");
    } else {
        caixaTexto9.classList.add("hidden");
    }

    if (checkbox10.checked) {
        caixaTexto10.classList.remove("hidden");
    } else {
        caixaTexto10.classList.add("hidden");
    }

    if (checkbox11.checked) {
        caixaTexto11.classList.remove("hidden");
    } else {
        caixaTexto11.classList.add("hidden");
    }
}

function hideElements(id) {
    var checkbox1 = document.getElementById(id);
    var secondCheckboxContainer1 = document.getElementById("secondCheckboxContainer1");
    var caixaTexto1 = document.getElementById("caixa-texto-pro1");
    var checkbox2 = document.getElementById("N2");
    var secondCheckboxContainer2 = document.getElementById("secondCheckboxContainer2");
    var caixaTexto2 = document.getElementById("caixa-texto-pro2");
    var checkbox3 = document.getElementById("N3");
    var secondCheckboxContainer3 = document.getElementById("secondCheckboxContainer3");
    var caixaTexto3 = document.getElementById("caixa-texto-pro3");
    var checkbox4 = document.getElementById("N4");
    var secondCheckboxContainer4 = document.getElementById("secondCheckboxContainer4");
    var caixaTexto4 = document.getElementById("caixa-texto-pro4");
    var checkbox5 = document.getElementById("N5");
    var secondCheckboxContainer5 = document.getElementById("secondCheckboxContainer5");
    var caixaTexto5 = document.getElementById("caixa-texto-pro5");
    var caixaTexto5_1 = document.getElementById("caixa-texto-pro5_1");
    var checkbox6 = document.getElementById("N6");
    var secondCheckboxContainer6 = document.getElementById("secondCheckboxContainer6");
    var caixaTexto6 = document.getElementById("caixa-texto-pro6");
    var caixaTexto6_1 = document.getElementById("caixa-texto-pro6_1");
    var checkbox7 = document.getElementById("N7");
    var secondCheckboxContainer7 = document.getElementById("secondCheckboxContainer7");
    var caixaTexto7 = document.getElementById("caixa-texto-pro7");
    var caixaTexto7_1 = document.getElementById("caixa-texto-pro7_1");
    var checkbox8 = document.getElementById("N8");
    var secondCheckboxContainer8 = document.getElementById("secondCheckboxContainer8");
    var caixaTexto8 = document.getElementById("caixa-texto-pro8");
    var checkbox9 = document.getElementById("N9");
    var secondCheckboxContainer9 = document.getElementById("secondCheckboxContainer9");
    var caixaTexto9 = document.getElementById("caixa-texto-pro9");
    var checkbox10 = document.getElementById("N10");
    var caixaTexto10 = document.getElementById("caixa-texto-pro10");
    var checkbox11 = document.getElementById("N11");
    var caixaTexto11 = document.getElementById("caixa-texto-pro11");

    if (id === "N1") {
        checkbox1.checked = true;
        secondCheckboxContainer1.style.display = "none";
        caixaTexto1.classList.add("hidden");
    } else if (id === "N2") {
        checkbox2.checked = true;
        secondCheckboxContainer2.style.display = "none";
        caixaTexto2.classList.add("hidden");
    } else if (id === "N3") {
        checkbox3.checked = true;
        secondCheckboxContainer3.style.display = "none";
        caixaTexto3.classList.add("hidden");
    } else if (id === "N4") {
        checkbox4.checked = "true";
        secondCheckboxContainer4.style.display = "none";
        caixaTexto4.classList.add("hidden");
    } else if (id === "N5") {
        checkbox5.checked = "true";
        secondCheckboxContainer5.style.display = "none";
        caixaTexto5.classList.add("hidden");
        caixaTexto5_1.classList.add("hidden");
    } else if (id === "N6") {
        checkbox6.checked = "true";
        secondCheckboxContainer6.style.display = "none";
        caixaTexto6.classList.add("hidden");
        caixaTexto6_1.classList.add("hidden");
    } else if (id === "N7") {
        checkbox7.checked = "true";
        secondCheckboxContainer7.style.display = "none";
        caixaTexto7.classList.add("hidden");
        caixaTexto7_1.classList.add("hidden");
    } else if (id === "N8") {
        checkbox8.checked = "true";
        secondCheckboxContainer8.style.display = "none";
        caixaTexto8.classList.add("hidden");
    } else if (id === "N9") {
        checkbox9.checked = "true";
        secondCheckboxContainer9.style.display = "none";
        caixaTexto9.classList.add("hidden");
    } else if (id === "N10") {
        checkbox10.checked = "true";
        caixaTexto10.classList.add("hidden");
    }   else if (id === "N11") {
        checkbox11.checked = "true";
        caixaTexto11.classList.add("hidden");
    }
}

function verificarCampos(event) {
    var checkboxSim = document.getElementById("pro1");
    var checkboxNao = document.getElementById("N1");
    var caixaTexto = document.getElementById("floatingTextarea1");
    var caixasTexto = document.querySelectorAll("[id^='floatingTextarea']");
    var checkboxSim2 = document.getElementById("pro2");
    var checkboxNao2 = document.getElementById("N2");
    var caixaTexto2 = document.getElementById("floatingTextarea2");
    var caixasTexto2 = document.querySelectorAll("[id^='floatingTextarea']");
    var checkboxSim3 = document.getElementById("pro3");
    var checkboxNao3 = document.getElementById("N3");
    var caixaTexto3 = document.getElementById("floatingTextarea3");
    var caixasTexto3 = document.querySelectorAll("[id^='floatingTextarea']");
    var checkboxSim4 = document.getElementById("pro4");
    var checkboxNao4 = document.getElementById("N4");
    var caixaTexto4 = document.getElementById("floatingTextarea4");
    var caixasTexto4 = document.querySelectorAll("[id^='floatingTextarea']");
    var checkboxSim5 = document.getElementById("pro5");
    var checkboxNao5 = document.getElementById("N5");
    var caixaTextoNatureza5 = document.querySelectorAll("[id^='floatingTextarea_5']");
    var checkboxAberto5 = document.querySelector('input[name="que_5_aberto"]:checked');
    var caixaTexto5 = document.getElementById("floatingTextarea5");
    var caixasTexto5 = document.querySelectorAll("[id^='floatingTextarea']");
    var checkboxSim6 = document.getElementById("pro6");
    var checkboxNao6 = document.getElementById("N6");
    var caixaTextoNatureza6 = document.querySelectorAll("[id^='floatingTextarea_6']");
    var checkboxAberto6 = document.querySelector('input[name="que_6_aberto"]:checked');
    var caixaTexto6 = document.getElementById("floatingTextarea6");
    var caixasTexto6 = document.querySelectorAll("[id^='floatingTextarea']");
    var checkboxSim7 = document.getElementById("pro7");
    var checkboxNao7 = document.getElementById("N7");
    var caixaTextoNatureza7 = document.querySelectorAll("[id^='floatingTextarea_7']");
    var checkboxAberto7 = document.querySelector('input[name="que_7_aberto"]:checked');
    var caixaTexto7 = document.getElementById("floatingTextarea7");
    var caixasTexto7 = document.querySelectorAll("[id^='floatingTextarea']");
    var checkboxSim8 = document.getElementById("pro8");
    var checkboxNao8 = document.getElementById("N8");
    var caixaTexto8 = document.getElementById("floatingTextarea8");
    var caixasTexto8 = document.querySelectorAll("[id^='floatingTextarea']");
    var checkboxSim9 = document.getElementById("pro9");
    var checkboxNao9 = document.getElementById("N9");
    var caixaTexto9 = document.getElementById("floatingTextarea9");
    var caixasTexto9 = document.querySelectorAll("[id^='floatingTextarea']");
    var checkboxSim10 = document.getElementById("pro10");
    var checkboxNao10 = document.getElementById("N10");
    var caixaTexto10 = document.getElementById("floatingTextarea10");
    var caixasTexto10 = document.querySelectorAll("[id^='floatingTextarea']");
    var checkboxSim11 = document.getElementById("pro11");
    var checkboxNao11 = document.getElementById("N11");
    var caixaTexto11 = document.getElementById("floatingTextarea11");
    var caixasTexto11 = document.querySelectorAll("[id^='floatingTextarea']");
    var caixaTexto12 = document.getElementById("floatingTextarea12");
    var caixasTexto12 = document.querySelectorAll("[id^='floatingTextarea']");
    var redirecionar = true;

    event.preventDefault();

    if (!checkboxSim.checked && !checkboxNao.checked) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim.checked && checkboxNao.checked) {
        
        return true;
      } else if (checkboxSim.checked && !document.querySelector('input[name="que_1_1"]:checked')) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim.checked && !document.querySelector('input[name="que_1_3"]:checked')) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim.checked && caixaTexto.value.trim() === "") {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }
    
      var textoPreenchido = false;

      for (var i = 0; i < caixasTexto.length; i++) {
        if (caixasTexto[i].value.trim() !== "") {
          textoPreenchido = true;
          break;
        }
      }
      if (!textoPreenchido) {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }

      if (!checkboxSim2.checked && !checkboxNao2.checked) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim2.checked && checkboxNao2.checked) {
        
        return true;
      } else if (checkboxSim2.checked && !document.querySelector('input[name="que_2_1"]:checked')) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim2.checked && !document.querySelector('input[name="que_2_2"]:checked')) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim2.checked && caixaTexto2.value.trim() === "") {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }
    
      var textoPreenchido2 = false;

      for (var i = 0; i < caixasTexto2.length; i++) {
        if (caixasTexto2[i].value.trim() !== "") {
          textoPreenchido2 = true;
          break;
        }
      }
      if (!textoPreenchido2) {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }

      if (!checkboxSim3.checked && !checkboxNao3.checked) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim3.checked && checkboxNao3.checked) {
        
        return true;
      } else if (checkboxSim3.checked && !document.querySelector('input[name="que_3_1"]:checked')) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim3.checked && !document.querySelector('input[name="que_3_2"]:checked')) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim3.checked && !document.querySelector('input[name="que_3_3"]:checked')) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim3.checked && caixaTexto3.value.trim() === "") {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }
    
      var textoPreenchido3 = false;

      for (var i = 0; i < caixasTexto3.length; i++) {
        if (caixasTexto3[i].value.trim() !== "") {
          textoPreenchido3 = true;
          break;
        }
      }
      if (!textoPreenchido3) {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }

      if (!checkboxSim4.checked && !checkboxNao4.checked) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim4.checked && checkboxNao4.checked) {
        
        return true;
      } else if (checkboxSim4.checked && !document.querySelector('input[name="que_4_1"]:checked')) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim4.checked && !document.querySelector('input[name="que_4_2"]:checked')) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim4.checked && caixaTexto4.value.trim() === "") {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }
    
      var textoPreenchido4 = false;

      for (var i = 0; i < caixasTexto4.length; i++) {
        if (caixasTexto4[i].value.trim() !== "") {
          textoPreenchido4 = true;
          break;
        }
      }
      if (!textoPreenchido4) {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }

      if (!checkboxSim5.checked && !checkboxNao5.checked) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim5.checked && checkboxNao5.checked) {
        
        return true;
      } else if (checkboxSim5.checked && caixaTextoNatureza5[0].value.trim() === "") {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      } else if (checkboxSim5.checked && !document.querySelector('input[name="que_5_parte"]:checked')) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim5.checked && !checkboxAberto5) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim5.checked && caixaTexto5.value.trim() === "") {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }
      
      var textoPreenchido5 = false;
      
      for (var i = 0; i < caixasTexto5.length; i++) {
        if (caixasTexto5[i].value.trim() !== "") {
          textoPreenchido5 = true;
          break;
        }
      }
      
      if (!textoPreenchido5) {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      } 

      if (!checkboxSim6.checked && !checkboxNao6.checked) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim6.checked && checkboxNao6.checked) {
        
        return true;
      } else if (checkboxSim6.checked && caixaTextoNatureza6[0].value.trim() === "") {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      } else if (checkboxSim6.checked && !document.querySelector('input[name="que_6_parte"]:checked')) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim6.checked && !checkboxAberto6) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim6.checked && caixaTexto6.value.trim() === "") {
        alert("Por favor, insir um texto antes de enviar o formulário.");
        return false;
      }
      
      var textoPreenchido6 = false;
      
      for (var i = 0; i < caixasTexto6.length; i++) {
        if (caixasTexto6[i].value.trim() !== "") {
          textoPreenchido6 = true;
          break;
        }
      }
      
      if (!textoPreenchido6) {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }

      if (!checkboxSim7.checked && !checkboxNao7.checked) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim7.checked && checkboxNao7.checked) {
        
        return true;
      } else if (checkboxSim7.checked && caixaTextoNatureza7[0].value.trim() === "") {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      } else if (checkboxSim7.checked && !document.querySelector('input[name="que_7_parte"]:checked')) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim7.checked && !checkboxAberto7) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim7.checked && caixaTexto7.value.trim() === "") {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }
      
      var textoPreenchido7 = false;
      
      for (var i = 0; i < caixasTexto7.length; i++) {
        if (caixasTexto7[i].value.trim() !== "") {
          textoPreenchido7 = true;
          break;
        }
      }
      
      if (!textoPreenchido7) {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }

      if (!checkboxSim8.checked && !checkboxNao8.checked) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim8.checked && checkboxNao8.checked) {
        
        return true;
      } else if (checkboxSim8.checked && !document.querySelector('input[name="que_8_1"]:checked')) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim8.checked && !document.querySelector('input[name="que_8_2"]:checked')) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim8.checked && !document.querySelector('input[name="que_8_3"]:checked')) {
        alert("PPor favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim8.checked && caixaTexto8.value.trim() === "") {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }
    
      var textoPreenchido8 = false;

      for (var i = 0; i < caixasTexto8.length; i++) {
        if (caixasTexto8[i].value.trim() !== "") {
          textoPreenchido8 = true;
          break;
        }
      }
      if (!textoPreenchido8) {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }

      if (!checkboxSim9.checked && !checkboxNao9.checked) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim9.checked && checkboxNao9.checked) {
        
        return true;
      } else if (checkboxSim9.checked && !document.querySelector('input[name="que_9_1"]:checked')) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim9.checked && !document.querySelector('input[name="que_9_2"]:checked')) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim9.checked && caixaTexto9.value.trim() === "") {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }
    
      var textoPreenchido9 = false;

      for (var i = 0; i < caixasTexto9.length; i++) {
        if (caixasTexto9[i].value.trim() !== "") {
          textoPreenchido9 = true;
          break;
        }
      }
      if (!textoPreenchido9) {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }

      if (!checkboxSim10.checked && !checkboxNao10.checked) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada");
        return false;
      } else if (checkboxSim10.checked && checkboxNao10.checked) {
        
        return true;
      } else if (checkboxSim10.checked && caixaTexto10.value.trim() === "") {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }

      var textoPreenchido10 = false;

      for (var i = 0; i < caixasTexto10.length; i++) {
        if (caixasTexto10[i].value.trim() !== "") {
          textoPreenchido10 = true;
          break;
        }
      }
      if (!textoPreenchido10) {
        alert("Por favor, insir um texto antes de enviar o formulário.");
        return false;
      }

      if (!checkboxSim11.checked && !checkboxNao11.checked) {
        alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
        return false;
      } else if (checkboxSim11.checked && checkboxNao11.checked) {
        
        return true;
      } else if (checkboxSim11.checked && caixaTexto11.value.trim() === "") {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }
    
      var textoPreenchido11 = false;

      for (var i = 0; i < caixasTexto11.length; i++) {
        if (caixasTexto11[i].value.trim() !== "") {
          textoPreenchido11 = true;
          break;
        }
      }
      if (!textoPreenchido11) {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }

      if (caixaTexto12.value.trim() === "") {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }

      var textoPreenchido12 = false;

      for (var i = 0; i < caixasTexto12.length; i++) {
        if (caixasTexto12[i].value.trim() !== "") {
          textoPreenchido12 = true;
          break;
        }
      }
      if (!textoPreenchido12) {
        alert("Por favor, insira um texto antes de enviar o formulário.");
        return false;
      }

      if (redirecionar) {
        window.location.href = "index.php";
      }
   
    return redirecionar
}