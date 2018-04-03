<?php
/**
 *
 * PM monitor. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2016 david63
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'AUTHOR_IP'					=> 'Adresse IP de l’auteur',
	'CONFIRM_DELETE'			=> 'Confirmer la suppression',
	'DELETE_PMS'				=> 'Supprimer les MP',
	'IS_GROUP'					=> 'MP à un groupe',
	'MSG_COUNT'					=> 'Nombre de message(s)',
	'NO_PM_DATA'				=> 'Il n’y a aucune données à afficher concernant les MP.',
	'NO_PM_SELECTED'			=> 'Aucun MP n’a été sélectionné',

	'PM_BOX'					=> 'Boite de MP',
	'PM_DELETED'			   	=> 'Supprimé',
	'PM_FORWARDED'				=> 'Transféré',
	'PM_HOLDBOX'				=> 'Sauvegardé',
	'PM_INBOX'					=> 'Boite de réception',
	'PM_MARKED'					=> 'Marqué comme important',
	'PM_MONITOR_READ'			=> 'Liste des message(s) privé(s)',
	'PM_MONITOR_READ_EXPLAIN'	=> 'Depuis cette page il est possible de consulter la liste de tous les messages privés du forum.',
	'PM_NEW'					=> 'Nouveau',
	'PM_NOBOX'					=> 'Aucune boite',
	'PM_OUTBOX'					=> 'Boite d’envoi',
	'PM_REPLIED'				=> 'Réponse à un message',
	'PM_SAVED'					=> 'Sauvegardé',
	'PM_SENTBOX'				=> 'Messages envoyés',
	'PM_UNREAD'					=> 'Non lus',

	'SORT_BCC'					=> 'Cci',
	'SORT_FROM'					=> 'De',
	'SORT_PM_BOX'				=> 'Boite de MP',
	'SORT_TO'					=> 'À',

	'VERSION'					=> 'Version',
));
