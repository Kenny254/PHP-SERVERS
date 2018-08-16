 <?php require_once('auth.php');   include ('displayData.php');?>
 
 
 
 <?php do { ?> 
 
 
 
 
<li><span><i class="fa fa-home"></i> <?php echo $row_dev['acres']; ?>  Sq ft</span></li> // buffers items you need to render





  <?php } while ($row_dev = mysql_fetch_assoc($dev)); ?>


		
          
       
               
