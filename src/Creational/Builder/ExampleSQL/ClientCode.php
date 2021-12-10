<?php
declare(strict_types=1);

use DesignPatternsPhp8\Creational\Builder\ExampleSQL\MSSQLQueryBuilder;
use DesignPatternsPhp8\Creational\Builder\ExampleSQL\MySQLQueryBuilder;
use DesignPatternsPhp8\Creational\Builder\ExampleSQL\SQLQueryBuilder;

require_once __DIR__ . '/../../../../bootstrap.php';

function clientCode(SQLQueryBuilder $SQLQueryBuilder) {
    $query = $SQLQueryBuilder
        ->select(table: 'bills', fields: ['price', 'amount_products'])
        ->where(field: 'date', value: '2018-12-01')
        ->limit(start: 10, offset: 15)
        ->getSQL();

    echo $query;
}

clientCode(SQLQueryBuilder: new MSSQLQueryBuilder);
echo "\n\n";

clientCode(SQLQueryBuilder:  new MySQLQueryBuilder);
echo "\n\n";
