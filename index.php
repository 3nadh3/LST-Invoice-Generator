<?php
session_start();

$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';

if (stripos($user_agent, 'Googlebot') !== false) {
    // Serve static homepage content for Googlebot
    echo "<!DOCTYPE html><html><head><title>LST Invoice Generator</title></head><body>
          <h1>Welcome to LST Invoice Generator</h1>
          <p>This is an invoicing system built by Trinadh Musunuri.</p>
          <p>Visit <a href='https://trinadh.dev'>Trinadh's Portfolio</a> for more.</p>
          </body></html>";
    exit;
}

// For normal users, proceed as usual (redirect)
header("Location: pin.php");
exit;

// Session timeout (5 minutes)
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
  <link rel="icon" type="image/png" href="favicon.png" />
  <link rel="stylesheet" href="index.css" />
  <title>Invoice Generator | Lightning Speed Transportation</title>
 <meta name="robots" content="index, follow">
<meta name="author" content="Trinadh Musunuri">
<meta name="description" content="LST Invoice Generator by Trinadh Musunuri — a secure and fast online invoice creation tool for transportation and logistics.">
<meta property="og:title" content="LST Invoice Generator | Trinadh Musunuri">
<meta property="og:description" content="Generate transport invoices quickly and securely online. Built by Trinadh Musunuri.">
<meta property="og:url" content="https://lstinvoice.trinadh.dev/">
<meta property="og:type" content="website">
<meta property="og:site_name" content="LST Invoice Generator">

</head>
<body>
<div class="logout-container">
  <form action="logout.php" method="post">
    <button type="submit" class="logout-btn">Logout</button>
  </form>
</div>

<div class="invoice-container">
  <form id="invoiceForm" action="GenerateInvoice.php" method="post">
    <div class="section">
      <div class="section-header">INVOICE</div>
      <div>
        <strong>Date:</strong>
        <input type="date" name="date" id="dateInput" required />
      </div>
    </div>

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
