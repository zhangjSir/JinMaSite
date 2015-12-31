<?php
defined('IN_PHPCMS') or exit('Access Denied');
defined('INSTALL') or exit('Access Denied');
$parentid = $menu_db->insert(array('name'=>'guestbook', 'parentid'=>29, 'm'=>'guestbook', 'c'=>'guestbook', 'a'=>'init', 'data'=>'', 'listorder'=>0, 'display'=>'1'), true);
$menu_db->insert(array('name'=>'send_one', 'parentid'=>$parentid, 'm'=>'guestbook', 'c'=>'guestbook', 'a'=>'send_one', 'data'=>'', 'listorder'=>0, 'display'=>'1'));
$menu_db->insert(array('name'=>'delete_message', 'parentid'=>$parentid, 'm'=>'guestbook', 'c'=>'guestbook', 'a'=>'delete', 'data'=>'', 'listorder'=>0, 'display'=>'0'));
$menu_db->insert(array('name'=>'message_send', 'parentid'=>$parentid, 'm'=>'guestbook', 'c'=>'guestbook', 'a'=>'guestbook_send', 'data'=>'', 'listorder'=>0, 'display'=>'0'));
$menu_db->insert(array('name'=>'message_group_manage', 'parentid'=>$parentid, 'm'=>'guestbook', 'c'=>'guestbook', 'a'=>'guestbook_group_manage', 'data'=>'', 'listorder'=>0, 'display'=>'1'));

$language = array('guestbook'=>'留言', 'send_one'=>'留言', 'delete_message'=>'删除留言', 'guestbook_send'=>'群发短消息', 'guestbook_group_manage'=>'群发短消息管理');
?>