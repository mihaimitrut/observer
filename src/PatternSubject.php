<?php
declare(strict_types=1);

/**
 * Class PatternSubject
 */
class PatternSubject extends AbstractSubject
{
    /**
     * @var null
     */
    private $favorites = NULL;

    /**
     * @var array
     */
    private $observers = array();

    /**
     * PatternSubject constructor.
     */
    function __construct() {}

    /**
     * @param AbstractObserver $observer_in
     * @return mixed|void
     */
    function attach(AbstractObserver $observer_in) {
        //could also use array_push($this->observers, $observer_in);
        $this->observers[] = $observer_in;
    }

    /**
     * @param AbstractObserver $observer_in
     * @return mixed|void
     */
    function detach(AbstractObserver $observer_in) {
        //$key = array_search($observer_in, $this->observers);
        foreach($this->observers as $okey => $oval) {
            if ($oval == $observer_in) {
                unset($this->observers[$okey]);
            }
        }
    }

    /**
     * @return mixed|void
     */
    function notify() {
        foreach($this->observers as $obs) {
            $obs->update($this);
        }
    }

    /**
     * @param $newFavorites
     */
    function updateFavorites($newFavorites) {
        $this->favorites = $newFavorites;
        $this->notify();
    }

    /**
     * @return mixed
     */
    function getFavorites() {
        return $this->favorites;
    }
}