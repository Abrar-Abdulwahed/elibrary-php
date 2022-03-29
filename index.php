<?php
    require_once 'Validator.php';
    $val = new Validator;
     ?>
    
    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
    	<label for="username">Username:</label>
        <input type="text" name="username" value="<?= (!empty($_POST['username'])) ? $_POST['username'] : ''; ?>"><br>
        <label for="email">email:</label>
        <input type="text" name="email" value="<?= (!empty($_POST['email'])) ? $_POST['email'] : ''; ?>"><br>
        <label for="tel">Telephone:</label>
        <input type="text" name="tel" value="<?= (!empty($_POST['tel'])) ? $_POST['tel'] : ''; ?>"><br>
        <label for="message">Message:</label>
        <textarea name="message" cols="40" rows="6" value="<?= (!empty($_POST['tel'])) ? $_POST['tel'] : ''; ?>"></textarea><br>
        <button type="submit" name="register">Send</button>
    </form>
    
    <?php 
    	
        if(isset($_POST['register'])){
            $val->setFieldName('username')->setVal($_POST['username'])->required()->minLength(5)->maxLength(10);
            $val->setFieldName('email')->setVal($_POST['email'])->required()->is_email();
            $val->setFieldName('message')->setVal($_POST['message'])->required();

            if($val->isSuccess()){
                echo 'Validation ok!';        
            }else{
                echo $val->displayErrors();
            }

        }
  
    ?>