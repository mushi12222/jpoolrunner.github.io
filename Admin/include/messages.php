<!--TABLE START-->
<div class="container">
  <table class="table" border= 1 width= 70%  >
    <tbody>
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Delete</th>
    </tr>
   
    
  </thead>
  <?php
  include 'messageconf.php';
  $query = "SELECT * FROM `contacttable` order by id desc";
  $pic= mysqli_query($con, $query);
  while($row=mysqli_fetch_array($pic)){
    echo "
    <tr>
    <td>$row[id]</td>
    <td>$row[name]</td>
    <td>$row[email]</td>
    <td>$row[message]</td>
    <td><a href='deletemessage.php? id=$row[id]' class='btn btn-danger'>Delete</a></td>
    <td></td>
    </tr> ";
  }
  ?>
  <tbody>
</table>
</div>

    <!--TABLE END-->