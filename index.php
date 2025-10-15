<?php
session_start();

// Redirect to login if not authenticated
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: pin.php");
    exit();
}

// Session timeout logic (5 minutes)
$timeout = 300; // seconds
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $timeout) {
    session_unset();
    session_destroy();
    header("Location: pin.php?timeout=true");
    exit();
}
$_SESSION['LAST_ACTIVITY'] = time();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="index.css" />
  <title>Invoice Generator</title>
</head>
<body>
<!-- Logout Button -->
<div class="logout-container">
  <form action="logout.php" method="post">
    <button type="submit" class="logout-btn">Logout</button>
  </form>
</div>

  <!-- Invoice Form -->
  <div class="invoice-container">
    <form id="invoiceForm" action="GenerateInvoice.php" method="post">
      <!-- INVOICE SECTION -->
      <div class="section">
        <div class="section-header">INVOICE</div>
        <div>
          <strong>Date:</strong>
          <input type="date" name="date" id="dateInput" required />
        </div>
      </div>

      <!-- COMPANY SECTION -->
      <div class="section">
        <div class="section-header">COMPANY</div>
        <div>
          <strong>NAME:</strong>
          <input type="text" name="companyName" id="companyNameInput"
            value="LIGHTNING SPEED TRANSPORTATION" required />
        </div>
        <div>
          <strong>ADDRESS:</strong>
          <textarea name="companyAddress" id="companyAddressInput" required>
D.NO 28-5-2, SANTHINAGAR 14TH LANE BESIDE UNION BANK ATM ELURU-534007, ANDHRA PRADESH</textarea>
        </div>
        <div>
          <strong>PHONE NUMBER:</strong>
          <input type="text" name="companyPhone" id="companyPhoneInput" value="7286023136" required />
        </div>
        <div>
          <strong>EMAIL:</strong>
          <input type="email" name="companyEmail" id="companyEmailInput" value="anandnaidu231@gmail.com" required />
        </div>
      </div>

      <!-- BANKING DETAILS -->
      <div class="section">
        <div class="section-header">BANKING DETAILS</div>
        <div>
          <strong>NAME:</strong>
          <input type="text" name="bankingCompanyName" id="bankingCompanyNameInput"
            value="LIGHTNING SPEED TRANSPORTATION" required />
        </div>
        <div>
          <strong>BANK NAME:</strong>
          <input type="text" name="bankName" id="bankNameInput"
            value="KANAKAMAHALKSHMI CO-OPERATIVE BANK" required />
        </div>
        <div>
          <strong>ACCOUNT NUMBER:</strong>
          <input type="number" name="accountNumber" id="accountNumberInput" value="1007014000264" required />
        </div>
        <div>
          <strong>IFC CODE:</strong>
          <input type="text" name="ifcCode" id="ifcCodeInput" value="IBKL0150KMC" required />
        </div>
      </div>

      <!-- BILL TO -->
      <div class="section">
        <div class="section-header">BILL TO</div>
        <div>
          <strong>NAME:</strong>
          <input type="text" name="billToName" id="billToNameInput" required />
        </div>
        <div>
          <strong>ADDRESS:</strong>
          <textarea name="billToAddress" id="billToAddressInput" required></textarea>
        </div>
        <div>
          <strong>PHONE NUMBER:</strong>
          <input type="tel" name="billToPhone" id="billToPhoneInput" required />
        </div>
      </div>

      <!-- SHIPMENT DETAILS -->
      <div class="section">
        <div class="section-header">SHIPMENT DETAILS</div>
        <div>
          <strong>AWB NUMBER:</strong>
          <input type="number" name="awbNumber" id="awbNumberInput" required />
        </div>
        <div>
          <strong>ORIGIN:</strong>
          <input type="text" name="origin" id="originInput" required />
        </div>
        <div>
          <strong>DESTINATION:</strong>
          <input type="text" name="destination" id="destinationInput" required />
        </div>
        <div>
          <strong>PIECES:</strong>
          <input type="number" name="pieces" id="piecesInput" required />
        </div>
        <div>
          <strong>SHIPMENT WEIGHT:</strong>
          <input type="number" name="shipmentWeight" id="shipmentWeightInput" step="0.01" required />
        </div>
        <div>
          <strong>PRICE:</strong>
          <input type="number" name="price" id="priceInput" step="0.01" required />
        </div>
      </div>

      <button type="submit">Generate PDF</button>
    </form>
  </div>

  <script src="Form.js"></script>
</body>
</html>
