<?php
namespace WFKits
use pocketmine\player\PlayerJoinEvent;
use pocketmine\player\PlayerQuitEvent;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\event\player\PlayerCommandPreprocessEvent;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
class Main extends PluginBase implements Listener{
	public function onLoad(){
            	$this->getLogger()->info("Plugin Loading");
	}
	public function onEnable(){
		$this->getLogger()->info("plugin enabled!");
	}
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "Wizard":
				if(!$sender instanceof Player){
				$sender->sendMessage("This command only works for players! Please perform this command IN GAME!");
       			}else{
 				$sender->sendmessage("Here's your wand, ".$sender->getName()."!");
 				$sender->getInventory()->addItem(Item::get(280,0,1));
	}
	public function onDisable(){
		$this->getLogger()->info("plugin disabled");
	}
	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		$name = $player->getName();
		$this->getServer()->broadcastMessage(C::GREEN."Ducky Scammed the server! He's a dick!");	
	}
}
