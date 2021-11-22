# Magento 2 Module Zaproo CustomerStatus

    ``olegattila/customer-status``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Customer Status

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Zaproo/CustomerStatus`
 - Enable the module by running `php bin/magento module:enable Zaproo_CustomerStatus`
 - Apply database updates by running `php bin/magento setup:upgrade`
 - generate code and dependency injection configuration `php bin/magento setup:di:compile`
 - deploy static view files `php bin/magento setup:static-content:deploy en_US -j 4 -f`
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Install the module composer by running `composer require olegattila/customer-status:dev-master`
 - enable the module by running `php bin/magento module:enable Zaproo_CustomerStatus`
 - apply database updates by running `php bin/magento setup:upgrade`
 - generate code and dependency injection configuration `php bin/magento setup:di:compile`
 - deploy static view files `php bin/magento setup:static-content:deploy en_US -j 4 -f`
 - flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications




## Attributes

 - Customer - Custom Status (custom_status)
