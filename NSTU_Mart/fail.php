<?php
include_once("includes/functions.php");

?>
<!DOCTYPE html>
<head>
<title>links</title>
<link rel="shotcuticon" href="assets/img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<style type="text/css">
<style>
body
    {
        background:#f2f2f2;
    }

    .payment
	{
		border:1px solid #f2f2f2;
		height:280px;
        border-radius:20px;
        background:#fff;
	}
   .payment_header
   {
	   background:rgba(255,102,0,1);
	   padding:20px;
       border-radius:20px 20px 0px 0px;
	   
   }
   
   .check
   {
	   margin:0px auto;
	   width:50px;
	   height:50px;
	   border-radius:100%;
	   background:#fff;
	   text-align:center;
   }
   
   .check i
   {
	   vertical-align:middle;
	   line-height:50px;
	   font-size:30px;
       color:red;
   }

    .content 
    {
        text-align:center;
    }

    .content  h1
    {
        font-size:25px;
        padding-top:25px;
    }

    .content a
    {
        width:200px;
        height:35px;
        color:#fff;
        border-radius:30px;
        padding:5px 10px;
        background:rgba(255,102,0,1);
        transition:all ease-in-out 0.3s;
    }

    .content a:hover
    {
        text-decoration:none;
        background:#000;
    }
   
</style>
</style>
    
</head>
<body>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

    $paystatus=$_POST['pay_status'];
    $amount=$_POST['amount'];
    $trxnid=$_POST['pg_txnid'];
    $mer_trxnid=$_POST['mer_txnid'];
    $card=$_POST['card_type'];
   
    // echo $paystatus."</br>";
    // echo $amount."</br>";
    // echo $trxnid."</br>";
    // echo $mer_trxnid."</br>";
    // echo $card."</br>";
    
    // echo $paystatus;
    // echo $amount;
    //you can get all parameter from post request
    //print_r($_POST);
}
?>

<div class="container">
   <div class="row">
      <div class="col-md-6 mx-auto mt-5">
         <div class="payment">
            <div class="payment_header">
               <div class="check"><i class="fa fa-times" aria-hidden="true"></i></div>
            </div>
            <div class="content">
               <h1>Payment Failed !</h1>
               <p>please pay with correct way. </p>
               <table class="table table-borderless">
  <thead>
  
  </thead>
  <tbody>
    <tr>
      <td>Payment method:</td>
      <td></td>
      <td><?php echo $card;?></td>
    </tr>
    <tr>
    <td>Payment status:</td>
      <td></td>
      <td><?php echo $paystatus;?></td>

    
    </tr>
    <td><b>Amount paid:</b></td>
      <td></td>
      <td><?php echo $amount;?></td>
    </tr>
    <td>Transaction id:</td>
      <td></td>
      <td><?php echo $trxnid;?></td>
    </tr>
  
  </tbody>
</table>  <a href='index.php'>Go to Home</a>
            </div>
            
         </div>
      </div>
   </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

