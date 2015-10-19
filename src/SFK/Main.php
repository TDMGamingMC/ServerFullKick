<?php

namespace SFK;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;	
class Main extends PluginBase implements Listener{

public function onLoad(){
@mkdir($this->getDataFolder(), 0777, true);
if(!file_exists($this->getDataFolder())){
			$this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
			$this->config->set("Full-Message", "Server is full try again later!");
			}
$this->getServer()->getLogger()->info("[ServerFullKick]Plugin Loading!");
}

public function onEnable(){
$this->getServer()->getLogger()->info("[ServerFullKick]Plugin Loaded!");
}

public function onPreLogin(PlayerPreLoginEvent $ev){
$p = $ev->getPlayer();
$cfg = $this->config->getAll();
 if(count($this->getServer()->getOnlinePlayers()) >= $this->getServer()->getMaxPlayers()){
 $p->kick($cfg["Full-Message");
 }
 }
 }
