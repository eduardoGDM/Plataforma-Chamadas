console.log("esta funcionando")

function updateSelection(checkbox) {
    var checkboxes  = document.getElementsByName('items');
    
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] !== checkbox) {
          checkboxes[i].checked = false;
        }
      }
}

function changeColor() {
  var selectElement = document.getElementById('urgencia');
  var textElement = document.getElementById('urgenciaText');
  var selectedValue = selectElement.value;

  textElement.classList.remove('baixa', 'media', 'alta');
  textElement.classList.add(selectedValue.toLowerCase());
}

document.addEventListener('DOMContentLoaded', function() {
  var checkboxes = document.getElementsByClassName('checkboxSelected');
  
  for (var i = 0; i < checkboxes.length; i++) {
    checkboxes[i].checked = true; // Define a caixa de seleção como marcada (checked)
  }
});