<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styling.css">

</head>

<body>
    <button type="button" class="btn btn-primary" onclick="openCustomModal()">Deposit </button>
    <div id="customModalOverlay" class="custom-modal-overlay"></div>
    <div id="customModal" class="custom-modal">
        <div class="custom-modal-content">
            <div class="custom-modal-header">
                <span id="customModalClose" class="custom-modal-close" onclick="closeCustomModal()">&times;</span>
                <h6>Amount to be deposited</h6>
            </div>

            <div class="custom-modal-body">
                <form method="post" action="deposit.php" class="text-center">
                    <label for="amount">Enter deposit amount:</label> <br>
                    <input type="number" max=10000 min=100 id="amount" name="amount" class="form-control" required />
                        <button class="btn btn-primary mt-2" type="submit" name="submit">Continue</button>
                </form>
            </div>

        </div>
    </div>

    <script>
        // JavaScript functions to open and close custom modal
        function openCustomModal() {
            document.getElementById('customModalOverlay').style.display = 'block';
            document.getElementById('customModal').style.display = 'block';
        }

        function closeCustomModal() {
            document.getElementById('customModalOverlay').style.display = 'none';
            document.getElementById('customModal').style.display = 'none';
        }
    </script>

    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="dist/js/adminlte.js"></script>

    <script src="bootstrap/JS/bootstrap.min.js"></script>

    <script src="bootstrap\JS\sb-admin-2.min.js"></script>

</body>

</html>