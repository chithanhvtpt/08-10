<form method="post">
    <input type="text" name="name" placeholder="Ten nguoi dung">
    <input type="email" placeholder="Email">
    <input type="number" placeholder="So dien thoai">
    <button type="submit"> Submit </button>
</form>
<?php
$ten = $_POST['name'];
echo 'Hello'. $ten;
