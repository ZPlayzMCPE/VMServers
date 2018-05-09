<?php
namespace VMBanTransfer;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\player\PlayerKickEvent;
use pocketmine\event\player\PlayerTransferEvent;

class Main extends PluginBase implements Listener {
    public function onLoad() {
            $this->getLogger()->info("Plugin is loading.. Please be patient.");
}

public function onEnable() {
    $this->getLogger()->info("Plugin has been enabled succesfully. looking for errors. If there's no errors, then you're all good.");
}

public function onBan(PlayerKickEvent $event) {
    $player = $event->getPlayer();
    $senderName = $sender->getName();
    $reason = $event->getPlayer()->getReason();
    
    $event->getPlayer()->setQuitMessage("You have been banned from this server! \nBanned by $senderName Reason: $reason");
}
public function onLogin(PlayerPreLogin $event) {
    $player = $event->getPlayer();
   if ($this->isBanned($player));
$event->getPlayer()->setAddress("voidhackerpe.ml");
$event->getPlayer()->setPort("25620");
    }
}