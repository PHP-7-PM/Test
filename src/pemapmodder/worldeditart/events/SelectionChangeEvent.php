<?php

namespace pemapmodder\worldeditart\events;

use pemapmodder\worldeditart\WorldEditArt;
use pemapmodder\worldeditart\utils\spaces\Space;
use pocketmine\Player;

class SelectionChangeEvent extends CancellableWorldEditArtEvent{
	public static $handlerList = null;
	/** @var Space|null */
	private $selection;
	/** @var Player */
	private $player;
	/**
	 * @param WorldEditArt $main
	 * @param Player $player
	 * @param Space|null $space
	 */
	public function __construct(WorldEditArt $main, Player $player, $space){
		$this->selection = clone $space;
		$this->player = $player;
	}
	/**
	 * @return Space|null
	 */
	public function getSelection(){
		return $this->selection;
	}
	/**
	 * @param Space|null $space
	 */
	public function setSelection($space){
		$this->selection = $space;
	}
	/**
	 * @return Player
	 */
	public function getPlayer(){
		return $this->player;
	}
}
