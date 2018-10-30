<?php
declare(strict_types=1);

/**
 * Class AbstractObserver
 */
abstract class AbstractObserver
{
    /**
     * @param AbstractSubject $subject_in
     * @return mixed
     */
    abstract function update(AbstractSubject $subject_in);
}