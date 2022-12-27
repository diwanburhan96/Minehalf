SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `sms_templates` (
  `id` int(11) NOT NULL,
  `identifier` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sms_body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `template_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sms_templates`
--

INSERT INTO `sms_templates` (`id`, `identifier`, `sms_body`, `template_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'mobile_number_verification', '[[code]] is your verification code for [[site_name]]. [[url]]', NULL, 0, '2021-03-01 08:04:26', '2021-06-03 01:56:07'),
(2, 'account_opening_by_admin', 'congratulations [[name]]! You have been added to [[site_name]] as a member. Password is : [[password]] . Please contact the administration team if you have any further questions. Best wishes. [[url]]', NULL, 1, '2021-03-01 08:17:01', '2021-06-03 01:10:50'),
(3, 'account_approval', 'Congratulations [[name]]!Your account has been approved for [[site_name]]. Please contact the administration team if you have any further questions. Best wishes. [[url]]', '123987', 1, '2021-03-01 08:24:17', '2021-06-03 02:02:42'),
(4, 'staff_account_opening', 'Congratulations [[name]], You have been added to [[site_name]] as Staff. Your account role is : [[role_type]]. Password is : [[password]]. Please contact the administration team if you have any further questions. Best wishes. [[url]]', NULL, 1, '2021-03-01 08:56:25', '2021-06-03 01:12:51'),
(5, 'manual_payment_approval', 'Hi [[name]], Your payment for the package purchase has been accepted. Payment Code is [[payment_code]. [[url]]', NULL, 1, '2021-03-01 08:59:42', '2021-06-03 01:13:33'),
(6, 'express_interest', 'Hi [[name]], [[member_name]] has expressed interest in you. [[url]]', NULL, 1, '2021-03-01 09:07:49', '2021-06-03 01:13:51'),
(7, 'accept_interest', 'Hi [[name]], [[member_name]] has accepted your interest. [[url]]', NULL, 1, '2021-03-01 09:08:13', '2021-06-03 01:14:08'),
(8, 'password_reset', 'Hi [[name]], Your password reset code is [[code]]. [[url]]', NULL, 0, '2021-03-01 09:42:45', '2021-06-03 01:14:24');


ALTER TABLE `sms_templates`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sms_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


INSERT INTO `settings` (`id`, `type`, `value`, `created_at`, `updated_at`, `deleted_at`)
VALUES
(NULL, 'twillo_activation', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, NULL),
(NULL, 'fast2sms_activation', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, NULL),
(NULL, 'mimo_activation', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, NULL),
(NULL, 'ssl_wireless_activation', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, NULL),
(NULL, 'nexmo_activation', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, NULL);

COMMIT;
