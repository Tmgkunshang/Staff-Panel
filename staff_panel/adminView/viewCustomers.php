<div >
  <h2>All Customers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th style="background-color: #ffc226; color:black; height:40px" class="text-center">S.N.</th>
        <th style="background-color: #ffc226; color:black; height:40px" class="text-center">Username </th>
        <th style="background-color: #ffc226; color:black; height:40px" class="text-center">Email</th>
        <th  style="background-color: #ffc226; color:black; height:40px" class="text-center">Contact Number</th>
        <th style="background-color: #ffc226; color:black; height:40px" class="text-center">Joining Date</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from users where isAdmin=0";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["first_name"]?> <?=$row["last_name"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["contact_no"]?></td>
      <td><?=$row["registered_at"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>