<?php
declare(strict_types=1);

/**
 * Class PatternObserver
 */
class PatternObserver extends AbstractObserver
{
    /**
     * PatternObserver constructor.
     */
    public function __construct() {}

    /**
     * @param AbstractSubject $subject
     */
    public function update(AbstractSubject $subject) {
        writeln('*IN PATTERN OBSERVER - NEW PATTERN GOSSIP ALERT*');
        writeln(' new favorite patterns: '.$subject->getFavorites());
        writeln('*IN PATTERN OBSERVER - PATTERN GOSSIP ALERT OVER*');
    }
}