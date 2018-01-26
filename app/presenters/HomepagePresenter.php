<?php

namespace App\Presenters;

use Nette;
use Nette\Http\Session;


class HomepagePresenter extends Nette\Application\UI\Presenter
{

	private $session;
	private $sessionSection;
	public $counterMessage;

	public function __construct(Session $session)
	{
		$this->session = $session;
		$this->sessionSection = $this->session->getSection('counter');
		if (!is_int($this->sessionSection->counter)) {
			$this->sessionSection->counter = 0;
		}
	}

	public function renderDefault() {
		$this->counterMessageUpdate();
		$this->template->counterMessage = $this->counterMessage;
		$this->template->clickCounter = $this->sessionSection->counter;
	}


	public function handleClickMe() {
		$this->sessionSection->counter++;
		$this->counterMessageUpdate();
		$this->redrawControl('click-counter');
	}

	private function counterMessageUpdate() {
		if ($this->sessionSection->counter < 5) {
			$this->counterMessage = "";
		}
		else if ($this->sessionSection->counter < 20) {
			$this->counterMessage = "It looks nice.";
		}
		else if ($this->sessionSection->counter < 40) {
			$this->counterMessage = "Soooo realtime...";
		}
		else if ($this->sessionSection->counter < 70) {
			$this->counterMessage = "It's still working!";
		}
		else if ($this->sessionSection->counter < 100) {
			$this->counterMessage = "No more oldschool webapps.";
		}
		else if ($this->sessionSection->counter < 120) {
			$this->counterMessage = "This is the FUTURE!!!";
		}
		else if ($this->sessionSection->counter < 150) {
			$this->counterMessage = "AAAARRWWWWW!!!";
		}
		else if ($this->sessionSection->counter < 160) {
			$this->counterMessage = "MOOORE!!!";
		}
		else if ($this->sessionSection->counter < 165) {
			$this->counterMessage = "MOOOORE!!!";
		}
		else if ($this->sessionSection->counter < 170) {
			$this->counterMessage = "MOOOOOORE!!!";
		}
		else if ($this->sessionSection->counter < 175) {
			$this->counterMessage = "MOOOOOOOOORE!!!";
		}
		else if ($this->sessionSection->counter < 180) {
			$this->counterMessage = "MOOOOOOOOOOOOOOORE!!!";
		}
		else if ($this->sessionSection->counter < 200) {
			$this->counterMessage = "YESSSSSSSS!!!!!";
		}
		else if ($this->sessionSection->counter < 220) {
			$this->counterMessage = "PLEASE MOOOOOORE!!!!";
		}
		else if ($this->sessionSection->counter < 250) {
			$this->counterMessage = "Thank you David Grudl.";
		}
		else if ($this->sessionSection->counter < 260) {
			$this->counterMessage = "Thank you David Grudl....";
		}
		else if ($this->sessionSection->counter < 300) {
			$this->counterMessage = "I want to marry you!";
		}
		else if ($this->sessionSection->counter < 350) {
			$this->counterMessage = "And have many children with you.";
		}
		else if ($this->sessionSection->counter > 0) {
			$this->counterMessage = "Let's learn it! Be the best web developer of the world!!!";
		}
	}
}
