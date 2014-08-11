<!DOCTYPE html>
<html lang="en"> 
    <!--
        Vehicle View File
        WJD : 08/12/2014
    -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Load Bootstrap CSS -->
     <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>"> 
     
     <!-- Override some default bootstrap colors -->
     <style type="text/css">
        body { background:lightgray }
        .page-header{background-color:#269abc}
     </style>
</head>
<body>    
<div id="wrapper">   
<div id="page-content-wrapper"> 
<div class="content-header">  
<div class="page-content inset"> 
<div class="row"> 
<div class="col-md-12"> 
<div class="col-md-12">    
<!-- 
    If we have query return values then build a table and 
    list the values
-->    
<?php if ($query->num_rows() > 0 ) : ?> 
<table border="1" >
  <tr>
      <td>ID</td>
      <td>FID</td>
      <td>Stock Number</td>
      <td>Inventory Date</td>
      <td>Vehicle Type</td>
      <td>Invoice Price</td>
      <td>MSRP</td>
      <td>Lot Location</td>
      <td>Make</td>
      <td>Model</td>
      <td>Model Year</td>
  </tr> 
  <?php foreach ($query->result() as $row) : ?>
  <tr>
      <td><?php echo $row->id; ?></td>
      <td><?php echo $row->fid; ?></td>
      <td><?php echo $row->stock_number; ?></td>
      <td><?php echo $row->inventory_date; ?></td>
      <td><?php echo $row->vehicle_type; ?></td>
      <td><?php echo $row->invoice_price; ?></td>
      <td><?php echo $row->msrp; ?></td>
      <td><?php echo $row->lot_location; ?></td> 
      <td><?php echo $row->make; ?></td>
      <td><?php echo $row->model; ?></td>
      <td><?php echo $row->model_year; ?></td>
  </tr> 
  <?php endforeach ; ?>
</table>
<?php endif ; ?>
<!-- This form handles the events for querying for data -->
<form role="form" action=<?php echo base_url(); ?> method="post">
   <div class="form-group">
       <br> 
          Vehicle Stock Number: <input type="text" name="vehicle">
          <input type="submit" value="Submit">
   </div>   
   <div class="form-group">  
          Vehicle Make: <input type="text" name="make">
          Vehicle Model: <input type="text" name="model">
          <input type="submit" value="Submit" width="48">      
   </div>
   <button name="full" type="submit" value="full" class="btn btn-default">Full Listing</button>
   <button name="highlow" type="submit" value="highlow" class="btn btn-default">Invoice Price High-Low</button>
   <button name="lowhigh" type="submit" value="lowhigh" class="btn btn-default">Invoice Price Low-High</button>
</form>  
</div> 
</div>
</div>
</div>
</div> 
</div> 
</div>    
</body>    
</html>
