// Auto-fill current date
document.addEventListener("DOMContentLoaded", () => {
  const dateInput = document.getElementById("dateInput");
  const today = new Date().toISOString().split("T")[0];
  dateInput.value = today;
});

// Form validation
document.getElementById("invoiceForm").addEventListener("submit", function (event) {
  const requiredFields = [
    "dateInput",
    "companyNameInput",
    "companyAddressInput",
    "companyPhoneInput",
    "companyEmailInput",
    "bankingCompanyNameInput",
    "bankNameInput",
    "accountNumberInput",
    "ifcCodeInput",
    "billToNameInput",
    "billToAddressInput",
    "billToPhoneInput",
    "awbNumberInput",
    "originInput",
    "destinationInput",
    "piecesInput",
    "shipmentWeightInput",
    "priceInput"
  ];

  let allValid = true;

  requiredFields.forEach(id => {
    const field = document.getElementById(id);
    if (!field.value.trim()) {
      field.classList.add("error");
      allValid = false;
    } else {
      field.classList.remove("error");
    }
  });

  if (!allValid) {
    alert("Please fill in all required fields.");
    event.preventDefault();
  }
});
