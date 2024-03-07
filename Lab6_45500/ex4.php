<?php $id = 1; ?>
<form method="POST" action="registration.php">
<p>First name: 
<input type="text" name="firstname" size="20">
<p>Last name: 
    <input type="text" name="lastname" size="20">
<p>Rank : 
    <input type="text" name="rank" size="10">
    <input type="hidden" name="serial number" value="<?php echo $id; ?>">
    <input type="submit"  value="input">
    </form>