<?php
namespace ifteam\Farms;

use pocketmine\scheduler\Task;

class FarmsTask extends Task {
	public function __construct(Farms $plugin){
		$this->plugin = $plugin;
		return;
	}
    public function getOwner() : Farms{
        return $this->plugin;
    }
    public function onRun(int $currentTick): void{ 
		$this->getOwner()->tick();
    }
}