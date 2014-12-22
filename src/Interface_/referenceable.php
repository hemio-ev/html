<?php
namespace hemio\html;
interface referenceable {

	public function strGetName();

	public function strGetTitle();

	public function objGetLastLink();

	public function setLastLink($a);
}
