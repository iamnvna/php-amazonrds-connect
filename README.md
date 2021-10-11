# Connecting to Amazon RDS Using PHP

The index.php file contains code to connect to Amazon RDS in the Cloud. i struggled finding the syntax and throught I'd share the code for future use cases. 


## Requirements

* PHP version 5.1+


## Techniques used

* PDO ([php.net/pdo](https://secure.php.net/pdo))

```php
echo extension_loaded('pdo');       // Check if PDO extension is loaded
echo extension_loaded('pdo_mysql'); // Check if MySQL driver is loaded
```


For more undertanding, [read](https://docs.aws.amazon.com/elasticbeanstalk/latest/dg/create_deploy_PHP.rds.html) the full documentation on Amazon Web Services.
