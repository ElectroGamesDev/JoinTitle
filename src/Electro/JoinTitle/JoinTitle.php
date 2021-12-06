<?php

namespace Electro\JoinTitle;

use pocketmine\event\player\PlayerLoginEvent; 
use pocketmine\plugin\PluginBase; 
use pocketmine\player\Player; 
use pocketmine\event\Listener;

class JoinTitle extends PluginBase implements Listener{
  
    public string popupMsg;
    public string titleMsg;

    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->titleMsg = $this->getServer()->getConfig()->get("TitleMessage");
        $thid->popupMsg = $this->getServer()->getConfig()->get("ActionMessage"):
    }
  
    public function onLogin(PlayerLoginEvent $event) 
    { 
        $player = $event->getPlayer();
      
        $player->sendTitle($this->titleMsg);
        $player->sendPopup($this->popupMsg);
    }
  
}
