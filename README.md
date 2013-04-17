Modx_Filter
===========

My Modx output filter.


## isHTTP Filter

Check if URL begin by *http://*

### usage 

    [[*mylink:isHTTP]]


## MigxLine Filter

Return a field's line of MIGX

Modify *return $item['nom'];* to specified field to return

### usage

    [[*myMigxTV:MigxLine]]              // Return first line
    [[*myMigxTV:MigxLine=`last`]]       // Return Last line
    [[*myMigxTV:MigxLine=`2`]]          // Return line 2


## MigxCount Filter

Count line of Migx

### usage

    [[*myMigxTV:MigxCount]]