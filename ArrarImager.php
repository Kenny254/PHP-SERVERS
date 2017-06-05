  <?php
  
  /* This code was written by Ken Ronoh to 
  buffer from mysql comma separated arrays and truncate xters*/
  
  
 // First image buffer
  
           $string=($row_dev['image']); // buffers a string from mysql db
           $first = explode(',', $string)[0]; // explodes and truncates spaces and xters
           $sufuri= "realcms" . "/" .  "projects/ " . $first; // This line for all the images is orphan
           
           
 // second image buffer
  
           $string=($row_dev['image']); 
          $second = explode(',', $string)[1];
           $moja= "realcms" . "/" .  "projects/ " . $second;


  // Third image buffer
  
           $string=($row_dev['image']); 
          $third = explode(',', $string)[2];
           $mbili= "realcms" . "/" .  "projects/ " . $third;



  // Fourth image buffer
  
           $string=($row_dev['image']); 
           $fourth = explode(',', $string)[3];
           $tatu= "realcms" . "/" .  "projects/ " . $fourth;


  // Fifth image buffer
  
           $string=($row_dev['image']); 
            $fifth = explode(',', $string)[4];
           $nne= "realcms" . "/" .  "projects/ " . $fifth;

  // Sixth image buffer
  
           $string=($row_dev['image']); 
           $sixth = explode(',', $string)[5];
           $tano= "realcms" . "/" .  "projects/ " . $sixth;
           
// Seventh image buffer
  
           $string=($row_dev['image']); 
           $seventh = explode(',', $string)[6];
           $sita= "realcms" . "/" .  "projects/ " . $seventh;


           
           
           
           
           
           
  
           ?> 
           
           
             
           
