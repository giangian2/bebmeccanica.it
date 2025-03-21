#
#<?php die('Forbidden.'); ?>
#Date: 2025-03-21 20:01:32 UTC
#Software: Joomla! 5.0.1 Stable [ Kuboresha ] 28-November-2023 16:00 GMT

#Fields: datetime	priority clientip	category	message
2025-03-21T20:01:32+00:00	WARNING 172.19.0.1	jerror	Update: :Extension: Could not open 
            http://virtuemart.net/releases/vm3/plg_vmpayment_eway_update.xml
2025-03-21T20:01:32+00:00	WARNING 172.19.0.1	jerror	Update: :Extension: Could not open 
            http://virtuemart.net/releases/vm3/plg_vmpayment_eway_update.xml
2025-03-21T20:01:33+00:00	WARNING 172.19.0.1	jerror	Update: :Extension: Could not open 
            http://virtuemart.net/releases/vm3/plg_vmuserfield_realex_hpp_api_update.xml
2025-03-21T20:01:33+00:00	WARNING 172.19.0.1	jerror	Update: :Extension: Could not open 
            http://virtuemart.net/releases/vm3/plg_vmuserfield_realex_hpp_api_update.xml
2025-03-21T20:02:04+00:00	INFO 172.19.0.1	update	Test logging
2025-03-21T20:02:04+00:00	INFO 172.19.0.1	update	Update started by user Mirco Baiardi (372). Old version is 5.0.1.
2025-03-21T20:02:05+00:00	INFO 172.19.0.1	update	Downloading update file from https://s3-us-west-2.amazonaws.com/joomla-official-downloads/joomladownloads/joomla5/Joomla_5.2.5-Stable-Update_Package.zip?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIA6LXDJLNUINX2AVMH%2F20250321%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20250321T200204Z&X-Amz-Expires=60&X-Amz-SignedHeaders=host&X-Amz-Signature=8b78a301dd05cb271afda137efb13ca2e931f315575c9c02c0e37447b0924b36.
2025-03-21T20:02:12+00:00	INFO 172.19.0.1	update	File Joomla_5.2.5-Stable-Update_Package.zip downloaded.
2025-03-21T20:02:16+00:00	INFO 172.19.0.1	update	Starting installation of new version.
2025-03-21T20:11:56+00:00	INFO 172.19.0.1	update	Finalising installation.
2025-03-21T20:11:56+00:00	INFO 172.19.0.1	update	Start of SQL updates.
2025-03-21T20:11:56+00:00	INFO 172.19.0.1	update	The current database version (schema) is 5.0.0-2023-09-11.
2025-03-21T20:11:56+00:00	INFO 172.19.0.1	update	Ran query from file 5.1.0-2023-11-28. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2025-03-21T20:11:56+00:00	INFO 172.19.0.1	update	Ran query from file 5.1.0-2024-01-04. Query text: ALTER TABLE `#__fields_values` MODIFY `value` MEDIUMTEXT;.
2025-03-21T20:11:56+00:00	INFO 172.19.0.1	update	Ran query from file 5.1.0-2024-02-10. Query text: ALTER TABLE `#__guidedtour_steps` ADD COLUMN `params` text NULL ;.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.1.0-2024-02-24. Query text: CREATE TABLE IF NOT EXISTS `#__tuf_metadata` (   `id` int NOT NULL AUTO_INCREMEN.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.1.0-2024-02-24. Query text: INSERT INTO `#__tuf_metadata` (`update_site_id`, `root`) SELECT ue.`update_site_.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.1.0-2024-02-24. Query text: UPDATE `#__update_sites`    SET `type` = 'tuf', `location` = 'https://update.joo.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.1.0-2024-02-25. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.1.0-2024-03-08. Query text: INSERT IGNORE INTO `#__guidedtour_steps` (`tour_id`, `title`, `published`, `desc.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.1.0-2024-03-08. Query text: ALTER TABLE `#__guidedtours` ADD COLUMN `autostart` int NOT NULL DEFAULT 0 ;.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.1.0-2024-03-08. Query text: INSERT IGNORE INTO `#__guidedtours` (`title`, `uid`, `description`, `ordering`, .
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.1.0-2024-03-08. Query text: UPDATE `#__guidedtour_steps` SET `tour_id` = LAST_INSERT_ID() WHERE `tour_id`=0;.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.1.0-2024-03-28. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.1.1-2024-04-18. Query text: UPDATE `#__template_styles` SET `params` = JSON_SET(`params`, '$.colorScheme', '.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.2.0-2024-07-02. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.2.0-2024-07-19. Query text: INSERT INTO `#__action_logs_extensions` (`extension`) VALUES ('com_guidedtours').
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.2.0-2024-07-19. Query text: INSERT INTO `#__action_log_config` (`type_title`, `type_alias`, `id_holder`, `ti.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.2.0-2024-08-22. Query text: INSERT INTO `#__guidedtours` (`title`, `description`, `extensions`, `url`, `publ.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.2.0-2024-08-22. Query text: INSERT INTO `#__guidedtour_steps` (`title`, `description`, `position`, `target`,.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.2.0-2024-09-17. Query text: UPDATE `#__guidedtour_steps` SET `ordering` = `ordering` + 1 WHERE `title` IN ('.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.2.0-2024-09-17. Query text: INSERT INTO `#__guidedtour_steps` (`title`, `description`, `position`, `target`,.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.2.2-2024-09-24. Query text: UPDATE `#__assets` SET `title` = 'PUBLISH' WHERE `name` LIKE 'com_content.transi.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.2.2-2024-09-24. Query text: UPDATE `#__assets` SET `title` = 'UNPUBLISH' WHERE `name` LIKE 'com_content.tran.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.2.2-2024-09-24. Query text: UPDATE `#__assets` SET `title` = 'TRASH' WHERE `name` LIKE 'com_content.transiti.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.2.2-2024-09-24. Query text: UPDATE `#__assets` SET `title` = 'ARCHIVE' WHERE `name` LIKE 'com_content.transi.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.2.2-2024-09-24. Query text: UPDATE `#__assets` SET `title` = 'FEATURE' WHERE `name` LIKE 'com_content.transi.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.2.2-2024-09-24. Query text: UPDATE `#__assets` SET `title` = 'UNFEATURE' WHERE `name` LIKE 'com_content.tran.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.2.2-2024-09-24. Query text: UPDATE `#__assets` SET `title` = 'PUBLISH_AND_FEATURE' WHERE `name` LIKE 'com_co.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Ran query from file 5.2.3-2025-01-09. Query text: UPDATE `#__mail_templates` SET `params` = '{"tags":["messages","message","date",.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	End of SQL updates.
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Uninstalling extensions
2025-03-21T20:11:57+00:00	INFO 172.19.0.1	update	Deleting removed files and folders.
2025-03-21T20:12:18+00:00	INFO 172.19.0.1	update	Cleaning up after installation.
2025-03-21T20:12:28+00:00	INFO 172.19.0.1	update	Update to version 5.2.5 is complete.
