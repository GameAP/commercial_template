<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Game AdminPanel (АдминПанель)
 *
 * 
 *
 * @package		Game AdminPanel
 * @author		Nikita Kuznetsov (ET-NiK)
 * @copyright	Copyright (c) 2013, Nikita Kuznetsov (http://hldm.org)
 * @license		http://gameap.ru/license.html
 * @link		http://gameap.ru
 * @filesource	
 */
 
/**
 * Структура базы данных коммерческого модуля
 *
 * @package		Game AdminPanel
 * @category	Controllers
 * @category	Controllers
 * @author		Nikita Kuznetsov (ET-NiK)
 */

$this->load->dbforge();

/*----------------------------------*/
/* 				content				*/
/*----------------------------------*/
if (!$this->db->table_exists('content')) {

	$fields = array(
			'id' => array(
								'type' => 'INT',
								'constraint' => 16, 
								'auto_increment' => true
			),
			
			'category' => array(
								'type' => 'CHAR',
								'constraint' => 64, 
			),
			
			'page' => array(
								'type' => 'CHAR',
								'constraint' => 64, 
			),
			
			'date' => array(
							'type' => 'INT',
							'constraint' => 32, 
			),
			
			'title' => array(
								'type' => 'CHAR',
								'constraint' => 64, 
			),
			
			'description' => array(
								'type' => 'TINYTEXT',
			),
			
			'tags' => array(
								'type' => 'TINYTEXT',
			),
			
			'preview' => array(
								'type' => 'TEXT',
			),
			
			'text' => array(
								'type' => 'TEXT',
			),
	);

	$this->dbforge->add_field($fields);
	$this->dbforge->add_key('id', true);
	$this->dbforge->create_table('content');
}

/*----------------------------------*/
/* 		content_categories			*/
/*----------------------------------*/
if (!$this->db->table_exists('content_categories')) {
	
	$fields = array(
			'id' => array(
								'type' => 'INT',
								'constraint' => 16, 
								'auto_increment' => true
			),
			
			'title' => array(
								'type' => 'CHAR',
								'constraint' => 64, 
			),
			
			'description' => array(
								'type' => 'TINYTEXT',
			),
			
			'tags' => array(
								'type' => 'TINYTEXT',
			),
			
			'information' => array(
								'type' => 'TEXT',
			),
			
	);
	
	$this->dbforge->add_field($fields);
	$this->dbforge->add_key('id', true);
	$this->dbforge->create_table('content_categories');
	
}

/*----------------------------------*/
/* 		currencies			*/
/*----------------------------------*/
if (!$this->db->table_exists('currencies')) {
	
	$fields = array(
			'id' => array(
							'type' => 'INT',
							'constraint' => 16, 
							'auto_increment' => true
			),

			'country_code' => array(
							'type' => 'CHAR',
							'constraint' => 64, 
			),
			
			'currency_code' => array(
							'type' => 'CHAR',
							'constraint' => 64, 
			),
			
			'currency_num' => array(
							'type' => 'CHAR',
							'constraint' => 32, 
			),
			
			'currency_symbol' => array(
							'type' => 'CHAR',
							'constraint' => 64, 
			),
			
			'currency_base' => array(
							'type' => 'FLOAT',
			),
			
			'autoupdate_currency_base' => array(
							'type' => 'INT',
							'constraint' => 1, 
			),
			
	);
	
	$this->dbforge->add_field($fields);
	$this->dbforge->add_key('id', true);
	$this->dbforge->create_table('currencies');
}


/*----------------------------------*/
/* 		ftp_accounts				*/
/*----------------------------------*/
if (!$this->db->table_exists('ftp_accounts')) {
	
	$fields = array(
			'id' => array(
							'type' => 'INT',
							'constraint' => 16, 
							'auto_increment' => true
			),
			
			// ID выделенного сервера
			'ds_id' => array(
							'type' => 'INT',
							'constraint' => 16, 
			),
			
			// логин клиента
			'user_name' => array(
							'type' => 'TINYTEXT',
			),
			
			// Хост
			'host' => array(
							'type' => 'TINYTEXT',
			),

			// Пароль
			'password' => array(
							'type' => 'TEXT',
			),
			
			// Директория на выделенном сервере
			'dir' => array(
							'type' => 'TEXT',
			),
	);
	
	$this->dbforge->add_field($fields);
	$this->dbforge->add_key('id', true);
	$this->dbforge->create_table('ftp_accounts');
}


/*----------------------------------*/
/* 				invoices			*/
/*----------------------------------*/
if (!$this->db->table_exists('invoices')) {
	
	$fields = array(
			'id' => array(
								'type' => 'INT',
								'constraint' => 16, 
								'auto_increment' => true
			),
			
			'status' => array(
								'type' => 'INT',
								'constraint' => 1,
			),
			
			'date' => array(
							'type' => 'INT',
							'constraint' => 32, 
			),
			
			'date_overdue' => array(
							'type' => 'INT',
							'constraint' => 32, 
			),
			
			'date_paid' => array(
							'type' => 'INT',
							'constraint' => 32, 
			),
			
			'user_id' => array(
								'type' => 'INT',
								'constraint' => 16, 
			),
			
			'amount' => array(
							'type' => 'TINYTEXT',
			),
			
			'type_payment' => array(
							'type' => 'TINYTEXT',
			),
			
			'hash' => array(
							'type' => 'TINYTEXT',
			),
	);
	
	$this->dbforge->add_field($fields);
	$this->dbforge->add_key('id', true);
	$this->dbforge->create_table('invoices');
}

/*----------------------------------*/
/* 				pay_periods			*/
/*----------------------------------*/
if (!$this->db->table_exists('pay_periods')) {
	
	$fields = array(
			'id' => array(
								'type' => 'INT',
								'constraint' => 16, 
								'auto_increment' => true
			),
			
			'period' => array(
								'type' => 'CHAR',
								'constraint' => 64, 
			),
			
			'multiply' => array(
								'type' => 'INT',
								'constraint' => 8, 
			),
			
			'discount' => array(
								'type' => 'INT',
								'constraint' => 8, 
			),
			
			'checkout' => array(
								'type' => 'INT',
								'constraint' => 8, 
			),
			
			'position' => array(
								'type' => 'INT',
								'constraint' => 8, 
			),

	);
	
	$this->dbforge->add_field($fields);
	$this->dbforge->add_key('id', true);
	$this->dbforge->create_table('pay_periods');
}


/*----------------------------------*/
/* 				prices				*/
/*----------------------------------*/
if (!$this->db->table_exists('prices')) {
	
	$fields = array(
			'id' => array(
								'type' => 'INT',
								'constraint' => 16, 
								'auto_increment' => true
			),
			
			'copy_id' => array(
								'type' => 'INT',
								'constraint' => 16, 
			),
			
			'name' => array(
								'type' => 'CHAR',
								'constraint' => 64, 
			),
			
			'tariff_id' => array(
								'type' => 'INT',
								'constraint' => 16, 
			),
			
			'price_per_unit' => array(
								'type' => 'TINYTEXT',
			),
			
			'type_depending' => array(
								'type' => 'CHAR',
								'constraint' => 64, 
			),
			
			'values' => array(
								'type' => 'TINYTEXT',
			),
			
			'neighbors' => array(
								'type' => 'TINYTEXT',
			),
			
			'depending' => array(
								'type' => 'TEXT',
			),
			
	);
	
	$this->dbforge->add_field($fields);
	$this->dbforge->add_key('id', true);
	$this->dbforge->create_table('prices');
}

/*----------------------------------*/
/* 				services			*/
/*----------------------------------*/
if (!$this->db->table_exists('services')) {
	
	$fields = array(
			'id' => array(
								'type' => 'INT',
								'constraint' => 16, 
								'auto_increment' => true
			),
			
			'status' => array(
								'type' => 'CHAR',
								'constraint' => 8, 
			),
			
			'name' => array(
								'type' => 'CHAR',
								'constraint' => 64, 
			),
			
			'user_id' => array(
								'type' => 'INT',
								'constraint' => 16, 
			),
			
			'ds_id' => array(
								'type' => 'INT',
								'constraint' => 16, 
			),
			
			'server_id' => array(
								'type' => 'INT',
								'constraint' => 16, 
			),
			
			'game_id' => array(
								'type' => 'CHAR',
								'constraint' => 16, 
			),
			
			'mod_id' => array(
								'type' => 'INT',
								'constraint' => 16, 
			),
			
			'invoice_id' => array(
								'type' => 'INT',
								'constraint' => 16, 
			),
			
			'price' => array(
								'type' => 'INT',
								'constraint' => 16, 
			),
			
			'pay_period' => array(
								'type' => 'CHAR',
								'constraint' => 64, 
			),
			
			'checkout' => array(
							'type' => 'INT',
							'constraint' => 16, 
			),
			
			'date_create' => array(
							'type' => 'INT',
							'constraint' => 32, 
			),
			
			'date_overdue' => array(
							'type' => 'INT',
							'constraint' => 32, 
			),
			
			'prices' => array(
								'type' => 'TEXT',
			),
			
	);
	
	$this->dbforge->add_field($fields);
	$this->dbforge->add_key('id', true);
	$this->dbforge->create_table('services');
}

/*----------------------------------*/
/* 				tariffs				*/
/*----------------------------------*/
if (!$this->db->table_exists('tariffs')) {
	
	$fields = array(
			'id' => array(
								'type' => 'INT',
								'constraint' => 16, 
								'auto_increment' => true
			),
			
			// Тариф активен
			'active' => array(
								'type' => 'INT',
								'constraint' => 1, 
			),
			
			// Код игры
			'game_code' => array(
								'type' => 'CHAR',
								'constraint' => 32, 
			),

			// Базовая цена
			'base_price' => array(
								'type' => 'CHAR',
								'constraint' => 32, 
			),
			
			// Разрешенные моды
			'allow_mods' => array(
								'type' => 'TEXT',
			),
			
			// Разрешенные выделенные серверы
			'allow_ds' => array(
								'type' => 'TEXT',
			),
			
			// Команда старта Linux
			'command_start_linux' => array(
								'type' => 'TEXT',
			),
			
			// Команда запуска Windows
			'command_start_windows' => array(
								'type' => 'TEXT',
			),
			
			// Директории и файлы, которым будут выданы права на запись после установки игрового сервера
			'commands_after_install' => array(
								'type' => 'TEXT',
			),
			
			// Информация
			'info' => array(
								'type' => 'TEXT',
			),
	);
	
	$this->dbforge->add_field($fields);
	$this->dbforge->add_key('id', true);
	$this->dbforge->create_table('tariffs');
}

/*----------------------------------*/
/* 			tickets					*/
/*----------------------------------*/
if (!$this->db->table_exists('tickets')) {
	
	$fields = array(
			'id' => array(
								'type' => 'INT',
								'constraint' => 16, 
								'auto_increment' => true
			),
			
			'parent' => array(
								'type' => 'INT',
								'constraint' => 16, 
			),
			
			'admin_answer' => array(
								'type' => 'INT',
								'constraint' => 1, 
			),
			
			'date' => array(
								'type' => 'INT',
								'constraint' => 32, 
			),
			
			'user_id' => array(
								'type' => 'INT',
								'constraint' => 16, 
			),
			
			'user_name' => array(
								'type' => 'TINYTEXT',
			),
			
			'server_id' => array(
								'type' => 'INT',
								'constraint' => 16,
			),
			
			'title' => array(
								'type' => 'TINYTEXT',
								'default' => '',
			),
			
			'message' => array(
								'type' => 'TEXT',
								'default' => '',
			),
			
	);
	
	$this->dbforge->add_field($fields);
	$this->dbforge->add_key('id', true);
	$this->dbforge->create_table('tickets');
}

/*----------------------------------*/
/* 			transactions			*/
/*----------------------------------*/
if (!$this->db->table_exists('transactions')) {
	
	$fields = array(
			'id' => array(
								'type' => 'INT',
								'constraint' => 16, 
								'auto_increment' => true
			),
			
			'invoice_id' => array(
								'type' => 'INT',
								'constraint' => 16, 
			),
			
			'date' => array(
								'type' => 'INT',
								'constraint' => 32, 
			),
			
			'user_id' => array(
								'type' => 'INT',
								'constraint' => 16, 
			),
			
			'amount' => array(
								'type' => 'INT',
								'constraint' => 16, 
			),
			
			'description' => array(
							'type' => 'TINYTEXT',
			),
			
			'user_saldo' => array(
								'type' => 'INT',
								'constraint' => 32, 
			),
	);
	
	$this->dbforge->add_field($fields);
	$this->dbforge->add_key('id', true);
	$this->dbforge->create_table('transactions');
}


/*----------------------------------*/
/* 			transfer_systems		*/
/*----------------------------------*/
if (!$this->db->table_exists('transfer_systems')) {
	
	$fields = array(
			/* Идентификатор платежной системы (robokassa, yandexmoney, webmoney и тп.)*/
			'id' => array(
								'type' => 'CHAR',
								'constraint' => 64, 
			),
			
			/* Имя платежной системы */
			'name' => array(
								'type' => 'TINYTEXT',
			),
			
			/* Данные платежной системы. Json */
			'data' => array(
								'type' => 'TEXT',
			),
			
			/* URL ссылка на логотип платежной системы */
			'logotype' => array(
								'type' => 'TINYTEXT',
			),
			
			/* Описание платежной системы */
			'description' => array(
								'type' => 'TEXT',
			),
	);
	
	$this->dbforge->add_field($fields);
	$this->dbforge->add_key('id', true);
	$this->dbforge->create_table('transfer_systems');
}
