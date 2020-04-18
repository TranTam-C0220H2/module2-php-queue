<?php


class Queue
{
    protected $front;
    protected $back;
    protected $countNode;

    public function __construct()
    {
        $this->front = null;
        $this->back = null;
        $this->countNode = 0;
    }

    public function getCountNode()
    {
        return $this->countNode;
    }

    public function isEmpty()
    {
        return $this->countNode == 0;
    }

    public function enqueue($data)
    {
        $newNode = new Node($data);
        $this->back->next = $newNode;
        $newNode->next = null;
        $this->back = $newNode;
        if ($this->front == null) {
            $this->front = $newNode;
        }
        $this->countNode++;
    }

    public function dequeue()
    {
        if ($this->front != null) {
            $currentNode = $this->front;
            $this->front = $currentNode->next;
            $this->countNode--;
            return $currentNode;
        } else {
            $this->back = null;
            throw new Exception('Queue is empty!');
        }
    }

    public function printByValue()
    {
        $arrayData = [];
        $currentNode = $this->front;
        while ($currentNode != null) {
            array_push($arrayData, $currentNode->getValue());
            $currentNode = $currentNode->next;
        }
        return $arrayData;
    }
}