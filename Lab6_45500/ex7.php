<html> <body>

<style>
    table {
        border : solid black;

    }
    table * {
        border : 1px solid black;
    }

 

    .bordered-cell {
        position: relative;
    }
    .bordered-cell::after {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 1px;
        background-color: black;
        height: 60%;
    }
</style>

<?php 
//Retrieve name from query string and store to a local variable 
$name1 = 'George Michael'; 
$salary1 = 2300;
$name2 = 'Elton John';
$salary2 = 3215;


$name3 ='Freddy Mercury';
$salary3 = 1250;
?> 
<table>
    <th>Name</th>
    <th>Salary</th>
    <tr> 
        <td><?php echo $name1  ?></td>
        <td><?php echo $salary1  ?></td>
     </tr>
     <tr>
    <td><?php echo $name2  ?></td>
      <td><?php echo $salary2  ?></td>
     </tr>
     <tr>
     <td><?php echo $name3  ?></td>
     <td><?php echo $salary3  ?></td>
     </tr>
</table>
    
</body> </html>

