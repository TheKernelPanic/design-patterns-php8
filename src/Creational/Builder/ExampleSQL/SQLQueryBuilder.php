<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Creational\Builder\ExampleSQL;

interface SQLQueryBuilder
{
    /**
     * @param string $table
     * @param array $fields
     * @return SQLQueryBuilder
     */
    public function select(string $table, array $fields): SQLQueryBuilder;

    /**
     * @param string $field
     * @param string $value
     * @param string $operator
     * @return SQLQueryBuilder
     */
    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder;

    /**
     * @param int $start
     * @param int $offset
     * @return SQLQueryBuilder
     */
    public function limit(int $start, int $offset): SQLQueryBuilder;

    /**
     * @return string
     */
    public function getSQL(): string;
}