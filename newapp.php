<?php 
session_start();
include('header.php');
include('database.php');

if (!isset($_SESSION["username"])) {
    echo '<script type="text/javascript">
    alert("Please login to continue");
    window.location.href = "login.php";
    </script>';
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoS Machine Installation Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
        <h2>New Application</h2>
        <div class="container">
            <form action="authentication.php" method="post">
                <label for="branch">Branch:</label>
                <input type="text" id="branch" name="branch"><br><br>

                <label for="legalName">1. Legal Name of Business Concern:</label>
                <input type="text" id="legalName" name="legalName"><br><br>

                <label for="marketingName">2. Marketing Name:</label>
                <input type="text" id="marketingName" name="marketingName"><br><br>

                <label for="businesstype">3. Type of Business:</label>
                <input type="text" id="businesstype" name="businesstype"><br><br>

                <label for="natureofownership">4. Nature of Ownership:</label>
                <select id="natureofownership" name="natureofownership">
                    <option value="soleprop">Sole Proprietorship</option>
                    <option value="partnershipfirm">Partnership Firm</option>
                    <option value="limitedcompany">Limited Company</option>
                    <option value="huf">HUF</option>
                    <option value="govtowned">Govt. Owned</option>
                    <option value="trust">Trust</option>
                    <option value="franchisee">Franchisee</option>
                    <option value="other">Other</option>
                </select><br><br>

                <label for="buildingName">5. Address of Business Establishment:</label><br>
                <input type="text" id="buildingName" name="buildingName" placeholder="Building Name"><br>
                <input type="text" id="roadName" name="roadName" placeholder="Road Name/No."><br>
                <input type="text" id="landMark" name="landMark" placeholder="Land Mark"><br>
                <input type="text" id="city" name="city" placeholder="City"><br>
                <input type="text" id="state" name="state" placeholder="State"><br>
                <input type="text" id="pinCode" name="pinCode" placeholder="Pin Code"><br>
                <input type="text" id="phone" name="phone" placeholder="Phone (with STD code)"><br>
                <input type="text" id="mobile" name="mobile" placeholder="Mobile"><br>
                <input type="email" id="email" name="email" placeholder="E-mail"><br><br>

                <label for="panNumber">6. PAN Number:</label>
                <input type="text" id="panNumber" name="panNumber"><br><br>

                <label for="tinNumber">7. TIN Number:</label>
                <input type="text" id="tinNumber" name="tinNumber"><br><br>

                <label for="shopOwnership">8. Shop Ownership Details:</label>
                <select id="shopOwnership" name="shopOwnership">
                    <option value="Owned">Owned</option>
                    <option value="Leased">Leased</option>
                </select><br><br>

                <label for="proprietor1">9. Name of Proprietor/Partners/Managing Director/Directors/Karta:</label><br>
                <input type="text" id="proprietor1" name="proprietor1" placeholder="(1)"><br>
                <input type="text" id="proprietor2" name="proprietor2" placeholder="(2)"><br>
                <input type="text" id="proprietor3" name="proprietor3" placeholder="(3)"><br>
                <input type="text" id="proprietor4" name="proprietor4" placeholder="(4)"><br>
                <input type="text" id="proprietor5" name="proprietor5" placeholder="(5)"><br><br>

                <label for="residentialAddress">10. Address of Proprietor/Managing Director/Karta:</label><br>
                <input type="text" id="residentialAddress" name="residentialAddress" placeholder="Residential Address"><br>
                <input type="text" id="resBuildingName" name="resBuildingName" placeholder="Building Name"><br>
                <input type="text" id="resRoadName" name="resRoadName" placeholder="Road Name"><br>
                <input type="text" id="resLandMark" name="resLandMark" placeholder="Land Mark"><br>
                <input type="text" id="resCity" name="resCity" placeholder="City"><br>
                <input type="text" id="resState" name="resState" placeholder="State"><br>
                <input type="text" id="resPinCode" name="resPinCode" placeholder="Pin Code"><br>
                <input type="text" id="resPhone" name="resPhone" placeholder="Phone (with STD code)"><br>
                <input type="text" id="resMobile" name="resMobile" placeholder="Mobile"><br>
                <input type="email" id="resEmail" name="resEmail" placeholder="E-mail"><br><br>

                <label for="firstName">11. Name of Principal Contact:</label><br>
                <input type="text" id="firstName" name="firstName" placeholder="First"><br>
                <input type="text" id="middleName" name="middleName" placeholder="Middle"><br>
                <input type="text" id="lastName" name="lastName" placeholder="Last"><br><br>

                <label for="existingAccountNumber">12. Existing J&K Bank Relationship:</label><br>
                <input type="text" id="existingAccountNumber" name="existingAccountNumber" placeholder="Existing Account Number"><br>
                <input type="text" id="typeOfAccount" name="typeOfAccount" placeholder="Type of Account"><br>
                <input type="text" id="relationshipSince" name="relationshipSince" placeholder="Relationship Since (yyyy-mm-dd)"><br><br>

                <label for="otherBankName">13. Relationship with other banks:</label><br>
                <input type="text" id="otherBankName" name="otherBankName" placeholder="Name of the Bank"><br>
                <input type="text" id="otherBankAddress" name="otherBankAddress" placeholder="Address of the Bank"><br>
                <input type="text" id="typeOfAccount1" name="typeOfAccount1" placeholder="Type of Account"><br>
                <input type="text" id="accountNumber1" name="accountNumber1" placeholder="Account Number"><br>
                <input type="text" id="relationshipSince1" name="relationshipSince1" placeholder="Relationship Since (yyyy-mm-dd)"><br><br>

                <label for="commencementDate">14. Existing PoS Machine Details:</label><br>
                <input type="text" id="commencementDate" name="commencementDate" placeholder="Date of Commencement of Business (yyyy-mm-dd)"><br>
                <input type="text" id="operationSince" name="operationSince" placeholder="Operation in the same premises since (yyyy-mm-dd)"><br><br>

                <label for="acceptedCards">Credit Cards already accepted:</label>
                <select id="acceptedCards" name="acceptedCards">
                    <option value="Visa">Visa</option>
                    <option value="MasterCard">MasterCard</option>
                    <option value="Amex">American Express</option>
                    <option value="Others">Other</option>
                </select><br><br>

                <label for="businessTurnover">Annual Business Turnover:</label><br>
                <input type="text" id="businessTurnover" name="businessTurnover" placeholder="In figures"><br>
                <input type="text" id="businessTurnoverWords" name="businessTurnoverWords" placeholder="In words"><br><br>

                <label for="turnoverVisaMasterCard">Annual Turnover on Visa/MasterCard (s):</label><br>
                <input type="text" id="turnoverVisaMasterCard" name="turnoverVisaMasterCard" placeholder="In figures"><br>
                <input type="text" id="turnoverVisaMasterCardWords" name="turnoverVisaMasterCardWords" placeholder="In words"><br><br>

                <label for="averagePerTransaction">Estimated average per transaction value:</label><br>
                <input type="text" id="averagePerTransaction" name="averagePerTransaction" placeholder="In figures"><br>
                <input type="text" id="averagePerTransactionWords" name="averagePerTransactionWords" placeholder="In words"><br><br>

                <button type="submit" class="submit-button" name="submit">Submit</button>
            </form>
        </div>
       
</body>
</html>
