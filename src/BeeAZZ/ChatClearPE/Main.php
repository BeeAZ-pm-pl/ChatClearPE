<?php

namespace BeeAZZ\ChatClearPE;

use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use BeeAZZ\ChatClearPE\ClearTask;
use pocketmine\command\{Command, CommandSender};

class Main extends PluginBase{
  
 public function onEnable(): void{
   $this->saveDefaultConfig();
   if($this->getConfig()->get("AutoClear") == true){
   $this->getScheduler()->scheduleRepeatingTask(new ClearTask($this), 20*$this->getConfig()->get("TimeClear"));
 }
 }
 
 public function onClear(){
  $this->getServer()->broadcastmessage("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
  $this->getServer()->broadcastmessage($this->getConfig()->get("ClearChat-Msg"));
 }
 public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{
   switch($cmd->getName()){
     case "clearchat":
      if(!$sender instanceof Player){
      $sender->sendMessage("Please use command in game");
      return true;
      }
      if($sender->hasPermission("chatclearpe.command")){
       $this->onClear();
     break;
   }
   return true;
}
return true;
}
}
