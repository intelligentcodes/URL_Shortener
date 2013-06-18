<?php

/*
 * A simple ZeroMQ client for decoding a hashed URL
 */

$context = new ZMQContext();

//  Socket to talk to server
$requester = new ZMQSocket($context, ZMQ::SOCKET_REQ);
$requester->connect("tcp://localhost:5555");

$requester->send("13");
$string = $requester->recv();
printf ("Received reply %d [%s]%s", $request_nbr, $string, PHP_EOL);

?>
