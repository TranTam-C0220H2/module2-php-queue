<?php
include 'Node.php';
include 'Queue.php';
//Tạo Queue
$queue = new Queue();
try {
//Thêm 3 phần tử vào Queue
    $queue->enqueue(3);
    $queue->enqueue(4);
    $queue->enqueue(5);
    var_dump($queue->print());
//Lấy ra 2 phần tử từ Queue
    $queue->dequeue();
    $queue->dequeue();
    var_dump($queue->print());
//Kiểm tra xem Queue có rỗng hay không
    if ($queue->isEmpty()) {
        echo 'Queue is empty!' . '<br>';
    } else {
        echo "Queue isn't empty." . '<br>';
    }
//Thêm 2 phần tử vào Queue
    $queue->enqueue(8);
    $queue->enqueue(9);
    var_dump($queue->print());
//Lấy ra 3 phần tử từ Queue
    $queue->dequeue();
    $queue->dequeue();
    echo $queue->dequeue()->getValue();
    var_dump($queue->print());
    echo $queue->getCountNode();
//Kiểm ra xem Queue có rỗng hay không
    if ($queue->isEmpty()) {
        echo 'Queue is empty!' . '<br>';
    } else {
        echo "Queue isn't empty." . '<br>';
    }
} catch (Exception $exception) {
    echo $exception->getMessage();
}
var_dump($queue->print());