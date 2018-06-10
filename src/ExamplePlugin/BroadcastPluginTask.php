<?php

namespace ExamplePlugin;

use pocketmine\scheduler\PluginTask;

class BroadcastPluginTask extends PluginTask{

	public function onRun(int $currentTick) : void{
		$this->getOwner()->getServer()->broadcastMessage("[ExamplePlugin] I've run on tick " . $currentTick);
	}
}
