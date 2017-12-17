<?php
namespace WFKits
use pocketmine\server;
use pocketmine\player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
class Main extends PluginBase{
	public function onEnable(){
		$this->getLogger()->info("plugin enabled!");
	}
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "Wizard":
				$sender->sendMessage("Here's your wand!!");
				return true;
			default:
				return false;
		}
	}
	public function onDisable(){
		$this->getLogger()->info("plugin disabled");
	}
}
