<?php


namespace App\Channels\Messages;

class WhatsAppMessage
{
  public $content;

  public function content($content)
  {
    $this->content = $content;

    return $this;
  }
}
