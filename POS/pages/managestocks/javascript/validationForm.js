function toggleExpirationInput(hasExpiration) {
  const expirationDateInput = document.getElementById('expirationDateInput');
  expirationDateInput.style.display = hasExpiration ? 'block' : 'none';
  validateForm();
}

function validateForm() {
  const tax = parseFloat(document.getElementById('tax').value);
  const purchasePrice = parseFloat(document.getElementById('purchasePrice').value);
  const discount = parseFloat(document.getElementById('discount').value);
  const quantity = parseFloat(document.getElementById('quantity').value);
  const expirationOption = document.querySelector('input[name="expirationOption"]:checked');


  if (purchasePrice <= 0 || quantity <= 0 || !Number.isInteger(quantity)) {
    $('#addStockButton').prop('disabled', true);

  }else{
    
// Check if the input values are valid floats and non-negative
const isNumeric = !isNaN(tax) && !isNaN(purchasePrice) && !isNaN(discount) && !isNaN(quantity) &&
tax >= 0 && purchasePrice >= 0 && discount >= 0 && quantity >= 0;

// Check if an expiration option is selected
const hasExpirationOption = expirationOption !== null;

// Validate expiration date if "With Expiration" is selected
const hasExpirationDate = expirationOption && expirationOption.value === 'withExpiration';
const expirationDate = document.getElementById('expirationDate').value;

console.log(expirationDate)
const isValidExpiration = !hasExpirationDate || (hasExpirationDate && expirationDate);

const addButton = document.querySelector('#addStockButton');
addButton.disabled = !(isNumeric && hasExpirationOption && isValidExpiration);

  }
  
}

document.addEventListener('input', validateForm);
