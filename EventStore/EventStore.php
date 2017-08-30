<?php
declare(strict_types = 1);
namespace SmoothPhp\Contracts\EventStore;

use SmoothPhp\Contracts\Domain\DomainEventStream;
use SmoothPhp\EventStore\EventStreamNotFound;

/**
 * Interface EventStore
 * @package SmoothPhp\EventStore
 * @author Simon Bennett <simon@bennett.im>
 */
interface EventStore
{
    /**
     * @param string $id
     * @return DomainEventStream
     * @throws EventStreamNotFound
     */
    public function load($id) : DomainEventStream;

    /**
     * @param mixed $id
     * @param DomainEventStream $eventStream
     * @param bool $ignorePlayhead
     * @return void
     */
    public function append($id, DomainEventStream $eventStream, bool $ignorePlayhead = false) : void;

    /**
     * @param string[] $eventTypes
     * @return int
     */
    public function getEventCountByTypes($eventTypes) : int;

    /**
     * @param string[] $eventTypes
     * @param int $take
     * @return \Generator
     */
    public function getEventsByType(array $eventTypes, int $take) : \Generator;
}
