<?php
$apiKey = "rzp_test_Ic1HYEiRVU6Nit";
?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>


<form action="" method="post">
    <script
    
        src="https://checkout.razorpay.com/v1/checkout.js"

        data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard Settings API Keys 
        data-amount="<?php echo $_POST['amount'] * 100; ?>"
        data-currency="INR"// You can accept international payment
        data-id="<?php echo 'OID' . rand(10, 100) . 'END'; ?>" // Replacewiththeon

        data-buttontext="Pay with Razorpay"

        data-name="FOLKLORE"

        data-image="logo.png"

        data-prefill.name="<?php echo $_POST["name"]; ?>"
        data-prefill.email="<?php echo $_POST['email']; ?>"

        data-prefill.contact="<?php echo $_POST['mobile'];?>"
        data-theme.color="#F17B41"
        ></script>
    
    <input type="hidden" custom="Hidden Element" name="hidden">

</form>
<style>
    .razorpay-payment-button{
        display:none;
    }
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $('.razorpay-payment-button').click()
    });
</script>
