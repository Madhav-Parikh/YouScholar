<?php

include 'dbcon.php';



    if(null !==($scholarship_title=$_POST['sch_name'])); 
        
    if(null !==($scholarship_state=$_POST['State'])); 


    

    $query = "SELECT * FROM scholarships where scholarship_title LIKE '%{$scholarship_title}%' AND scholarship_state=$scholarship_state";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                echo $row['scholarship_title'];
                            } 
                        }
                        else {
                            
                        }

   


    ?>