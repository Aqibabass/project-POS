<?php 
session_start();
include('header.php');
include('database.php');

if (!isset($_SESSION["username"]) || ($_SESSION["role"] !== 'Admin' && $_SESSION["role"] !== 'Verifier')) {
    if (!isset($_SESSION["username"])) {
        echo '<script type="text/javascript">
        alert("Please login to continue or you do not have the required permissions to access this page.");
        window.location.href = "login.php";
    </script>';
        exit();
    }
    
    exit();
}

$id = $_GET['updateid']; 
$sql = "SELECT * FROM `pos_machine_installation` WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row) {
    $branch = $row['branch'];
    $legalname = $row['legal_name'];
    $marketingname = $row['marketing_name'];
    $businesstype = $row['business_type'];
    $natureofownership = $row['nature_of_ownership'];
    $shopOwnership = $row['shop_ownership'];
    $buildingName = $row['building_name'];
    $roadName = $row['road_name'];
    $landMark = $row['landmark'];
    $city = $row['city'];
    $state = $row['state'];
    $pinCode = $row['pin_code'];
    $phone = $row['phone'];
    $mobile = $row['mobile'];
    $email = $row['email'];
    $panNumber = $row['pan_number'];
    $tinNumber = $row['tin_number'];
    $proprietor1 = $row['proprietor1'];
    $proprietor2 = $row['proprietor2'];
    $proprietor3 = $row['proprietor3'];
    $proprietor4 = $row['proprietor4'];
    $proprietor5 = $row['proprietor5'];
    $residentialAddress = $row['residential_address'];
    $resBuildingName = $row['res_building_name'];
    $resRoadName = $row['res_road_name'];
    $resLandMark = $row['res_landmark'];
    $resCity = $row['res_city'];
    $resState = $row['res_state'];
    $resPinCode = $row['res_pin_code'];
    $resPhone = $row['res_phone'];
    $resMobile = $row['res_mobile'];
    $resEmail = $row['res_email'];
    $firstName = $row['first_name'];
    $middleName = $row['middle_name'];
    $lastName = $row['last_name'];
    $existingAccountNumber = $row['existing_account_number'];
    $typeOfAccount = $row['type_of_account'];
    $relationshipSince = $row['relationship_since'];
    $otherBankName = $row['other_bank_name'];
    $otherBankAddress = $row['other_bank_address'];
    $typeOfAccount1 = $row['type_of_account1'];
    $accountNumber1 = $row['account_number1'];
    $relationshipSince1 = $row['relationship_since1'];
    $commencementDate = $row['commencement_date'];
    $operationSince = $row['operation_since'];
    $businessTurnover = $row['business_turnover'];
    $businessTurnoverWords = $row['business_turnover_words'];
    $turnoverVisaMasterCard = $row['turnover_visa_mastercard'];
    $turnoverVisaMasterCardWords = $row['turnover_visa_mastercard_words'];
    $averagePerTransaction = $row['average_per_transaction'];
    $averagePerTransactionWords = $row['average_per_transaction_words'];
    $acceptedCards = $row['accepted_cards'];
    $status = $row['status'];
} else {
    echo '<h1><center>No record found</center></h1>';
    exit();
}

if (isset($_POST["submit"])) {
    $branch = $_POST["branch"];
    $legalname = $_POST["legalName"];
    $marketingname = $_POST["marketingName"];
    $businesstype = $_POST["businesstype"];
    $natureofownership = $_POST["natureofownership"];
    $shopOwnership = $_POST["shopOwnership"];
    $buildingName = $_POST["buildingName"];
    $roadName = $_POST["roadName"];
    $landMark = $_POST["landMark"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $pinCode = $_POST["pinCode"];
    $phone = $_POST["phone"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $panNumber = $_POST["panNumber"];
    $tinNumber = $_POST["tinNumber"];
    $proprietor1 = $_POST["proprietor1"];
    $proprietor2 = $_POST["proprietor2"];
    $proprietor3 = $_POST["proprietor3"];
    $proprietor4 = $_POST["proprietor4"];
    $proprietor5 = $_POST["proprietor5"];
    $residentialAddress = $_POST["residentialAddress"];
    $resBuildingName = $_POST["resBuildingName"];
    $resRoadName = $_POST["resRoadName"];
    $resLandMark = $_POST["resLandMark"];
    $resCity = $_POST["resCity"];
    $resState = $_POST["resState"];
    $resPinCode = $_POST["resPinCode"];
    $resPhone = $_POST["resPhone"];
    $resMobile = $_POST["resMobile"];
    $resEmail = $_POST["resEmail"];
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $existingAccountNumber = $_POST["existingAccountNumber"];
    $typeOfAccount = $_POST["typeOfAccount"];
    $relationshipSince = $_POST["relationshipSince"];
    $otherBankName = $_POST["otherBankName"];
    $otherBankAddress = $_POST["otherBankAddress"];
    $typeOfAccount1 = $_POST["typeOfAccount1"];
    $accountNumber1 = $_POST["accountNumber1"];
    $relationshipSince1 = $_POST["relationshipSince1"];
    $commencementDate = $_POST["commencementDate"];
    $operationSince = $_POST["operationSince"];
    $businessTurnover = $_POST["businessTurnover"];
    $businessTurnoverWords = $_POST["businessTurnoverWords"];
    $turnoverVisaMasterCard = $_POST["turnoverVisaMasterCard"];
    $turnoverVisaMasterCardWords = $_POST["turnoverVisaMasterCardWords"];
    $averagePerTransaction = $_POST["averagePerTransaction"];
    $averagePerTransactionWords = $_POST["averagePerTransactionWords"];
    $acceptedCards = $_POST["acceptedCards"];
    $status = $_POST["status"];

    $sql = "UPDATE `pos_machine_installation` SET
        branch='$branch',
        legal_name='$legalname',
        marketing_name='$marketingname',
        business_type='$businesstype',
        nature_of_ownership='$natureofownership',
        shop_ownership='$shopOwnership',
        building_name='$buildingName',
        road_name='$roadName',
        landmark='$landMark',
        city='$city',
        state='$state',
        pin_code='$pinCode',
        phone='$phone',
        mobile='$mobile',
        email='$email',
        pan_number='$panNumber',
        tin_number='$tinNumber',
        proprietor1='$proprietor1',
        proprietor2='$proprietor2',
        proprietor3='$proprietor3',
        proprietor4='$proprietor4',
        proprietor5='$proprietor5',
        residential_address='$residentialAddress',
        res_building_name='$resBuildingName',
        res_road_name='$resRoadName',
        res_landmark='$resLandMark',
        res_city='$resCity',
        res_state='$resState',
        res_pin_code='$resPinCode',
        res_phone='$resPhone',
        res_mobile='$resMobile',
        res_email='$resEmail',
        first_name='$firstName',
        middle_name='$middleName',
        last_name='$lastName',
        existing_account_number='$existingAccountNumber',
        type_of_account='$typeOfAccount',
        relationship_since='$relationshipSince',
        other_bank_name='$otherBankName',
        other_bank_address='$otherBankAddress',
        type_of_account1='$typeOfAccount1',
        account_number1='$accountNumber1',
        relationship_since1='$relationshipSince1',
        commencement_date='$commencementDate',
        operation_since='$operationSince',
        business_turnover='$businessTurnover',
        business_turnover_words='$businessTurnoverWords',
        turnover_visa_mastercard='$turnoverVisaMasterCard',
        turnover_visa_mastercard_words='$turnoverVisaMasterCardWords',
        average_per_transaction='$averagePerTransaction',
        average_per_transaction_words='$averagePerTransactionWords',
        accepted_cards='$acceptedCards',
        status='$status' 
        WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>alert("Data updated successfully."); window.location.href="view.php";</script>';
    } else {
        echo '<script>alert("Data not updated.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update PoS Machine Installation Form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Update PoS Machine Installation Form</h1>
    <div class="container">  
        <form action="" method="post">
        <label for="branch">Branch:</label>
                <input type="text" id="branch" name="branch" value="<?php echo $branch; ?>"
                ><br><br>

                <label for="legalName">1. Legal Name of Business Concern:</label>
                <input type="text" id="legalName" name="legalName" value="<?php echo $legalname; ?>"><br><br>

                <label for="marketingName">2. Marketing Name:</label>
                <input type="text" id="marketingName" name="marketingName" value="<?php echo $marketingname; ?>"><br><br>

                <label for="businesstype">3. Type of Business:</label>
                <input type="text" id="businesstype" name="businesstype" value="<?php echo $businesstype; ?>"><br><br>

                <label>4. Nature of Ownership:</label><br>
                <div class="radio-group">
                    <input type="radio" id="soleprop" name="natureofownership" value="soleprop" <?php echo ($natureofownership == 'soleprop') ? 'checked' : ''; ?>>
                    <label for="soleprop">Sole Proprietorship</label>

                    <input type="radio" id="partnershipfirm" name="natureofownership" value="partnershipfirm" <?php echo ($natureofownership == 'partnershipfirm') ? 'checked' : ''; ?>>
                    <label for="partnershipfirm">Partnership Firm</label>

                    <input type="radio" id="limitedcompany" name="natureofownership" value="limitedcompany" <?php echo ($natureofownership == 'limitedcompany') ? 'checked' : ''; ?>>
                    <label for="limitedcompany">Limited Company</label>

                    <input type="radio" id="huf" name="natureofownership" value="huf" <?php echo ($natureofownership == 'huf') ? 'checked' : ''; ?>>
                    <label for="huf">HUF</label>

                    <input type="radio" id="govtowned" name="natureofownership" value="govtowned" <?php echo ($natureofownership == 'govtowned') ? 'checked' : ''; ?>>
                    <label for="govtowned">Govt. Owned</label>

                    <input type="radio" id="trust" name="natureofownership" value="trust" <?php echo ($natureofownership == 'trust') ? 'checked' : ''; ?>>
                    <label for="trust">Trust</label>

                    <input type="radio" id="franchisee" name="natureofownership" value="franchisee" <?php echo ($natureofownership == 'franchisee') ? 'checked' : ''; ?>>
                    <label for="franchisee">Franchisee</label>

                    <input type="radio" id="other" name="natureofownership" value="other" <?php echo ($natureofownership == 'other') ? 'checked' : ''; ?>>
                    <label for="other">Other</label><br><br>
                </div>

                <label for="buildingName">5. Address of Business Establishment:</label><br>
                <input type="text" id="buildingName" name="buildingName" placeholder="Building Name" value="<?php echo $buildingName; ?>"><br>
                <input type="text" id="roadName" name="roadName" placeholder="Road Name/No." value="<?php echo $roadName; ?>"><br>
                <input type="text" id="landMark" name="landMark" placeholder="Land Mark" value="<?php echo $landMark; ?>"><br>
                <input type="text" id="city" name="city" placeholder="City" value="<?php echo $city; ?>"><br>
                <input type="text" id="state" name="state" placeholder="State" value="<?php echo $state; ?>"><br>
                <input type="text" id="pinCode" name="pinCode" placeholder="Pin Code" value="<?php echo $pinCode; ?>"><br>
                <input type="text" id="phone" name="phone" placeholder="Phone (with STD code)" value="<?php echo $phone; ?>"><br>
                <input type="text" id="mobile" name="mobile" placeholder="Mobile" value="<?php echo $mobile; ?>"><br>
                <input type="email" id="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"><br><br>

                <label for="panNumber">6. PAN Number:</label>
                <input type="text" id="panNumber" name="panNumber" value="<?php echo $panNumber; ?>"><br><br>

                <label for="tinNumber">7. TIN Number:</label>
                <input type="text" id="tinNumber" name="tinNumber" value="<?php echo $tinNumber; ?>"><br><br>

                
                <label>8. Shop Ownership Details:</label><br>
                <div class="radio-group">
                    <input type="radio" id="owned" name="shopOwnership" value="Owned" <?php echo ($shopOwnership == 'Owned') ? 'checked' : ''; ?>>
                    <label for="owned">Owned</label><br>

                    <input type="radio" id="leased" name="shopOwnership" value="Leased" <?php echo ($shopOwnership == 'Leased') ? 'checked' : ''; ?>>
                    <label for="leased">Leased</label><br><br>
                </div>

                <label for="proprietor1">9. Name of Proprietor/Partners/Managing Director/Directors/Karta:</label><br>
                <input type="text" id="proprietor1" name="proprietor1" placeholder="(1)" value="<?php echo $proprietor1; ?>"><br>
                <input type="text" id="proprietor2" name="proprietor2" placeholder="(2)" value="<?php echo $proprietor2; ?>"><br>
                <input type="text" id="proprietor3" name="proprietor3" placeholder="(3)" value="<?php echo $proprietor3; ?>"><br>
                <input type="text" id="proprietor4" name="proprietor4" placeholder="(4)" value="<?php echo $proprietor4; ?>"><br>
                <input type="text" id="proprietor5" name="proprietor5" placeholder="(5)" value="<?php echo $proprietor5; ?>"><br><br>

                <label for="residentialAddress">10. Address of Proprietor/Managing Director/Karta:</label><br>
                <input type="text" id="residentialAddress" name="residentialAddress" placeholder="Residential Address" value="<?php echo $residentialAddress; ?>"><br>
                <input type="text" id="resBuildingName" name="resBuildingName" placeholder="Building Name" value="<?php echo $resBuildingName; ?>"><br>
                <input type="text" id="resRoadName" name="resRoadName" placeholder="Road Name" value="<?php echo $resRoadName; ?>"><br>
                <input type="text" id="resLandMark" name="resLandMark" placeholder="Land Mark" value="<?php echo $resLandMark; ?>"><br>
                <input type="text" id="resCity" name="resCity" placeholder="City" value="<?php echo $resCity; ?>"><br>
                <input type="text" id="resState" name="resState" placeholder="State" value="<?php echo $resState; ?>"><br>
                <input type="text" id="resPinCode" name="resPinCode" placeholder="Pin Code" value="<?php echo $resPinCode; ?>"><br>
                <input type="text" id="resPhone" name="resPhone" placeholder="Phone (with STD code)" value="<?php echo $resPhone; ?>"><br>
                <input type="text" id="resMobile" name="resMobile" placeholder="Mobile" value="<?php echo $resMobile; ?>"><br>
                <input type="email" id="resEmail" name="resEmail" placeholder="E-mail" value="<?php echo $resEmail; ?>"><br><br>

                <label for="firstName">11. Name of Principal Contact:</label><br>
                <input type="text" id="firstName" name="firstName" placeholder="First" value="<?php echo $firstName; ?>"><br>
                <input type="text" id="middleName" name="middleName" placeholder="Middle" value="<?php echo $middleName; ?>"><br>
                <input type="text" id="lastName" name="lastName" placeholder="Last" value="<?php echo $lastName; ?>"><br><br>

                <label for="existingAccountNumber">12. Existing J&K Bank Relationship:</label><br>
                <input type="text" id="existingAccountNumber" name="existingAccountNumber" placeholder="Existing Account Number" value="<?php echo $existingAccountNumber; ?>"><br>
                <input type="text" id="typeOfAccount" name="typeOfAccount" placeholder="Type of Account" value="<?php echo $typeOfAccount; ?>"><br>
                <input type="text" id="relationshipSince" name="relationshipSince" placeholder="Relationship Since (yyyy-mm-dd)" value="<?php echo $relationshipSince; ?>"><br><br>

                <label for="otherBankName">13. Relationship with other banks:</label><br>
                <input type="text" id="otherBankName" name="otherBankName" placeholder="Name of the Bank" value="<?php echo $otherBankName; ?>"><br>
                <input type="text" id="otherBankAddress" name="otherBankAddress" placeholder="Address of the Bank" value="<?php echo $otherBankAddress; ?>"><br>
                <input type="text" id="typeOfAccount1" name="typeOfAccount1" placeholder="Type of Account" value="<?php echo $typeOfAccount1; ?>"><br>
                <input type="text" id="accountNumber1" name="accountNumber1" placeholder="Account Number" value="<?php echo $accountNumber1; ?>"><br>
                <input type="text" id="relationshipSince1" name="relationshipSince1" placeholder="Relationship Since (yyyy-mm-dd)" value="<?php echo $relationshipSince1; ?>"><br><br>

                <label for="commencementDate">14. Existing PoS Machine Details:</label><br>
                <input type="text" id="commencementDate" name="commencementDate" placeholder="Date of Commencement of Business (yyyy-mm-dd)" value="<?php echo $commencementDate; ?>"><br>
                <input type="text" id="operationSince" name="operationSince" placeholder="Operation in the same premises since (yyyy-mm-dd)" value="<?php echo $operationSince; ?>"><br><br>

                <label>Credit Cards already accepted:</label><br>
            <div class="radio-group">
                <input type="radio" id="visa" name="acceptedCards" value="Visa" <?php echo ($acceptedCards == 'Visa') ? 'checked' : ''; ?>>
                <label for="visa">Visa</label>

                <input type="radio" id="mastercard" name="acceptedCards" value="MasterCard" <?php echo ($acceptedCards == 'MasterCard') ? 'checked' : ''; ?>>
                <label for="mastercard">MasterCard</label>

                <input type="radio" id="amex" name="acceptedCards" value="Amex" <?php echo ($acceptedCards == 'Amex') ? 'checked' : ''; ?>>
                <label for="amex">American Express</label>

                <input type="radio" id="others" name="acceptedCards" value="Others" <?php echo ($acceptedCards == 'Others') ? 'checked' : ''; ?>>
                <label for="others">Other</label><br><br>
            </div>

                <label for="businessTurnover">Annual Business Turnover:</label><br>
                <input type="text" id="businessTurnover" name="businessTurnover" placeholder="In figures" value=<?php echo $businessTurnover; ?>><br>
                <input type="text" id="businessTurnoverWords" name="businessTurnoverWords" placeholder="In words" value=<?php echo $businessTurnoverWords; ?>><br><br>

                <label for="turnoverVisaMasterCard">Annual Turnover on Visa/MasterCard (s):</label><br>
                <input type="text" id="turnoverVisaMasterCard" name="turnoverVisaMasterCard" placeholder="In figures" value=<?php echo $turnoverVisaMasterCard; ?>><br>
                <input type="text" id="turnoverVisaMasterCardWords" name="turnoverVisaMasterCardWords" placeholder="In words" value=<?php echo $turnoverVisaMasterCardWords; ?>><br><br>

                <label for="averagePerTransaction">Estimated average per transaction value:</label><br>
                <input type="text" id="averagePerTransaction" name="averagePerTransaction" placeholder="In figures" value=<?php echo $averagePerTransaction; ?>><br>
                <input type="text" id="averagePerTransactionWords" name="averagePerTransactionWords" placeholder="In words" value= <?php echo $averagePerTransactionWords; ?>><br><br>

                <label>Status:</label><br>
            <div class="radio-group">
                <input type="radio" id="verified" name="status" value="verified" <?php echo ($status == 'verified') ? 'checked' : ''; ?>>
                <label for="verified">Verified</label><br>

                <input type="radio" id="pending" name="status" value="pending" <?php echo ($status == 'pending') ? 'checked' : ''; ?>>
                <label for="pending">Pending</label><br><br>
            </div>
               

            <input type="submit" name="submit" class="submit-button" value="Update">
        </form>
    </div>
</body>
</html>
