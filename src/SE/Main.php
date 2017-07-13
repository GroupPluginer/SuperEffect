<?php

namespace SE;

use pocketmine\plugin\PluginBase;
use pocketmine\entity\Effect;
use pocketmine\text\TextFormat as c;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

 public function onEnable(){
  $this->getServer()->getLogger()->info(c::GREEN."SuperEffect is on");
   $this->getLogger()->info(c::YELLOW."by @groupPluginer");
    }
   public function onDisable(){
    $this->getServer()->getLogger()->info(c::RED."SuperEffect has been disable");
     }
     public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
       switch ($cmd->getName()){
