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
        padding-bottom: -80px;
        background:#f2f2f2;
    }

    .payment
	{width: 500px;
    height: 579px;
        margin-top:-50px;
		border:1px solid #f2f2f2;
		height:580px;
        border-radius:20px;
        background:#fff;
        margin-bottom:100px;
	}
   .payment_header
   {
	   background:#fff;
	   padding:20px;
       border-radius:20px 20px 0px 0px;
	   
   }
   
   .check
   {
	   margin:0px auto;
	   width:50px;
	   height:50px;
	   border-radius:100%;
	   background:#35b274;
	   text-align:center;
   }
   
   .check i
   {
    filter: drop-shadow(3px 5px 2px rgb(0 0 0 / 0.4));
    color:white;
	   vertical-align:middle;
	   line-height:50px;
	   font-size:30px;
   }

    .content 
    {
        text-align:center;
    }
 p {
       text-align:center;
       font-size:30px;
       margin-bottom:0px;
        color:#35b274;
        padding-top:25px;
    }

    .content a
    {
        font-size:18px;
        width:200px;
        height:350px;
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

</head>
<body>
<?php
drawHeader(1);
?>


<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

    $paystatus=$_POST['pay_status'];
    $amount=$_POST['amount'];
    $paymethod=$_POST['card_type'];
    $name=$_POST['cus_name'];
    $phone=$_POST['cus_phone'];
    $email=$_POST['cus_email'];
    $amount=$_POST['amount'];
    $txnid=$_POST['bank_txn'];
    $time=$_POST['pay_time'];
    //you can get all parameter from post request
}
?>
<div class="container">
   <div class="row">
      <div class="col-md-6 mx-auto mt-5">
         <div class="payment">
            <div class="payment_header">
               <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
               <p>Payment Successful </p>
            </div>
            <div class="content">
              
            <table class="table table-borderless">
  <thead>
  
  </thead>
  <tbody>
    <tr>
      <td>Payment method:</td>
      <td></td>
      <td><?php echo $paymethod;?></td>
    </tr>
    <tr>
    <td>Name:</td>
      <td></td>
      <td><?php echo $name;?></td>
    </tr>
    <td>Number:</td>
      <td></td>
      <td><?php echo $phone;?></td>
    </tr>
    <!-- <td>E-mail::</td>
      <td></td>
      <td><?php echo $email;?></td> -->
    </tr>
    <td><b>Amount paid:</b></td>
      <td></td>
      <td><?php echo $amount;?></td>
    </tr>
    <td>Transaction id:</td>
      <td></td>
      <td><?php echo $txnid;?></td>
    </tr>
    <td>Pay time:</td>
      <td></td>
      <td><?php echo $time;?></td>
    </tr>
   
  </tbody>
</table>
               <a href='index.php'>Go to Home</a>
            </div>
            
         </div>
      </div>
   </div>
</div>

<?php
    include_once("footer.php");
    ?>




        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

