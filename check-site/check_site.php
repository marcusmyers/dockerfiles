<?php

$current_hash=check_hash();

function check_hash() {
  $h = fopen(getenv('WEBSITE_CHECK'), 'r');
  $text = "";
  while (($buffer = fgets($h, 4096)) !== false) {
       $text .= $buffer;
  }
  fclose($h);
  return md5($text);
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

date_default_timezone_set(getenv('TIMEZONE'));

while($current_hash==check_hash()) {
  echo "Check hash is: ". check_hash() . " - ". date('m/d/Y g:i a')."\n";
  sleep(60);
}

notify();
