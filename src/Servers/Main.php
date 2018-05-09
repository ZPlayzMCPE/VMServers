<?php

namespace Servers;

use pocketmine\command\{Command, CommandSender};
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase {
    
    public function onLoad(): void{
    $this->getServer()->getLogger()->info("Plugin loading.. Please wait whilst it loads onto the server.");
    }
    
    public function onEnable(): void{
        $this->getServer()->getLogger()->info("Plugin has been enabled succesfully.");
    }
    
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
         if (strtolower($command->getName()) === "servers") {
                if (empty($args)) {
                    $sender->sendMessage("§aHere are a list of servers we have in stored for you!");
                    $sender->sendMessage("§d§lFactions §r§7- §aUse §5/server factions §ato teleport to the Factions server.");
                    $sender->sendMessage("§d§lPrisons §r§7- §aUse §5/server prisons §ato teleport to the Prisons server.");
                    $sender->sendMessage("§d§lKitPvP §r§7- §aUse §5/server kitpvp §ato teleport to the KitPvP server.");
                    $sender->sendMessage("§d§lHCF §r§7- §aUse §5/server hcf §ato teleport to the HCF server.");
                    return true;
                }
         }
         if (strtolower($command->getName()) === "server") {
             if(!isset($args[0])) {
                 $sender->sendMessage("§aPlease use: §b/server <§3server_name> §ato teleport to a server, and use §b/servers §ato get a list of servers.");
                 return true;
             }
             if(strtolower($args[0]) == "factions") {
                 $sender->getPlayer()->transfer("voidfactionspe.ml", "19132");
             }
             if(strtolower($args[0]) == "prisons") {
                 $sender->getPlayer()->transfer("voidprisonspe.ml", "25647");
             }
             if(strtolower($args[0]) == "kitpvp") {
                 $sender->getPlayer()->transfer("voidkitpvppe.ml", "25625");
             }
             if(strtolower($args[0]) == "hcf") {
                 $sender->getPlayer()->transfer("voidhcfpe.ml", "25630");
             }
         }
         if (strtolower($command->getName()) === "factions") {
             $sender->getPlayer()->transfer("voidfactionspe.ml", "19132");
         }
         if (strtolower($command->getName()) === "prisons") {
             $sender->getPlayer()->transfer("voidprisonspe.ml", "25647");
         }
         if (strtolower($command->getName()) === "kitpvp") {
             $sender->getPlayer()->transfer("voidkitpvppe.ml", "25625");
         }
         if (strtolower($command->getName()) === "hcf") {
             $sender->getPlayer()->transfer("voidhcfpe.ml", "25630");
        }
    return true;
    }
}
