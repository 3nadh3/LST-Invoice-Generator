document.getElementById('yourFormId').addEventListener('submit', submitForm);

function validateForm() {
    var requiredFields = ['dateInput', 'companyNameInput', 'companyAddressInput', 'companyPhoneInput', 'companyEmailInput', 'bankingCompanyNameInput', 'bankNameInput', 'accountNumberInput', 'ifcCodeInput', 'billToNameInput', 'billToAddressInput', 'billToPhoneInput', 'awbNumberInput', 'originInput', 'destinationInput', 'piecesInput', 'shipmentWeightInput', 'priceInput'];
    var allValid = true; // Flag to check overall form validity

    requiredFields.forEach(function(fieldId) {
        var field = document.getElementById(fieldId);
        if (field.value.trim() === '') {
            field.classList.add('error'); // Add an error class to highlight missing fields
            allValid = false;
        } else {
            field.classList.remove('error'); // Remove error class if field is filled
        }
    });

    if (!allValid) {
        alert('Please fill in all required fields.');
        return false;
    }

    // Additional validation rules can go here

    return true; // Return true if all validations pass
}

function submitForm(event) {
    event.preventDefault(); // Prevent default form submission

    // Validate the form before proceeding
    if (!validateForm()) {
        return false;
    }

    // Collect element values
    var formData = new FormData(document.getElementById('yourFormId'));

    // Use the Fetch API for AJAX request
    // JavaScript to set the input field to the current date
    document.addEventListener('DOMContentLoaded', function() {
      const dateInput = document.getElementById('dateInput');
      const today = new Date().toISOString().split('T')[0]; // Get current date in YYYY-MM-DD format
      dateInput.value = today; // Set the value of the input to the current date
    });
    
    return false; // Prevent normal form submission
}
