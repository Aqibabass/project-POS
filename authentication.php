<?php
session_start();
include('header.php');
include('database.php');

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
}

if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["role"])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $selected_role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);

    if (empty($username)) {
        echo "<h1><center>Username is Required.</center></h1>";
    } elseif (empty($password)) {
        echo "<h1><center>Password is Required.</center></h1>";
    } else {
        
        $sql = "SELECT password, role FROM login WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Database query failed: " . mysqli_error($conn));
        }

        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['password'];
            $stored_role = $row['role'];

            if (md5($password) == $hashed_password) {
                
                if (strtolower($selected_role) === strtolower($stored_role)) {
                    $_SESSION["username"] = $username;
                    $_SESSION["role"] = $stored_role;
                    header("Location: welcome.php");
                    exit();
                } else {
                    echo "<h1><center>Invalid role selected. Please try again.</center></h1>";
                }
            } else {
                echo "<h1><center>Invalid username or password. Please try again.</center></h1>";
            }
        } else {
            echo "<h1><center>Invalid username or password. Please try again.</center></h1>";
        }
    }

    mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invalid username/password.</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
</body>
</html>
