<?php
class Event
{
  protected $_observers;
  protected $_eventName;
  protected $_embedParams;

  public function __construct()
  {
    $this->_observers = [];
  }

  public function attach(Listener $observer)
  {
    if (array_search($observer, $this->_observers) === FALSE)
    {
      $this->_observers[] = $observer;
    }
  }

  public function detach(Listener $observer)
  {
    if (!count($this->_observers) && 
      ($idx = array_search($observer, $this->_observers)) !== FALSE)
    {
      unset($this->_observers[$idx]);
    }
  }

  public function notify()
  {
    if (count($this->_observers))
    {
      foreach ($this->_observers as $observer)
      {
        $observer->update($this);
      }
    }
  }
    
  public function trigger($eventName, $params = [])
  {
    $this->_eventName = $eventName;
    $this->_embedParams = $params;
    $this->notify();
  }
    
  public function getEventName()
  {
    return $this->_eventName;
  }
    
  public function getParams()
  {
    return $this->_embedParams;
  }
}

class Listener 
{
  public function __construct(Event $event)
  {
    $event->attach($this);
  }
    
  public function update(Event $event)
  {
    if($event->getEventName() == 'EventName')
    {
      $this->execEventName($event->getParams());
    }
  }
  public function execEventName($params = NULL)
  {
    var_dump($params);
  }
}

$event = new Event;
$listener = new Listener($event);
$event->trigger('EventName', ['k' => 'val']);