# teams101x_tuckman_questionnaire
Tuckman Questionnare for teams101x

# Usage

### Course Tool - Teams101x - Section 1: What is a team? The lifecycle of teams

The questionnaire will help you understand what stage your team operates. This is based on the [Tuckman Model](Tuckman Model) of Forming, Storming, Norming and Performing. 

### Questions used - 

1: (forming question) "We try to have set procedures or protocols to ensure that things are orderly and run smoothly (e.g. minimize interruptions, everyone gets the opportunity to have their say).",
2: (storming question) "We are quick to get on with the task at hand and do not spend too much time in the planning stage.",
3: (performing question) "Our team feels that we are all in it together and share responsibility for the team's success or failure.",
4: (norming question) "We have thorough procedures for agreeing on our objectives and planning the way we will perform our tasks.",
5: (forming question) "Team members are afraid or do not like to ask others for help.",
6: (norming question) "We take our team's goals and objectives literally, and assume a shared understanding.",
7: (storming question) "The team leader tries to keep order and contributes to the task at hand.",
8: (performing question) "We do not have fixed procedures, we make them up as the task or project progresses.",
9: (storming question) "We generate lots of ideas, but we do not use many because we fail to listen to them and reject them without fully understanding them.",
10: (forming question) "Team members do not fully trust the other team members and closely monitor others who are working on specific tasks.",
11: (norming question) "The team leader ensures that we follow the procedures, do not argue, do not interrupt, and keep to the point.",
12: (performing question) "We enjoy working together; we have an enjoyable and productive time.",
13: (norming question) "We have accepted each other as members of the team.",
14: (performing question) "The team leader is democratic and collaborative.",
15: (forming question) "We are trying to define the goal and what tasks need to be accomplished.",
16: (storming question) "Many of the team members have their own ideas about the process and personal agendas are rampant.",
17: (performing question) "We fully accept each other's strengths and weaknesses.",
18: (forming question) "We assign specific roles to team members (team leader, facilitator, time keeper, note taker, etc.).",
19: (norming question) "We try to achieve harmony by avoiding conflict.",
20: (storming question) "The tasks are very different from what we imagined and seem very difficult to accomplish.",
21: (forming question) "There are many abstract discussions of the concepts and issues, which make some members impatient with these discussions.",
22: (performing question) "We are able to work through group problems.",
23: (storming question) "We argue a lot even though we agree on the real issues.",
24: (norming question) "The team is often tempted to go beyond the original scope of the project.",
25: (norming question) "We express criticism of others constructively.",
26: (performing question) "There is a close attachment to the team.",
27: (forming question) "It seems as if little is being accomplished towards the project's goals.",
28: (storming question) "The goals we have established seem unrealistic.",
29: (forming question) "Although we are not fully sure of the project's goals and issues, we are excited and proud to be on the team.",
30: (norming question) "We often share personal problems with each other.",
31: (storming question) "There is a lot of resisting of the tasks on hand and quality improvement approaches.",
32: (performing question) "We get a lot of work done."

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
