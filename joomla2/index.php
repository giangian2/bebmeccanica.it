<!DOCTYPE html>
<html>
    <body>
        <h1>SIte under mainetnabnce</h1>
        <?php
            echo phpinfo();
        ?>
        <?php
            $mysql=new mysqli("db","admin_bbmecc","120BEBMeccanica,130","admin_bebmeccanica",3306);
            $stmt=$mysql->prepare("SELECT * FROM beb_virtuemart_products");
            $stmt->execute();
            $res=$stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach($res as $r){
                echo var_dump($r);
            }
        ?>
    </body>
</html>