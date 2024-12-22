<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Invoice.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f9f9f9;
    }

    .invoice-container {
      max-width: 800px;
      margin: 0 auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .header img {
      max-width: 100%;
      height: auto;
    }

    .section {
      margin-bottom: 20px;
    }

    .section h2 {
      font-size: 18px;
      margin-bottom: 10px;
      color: #333;
      border-bottom: 2px solid #ddd;
      padding-bottom: 5px;
    }

    .details-table {
      width: 100%;
      border-collapse: collapse;
    }

    .details-table th, .details-table td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: left;
    }

    .details-table th {
      background-color: #f4f4f4;
    }

    .banking-details p, .signature {
      margin: 10px 0;
      font-size: 14px;
      line-height: 1.6;
    }

    .signature {
      margin-top: 20px;
      text-align: right;
      font-weight: bold;
    }

    .invoice-header {
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    .invoice-header h2 {
      margin: 0;
      flex-grow: 1;
      text-align: center;
    }

    .invoice-header h3 {
      margin: 0;
      position: absolute;
      right: 0;
      padding: 0px;
    }

    /* Print Button Styling */
    .print-btn {
      display: inline-block;
      position: absolute;
      padding: 10px 20px;
      margin-top: 20px;
      top: 20px;
      right: 10px;
      background-color: #4CAF50;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .print-btn:hover {
      background-color: #45a049;
    }

    /* Print-specific Styles */
    @media print {
      /* Hide the print button when printing */
      .print-btn {
        display: none;
      }

      /* Remove the body background and padding for print */
      body {
        padding: 0;
        background-color: white;
      }

      /* Adjust invoice container to fit on paper */
      .invoice-container {
        box-shadow: none;
        padding: 10px;
      }

      /* Make sure tables and text remain clean */
      .details-table th, .details-table td {
        padding: 8px;
      }

      .signature {
        text-align: right;
        margin-top: 50px;
      }

      /* Hide banking details and checkbox on print */
      .hide-bank-details,
      .hide-print-checkbox {
        display: none;
      }
    }
  </style>
  <title>Invoice</title>
</head>
<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $date = $_POST["date"];
      $companyName = $_POST["companyName"];
      $companyAddress = $_POST["companyAddress"];
      $companyPhone = $_POST["companyPhone"];
      $companyEmail = $_POST["companyEmail"];
      $bankingCompanyName = $_POST["bankingCompanyName"];
      $bankName = $_POST["bankName"];
      $accountNumber = $_POST["accountNumber"];
      $ifcCode = $_POST["ifcCode"];
      $billToName = $_POST["billToName"];
      $billToAddress = $_POST["billToAddress"];
      $billToPhone = $_POST["billToPhone"];
      $awbNumber = $_POST["awbNumber"];
      $origin = $_POST["origin"];
      $destination = $_POST["destination"];
      $pieces = $_POST["pieces"];
      $shipmentWeight = $_POST["shipmentWeight"];
      $price = $_POST["price"];
  ?>

  <div class="invoice-container">
    <div class="header">
      <img src="LST.jpg" alt="Logo">
    </div>

    <div class="invoice-header">
      <h2>INVOICE</h2>
      <h3>Date: <?php echo $date; ?></h3>
    </div>
    <div class="section">
      <h2>Company & Bill To</h2>
      <table class="details-table">
        <tr>
          <th style="width: 50%;">Company</th>
          <th style="width: 50%;">Bill To</th>
        </tr>
        <tr>
          <td style="width: 50%; vertical-align: top;">
            <strong>Name:</strong> <?php echo $companyName; ?><br>
            <strong>Address:</strong> <?php echo $companyAddress; ?><br>
            <strong>Phone:</strong> <?php echo $companyPhone; ?><br>
            <strong>Email:</strong> <?php echo $companyEmail; ?>
          </td>
          <td style="width: 50%; vertical-align: top;">
            <strong>Name:</strong> <?php echo $billToName; ?><br>
            <strong>Address:</strong> <?php echo $billToAddress; ?><br>
            <strong>Phone:</strong> <?php echo $billToPhone; ?>
          </td>
        </tr>
      </table>
    </div>

    <div class="section">
      <h2>Shipment Details</h2>
      <table class="details-table">
        <tr>
          <th>AWB Number</th>
          <th>Origin</th>
          <th>Destination</th>
          <th>Pieces</th>
          <th>Shipment Weight</th>
          <th>Price</th>
        </tr>
        <tr>
          <td><?php echo $awbNumber; ?></td>
          <td><?php echo $origin; ?></td>
          <td><?php echo $destination; ?></td>
          <td><?php echo $pieces; ?></td>
          <td><?php echo $shipmentWeight; ?> KGS</td>
          <td>RS. <?php echo $price; ?></td>
        </tr>
      </table>
    </div>

    <div class="section" id="bank-details-container">
      <h2>Banking Details</h2>
      <div id="bank-details" class="hide-bank-details">
        <p><strong>Name:</strong> <?php echo $bankingCompanyName; ?></p>
        <p><strong>Bank Name:</strong> <?php echo $bankName; ?></p>
        <p><strong>Account Number:</strong> <?php echo $accountNumber; ?></p>
        <p><strong>IFC Code:</strong> <?php echo $ifcCode; ?></p>
      </div>
    </div>

    <div class="signature">
      Authorized Signature
    </div>

    <!-- Checkbox to hide banking details -->
    <div class="hide-print-checkbox">
      <label for="hideBankDetails">Hide Banking Details on Print:</label>
      <input type="checkbox" id="hideBankDetails" onclick="toggleBankingDetails()">
    </div>

    <!-- Print Button -->
    <button class="print-btn" onclick="window.print()">Print Invoice</button>
  </div>

  <script>
    // Function to toggle banking details visibility
    function toggleBankingDetails() {
      var checkbox = document.getElementById("hideBankDetails");
      var bankDetails = document.getElementById("bank-details");
      var bankDetailsContainer = document.getElementById("bank-details-container"); // Target the container
    
      if (checkbox.checked) {
        bankDetails.style.display = "none";
        bankDetailsContainer.style.display = "none"; // Hide the entire container, including the header
      } else {
        bankDetails.style.display = "block";
        bankDetailsContainer.style.display = "block"; // Show the entire container, including the header
      }
    }
  </script>

  <?php } else { ?>
    <p>Error: Form data not submitted.</p>
  <?php } ?>
</body>
</html>
