<?php

$on_network=false;

function check_device() {
  exec("ping -c 4 ".getenv('DEVICE_IP')."", $output, $status);

  return $status;
}

function notify() {
  file_get_contents(getenv('NTFY_SERVER_PUBLISH'), false, stream_context_create([
    'http' => [
        'method' => 'POST', // PUT also works
        'header' => "Content-Type: text/plain\r\n" .
          "Tags: tada,partying_face",
        'content' => getenv('MESSAGE'),
    ]
  ]));
}

while(true) {
  if (check_device() == 0 && !$on_network) {
    $on_network = true;
    notify();
  } elseif ($on_network) {
    echo "Device is already on the network - ". date('m/d/Y g:i a')."\n";
  } else {
    $on_network = false;
    echo "Device not on the network  - ". date('m/d/Y g:i a')."\n";
    sleep(60);
  }
}
