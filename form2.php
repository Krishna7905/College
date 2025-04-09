<?php 
 //Connection with Mongo 
 require 'vendor/autoload.php';

        $client = new MongoDB\Client; 
        $db = $client->College; 
        $col = $db->Form; 
        


            if(isset($_POST['btn'])) 
            { 
              //   $id=$_POST['name']; 
              $name = $_POST['name'];
 
                $email=$_POST['email']; 
                $mobile=$_POST['mobile']; 
                $course=$_POST['course']; 
                $qur=$col->insertOne(['name'=>$name,'email'=>$email,'mobile'=>$mobile,'course'=>$course]); 
            } 
            ?> 
            
            <table border="1"> 
    <tr> 
        <td>Name</td> 
        <td>E-mail</td> 
        <td>Mobile No.</td> 
        <td>Courses</td> 
        <td colspan="2">Operation</td> 
    </tr> 
    <?php 
        $disqur=$col->find(); 
        foreach($disqur as $row) 
        { 
    ?> 
    <tr> 
        <td><?php echo $row['name']; ?></td> 
        <td><?php echo $row['email']; ?></td> 
        <td><?php echo $row['mobile']; ?></td> 
        <td><?php echo $row['course']; ?></td> 
        <td><a href="delete.php?name=<?php echo $row['name']; ?>"> Delete</a></td> 
        <td><a href="update.php?name=<?php echo $row['name']; ?>"> Update</a></td> 
    </tr> 
    <?php 
        } 
    ?>  
</table>