<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculate Money</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">PHP Calculate Money</h1>
    <hr>
    <p class="text-center">กรุณากรอกข้อมูลเพื่อทำการคำนวณยอดเงิน</p>
    <!-- Input -->
    <form action="" method="post" class="text-center">
        <div class="form-group row justify-content-center">

            <!-- ช่อง Price -->
            <div class="col-md-4 text-center">
                <p class="text-center">Price</p>
                <input type="number" name="price" id="price"
                       value="<?php echo isset($_POST['price']) ? $_POST['price'] : '' ?>"
                       class="form-control" placeholder="Enter a price" required>
            </div>

            <!-- ช่อง Amount -->
            <div class="col-md-4 text-center">
                <p class="text-center">Amount</p> 
                <input type="number" name="amount" id="amount"
                       value="<?php echo isset($_POST['amount']) ? $_POST['amount'] : '' ?>"
                       class="form-control" placeholder="Enter an amount" required>
            </div>
        </div>

        

        <div>
            <div>
                <label class="form-label d-block" for="">membership ? </label>
                <div class="form-check form-check-inline">
                    <input type="radio" name="member" id="member">
                    <label for="member">Member (10% Discount)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="member" id="NotMember">
                    <label for="member">Not a Member</label>
                </div>
            </div>
        </div>

        <button type="submit" name="Calculate" class="btn btn-primary mt-3 mb-3">Calculate</button>
        <button type="button" class="btn btn-secondary mt-3 mb-3" onclick="clearGrade()">Reset All</button>
    
    
    </form>

    <!-- Process -->
    <?php
        $total = 0;
        $price = 0;
        $amount = 0;
        if (isset($_POST['Calculate'])) {
            $price = floatval($_POST['price']);
            $amount = floatval($_POST['amount']);
            $total = $price * $amount;
        }
    ?>
    
    <!-- Out put -->
    <div class="d-flex justify-content-center">
        <?php if (isset($_POST['Calculate'])): ?>
            <div class="card mt-4 w-50 ">
                <div class="card-header bg-info text-white text-center">
                    <h4>Show Result</h4>
                </div>
                <div class="card-body left-align ps-5">
                    <p>Price of product: <strong><?php echo number_format($price, 2); ?></strong></p>
                    <hr>
                    <p>Amount of product: <strong><?php echo number_format($amount, 2); ?></strong></p>
                    <hr>
                    <p class="text-primary" >Total Paid: <strong><?php echo number_format($total, 2); ?></strong></p>
                </div>
            </div>
        <?php endif; ?>
    </div>


    <hr>
    <a href="index.php">Home</a>
</div>

    <script>
        function clearGrade() {
            document.getElementById('price').value = '';
            document.getElementById('amount').value = '';
        }
    </script>
</body>
</html>