<h1>Customers</h1>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Date of Birth</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Order ID</th>
      <th></th>
      </tr>      
    </thead>
    <tbody>
<?php
while ($customer = $customers->fetch_assoc())
{
  ?>
  <tr>
    <td><?php echo $customer['customer_id'];?></td>
    <td><?php echo $customer['first_name'];?></td>
    <td><?php echo $customer['last_name'];?></td>
    <td><?php echo $customer['dob'];?></td>
    <td><?php echo $customer['email'];?></td>
    <td><?php echo $customer['phone'];?></td>
    <td><?php echo $customer['order_id'];?></td>
    <td><a href="orders-by-customers.php?id=<?php echo $customer['customer_id'];?>">Orders</a></td>
  </tr>
  <?php
}
?>
      
    </tbody>
  </table>
</div>
