<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoS Machine Installation Form</title>
    <link rel="stylesheet" href="dup.css">
</head>

<body>

    <div class="container">
        <form action="pos.php" method="post">
            <img src="https://www.jkbank.com/images/pressAndMedia2009/1595.jpg" align="center">
            <h1>PoS Machine Installation</h1>
            <h2>Merchant Relationship Form</h2>

            <label for="branch">Branch:</label>
            <input type="text" id="branch" name="branch">

            <label for="legalName">1. Legal Name of Business Concern:</label>
            <input type="text" id="legalName" name="legalName">

            <label for="marketingName">2. Marketing Name:</label>
            <input type="text" id="marketingName" name="marketingName">

            <label for="businesstype">3. Type of Business:</label>
            <input type="text" id="businesstype" name="businesstype">

            <label for="ownership">4. Nature of Ownership:</label>
            <div class="radio-group">
                <input type="radio" id="soleprop" name="natureofownership" value="soleprop">
                <label for="soleprop">Sole Proprietorship</label>

                <input type="radio" id="partnershipfirm" name="natureofownership" value="partnershipfirm">
                <label for="partnershipfirm">Partnership Firm</label>

                <input type="radio" id="limitedcompany" name="natureofownership" value="limitedcompany">
                <label for="limitedcompany">Limited Company</label>

                <input type="radio" id="huf" name="natureofownership" value="huf">
                <label for="huf">HUF</label>

                <input type="radio" id="govtowned" name="natureofownership" value="govtowned">
                <label for="govtowned">Govt. Owned</label>

                <input type="radio" id="trust" name="natureofownership" value="trust">
                <label for="trust">Trust</label>

                <input type="radio" id="franchisee" name="natureofownership" value="franchisee">
                <label for="franchisee">Franchisee</label>

                <input type="radio" id="other" name="natureofownership" value="other">
                <label for="other">Other</label>


            </div>


            <label for="address">5. Address of Business Establishment:</label>
            <input type="text" id="buildingName" name="buildingName" placeholder="Building Name">
            <input type="text" id="roadName" name="roadName" placeholder="Road Name/No.">
            <input type="text" id="landMark" name="landMark" placeholder="Land Mark">
            <input type="text" id="city" name="city" placeholder="City">
            <input type="text" id="state" name="state" placeholder="State">
            <input type="text" id="pinCode" name="pinCode" placeholder="Pin Code">
            <input type="text" id="phone" name="phone" placeholder="Phone (with STD code)">
            <input type="text" id="mobile" name="mobile" placeholder="Mobile">
            <input type="email" id="email" name="email" placeholder="E-mail">

            <label for="panNumber">6. PAN Number:</label>
            <input type="text" id="panNumber" name="panNumber">

            <label for="tinNumber">7. TIN Number:</label>
            <input type="text" id="tinNumber" name="tinNumber">

            <label for="shopOwnership">8. Shop Ownership Details:</label>
            <div class="radio-group">
                <label><input type="radio" id="owned" name="shopOwnership" value="Owned"> Owned</label>
                <label><input type="radio" id="leased" name="shopOwnership" value="Leased"> Leased</label>
            </div>

            <label for="proprietors">9. Name of Proprietor/Partners/Managing Director/Directors/Karta:</label>
            <input type="text" id="proprietor1" name="proprietor1" placeholder="(1)">
            <input type="text" id="proprietor2" name="proprietor2" placeholder="(2)">
            <input type="text" id="proprietor3" name="proprietor3" placeholder="(3)">
            <input type="text" id="proprietor4" name="proprietor4" placeholder="(4)">
            <input type="text" id="proprietor5" name="proprietor5" placeholder="(5)">

            <label for="residentialAddress">10. Address of Proprietor/Managing Director/Karta:</label>
            <input type="text" id="residentialAddress" name="residentialAddress" placeholder="Residential Address">
            <input type="text" id="resBuildingName" name="resBuildingName" placeholder="Building Name">
            <input type="text" id="resRoadName" name="resRoadName" placeholder="Road Name">
            <input type="text" id="resLandMark" name="resLandMark" placeholder="Land Mark">
            <input type="text" id="resCity" name="resCity" placeholder="City">
            <input type="text" id="resState" name="resState" placeholder="State">
            <input type="text" id="resPinCode" name="resPinCode" placeholder="Pin Code">
            <input type="text" id="resPhone" name="resPhone" placeholder="Phone (with STD code)">
            <input type="text" id="resMobile" name="resMobile" placeholder="Mobile">
            <input type="email" id="resEmail" name="resEmail" placeholder="E-mail">

            <label for="principalContact">11. Name of Principal Contact:</label>
            <input type="text" id="firstName" name="firstName" placeholder="First">
            <input type="text" id="middleName" name="middleName" placeholder="Middle">
            <input type="text" id="lastName" name="lastName" placeholder="Last">

            <label for="jkbAccount">12. Existing J&K Bank Relationship:</label>
            <input type="text" id="existingAccountNumber" name="existingAccountNumber" placeholder="Existing Account Number">
            <input type="text" id="typeOfAccount" name="typeOfAccount" placeholder="Type of Account">
            <input type="text" id="relationshipSince" name="relationshipSince" placeholder="Relationship Since (yyyy-mm-dd)">

            <label for="otherBanks">13. Relationship with other banks:</label>
            <input type="text" id="otherBankName" name="otherBankName" placeholder="Name of the Bank">
            <input type="text" id="otherBankAddress" name="otherBankAddress" placeholder="Address of the Bank">
            <input type="text" id="typeOfAccount1" name="typeOfAccount1" placeholder="Type of Account">
            <input type="text" id="accountNumber1" name="accountNumber1" placeholder="Account Number">
            <input type="text" id="relationshipSince1" name="relationshipSince1" placeholder="Relationship Since (yyyy-mm-dd)">

            <label for="posMachineDetails">14. Existing PoS Machine Details:</label>
            <input type="text" id="commencementDate" name="commencementDate" placeholder="Date of Commencement of Business (yyyy-mm-dd)">
            <input type="text" id="operationSince" name="operationSince" placeholder="Operation in the same premises since (yyyy-mm-dd)">

            <label for="acceptedCards">Credit Cards already accepted:</label>
            <div class="radio-group">
                <label><input type="radio" id="visa" name="acceptedCards" value="Visa"> Visa</label>
                <label><input type="radio" id="masterCard" name="acceptedCards" value="MasterCard"> MasterCard</label>
                <label><input type="radio" id="amex" name="acceptedCards" value="Amex"> American Express</label>
                <label><input type="radio" id="others" name="acceptedCards" value="Others"> Other:</label>
            </div>

            <label for="businessTurnover">Annual Business Turnover:</label>
            <input type="text" id="businessTurnover" name="businessTurnover" placeholder="In figures">
            <input type="text" id="businessTurnoverWords" name="businessTurnoverWords" placeholder="In words">

            <label for="turnoverVisaMasterCard">Annual Turnover on Visa/MasterCard (s):</label>
            <input type="text" id="turnoverVisaMasterCard" name="turnoverVisaMasterCard" placeholder="In figures">
            <input type="text" id="turnoverVisaMasterCardWords" name="turnoverVisaMasterCardWords" placeholder="In words">

            <label for="averagePerTransaction">Estimated average per transaction value:</label>
            <input type="text" id="averagePerTransaction" name="averagePerTransaction" placeholder="In figures">
            <input type="text" id="averagePerTransactionWords" name="averagePerTransactionWords" placeholder="In words">

            <button type="submit" class="submit-button" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>


<?php
include("database.php");


if (isset($_POST["submit"])) {
    $branch = filter_input(INPUT_POST, "branch", FILTER_DEFAULT);
    $legalname = filter_input(INPUT_POST, "legalName", FILTER_DEFAULT);
    $marketingname = filter_input(INPUT_POST, "marketingName", FILTER_DEFAULT);
    $businesstype = filter_input(INPUT_POST, "businesstype", FILTER_DEFAULT);
    $natureofownership = filter_input(INPUT_POST, "natureofownership", FILTER_DEFAULT);
    $buildingName = filter_input(INPUT_POST, "buildingName", FILTER_DEFAULT);
    $roadName = filter_input(INPUT_POST, "roadName", FILTER_DEFAULT);
    $landMark = filter_input(INPUT_POST, "landMark", FILTER_DEFAULT);
    $city = filter_input(INPUT_POST, "city", FILTER_DEFAULT);
    $state = filter_input(INPUT_POST, "state", FILTER_DEFAULT);
    $pinCode = filter_input(INPUT_POST, "pinCode", FILTER_VALIDATE_INT);
    $phone = filter_input(INPUT_POST, "phone", FILTER_DEFAULT);
    $mobile = filter_input(INPUT_POST, "mobile", FILTER_DEFAULT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $panNumber = filter_input(INPUT_POST, "panNumber", FILTER_DEFAULT);
    $tinNumber = filter_input(INPUT_POST, "tinNumber", FILTER_DEFAULT);
    $shopOwnership = filter_input(INPUT_POST, "shopOwnership", FILTER_DEFAULT);
    $proprietor1 = filter_input(INPUT_POST, "proprietor1", FILTER_DEFAULT);
    $proprietor2 = filter_input(INPUT_POST, "proprietor2", FILTER_DEFAULT);
    $proprietor3 = filter_input(INPUT_POST, "proprietor3", FILTER_DEFAULT);
    $proprietor4 = filter_input(INPUT_POST, "proprietor4", FILTER_DEFAULT);
    $proprietor5 = filter_input(INPUT_POST, "proprietor5", FILTER_DEFAULT);
    $residentialAddress = filter_input(INPUT_POST, "residentialAddress", FILTER_DEFAULT);
    $resBuildingName = filter_input(INPUT_POST, "resBuildingName", FILTER_DEFAULT);
    $resRoadName = filter_input(INPUT_POST, "resRoadName", FILTER_DEFAULT);
    $resLandMark = filter_input(INPUT_POST, "resLandMark", FILTER_DEFAULT);
    $resCity = filter_input(INPUT_POST, "resCity", FILTER_DEFAULT);
    $resState = filter_input(INPUT_POST, "resState", FILTER_DEFAULT);
    $resPinCode = filter_input(INPUT_POST, "resPinCode", FILTER_VALIDATE_INT);
    $resPhone = filter_input(INPUT_POST, "resPhone", FILTER_DEFAULT);
    $resMobile = filter_input(INPUT_POST, "resMobile", FILTER_DEFAULT);
    $resEmail = filter_input(INPUT_POST, "resEmail", FILTER_VALIDATE_EMAIL);
    $firstName = filter_input(INPUT_POST, "firstName", FILTER_DEFAULT);
    $middleName = filter_input(INPUT_POST, "middleName", FILTER_DEFAULT);
    $lastName = filter_input(INPUT_POST, "lastName", FILTER_DEFAULT);
    $existingAccountNumber = filter_input(INPUT_POST, "existingAccountNumber", FILTER_DEFAULT);
    $typeOfAccount = filter_input(INPUT_POST, "typeOfAccount", FILTER_DEFAULT);
    $relationshipSince = filter_input(INPUT_POST, "relationshipSince", FILTER_DEFAULT);
    $otherBankName = filter_input(INPUT_POST, "otherBankName", FILTER_DEFAULT);
    $otherBankAddress = filter_input(INPUT_POST, "otherBankAddress", FILTER_DEFAULT);
    $typeOfAccount1 = filter_input(INPUT_POST, "typeOfAccount1", FILTER_DEFAULT);
    $accountNumber1 = filter_input(INPUT_POST, "accountNumber1", FILTER_DEFAULT);
    $relationshipSince1 = filter_input(INPUT_POST, "relationshipSince1", FILTER_DEFAULT);
    $commencementDate = filter_input(INPUT_POST, "commencementDate", FILTER_DEFAULT);
    $operationSince = filter_input(INPUT_POST, "operationSince", FILTER_DEFAULT);
    $acceptedCards = filter_input(INPUT_POST, "acceptedCards", FILTER_DEFAULT);
    $businessTurnover = filter_input(INPUT_POST, "businessTurnover", FILTER_VALIDATE_FLOAT);
    $businessTurnoverWords = filter_input(INPUT_POST, "businessTurnoverWords", FILTER_DEFAULT);
    $turnoverVisaMasterCard = filter_input(INPUT_POST, "turnoverVisaMasterCard", FILTER_VALIDATE_FLOAT);
    $turnoverVisaMasterCardWords = filter_input(INPUT_POST, "turnoverVisaMasterCardWords", FILTER_DEFAULT);
    $averagePerTransaction = filter_input(INPUT_POST, "averagePerTransaction", FILTER_VALIDATE_FLOAT);
    $averagePerTransactionWords = filter_input(INPUT_POST, "averagePerTransactionWords", FILTER_DEFAULT);

    $errors = [];

    if (empty($branch)) {
        $errors[] = "Branch name is missing!";
    }
    if (empty($legalname)) {
        $errors[] = "Legal name is missing!";
    }
    if (empty($marketingname)) {
        $errors[] = "Marketing name is missing!";
    }
    if (empty($businesstype)) {
        $errors[] = "Type of business is missing!";
    }
    if (empty($natureofownership)) {
        $errors[] = "Nature of ownership is missing!";
    }
    if (empty($buildingName) || empty($roadName) || empty($city) || empty($state) || $pinCode === false) {
        $errors[] = "Complete address of business establishment is missing!";
    }
    if (empty($phone) && empty($mobile)) {
        $errors[] = "Contact phone or mobile is missing!";
    }
    if (empty($email)) {
        $errors[] = "Email is missing!";
    }
    if (empty($panNumber)) {
        $errors[] = "PAN number is missing!";
    }
    if (empty($tinNumber)) {
        $errors[] = "TIN number is missing!";
    }
    if (empty($shopOwnership)) {
        $errors[] = "Shop ownership details are missing!";
    }
    if (empty($proprietor1)) {
        $errors[] = "Name of proprietor/partners/managing director/directors/karta is missing!";
    }
    if (empty($residentialAddress) || empty($resCity) || empty($resState) || $resPinCode === false) {
        $errors[] = "Complete residential address of proprietor/managing director/karta is missing!";
    }
    if (empty($resPhone) && empty($resMobile)) {
        $errors[] = "Residential contact phone or mobile is missing!";
    }
    if (empty($resEmail)) {
        $errors[] = "Residential email is missing!";
    }
    if (empty($firstName)) {
        $errors[] = "Principal contact first name is missing!";
    }
    if (empty($existingAccountNumber)) {
        $errors[] = "Existing J&K Bank account number is missing!";
    }
    if (empty($typeOfAccount)) {
        $errors[] = "Type of existing account is missing!";
    }
    if (empty($relationshipSince)) {
        $errors[] = "Relationship since is missing!";
    }
    if (empty($otherBankName)) {
        $errors[] = "Other bank name is missing!";
    }
    if (empty($otherBankAddress)) {
        $errors[] = "Other bank address is missing!";
    }
    if (empty($typeOfAccount1)) {
        $errors[] = "Type of other bank account is missing!";
    }
    if (empty($accountNumber1)) {
        $errors[] = "Account number of other bank is missing!";
    }
    if (empty($relationshipSince1)) {
        $errors[] = "Relationship since with other bank is missing!";
    }
    if (empty($commencementDate)) {
        $errors[] = "Commencement date of business is missing!";
    }
    if (empty($operationSince)) {
        $errors[] = "Operation since date is missing!";
    }
    if (empty($acceptedCards)) {
        $errors[] = "Accepted cards are missing!";
    }
    if ($businessTurnover === false) {
        $errors[] = "Business turnover is invalid!";
    }
    if (empty($businessTurnoverWords)) {
        $errors[] = "Business turnover in words is missing!";
    }
    if ($turnoverVisaMasterCard === false) {
        $errors[] = "Turnover on Visa/MasterCard is invalid!";
    }
    if (empty($turnoverVisaMasterCardWords)) {
        $errors[] = "Turnover on Visa/MasterCard in words is missing!";
    }
    if ($averagePerTransaction === false) {
        $errors[] = "Average per transaction is invalid!";
    }
    if (empty($averagePerTransactionWords)) {
        $errors[] = "Average per transaction in words is missing!";
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo '<script type="text/javascript">alert("' . $error . '");</script>';
        }
    } else {
        
        $sql = "INSERT INTO pos_machine_installation (
            branch, legal_name, marketing_name, business_type, nature_of_ownership, 
            shop_ownership, accepted_cards, building_name, road_name, landmark, 
            city, state, pin_code, phone, mobile, email, pan_number, tin_number, 
            proprietor1, proprietor2, proprietor3, proprietor4, proprietor5, 
            residential_address, res_building_name, res_road_name, res_landmark, 
            res_city, res_state, res_pin_code, res_phone, res_mobile, res_email, 
            first_name, middle_name, last_name, existing_account_number, type_of_account, 
            relationship_since, other_bank_name, other_bank_address, type_of_account1, 
            account_number1, relationship_since1, commencement_date, operation_since, 
            business_turnover, business_turnover_words, turnover_visa_mastercard, 
            turnover_visa_mastercard_words, average_per_transaction, 
            average_per_transaction_words
        ) VALUES (
            '$branch', '$legalname', '$marketingname', '$businesstype', '$natureofownership', 
            '$shopOwnership', '$acceptedCards', '$buildingName', '$roadName', '$landMark', 
            '$city', '$state', $pinCode, '$phone', '$mobile', '$email', '$panNumber', '$tinNumber', 
            '$proprietor1', '$proprietor2', '$proprietor3', '$proprietor4', '$proprietor5', 
            '$residentialAddress', '$resBuildingName', '$resRoadName', '$resLandMark', '$resCity', 
            '$resState', $resPinCode, '$resPhone', '$resMobile', '$resEmail', '$firstName', 
            '$middleName', '$lastName', '$existingAccountNumber', '$typeOfAccount', 
            '$relationshipSince', '$otherBankName', '$otherBankAddress', '$typeOfAccount1', 
            '$accountNumber1', '$relationshipSince1', '$commencementDate', '$operationSince', 
            $businessTurnover, '$businessTurnoverWords', $turnoverVisaMasterCard, 
            '$turnoverVisaMasterCardWords', $averagePerTransaction, '$averagePerTransactionWords'
        )";
        if (mysqli_query($conn, $sql)) {
            echo '<script type="text/javascript">alert("Form submitted successfully!");</script>';
        } else {
            echo '<script type="text/javascript">alert("Error: ' . mysqli_error($conn) . '");</script>';
        }
       
    }
    mysqli_close($conn);
}


?>