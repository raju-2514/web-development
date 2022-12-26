<?php
include_once("includes/functions.php");
$isLogged =isLogged();
        if($isLogged ==3){
            header("Location:index.php "); 
        }
?>
<!DOCTYPE html>
<head>
<title>links</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
<link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
</head>
<style>
    body {
        
  padding-top: 140px;
  min-height:850px;
  background-image: url('img/shipping.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
table{
    text-align:center;
}
.btn-danger{
    font-size:25px;
    border-radius:20px;
    height: 60px;
    width:200px;
    margin-left:15px;
   
}
.pay{
    margin-left:250px;
}
label{
    float:left;
}
h4{
   
}

.footer-basic{
    width:100%;
    margin-top:100px;
    padding-bottom:0px;
}
</style>
<?php
error_reporting(0);
date_default_timezone_set('Asia/Dhaka');
//Generate Unique Transaction ID
function rand_string( $length ) {
	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	

	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}

	return $str;
}
$cur_random_value=rand_string(6);

?>  
<body>
<!-- <header class="header"> -->
<?php
drawHeader(1);

?><section class="commercial-asd container">

<form action="addads.php" method="post" enctype="multipart/form-data">
   <div >
                   <div class=" billing-address bg-gray">
                   <div class="card text-center">
                   <div class="card-header">
                   <h4>Place an Ad</h4>
                    </div>
                 <div class="card-body">
                
              

                    <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Please write Your Product Title: </label>
                    <input type="text" name="ProTitle" placeholder="Title" alt="wating" class="form-control" id="formGroupExampleInput2" placeholder="" title="Pleaes write Your Title" required>
                    </div>
                    <label for="my-input" class="form-label">Please write Your Product Description: </label>
                    <textarea placeholder="Detalis" name="ProDetalis" id="my-input" class="form-control " rows="5"></textarea>

                    <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Please write Your Product price: </label>
                    <input type="number" name="Proprice" placeholder="price" alt="wating"title="Pleaes write Your price"  class="form-control" id="formGroupExampleInput2" placeholder="" required>
                    </div>
                    
                    <div class="input-group mb-3 ">
                        <input type="file" class="form-control"  name="image" id="inputGroupFile02" required>
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>


                            <label class="form-label" for="cat">Please Select Category:</label>
                    <select class="form-select kolo"  id="cat" name="Maincategory">
                    <?php
                    $resultcategories=mysqli_query($clink,"SELECT CategoryID , CategoryName FROM categories");
                    while ($rowcategories=mysqli_fetch_assoc($resultcategories)){
                        echo "<option value='{$rowcategories['CategoryID']}'>{$rowcategories['CategoryName']}</option>";
                    }
                    
                    ?>
                    </select>
                <input class="btn " type="submit" value="save" >

                </form>


<form style='margin:0 auto; text-align:center;' action="https://sandbox.aamarpay.com/index.php" method="post" name="form1">
                    <table border="0" cellpadding="4" cellspacing="2" align="center" style="border-collapse:collapse;">
                    <input type="hidden" name="store_id" value="aamarpay">
                    <input type="hidden" name="signature_key" value="28c78bb1f45112f5d40b956fe104645a">
                   
            
                    <div class="col-md-6 pay">
                   <div class="col-md-12 billing-address bg-gray">
                   <div class="card text-center">
                   <div class="card-header">
                   <h5><img src="img/amarpay.png" alt="amarpay-logo"></h5>
                    </div>
                 <div class="card-body">
                
    
                    <input type="hidden" type="text" name="cus_add2" value="Dhaka">
                    <input type="hidden" type="text" name="cus_city" value="Dhaka">
                <input type="hidden" type="text" name="cus_state" value="Dhaka">
                    <input type="hidden" type="text" name="cus_postcode" value="1206">
                <input type="hidden" type="text" name="cus_country" value="Bangladesh">
                
                <input type="hidden" type="text" name="cus_fax" value="010000000">
                    
                <input type="hidden" type="text" name="amount_vatratio" value="0">
                <input type="hidden" type="text" name="amount_vat" value="0">
                <input type="hidden" type="text" name="amount_taxratio" value="0">
                    <input type="hidden" type="text" name="amount_tax" value="0">
                <input type="hidden" type="text" name="amount_processingfee_ratio" value="0">
                <input type="hidden" type="text" name="amount_processingfee" value="0">
                
                 <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Merchant Transaction ID:</label>
                    <input type="hidden" name="tran_id" value="WEP-<?php echo "$cur_random_value"; ?>">WEP-<?php echo "$cur_random_value"; ?>
                    </div>

                    <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Pay Amount: </label>
                    <input type="text" name="amount" value="1" class="form-control" id="formGroupExampleInput2" placeholder="" required>
                    </div>

                    <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Currency name: </label>
                    <input type="text" name="currency" value="BDT" class="form-control" id="formGroupExampleInput2" placeholder="" required>
                    </div>

                    <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Seller Name: </label>
                    <input type="text" name="cus_name"  class="form-control" id="formGroupExampleInput" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Seller Email Address:</label>
                    <input type="text" name="cus_email" class="form-control" id="formGroupExampleInput2" placeholder="E-mail" required>
                    </div>

                    <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Seller Address:</label>
                    <input  type="text" name="cus_add1" class="form-control" id="formGroupExampleInput2" placeholder="Address" required>
                    </div>
                    <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Seller Phone:</label>
                    <input type="text" name="cus_phone" class="form-control" id="formGroupExampleInput2" placeholder="Mobile number" required>
                    </div>
                    <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Product Description:</label>
                    <input  type="text" name="desc" class="form-control" id="formGroupExampleInput2" placeholder="" required>
                    </div>
                   
                    <input type="hidden" name="success_url" value="http://localhost/project2/success.php">
                    <input type="hidden" name="fail_url" value = "http://localhost/project2/fail.php">
                    <input type="hidden" name="cancel_url" value = "http://localhost/project2/cancel.php">
                    <input type="submit" class='button btn-danger' value="Pay Now" name="pay">


                    
                    </div>
                    </div>

                </div>
                </div>
                </div>
                
                </form>
                 
                    

   
</section>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>