<?php
declare(strict_types=1);

/**
 * Class AbstractSubject
 */
abstract class AbstractSubject
{
    /**
     * @param AbstractObserver $observer_in
     * @return mixed
     */
    abstract function attach(AbstractObserver $observer_in);

    /**
     * @param AbstractObserver $observer_in
     * @return mixed
     */
    abstract function detach(AbstractObserver $observer_in);

    /**
     * @return mixed
     */
    abstract function notify();
}