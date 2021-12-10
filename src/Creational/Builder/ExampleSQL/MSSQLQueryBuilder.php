<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Creational\Builder\ExampleSQL;

class MSSQLQueryBuilder implements SQLQueryBuilder
{
    protected string $table;
    protected array $fields;
    protected array $whereClauses = [];
    protected int $start;
    protected int $offset;

    /**
     * @param string $table
     * @param array $fields
     * @return SQLQueryBuilder
     */
    public function select(string $table, array $fields): SQLQueryBuilder
    {
        $this->table = $table;
        $this->fields = $fields;

        return $this;
    }

    /**
     * @param string $field
     * @param string $value
     * @param string $operator
     * @return SQLQueryBuilder
     */
    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder
    {
        $this->whereClauses[] = "{$field} {$operator} N'{$value}'";

        return $this;
    }

    /**
     * @param int $start
     * @param int $offset
     * @return SQLQueryBuilder
     */
    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        $this->start = $start -1;
        $this->offset = $offset;

        return $this;
    }

    /**
     * @return string
     */
    public function getSQL(): string
    {
        $query = 'SELECT ' . implode(',', $this->fields) . ' FROM '. $this->table;

        if (!empty($this->whereClauses)) {
            $query .= ' WHERE ' . implode('AND', $this->whereClauses);
        }
        if (isset($this->start, $this->offset)) {
            $query .= " OFFSET {$this->offset} ROWS FETCH NEXT {$this->start} ROWS ONLY";
        }
        return $query;
    }
}