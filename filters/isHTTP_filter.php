<?php
/**
 * purpose  Modx Filter
 *          Check if URL begin by http://
 *============================================================================
 * @Copy    : Copyright (c) (2012) d.feldle@ackwa.fr
 * @Project :
 * @Name    : isHTTP
 * @Source  : isHTTP.php
 * @Author  : d.feldle@ackwa.fr
 * @Created : 01/04/2013
 *============================================================================
 * @History : 01/04/2013
 *============================================================================
 * @Usage   :  [[*mylink:isHTTP]]
 *
 *============================================================================
 */
$regex  = "#^http\://#";
return (preg_match($regex, $input) ? '' : 'http://').$input;