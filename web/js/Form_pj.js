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
  var natureza4 = document.getElementById('natureza4');
  var subCheckboxInputs5 = document.querySelectorAll('.secondCheckboxContainer_5 input[type="radio"]');
  var N5 = document.getElementById('N5');
  var textarea5 = document.getElementById('floatingTextarea5');
  var natureza5 = document.getElementById('natureza5');
  var N6 = document.getElementById('N6');
  var textarea6 = document.getElementById('floatingTextarea6');
  var subCheckboxInputs8 = document.querySelectorAll('.secondCheckboxContainer_8 input[type="radio"]');
  var N8 = document.getElementById('N8');
  var textarea8 = document.getElementById('floatingTextarea8');
  var N9 = document.getElementById('N9');
  var textarea9 = document.getElementById('floatingTextarea9');
  var N10 = document.getElementById('N10');
  var textarea10 = document.getElementById('floatingTextarea10');
  
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
    natureza4.value = '';
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
    textarea6.value = '';
  } 
  

  
  if (N8.checked) {
    for (var i = 0; i < subCheckboxInputs8.length; i++) {
      subCheckboxInputs8[i].checked = false;
    }
    textarea8.value = '';
  }
  
  if (N9.checked) {
    textarea9.value = '';
  }
  
  if (N10.checked) {
    textarea10.value = '';
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
    var checkbox8 = document.getElementById("pro8");
    var secondCheckboxContainer8 = document.getElementById("secondCheckboxContainer8");
    
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

    if (checkbox8.checked) {
        secondCheckboxContainer8.style.display = "block";
    } else {
        secondCheckboxContainer8.style.display = "none";
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
    var caixaTexto4_1 = document.getElementById("caixa-texto-pro4_1");
    var checkbox5 = document.getElementById("pro5");
    var caixaTexto5 = document.getElementById("caixa-texto-pro5");
    var caixaTexto5_1 = document.getElementById("caixa-texto-pro5_1");
    var checkbox6 = document.getElementById("pro6");
    var caixaTexto6 = document.getElementById("caixa-texto-pro6");
    var checkbox8 = document.getElementById("pro8");
    var caixaTexto8 = document.getElementById("caixa-texto-pro8");
    var checkbox9 = document.getElementById("pro9");
    var caixaTexto9 = document.getElementById("caixa-texto-pro9");
    var checkbox10 = document.getElementById("pro10");
    var caixaTexto10 = document.getElementById("caixa-texto-pro10");

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
        caixaTexto4_1.classList.remove("hidden");
    } else {
        caixaTexto4.classList.add("hidden");
        caixaTexto4_1.classList.add("hidden");
    }

    if (checkbox5.checked) {
        caixaTexto5.classList.remove("hidden");
        caixaTexto5_1.classList.remove("hidden");
    } else {
        caixaTexto5.classList.add("hidden");
        caixaTexto5_1.classList.add("hidden");
    }

    if (checkbox6.checked) {
        caixaTexto6.classList.remove("hidden");
    } else {
        caixaTexto6.classList.add("hidden");
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
    var caixaTexto4_1 = document.getElementById("caixa-texto-pro4_1");
    var checkbox5 = document.getElementById("N5");
    var secondCheckboxContainer5 = document.getElementById("secondCheckboxContainer5");
    var caixaTexto5 = document.getElementById("caixa-texto-pro5");
    var caixaTexto5_1 = document.getElementById("caixa-texto-pro5_1");
    var checkbox6 = document.getElementById("N6");
    var caixaTexto6 = document.getElementById("caixa-texto-pro6");
    var checkbox8 = document.getElementById("N8");
    var secondCheckboxContainer8 = document.getElementById("secondCheckboxContainer8");
    var caixaTexto8 = document.getElementById("caixa-texto-pro8");
    var checkbox9 = document.getElementById("N9");
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
        caixaTexto4_1.classList.add("hidden");
    } else if (id === "N5") {
        checkbox5.checked = "true";
        secondCheckboxContainer5.style.display = "none";
        caixaTexto5.classList.add("hidden");
        caixaTexto5_1.classList.add("hidden");
    } else if (id === "N6") {
        checkbox6.checked = "true";
        caixaTexto6.classList.add("hidden");
    } else if (id === "N8") {
        checkbox8.checked = "true";
        secondCheckboxContainer8.style.display = "none";
        caixaTexto8.classList.add("hidden");
    } else if (id === "N9") {
        checkbox9.checked = "true";
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
    var caixaTextoNatureza4 = document.querySelectorAll("[id^='floatingTextarea4']");
    var checkboxDecisao4 = document.querySelector('input[name="que_4_decisao"]:checked');
    var caixaTexto4 = document.getElementById("floatingTextarea4");
    var caixasTexto4 = document.querySelectorAll("[id^='floatingTextarea']");
    var checkboxSim5 = document.getElementById("pro5");
    var checkboxNao5 = document.getElementById("N5");
    var caixaTextoNatureza5 = document.querySelectorAll("[id^='floatingTextarea5']");
    var checkboxDecisao5 = document.querySelector('input[name="que_5_decisao"]:checked');
    var caixaTexto5 = document.getElementById("floatingTextarea5");
    var caixasTexto5 = document.querySelectorAll("[id^='floatingTextarea']");
    var checkboxSim6 = document.getElementById("pro6");
    var checkboxNao6 = document.getElementById("N6");
    var caixaTexto6 = document.getElementById("floatingTextarea6");
    var caixasTexto6 = document.querySelectorAll("[id^='floatingTextarea']");
    var checkbox_7_2 = document.getElementById ("secondCheckbox_7_2");
    var checkbox_7_2_1 = document.getElementById ("secondCheckbox_7_2_1");
    var checkbox_7_3 = document.getElementById ("secondCheckbox_7_3");
    var checkbox_7_3_1 = document.getElementById ("secondCheckbox_7_3_1");
    var checkbox_7_4 = document.getElementById ("secondCheckbox_7_4");
    var checkbox_7_4_1 = document.getElementById ("secondCheckbox_7_4_1");
    var checkbox_7_5 = document.getElementById ("secondCheckbox_7_5");
    var checkbox_7_5_1 = document.getElementById ("secondCheckbox_7_5_1");
    var checkbox_7_6 = document.getElementById ("secondCheckbox_7_6");
    var checkbox_7_6_1 = document.getElementById ("secondCheckbox_7_6_1");
    var caixaTexto7 = document.getElementById("floatingTextarea7");
    var caixasTexto7 = document.querySelectorAll("[id^='floatingTextarea']");
    var checkboxSim8 = document.getElementById("pro8");
    var checkboxNao8 = document.getElementById("N8");
    var checkbox_8_2 = document.getElementById ("secondCheckbox_8_2");
    var checkbox_8_3 = document.getElementById ("secondCheckbox_8_3");
    var checkbox_8_4 = document.getElementById ("secondCheckbox_8_4");
    var checkbox_8_5 = document.getElementById ("secondCheckbox_8_5");
    var checkbox_8_6 = document.getElementById ("secondCheckbox_8_6");
    var checkbox_8_7 = document.getElementById ("secondCheckbox_8_7");
    var checkbox_8_8 = document.getElementById ("secondCheckbox_8_8");
    var checkbox_8_9 = document.getElementById ("secondCheckbox_8_9");
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
    var caixaTexto11 = document.getElementById("floatingTextarea11");
    var caixasTexto11 = document.querySelectorAll("[id^='floatingTextarea']");
    var redirecionar = true;

    if (!checkboxSim.checked && !checkboxNao.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim.checked && checkboxNao.checked) {
      redirecionar = true;
      return true;
    }  else if (checkboxSim.checked && !document.querySelector('input[name="que_1_2"]:checked')) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim.checked && !document.querySelector('input[name="que_1_3"]:checked')) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim.checked && caixaTexto.value.trim() === "") {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }
  
    textoPreenchido = false;
  
    for (var i = 0; i < caixasTexto.length; i++) {
      if (caixasTexto[i].value.trim() !== "") {
        textoPreenchido = true;
        break;
      }
    }
    if (!textoPreenchido && !checkboxNao.checked) {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }

    if (!checkboxSim2.checked && !checkboxNao2.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim2.checked && checkboxNao2.checked) {
      redirecionar = true;
      return true;
    }  else if (checkboxSim2.checked && !document.querySelector('input[name="que_2_2"]:checked')) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");  
      event.preventDefault();
      return false;
    } else if (checkboxSim2.checked && !document.querySelector('input[name="que_2_3"]:checked')) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim2.checked && caixaTexto2.value.trim() === "") {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }
    
      textoPreenchido2 = false;
    
    for (var i = 0; i < caixasTexto2.length; i++) {
      if (caixasTexto2[i].value.trim() !== "") {
        textoPreenchido2 = true;
        break;
      }
    }
    if (!textoPreenchido2 && !checkboxNao2.checked) {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }

    if (!checkboxSim3.checked && !checkboxNao3.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim3.checked && checkboxNao3.checked) {
      redirecionar = true;
      return true;
    } else if (checkboxSim3.checked && !document.querySelector('input[name="que_3_2"]:checked')) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim3.checked && !document.querySelector('input[name="que_3_3"]:checked')) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim3.checked && caixaTexto3.value.trim() === "") {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }
    
    textoPreenchido3 = false;
    
    for (var i = 0; i < caixasTexto3.length; i++) {
      if (caixasTexto3[i].value.trim() !== "") {
        textoPreenchido3 = true;
        break;
      }
    }
    if (!textoPreenchido3 && !checkboxNao3.checked) {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }

    if (!checkboxSim4.checked && !checkboxNao4.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim4.checked && checkboxNao4.checked) {
      redirecionar = true;
      return true;
    } else if (checkboxSim4.checked && caixaTextoNatureza4[0].value.trim() === "") {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    } else if (checkboxSim4.checked && !document.querySelector('input[name="que_4_parte"]:checked')) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim4.checked && !checkboxDecisao4) {
      alert("Por favor, não deixe nenhuma a sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim4.checked && caixaTexto4.value.trim() === "") {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }
    
    textoPreenchido4 = false;
    
    for (var i = 0; i < caixasTexto4.length; i++) {
      if (caixasTexto4[i].value.trim() !== "") {
        textoPreenchido4 = true;
        break;
      }
    }
      
    if (!textoPreenchido4 && !checkboxNao4.checked) {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }

    if (!checkboxSim5.checked && !checkboxNao5.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim5.checked && checkboxNao5.checked) {
      redirecionar = true;
      return true;
    } else if (checkboxSim5.checked && caixaTextoNatureza5[0].value.trim() === "") {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    } else if (checkboxSim5.checked && !document.querySelector('input[name="que_5_parte"]:checked')) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim5.checked && !checkboxDecisao5) {
      alert("Por favor, não deixe nenhuma a sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim5.checked && caixaTexto5.value.trim() === "") {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }
    
    textoPreenchido5 = false;
    
    for (var i = 0; i < caixasTexto5.length; i++) {
      if (caixasTexto5[i].value.trim() !== "") {
        textoPreenchido5 = true;
        break;
      }
    }
    
    if (!textoPreenchido5 && !checkboxNao5.checked) {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }
      
    if (!checkboxSim6.checked && !checkboxNao6.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada");
      event.preventDefault();
      return false;
    } else if (checkboxSim6.checked && checkboxNao6.checked) {
      redirecionar = true;
      return true;
    } else if (checkboxSim6.checked && caixaTexto6.value.trim() === "") {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }
  
    textoPreenchido6 = false;

    for (var i = 0; i < caixasTexto6.length; i++) {
      if (caixasTexto6[i].value.trim() !== "") {
        textoPreenchido6 = true;
        break;
      }
    }
    if (!textoPreenchido6 && !checkboxNao6.checked) {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }

    if (!checkbox_7_2.checked && !checkbox_7_2_1.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (!checkbox_7_3.checked && !checkbox_7_3_1.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (!checkbox_7_4.checked && !checkbox_7_4_1.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (!checkbox_7_5.checked && !checkbox_7_5_1.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (!checkbox_7_6.checked && !checkbox_7_6_1.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (caixaTexto7.value.trim() === "") {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }
    
    textoPreenchido7 = false;

    for (var i = 0; i < caixasTexto7.length; i++) {
      if (caixasTexto7[i].value.trim() !== "") {
        textoPreenchido7 = true;
        break;
      }
    }
    if (!textoPreenchido7) {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }

    if (!checkboxSim8.checked && !checkboxNao8.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim8.checked && checkboxNao8.checked) {
      redirecionar = true;
      return true;
    } else if (checkboxSim8.checked && !checkbox_8_2.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim8.checked && !checkbox_8_3.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim8.checked && !checkbox_8_4.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim8.checked && !checkbox_8_5.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim8.checked && !checkbox_8_6.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim8.checked && !checkbox_8_7.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim8.checked && !checkbox_8_8.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim8.checked && !checkbox_8_9.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim8.checked && caixaTexto8.value.trim() === "") {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }
    
    textoPreenchido8 = false;

    for (var i = 0; i < caixasTexto8.length; i++) {
      if (caixasTexto8[i].value.trim() !== "") {
        textoPreenchido8 = true;
        break;
      }
    }
    if (!textoPreenchido8 && !checkboxNao8.checked) {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }

    if (!checkboxSim9.checked && !checkboxNao9.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim9.checked && checkboxNao9.checked) {
      redirecionar = true;
      return true;
    } else if (checkboxSim9.checked && caixaTexto9.value.trim() === "") {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }
  
    textoPreenchido9 = false;
  
    for (var i = 0; i < caixasTexto9.length; i++) {
      if (caixasTexto9[i].value.trim() !== "") {
        textoPreenchido9 = true;
        break;
      }
    }
    if (!textoPreenchido9 && !checkboxNao9.checked) {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }

    if (!checkboxSim10.checked && !checkboxNao10.checked) {
      alert("Por favor, não deixe nenhuma opção sem ser selecionada.");
      event.preventDefault();
      return false;
    } else if (checkboxSim10.checked && checkboxNao10.checked) {
      redirecionar = true;
      return true;
    } else if (checkboxSim10.checked && caixaTexto10.value.trim() === "") {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }
  
    textoPreenchido10 = false;
  
    for (var i = 0; i < caixasTexto10.length; i++) {
      if (caixasTexto10[i].value.trim() !== "") {
        textoPreenchido10 = true;
        break;
      }
    }
    if (!textoPreenchido10 && !checkboxNao10.checked) {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }

    if (caixaTexto11.value.trim() === "") {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }

    textoPreenchido11 = false;

    for (var i = 0; i < caixasTexto11.length; i++) {
      if (caixasTexto11[i].value.trim() !== "") {
        textoPreenchido11 = true;
        break;
      }
    }
    if (!textoPreenchido11) {
      alert("Por favor, insira um texto antes de enviar o formulário.");
      event.preventDefault();
      return false;
    }

    if (redirecionar) {
      window.location.href = "index.php";
    }

    return redirecionar 
}