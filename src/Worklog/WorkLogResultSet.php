<?php

namespace TempoRestApi\WorkLog;

use TempoRestApi\ResultSet;
use TempoRestApi\TempoClient;

/**
 * Class WorkLogResultSet
 * @package TempoRestApi\WorkLog
 *
 * @method WorkLogResultSet request(string $url)
 */
class WorkLogResultSet extends ResultSet
{
    /**
     * WorkLogResultSet constructor.
     * @param TempoClient $tempoClient
     * @throws \TempoRestApi\InvalidInstanceException
     */
    public function __construct(TempoClient $tempoClient)
    {
        parent::__construct($tempoClient, WorkLog::class);
    }
}
