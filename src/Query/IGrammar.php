<?php

namespace SaintSystems\OData\Query;

interface IGrammar
{
    /**
     * Compile a select query into OData Uri.
     *
     * @return string
     */
    public function compileSelect(Builder $query);

    /**
     * Get the grammar specific operators.
     *
     * @return array
     */
    public function getOperators();

    /**
     * Get the grammar specific functions.
     *
     * @return array
     */
    public function getFunctions();

    /**
     * Get the grammar specific operators and functions.
     *
     * @return array
     */
    public function getOperatorsAndFunctions();

    /**
     * Prepare the appropriate URI value for a where value.
     *
     * @return string
     */
    public function prepareValue($value);

    /**
     * Get the appropriate query parameter place-holder for a value.
     *
     * @return string
     */
    public function parameter($value);

    /**
     * Determine if the given value is a raw expression.
     *
     * @return bool
     */
    public function isExpression($value);

    /**
     * Get the value of a raw expression.
     *
     * @param \Illuminate\Database\Query\Expression $expression
     *
     * @return string
     */
    public function getValue($expression);

    /**
     * Convert an array of property names into a delimited string.
     *
     * @return string
     */
    public function columnize(array $properties);
}
