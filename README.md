# teams101x_tuckman_questionnaire
Tuckman Questionnare for teams101x

# Usage

### Course Tool - Teams101x - Section 1: What is a team? The lifecycle of teams

The questionnaire will help you understand what stage your team operates. This is based on the [Tuckman Model](Tuckman Model) of Forming, Storming, Norming and Performing. 


# Installation 

### Files

* config.php

once cloned, create a file called "config.php" and add the following with your details in place of the placeholder values

```php
<?php
	//Configuration File
	//key=>secret
	$config = array(
		'lti_keys'=>array(
			'YOUR_CLIENT_KEY'=>'YOUR_CLIENT_SECRET'
		),
		'use_db'=>true,
		'db'=>array(
			'driver'=>'mysql',
			'hostname'=>'localhost',
			'username'=>'YOUR_DB_USERNAME',
			'password'=>'YOUR_DB_PASSWORD',
			'dbname'=>'YOUR_DB_NAME',
		)
	);
?>
```

### Database
#### MySQL
> Version Ver 14.14 Distrib 5.1.73, for redhat-linux-gnu (x86_64) using readline 5.1

#### Tables

* Responses

```sql

CREATE TABLE `responses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` text,
  `survey_id` text NOT NULL,
  `response` mediumtext,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

```