<?php
              
             $time = '';
              $query2= "select * from state_master";
              $result2= mysqli_query($mysqli,$query2);
              while ($rows2= mysqli_fetch_array($result2)) {
                 $time .= '<option value="'.$rows2["state_name"].'">'.$rows2["state_name"].'</option>';
              }
              
            ?>    
  <select name="time" class="form-control" id="designation" name="time" required> 
  <option selected disabled>Select State</option>
                 <?php echo $time; ?>
  </select>



