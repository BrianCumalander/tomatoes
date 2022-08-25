<?php


// Converting entire app to be non-specific, so that any item can be counted.
// will be called Item Counter app. (site-root and db tables anyway, until I come up with a better name).

// view to select Tomato, generated from phpMyAdmin that the site uses: 
$sql = "SELECT *  FROM `item_counter_app` WHERE `thing` LIKE \'Tomato\';";

/* need to create a seperate table to display one-time-only / only-one-record-of things such as
   descriptions that can be more than one and placed anywhere on the page. Descriiption 1-3 can be that. 
   And I can add more if need be:

    'thing' name / description1 / description2 / description3

*/

//sql statement
SELECT * FROM `item_counter_app` WHERE `thing` LIKE 'tomato'


$sql = "SELECT *  FROM 'item_counter_app' WHERE 'thing' LIKE \'tomato\';";