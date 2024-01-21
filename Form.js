function validateForm() {
    // Add your form validation logic here
    // Example: Check if required fields are not empty

    var requiredFields = ['dateInput', 'companyNameInput', 'companyAddressInput', 'companyPhoneInput', 'companyEmailInput', 'bankingCompanyNameInput', 'bankNameInput', 'accountNumberInput', 'ifcCodeInput', 'billToNameInput', 'billToAddressInput', 'billToPhoneInput', 'awbNumberInput', 'originInput', 'destinationInput', 'piecesInput', 'shipmentWeightInput', 'priceInput'];

    for (var i = 0; i < requiredFields.length; i++) {
        var field = document.getElementById(requiredFields[i]);
        if (field.value.trim() === '') {
            alert('Please fill in all required fields.');
            return false;
        }
    }

    // Add more validation rules as needed

    return true; // If all validations pass
}

function submitForm() {
    event.preventDefault();

    // Validate the form before submitting
    if (!validateForm()) {
        return false;
    }

    // Collect element values
    var date = document.getElementById('dateInput').value;
    var companyName = document.getElementById('companyNameInput').value;
    var companyAddress = document.getElementById('companyAddressInput').value;
    var companyPhone = document.getElementById('companyPhoneInput').value;
    var companyEmail = document.getElementById('companyEmailInput').value;
    var bankingCompanyName = document.getElementById('bankingCompanyNameInput').value;
    var bankName = document.getElementById('bankNameInput').value;
    var accountNumber = document.getElementById('accountNumberInput').value;
    var ifcCode = document.getElementById('ifcCodeInput').value;
    var billToName = document.getElementById('billToNameInput').value;
    var billToAddress = document.getElementById('billToAddressInput').value;
    var billToPhone = document.getElementById('billToPhoneInput').value;
    var awbNumber = document.getElementById('awbNumberInput').value;
    var origin = document.getElementById('originInput').value;
    var destination = document.getElementById('destinationInput').value;
    var pieces = document.getElementById('piecesInput').value;
    var shipmentWeight = document.getElementById('shipmentWeightInput').value;
    var price = document.getElementById('priceInput').value;

    // Create a FormData object to send the values to PHP
    var formData = new FormData();
    formData.append('date', date);
    formData.append('companyName', companyName);
    formData.append('companyAddress', companyAddress);
    formData.append('companyPhone', companyPhone);
    formData.append('companyEmail', companyEmail);
    formData.append('bankingCompanyName', bankingCompanyName);
    formData.append('bankName', bankName);
    formData.append('accountNumber', accountNumber);
    formData.append('ifcCode', ifcCode);
    formData.append('billToName', billToName);
    formData.append('billToAddress', billToAddress);
    formData.append('billToPhone', billToPhone);
    formData.append('awbNumber', awbNumber);
    formData.append('origin', origin);
    formData.append('destination', destination);
    formData.append('pieces', pieces);
    formData.append('shipmentWeight', shipmentWeight);
    formData.append('price', price);

    // Use AJAX to send the FormData to the PHP script
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'GenerateInvoice.php', true);
    xhr.onload = function () {
        // Handle the response if needed
        console.log(xhr.responseText);
    };
    xhr.send(formData);

    // Prevent the form from submitting normally
    return false;
}

// Attach the submitForm function to the form's onsubmit event
document.getElementById('yourFormId').addEventListener('submit', submitForm);
