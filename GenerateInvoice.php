<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Invoice.css">
  <style>
    table {
      border-collapse: collapse;
      width: 50%;
      margin-bottom: 20px;
    }

    table, th, td {
      border: 1px solid black;
    }

    th, td {
      padding: 8px;
      text-align: left;
    }
  </style>
  <title>Generated Invoice</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Access form data using $_POST
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

  // Output the generated invoice using the collected values
  
  echo '<p><img width="581" src="https://myfiles.space/user_files/190277_4f5905ba79cc1840/190277_custom_files/img1704364255.jpeg" alt="image" height="139">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>';
  echo '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>INVOICE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;DATE '.$date.'</strong></p>';
  echo '<table>';
  echo '    <tbody>';
  echo '        <tr>';
  echo '            <td>';
  echo '                <p><strong>COMPANY</strong></p>';
  echo '            </td>';
  echo '            <td>';
  echo '                <p><strong>BILL TO</strong></p>';
  echo '            </td>';
  echo '        </tr>';
  echo '        <tr>';
  echo '            <td>';
  echo '                <p><strong>NAME :</strong> '.$companyName.'</p>';
  echo '                <p>&nbsp;</p>';
  echo '                <p><strong>ADDRESS :</strong> '.$companyAddress.'</p>';
  echo '                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; BESIDE UNION BANK ATM</p>';
  echo '                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ELURU-534007, ANDHRA PRADESH</p>';
  echo '                <p>&nbsp;</p>';
  echo '                <p><strong>PH.NO :</strong> '.$companyPhone.'</p>';
  echo '                <p>&nbsp;</p>';
  echo '                <p><strong>EMAIL ID :</strong> '.$companyEmail.'</p>';
  echo '            </td>';
  echo '            <td>';
  echo '                <p><strong>NAME :</strong> '.$billToName.'</p>';
  echo '                <p>&nbsp;</p>';
  echo '                <p><strong>ADDRESS :</strong> '.$billToAddress.'</p>';
  echo '                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;25-13-4/1 FIRST FLOOR NR PLAZA</p>';
  echo '                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MORE SUPER MARKET ROAD</p>';
  echo '                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;NR PET ,ELURU &ndash; 534006</p>';
  echo '                <p>&nbsp;</p>';
  echo '                <p><strong>PH.NO :</strong> '.$billToPhone.'</p>';
  echo '                <p>&nbsp;</p>';
  echo '                <p>&nbsp;</p>';
  echo '                <p>&nbsp;</p>';
  echo '            </td>';
  echo '        </tr>';
  echo '    </tbody>';
  echo '</table>';
  echo '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>';
  echo '<p>&nbsp;</p>';
  echo '<table>';
  echo '    <tbody>';
  echo '        <tr>';
  echo '            <td>';
  echo '                <p><strong>AWB NUMBER</strong></p>';
  echo '            </td>';
  echo '            <td>';
  echo '                <p><strong>ORIGIN</strong></p>';
  echo '            </td>';
  echo '            <td>';
  echo '                <p><strong>DESTINATION</strong></p>';
  echo '            </td>';
  echo '            <td>';
  echo '                <p><strong>PIECES</strong></p>';
  echo '            </td>';
  echo '            <td>';
  echo '                <p><strong>SHIPMENT WEIGHT</strong></p>';
  echo '            </td>';
  echo '            <td>';
  echo '                <p><strong>PRICE</strong></p>';
  echo '            </td>';
  echo '        </tr>';
  echo '        <tr>';
  echo '            <td>';
  echo '                <p><strong>'.$awbNumber.'</strong></p>';
  echo '            </td>';
  echo '            <td>';
  echo '                <p><strong>'.$origin.'</strong></p>';
  echo '            </td>';
  echo '            <td>';
  echo '                <p><strong>'.$destination.'</strong></p>';
  echo '            </td>';
  echo '            <td>';
  echo '                <p><strong>'.$pieces.'</strong></p>';
  echo '            </td>';
  echo '            <td>';
  echo '                <p><strong>'.$shipmentWeight.' KGS.</strong></p>';
  echo '            </td>';
  echo '            <td>';
  echo '                <p><strong>RS. '.$price.'</strong></p>';
  echo '            </td>';
  echo '        </tr>';
  echo '    </tbody>';
  echo '</table>';
  echo '<p><strong>&nbsp;</strong></p>';
  echo '<p><strong>BANKING DETAILS</strong></p>';
  echo '<p><strong>NAME:&nbsp;&nbsp;&nbsp;</strong>'.$bankingCompanyName.'</p>';
  echo '<p><strong>BANK NAME:&nbsp;</strong> '.$bankName.'</p>';
  echo '<p><strong>ACCOUNT NUMBER: &nbsp;&nbsp;</strong>'.$accountNumber.'</p>';
  echo '<p><strong>IFC CODE:</strong>&nbsp; &nbsp;'.$ifcCode.'</p>';
  echo '<p><strong>&nbsp;</strong></p>';
  echo ' AUTHORIZED SIGNATURE</strong></p>';
  echo '<a href="mailto:moyiyo9282@visignal.com"></a><br></p>';

} else {
  echo '<p>Error: Form data not submitted.</p>';
}
?>

</body>
</html>
