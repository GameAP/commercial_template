<?php

// Base
$lang['amount']											= 'Сумма';
$lang['client']											= 'Клиент';
$lang['price']											= 'Цена';
$lang['service']										= 'Услуга';
$lang['status']											= 'Статус';
$lang['date_create']									= 'Дата создания';
$lang['date_overdue']									= 'Истекает';
$lang['coming']											= 'Приход';
$lang['outgo']											= 'Расход';
$lang['paid']											= 'Оплачен';
$lang['no_paid']										= 'Не оплачен';

$lang['comm_service_status_active']						= 'Активен';
$lang['comm_service_status_prolong']					= 'Необходимо продлить';
$lang['comm_service_status_wait_act']					= 'Ожидает активации';
$lang['comm_service_status_wait_pay']					= 'Ожидает оплаты';
$lang['comm_service_status_overdue']					= 'Просрочен';
$lang['comm_service_status_freeze']						= 'Заморожен';
$lang['comm_service_status_delete']						= 'Удален';

$lang['confirm_action']									= 'Подтверждение операции';
$lang['uncorrect_action']								= 'Некорректное действие';

$lang['change_balance']									= 'Изменение баланса';
$lang['partner_programm']								= 'Партнерская программа';

// Mail
$lang['mail_service_activated_subj']					= 'Сервер активирован';
$lang['mail_service_activated']							= "Уважаемый(ая) {user_name}! \nЗаказанная Вами ранее услуга \"%s\" была успешно активирована.";

$lang['mail_new_invoice_subj']							= 'Выставлен счет на оплату';
$lang['mail_new_invoice']								= "Уважаемый(ая) {user_name}! \nНа ваше имя был создан счет на оплату услуги %s \nСчет #%s\nСумма: ";

$lang['mail_invoice_avtopaid_subj']						= 'Счет оплачен';
$lang['mail_invoice_avtopaid']							= "Уважаемый(ая) {user_name}! \nСчет #%s был оплачен автоматически. Сумма %s списана с баланса на вашем аккаунте.";

$lang['mail_service_freezed_subj']						= 'Услуга заморожена';
$lang['mail_service_freezed']							= "Уважаемый(ая) {user_name}! \nУслуга \"%s\" была заморожена. Для активации услугу необходимо продлить.";

$lang['mail_ticket_user_answer_subject']				= 'Новый вопрос';
$lang['mail_ticket_user_answer']						= "Уважаемый Администратор!\n Появился новый вопрос от пользователя %s";

$lang['mail_ticket_adm_answer_subject']					= 'Ответ администратора';
$lang['mail_ticket_adm_answer']							= "Уважаемый(ая) {user_name}!\n Получен ответ на ваш вопрос \"%s\"";

$lang['client_new_service_admin_notification']			= "Уважаемый Администратор!\n Появился новый заказ \"%s\" на сумму %s \nКлиент: ";
$lang['client_go_to_pay']								= 'Перейти к оплате';

$lang['slot_fraud_detected_subj']						= 'Обнаружено несовпадение слотов';
$lang['slot_fraud_detected']							= "Уважаемый Администратор!\n Обнаружено несовпадение купленного количество слотов с фактическим.\n Клиент: %s, Сервер: %s";

$lang['fps_fraud_detected_subj']						= 'Обнаружено несовпадение fps';
$lang['fps_fraud_detected']								= "Уважаемый Администратор!\n Обнаружено несовпадение купленного значения fps с фактическим.\n Клиент: %s, Сервер: %s";

$lang['mail_invoice_paid_subj']							= "Счет оплачен";
$lang['mail_invoice_paid']								= "Уважаемый(ая) {user_name}! \nСчет #%s на сумму %s был успешно оплачен.";


// Services and invoices
$lang['invoice_not_found']								= 'Счет не найден';
$lang['invoice_empty_id']								= 'Не указан номер счета';
$lang['invoice_saved']									= 'Счет сохранен';
$lang['invoice_already_paid']							= 'Счет уже оплачен';
$lang['invoice_paid']									= 'Счет успешно оплачен';
$lang['invoice_not_paid']								= 'Счет не оплачен';
$lang['invoice_paid_mail']								= "Уважаемый(ая) {user_name}! \nСчет #%s на сумму %s был успешно оплачен.";
$lang['invoice_not_pay_from_balance']					= 'Этот счет нельзя оплатить с баланса аккаунта';
$lang['invoice_delete_confirm']							= 'Вы уверены что хотите удалить счет?';
$lang['invoice_deleted']								= 'Счет #%s удален';
$lang['service_empty_service_id']						= 'Не указан ID услуги';
$lang['service_created']								= 'Услуга успешно создана';
$lang['service_create_error']							= 'Ошибка создания услуги';
$lang['invoice_created']								= 'Счет выписан';
$lang['invoice_create_error']							= 'Ошибка выписки счета';
$lang['service_not_found']								= 'Услуга не найдена';
$lang['service_saved']									= 'Услуга сохранена';
$lang['service_deleted']								= 'Услуга удалена';
$lang['service_delete_confirm']							= 'Удалить услугу?';

// Adm clients
$lang['comm_adm_clients_title_index']					= 'GameAP :: Управление клиентами';
$lang['comm_adm_clients_heading_index']					= 'Управление клиентами';

$lang['comm_adm_clients_pay_limit']						= 'Срок оплаты (дней)';
$lang['comm_adm_select_service']						= '-Выберите услугу-';
$lang['comm_adm_uncorrect_status']						= 'Некорректный статус';
$lang['adm_clients_uncorrect_status']					= 'Некорректный статус';
$lang['adm_clients_balance_changed']					= 'Баланс пользователя изменен';
$lang['adm_clients_balance_changed']					= 'Баланс пользователя изменен';
$lang['adm_clients_confirm_change_balance']				= "Подтвердите %s\n Для этого перейдите по ссылке: ";
$lang['adm_clients_action_add_money']					= ' зачисление %s на счет пользователя ';
$lang['adm_clients_action_rob_money']					= ' изъятие %s со счета пользователя ';
$lang['adm_clients_message_send']						= 'На %s отправлена информация для подтверждения операции';
$lang['adm_clients_message_send_error']					= 'Ошибка отправки письма. Проверьте настройки php_mail()';

$lang['adm_clients_tickets_admin']						= 'Клиент может осуществлять техническую поддержку';
$lang['adm_clients_form_error']							= 'Данные клиента указаны неверно';
$lang['adm_clients_saved']								= 'Данные клиента успешно изменены';

// FTP accounts
$lang['ftp_title_index']								= 'GameAP :: FTP аккаунты';
$lang['ftp_heading_index']								= 'FTP аккаунты';

$lang['ftp_account_not_found']							= 'Аккаунта не существует';
$lang['ftp_account_delete_confirm']						= 'Удалить аккаунт?';
$lang['ftp_account_deleted']							= 'Аккаунт удален';
$lang['ftp_account_empty_id']							= 'Не указан ID аккаунта';
$lang['ftp_account_not_found']							= 'Аккаунт не найден';
$lang['ftp_user_not_found']								= 'Пользователя %s не существует';
$lang['ftp_account_saved']								= 'Аккаунт сохранен';
$lang['ftp_account_added']								= 'Аккаунт добавлен';
$lang['ftp_password_changed']							= 'Пароль сохранен';

$lang['ftp_password_change_denied']						= 'Смена пароля для этого аккаунта недоступна. Обратитесь к администратору.';

// Materials
$lang['materials_title_index']							= 'GameAP :: Управление контентом';
$lang['materials_heading_index']						= 'Управление контентом';

$lang['materials_category']								= 'Категория';
$lang['materials_preview']								= 'Превью';
$lang['materials_text']									= 'Текст';
$lang['materials_entry_added']							= 'Запись добавлена';
$lang['materials_entry_saved']							= 'Запись сохранена';
$lang['materials_empty_entry_id']						= 'Не указан id записи';
$lang['materials_entry_not_found']						= 'Запись не найдена';
$lang['materials_delete_entry_confirm']					= 'Удалить запись?';
$lang['materials_entry_deleted']						= 'Запись удалена';
$lang['materials_category_added']						= 'Категория добавлена';
$lang['materials_category_saved']						= 'Категория сохранена';
$lang['materials_empty_category_id']					= 'Не указан id категории';
$lang['materials_category_not_found']					= 'Категория не найдена';
$lang['materials_delete_category_confirm']				= 'Удалить категорию?';
$lang['materials_category_deleted']						= 'Категрия удалена';

// ADM Prices
$lang['prices_title_index']								= 'GameAP :: Цены и тарифы';
$lang['prices_heading_index']							= 'Цены и тарифы';

$lang['prices_tariff_id_empty']							= 'Не указан тариф';
$lang['prices_tariff_not_found']						= 'Тариф не найден';
$lang['prices_base_price']								= 'Базовая цена';
$lang['prices_form_unavailable']						= 'Форма заполнена неверно';
$lang['prices_tariff_created']							= 'Тариф успешно добавлен';
$lang['prices_tariff_saved']							= 'Тариф сохранен';
$lang['prices_tariff_delete_confirm']					= 'Вы уверены, что хотите удалить тариф?';
$lang['prices_tariff_deleted']							= 'Тариф удален';
$lang['prices_price_per_unit']							= 'Цена за единицу';
$lang['prices_type_depending']							= 'Тип зависимости';
$lang['prices_price_added']								= 'Цена успешно добавлена';
$lang['prices_commands_after_install']					= 'Команды после установки';
$lang['prices_select_modifications']					= 'Должна быть выбрана хотя бы одна модификация';
$lang['prices_price_id_empty']							= 'Не указан ID цены';
$lang['prices_price_not_found']							= 'Параметры цены не найдены';
$lang['prices_price_delete_confirm']					= 'Вы уверены, что хотите удалить цену?';
$lang['prices_price_deleted']							= 'Цена удалена';
$lang['prices_depended_alias']							= 'Зависимый алиас';
$lang['prices_range']									= 'Диапазон (напр. 1-32)';
$lang['prices_list']									= 'Список (1,2,4,n)';
$lang['prices_one']										= 'Одно значение';
$lang['prices_cfg']										= 'Конф. файл';
$lang['prices_alias']									= 'Зависимый алиас';

// Adm transfer systems
$lang['transfers_title_index']							= 'GameAP :: Системы оплаты';
$lang['transfers_heading_index']						= 'Системы оплаты';

$lang['transfers_is_alredy_exists']						= 'Платежная система %s уже существует';
$lang['transfers_added']								= 'Платежная успешно добавлена';
$lang['transfers_not_found']							= 'Платежной системы не существует';
$lang['transfers_emtpy_id']								= 'Не указан ID платежной системы';
$lang['transfers_saved']								= 'Платежная система сохранена';
$lang['transers_delete_confirm']						= 'Вы действительно хотите удалить платежную систему?';
$lang['transfers_deleted']								= "Платежная система удалена";
$lang['transfers_status_disabled']						= 'Отключена';
$lang['transfers_status_enabled']						= 'Включена';
$lang['transfers_status_for_admins']					= 'Видна только администраторам';

// Client
$lang['client_title_index']								= 'GameAP :: Клиентская часть';
$lang['client_heading_index']							= 'Клиентская часть';

$lang['client_title_services']							= 'GameAP :: Услуги';
$lang['client_heading_services']						= 'Услуги';

$lang['client_title_cart']								= 'GameAP :: Корзина';
$lang['client_heading_cart']							= 'Корзина';

$lang['client_add_money']								= 'Пополнение баланса';
$lang['client_max_money']								= 'Максимальная сумма для оплаты';
$lang['client_min_money']								= 'Минимальная сумма для оплаты';
$lang['client_low_balance']								= 'На вашем балансе недостаточно средств';
$lang['client_signature_check_error']					= 'Ошибка проверки подписи';
$lang['client_details']									= 'Детали';
$lang['client_cart_empty']								= 'Корзина пуста';
$lang['client_cart_element_not_found']					= 'Элемент корзины не найден';
$lang['client_new_order']								= 'Новый заказ';
$lang['client_reinstall_confirm_empty']					= 'Для подтверждения удаления необходимо ввести 1234.';
$lang['client_reinstall_unavailable']					= 'Переустановка сервера недоступна на данный момент.';
$lang['client_reinstall_in_process']					= 'Переустановка сервера недоступна на данный момент.';
$lang['client_reinstall_process_start']					= 'Процесс переустановки запущен. Дождитесь окончания операции.';

// Configuration edit
$lang['currency_code']									= 'Код валюты';
$lang['currency_num']									= 'Номер валюты';
$lang['currency_symbol']								= 'Обозначение валюты';
$lang['local_server_allow_num']							= 'Максимальное количество серверов';
$lang['local_server_ip']								= 'IP локального сервера';
$lang['local_server_location']							= 'Локация';
$lang['local_server_provider']							= 'Провайдер';
$lang['delete_freeeze_servers']							= 'Удаление замороженных серверов';
$lang['ds_allow_count']									= 'Максимальное количество игровых серверов';
$lang['configuration_saved']							= 'Конфигурация сохранена';
$lang['configuration_manual']							= "Конфигурационный файл недоступен для записи. Обновите файл %s вручную. Вставьте в него следующие данные: ";

// Order
$lang['order_title']									= 'Заказ нового сервера';
$lang['order_description']								= 'Заказ нового сервера';
$lang['order_enter_promo']								= 'Ввести промокод';

$lang['order_mod']										= 'Модификация';
$lang['order_mod_unavailable']							= 'Модификация выбрана неправильно';
$lang['order_location']									= 'Локация';
$lang['order_location_unavailable']						= 'Локация выбрана неправильно';

// Tickets
$lang['tickets_title_index']							= 'GameAP :: Тикеты';
$lang['tickets_heading_index']							= 'Тикеты';

$lang['tickets_not_found']								= 'Тикет не найден';
$lang['tickets_admin_answer']							= 'Ответ администратора';
$lang['tickets_user_answer']							= 'Ответ пользователя';
$lang['tickets_message_sended']							= 'Сообщение отправлено';
$lang['tickets_ticket_created']							= 'Тикет успешно создан';
$lang['tickets_ticket_closed']							= 'Тикет закрыт';

$lang['tickets_saved']									= 'Тикет сохранен.';
$lang['tickets_deleted']								= 'Тикет удален.';
$lang['tickets_delete_confirm']							= 'Вы действительно хотите удалить тикет?';

// Currency
$lang['currency_delete_confirm']						= 'Вы действительно хотите удалить валюту?';
$lang['currency_delete_success']						= 'Валюта успешно удалена';
$lang['currency_add_success']							= 'Валюта успешно добавлена';
$lang['currency_saved']									= 'Валюта успешно сохранена';

// Pay periods
$lang['pay_periods_delete_confirm']						= 'Вы действительно хотите удалить период оплаты?';
$lang['pay_periods_delete_success']						= 'Период оплаты успешно удален';
$lang['pay_periods_add_success']						= 'Период оплаты успешно добавлен';
$lang['pay_periods_saved']								= 'Период оплаты успешно сохранен';
$lang['pay_periods_discount']							= 'скидка';
$lang['pay_periods_margin']								= 'наценка';

// Payment
$lang['payment_add_money']								= 'Зачисление оплаты по счету %s';
$lang['payment_pay_on_service']							= 'Оплата за услуги %s';

// Promo
$lang['promo_delete_confirm']							= 'Вы действительно хотите удалить промокод?';
$lang['promo_delete_success']							= 'Промокод успешно удален';
$lang['promo_no_select_tariffs']						= 'Не выбрано ни одного тарифа';
$lang['promo_add_success']								= 'Код успешно добавлен';
$lang['promo_edit_success']								= 'Код успешно сохранен';
$lang['promo_empty_id']									= 'Промокод указан неверно';
