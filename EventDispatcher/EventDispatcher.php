<?php
namespace SmoothPhp\Contracts\EventDispatcher;

/**
 * Class EventDispatcher
 * @package SmoothPhp\Contracts\EventDispatcher
 * @author Simon Bennett <simon@bennett.im>
 */
interface EventDispatcher
{
    /**
     * @param string $eventName
     * @param array $arguments
     * @param bool $runProjectionsOnly
     * @return void
     */
    public function dispatch($eventName, array $arguments,$runProjectionsOnly = false);

    /**
     * @param string   $eventName
     * @param callable $callable
     * @return void
     */
    public function addListener($eventName, callable $callable);

    /**
     * @param Subscriber $subscriber
     * @return void
     */
    public function addSubscriber(Subscriber $subscriber);
}