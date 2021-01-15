<?php

namespace callum\staffteam;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class PixelgamesServerteam extends PluginBase {
    
    public function onLoad() {
        $this->getLogger()->info("Loading...");
    }
    
    public function onEnable() {
        $this->getLogger()->info("Activated");
    }
    
    public function onDisable() {
        $this->getLogger()->info("Deactivated");
    }
    
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        if($command->getName() === "staffteam"){
            if (!isset($args[0])) {
                $sender->sendMessage("§c[staffteam] usage: /staffteam <list|info|help>");
                return true;
            }
            if($args[0] == "list") {
                $sender->sendMessage("§e-------§1Das Serverteam§e-------");
                $sender->sendMessage("§aOwner: callum");
                $sender->sendMessage("§4Admin: Staff Name");
                $sender->sendMessage("§dDeveloper: Diverse");
                $sender->sendMessage("§6Moderator: Staff Name");
                $sender->sendMessage("§6Chief§c-§bBuilder: Staff Name");
                $sender->sendMessage("§bBuilder: Staff Name");
                $sender->sendMessage("§e----------------------------");
                return true;
                
                } elseif($args[0] == "info") {
                $sender->sendMessage("§e-------------------------------------");
                $sender->sendMessage("§ePlugin Info");
                $sender->sendMessage("§bName: StaffTeam");
                $sender->sendMessage("§bVersion: 1.0.0");
                $sender->sendMessage("§bFor PocketMine-API: 4.0.0");
                $sender->sendMessage("§6Permissions: staffteam");
                $sender->sendMessage("§eMade by callum");
                $sender->sendMessage("§e-------------------------------------");
                return true;
                
                } elseif($args[0] == "help") {
                $sender->sendMessage("§9---§aStaffTeam§9---");
                $sender->sendMessage("§a/staffteam list §b-> List the staff team");
                $sender->sendMessage("§6/staffteam info §b-> view Details about the Plugin");
                $sender->sendMessage("§6/staffteam help §b-> View commands for the plugin");
                return true;
                }
            }
        }
    }
