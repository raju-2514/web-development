<?php
include_once("includes/functions.php");
if(isLogged() !== 2){
    header("Location: index.php "); 

}
?>
<!DOCTYPE html>
<head>
<title>links</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
<script>

    function getareas(cid){
        $(document).ready(function(){
            $.get("getAreas.php?cid="+cid, function(data, status){
                $("#areaDiv").html(data);
            });
        });
    }

</script>
</head>
<body>

<?php
drawHeader();
?>

<div class="container">       
<h2 class="m-3">Users Ads </h2>
   
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>UserID</th>
        <th>AdsID</th>
        <th>Title</th>
        <th>Price</th>
        <th>Date</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
<?php
    $result = mysqli_query($clink, "SELECT * FROM `advertisments` ORDER BY `advertisments`.`AdsID` ASC  ");
					if(mysqli_num_rows($result)>1){
						//Show them

						while($row = mysqli_fetch_array($result)){
                        echo "<tr '>
                                    <td>{$row['AdsID']}</td>
                                    <td>{$row['UserID']}</td>
                                    <td>{$row['Title']}</td>
                                    <td>{$row['Price']}</td>
                                    <td>{$row['Date']}</td>
                                    <td> ";
                                    if ($row['Status'] == 1 ){
                                        echo "<a href='activeordeactive.php?UserID={$row['UserID']}' class='btn btn-danger ml-2 ' >Deactivate<a>";
                                    }else if  ($row['Status'] == 0 ) {
                                        echo "<a href='activeordeactive.php?UserID={$row['UserID']}' class='btn btn-primary ml-2  ' >Active<a>";
    
                                    }
                                    echo "</td> </tr>"   ; 
                        }
                    }else{
						outputMessage("No Account Users found in our Database",'warning');
					}
?>
    </tbody>
  </table>
</div>

<?php
    include_once("footer.php");
    ?>
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>