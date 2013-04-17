<?php

/**
 * purpose  Modx Filter
 *          Count line of Migx
 *============================================================================
 * @Copy    : Copyright (c) (2012) d.feldle@ackwa.fr
 * @Project :
 * @Name    : MigxCount
 * @Source  : MigxCount.php
 * @Author  : d.feldle@ackwa.fr
 * @Created : 01/04/2013
 *============================================================================
 * @History : 01/04/2013
 *============================================================================
 * @Usage   :  [[*myMigxTV:MigxCount]]
 *
 *============================================================================
 */
$items = $modx->fromJSON($input);
return count($items);