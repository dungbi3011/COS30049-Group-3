<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Transaction</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Cryptonized Cooking Shop">
    <meta name="author" content="Tran Quoc Dung">
    <link rel = "stylesheet" href = "styles/transaction.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href = 'https://fonts.googleapis.com/css?family=IBM Plex Mono' rel = "stylesheet">
  </head>

<body>
    <?php include_once './include/header.inc'; ?>

    <main>
        <div class = "container">
            <h1 class = "transaction_introduction_text">Sales History</h1>
            <table>
                <tr>
                    <th>Product</th>
                    <th>Buyer</th>
                    <th>Seller</th>
                    <th>Transaction Time</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td>Emperor's Pork</td>
                    <td><strong>Manh Duc</strong><br>0xD439anecTYdsz</td>
                    <td><strong>Quoc Dung</strong><br>0x45A69cgjei3vf8v</td>
                    <td>12:11 AM October 8th</td>
                    <td>0.5</td>
                </tr>
                <tr>
                    <td>Key Lime Pie Mousse</td>
                    <td><strong>Dat_09</strong><br>0x24GDCdjkowa3f4vrv</td>
                    <td><strong>Quoc Dung</strong><br>0x45A69cgjei3vf8v</td>
                    <td>23:45 PM October 7th</td>
                    <td>0.68</td>
                </tr>
                <tr>
                    <td>Chicken and Shrimp Laksa</td>
                    <td><strong>TFBlade</strong><br>0x3GDCvnew93VDieow</td>
                    <td><strong>Quoc Dung</strong><br>0x45A69cgjei3vf8v</td>
                    <td>04:48 PM October 6th</td>
                    <td>1.23</td>
                </tr>
                <tr>
                    <td>Hong Kong Milk Tea Tiramisu</td>
                    <td><strong>Stewie2k</strong><br>0xDKvew32fWE8nvw21</td>
                    <td><strong>Quoc Dung</strong><br>0x45A69cgjei3vf8v</td>
                    <td>02:22 AM October 6th</td>
                    <td>0.98</td>
                </tr>
                <tr>
                    <td>RoastedCarrotSoup</td>
                    <td><strong>Dat_09</strong><br>0x24GDCdjkowa3f4vrv</td>
                    <td><strong>Quoc Dung</strong><br>0x45A69cgjei3vf8v</td>
                    <td>06:32 PM October 5th</td>
                    <td>0.53</td>
                </tr>
                <tr>
                    <td>Emperor's Pork</td>
                    <td><strong>BoxBox</strong><br>0xFEg343Cwqf89wefv</td>
                    <td><strong>Quoc Dung</strong><br>0x45A69cgjei3vf8v</td>
                    <td>02:11 PM October 3rd</td>
                    <td>0.5</td>
                </tr>
                <tr>
                    <td>Chicken and Shrimp Laksa</td>
                    <td><strong>Stewie2k</strong><br>0xDKvew32fWE8nvw21</td>
                    <td><strong>Quoc Dung</strong><br>0x45A69cgjei3vf8v</td>
                    <td>02:46 PM October 2nd</td>
                    <td>1.23</td>
                </tr>
            </table>
        </div>
    </main>

    <?php include_once './include/footer.inc'; ?>

</body>
</html>