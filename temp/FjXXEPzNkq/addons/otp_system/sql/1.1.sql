ALTER TABLE `sms_templates` ADD `template_id` VARCHAR(100) NULL AFTER `sms_body`;

COMMIT;
