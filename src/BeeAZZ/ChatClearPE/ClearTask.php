<?php

namespace BeeAZZ\ChatClearPE;

use BeeAZZ\ChatClearPE\Main;
use pocketmine\scheduler\Task;

class ClearTask extends Task{
  
 private $plugin;
 
 public function __construct(Main $plugin){
  $this->plugin = $plugin;
 }
 public function onRun(): void{
  $this->plugin->onClear();
 }