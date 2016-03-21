<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: table_forum_postposition.php 30080 2012-05-09 08:19:20Z liulanbo $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class table_forum_postposition extends discuz_table
{
	private static $_tableid_tablename = array();

	public function __construct() {

		$this->_table = 'forum_postposition';
		$this->_pk    = 'pid';

		parent::__construct();
	}


	public function insert($tid, $pid) {
		$postpos = array();
		$postpos['tid'] = $tid;
		$postpos['pid'] = $pid;
		return DB::insert($this->_table, $postpos, true);
	}

}
?>
