<?php

include 'readgoogle.php';

if (isset($_POST['Submit'])) {

    $id = $_POST['icode'];
//    $captcha = $_POST['g-recaptcha-response'];
//    $certificate_id = rtrim($id, '#');
    $certificate_id = trim($_POST['icode']);

    // Get the API client and construct the service object.
    $client = getClient();
    $service = new Google_Service_Sheets($client);

    $spreadsheetId = '1rYVwZfwtjiaOIqdlb93pDdfmqKildYwYuA7fh8rwJKY';
    $range = 'A1:L';
    $response = $service->spreadsheets_values->get($spreadsheetId, $range);

//$values = $response->getValues();
    //SpreadSheet Details
//    $spreadsheetId = '1rYVwZfwtjiaOIqdlb93pDdfmqKildYwYuA7fh8rwJKY';
//    $range = 'Sheet1!B:L';
    $valueInputOption = "RAW";

    //Reading Data
//    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $values = $response->getValues();
    $rowCount = 0;
    $record_present_flag = 0;

    if (count($values) == 0) {
        print "No data found.\n";
    } else {
        foreach ($values as $row) {
//            print_r($row[2]);
            if ($row[2] == $certificate_id) {
                print_r($row);
              
            }
            $rowCount++;
        }
    }
//    if ($record_present_flag == 0) {
//        //echo"<script>alert('Record Not Present')</script>";
//        $red_message = 'Record Not Present';
//    }
//    if (empty($captcha)) {
//        $red_message = 'captcha not verified';
//    }
}
?>
