<?php
declare(strict_types=1);

namespace Pattern\Behavioral\Observer;

use SplObjectStorage;
use SplSubject;
use SplObserver;

class Order implements SplSubject
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var SplObjectStorage
     */
    private $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * @param int $id
     * @return void
     */
    public function createOrder(int $id)
    {
        $this->id = $id;
        $this->notify();
    }

    /**
     * @return void
     */
    public function notify()
    {
        foreach($this->observers as $observer)
        {
            $observer->update($this);
        }
    }
}