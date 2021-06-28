<?php

namespace SaintSystems\OData\Query;

use SaintSystems\OData\IODataRequest;

interface IProcessor
{
    /**
     * Process the results of a "select" query.
     *
     * @param IODataRequest $results
     *
     * @return IODataRequest
     */
    public function processSelect(Builder $query, $results);
}
