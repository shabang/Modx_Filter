<?php
/**
 * purpose  Modx Filter
 *          Return a field's line of MIGX
 *============================================================================
 * @Copy    : Copyright (c) (2012) d.feldle@ackwa.fr
 * @Project :
 * @Name    : MigxLine
 * @Source  : MigxLine.php
 * @Author  : d.feldle@ackwa.fr
 * @Created : 01/04/2013
 *============================================================================
 * @Todo    : Add option tyo select field to return ? 
 *            ==> [[*myMigxTV:MigxLine=`lineToReturn, Field`]]
 *============================================================================
 * @History : 01/04/2013
 *============================================================================
 * @Usage   :  [[*myMigxTV:MigxLine]]
 *             [[*myMigxTV:MigxLine=`last`]]
 *             [[*myMigxTV:MigxLine=`2`]]
 *
 *============================================================================
 */


$default = 0;       // Default value

/*
 * On récupère notre migx
 */
$numberline = count($modx->fromJSON($input));
/*
* On récupère les options
*/
if ( true === isset($options) ) {
    if ("last" == strtolower($options) ) {
        $options = $numberline-1;
    }
    $line = $options;
} 
else {
    $line = $default;
}

$i = 0;
foreach($modx->fromJSON($input) as $item){
    if ($i == $line){
        return $item['nom'];
    }
    $i++;
}