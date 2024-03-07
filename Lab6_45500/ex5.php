<html>
    <head>
        <Title>Example.com greeting</Title>
    </head>
    <body>
        <p>Hello,
            <?php $firstname = 'Manuel';
            $lastname = 'Garcia';
            $title = 'Mr.' ; 
            echo "$title $lastname";
            ?>
            We know who you are! Your first name is <?php echo $firstname; ?></p>
            <p>You are visiting our site at <?php echo date('Y-m-d H:i:s');?></p>
            <p>Here is a link to your account management page: 
                <a href="http://www.example.com/accounts/<?php echo "$firstname$lastname";?>/"><?php echo $firstname; ?>'s account management page</a>
                
            </p>
    </body>
</html>