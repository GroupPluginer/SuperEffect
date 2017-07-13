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
        case Super:
         $Effect = Effect::getEffect(1);
         $effect->setAmplifier(3);
         $effect->setVisable(true);
         $effect->setDuration(100000000);
         $sender->addEffect($effect);
          break;
        case Super2:
         $Effect = Effect::getEffect(5);
         $effect->setAmplifier(2);
         $effect->setVisable(true);
         $effect->setDuration(1000000000);
         $sender->addEffect($effect);
          break;
        case Super3:
         $Effect = Effect::getEffect(10);
         $effect->setAmplifier(2);
         $effect->setVisable(true);
         $effect->setDuratiom(100000000);
         $sender->addEffect($effect);
      
       }
   }
}
