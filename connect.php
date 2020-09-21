<?php

class connectDB {



    new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=utf8', USER, PASSWORD,
        array(
            PDO::MYSQL_ATTR_SSL_KEY    =>'/Users/nix/repos/mariadb/newcerts/client-key.pem',
            PDO::MYSQL_ATTR_SSL_CERT=>'/Users/nix/repos/mariadb/newcerts/client-cert.pem',
            PDO::MYSQL_ATTR_SSL_CA    =>'/Users/nix/repos/mariadb/newcerts/ca.pem'
            )
          );                                                                                                                                                                  22
}

 ?>
