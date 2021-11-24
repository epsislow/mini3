<?php

namespace Mini\Core;

class Controller
{
    /**
     * @var null Database Connection
     */
    protected $request = [];

	/**
	 * @return self
	 */
	public function setRequest($request) {
		$this->request = $request;
		
		return $this;
	}

	/**
	 * @return array
	 */	
	public function getRequest() {
		return $this->request;
	}
}
