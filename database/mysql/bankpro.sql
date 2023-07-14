-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 05:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_loans`
--

CREATE TABLE `active_loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_interest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emi_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `active_loans`
--

INSERT INTO `active_loans` (`id`, `user_id`, `request_id`, `name`, `monthly_interest`, `amount`, `monthly_payment`, `emi_type`, `tenure`, `created_at`, `updated_at`) VALUES
(3, 6, 2, 'standard', '2.25', '10000', '225', 'monthly', '3', '2023-07-14 14:25:13', '2023-07-14 14:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `bankdeposits`
--

CREATE TABLE `bankdeposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `account_number` int(11) NOT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bankdeposits`
--

INSERT INTO `bankdeposits` (`id`, `user_id`, `amount`, `account_number`, `account_name`, `account_type`, `bank`, `proof`, `created_at`, `updated_at`) VALUES
(1, 6, 1200, 1234567890, 'Ehiogu Harrison Chinedu', 'savings', 'First Bank', 'deposit-proof/VV3oEpuqIXrc0CzKCujlAP0ikCxf9OcwXNaa9cWq.png', '2023-06-15 21:10:30', '2023-06-15 21:10:30'),
(2, 6, 1200, 1234567890, 'Ehiogu Harrison Chinedu', 'current', 'Citibank Nigeria Limited', 'deposit-proof/wI9n8v3hzuUFKWuV0NaYYx79XLQcd8FxwOjncuhU.png', '2023-06-16 09:04:44', '2023-06-16 09:04:44'),
(3, 9, 200000, 1234567890, 'Jon Snow', 'savings', 'Kuda Bank', 'deposit-proof/hmYZMWT5oGVSowaIzuWXtxhIVrkxwrXHkBSQUvrV.png', '2023-06-16 11:24:18', '2023-06-16 11:24:18'),
(4, 9, 200000, 1234567890, 'Jon Snow', 'savings', 'Kuda Bank', 'deposit-proof/YmWFQ3JxexFTLoPa5ECsFxh9Mfr9NhpxKaRqf2G5.png', '2023-06-16 11:25:07', '2023-06-16 11:25:07'),
(5, 6, 8000, 1234567890, 'kuki', 'current', 'Citibank Nigeria Limited', 'deposit-proof/7Ecg5LCK82a04AfLRBg2gXqEGm6TgT09ljlRj6GB.png', '2023-06-21 14:33:47', '2023-06-21 14:33:47'),
(6, 6, 1200, 1234567890, 'Ehiogu Harrison Chinedu', 'current', 'FairMoney Microfinance Bank', 'deposit-proof/ihfzNzEUFwWbc8svEhSck28z4QHl4W02zv46nER6.png', '2023-07-03 14:33:10', '2023-07-03 14:33:10'),
(7, 6, 1200, 1234567890, 'Ehiogu Harrison Chinedu', 'current', 'FairMoney Microfinance Bank', 'deposit-proof/pvrayL0MU7aka1nAmRZVjwiJUcptJHNuLWGbp08V.png', '2023-07-03 14:34:34', '2023-07-03 14:34:34'),
(8, 6, 1200, 1234567890, 'Jon Snow', 'savings', 'Citibank Nigeria Limited', 'deposit-proof/3chjaWtqsGomnoOlwGtGDIvOeESTyhB1433hXMOR.png', '2023-07-03 14:35:37', '2023-07-03 14:35:37'),
(9, 6, 1200, 1234567890, 'Jon Snow', 'savings', 'Citibank Nigeria Limited', 'deposit-proof/ZG7hODGi9A3mgPgiGHL3nu2x425C2HRd3IiB7kXZ.png', '2023-07-03 14:36:00', '2023-07-03 14:36:00'),
(10, 6, 1200, 1234567890, 'Jon Snow', 'savings', 'Citibank Nigeria Limited', 'deposit-proof/IqAFLD2ClEozjMmFYynEh1wmC8TjZQ87w7kUkf5w.png', '2023-07-03 14:36:27', '2023-07-03 14:36:27'),
(11, 6, 1200, 1234567890, 'Jon Snow', 'savings', 'Ecobank Nigeria', 'deposit-proof/pIu2xmzQPCQpCikAjrJHRT0wT5sNrIw6v2YBdkHl.png', '2023-07-06 21:13:48', '2023-07-06 21:13:48'),
(12, 6, 1200, 1234567890, 'Ehiogu Harrison Chinedu', 'current', 'FairMoney Microfinance Bank', 'deposit-proof/N8M8Pj7G6E5idr3xY5WAoEhwn3UKHjhK1RUNHnVg.png', '2023-07-06 21:15:08', '2023-07-06 21:15:08'),
(13, 6, 1200, 1234567890, 'Ehiogu Harrison Chinedu', 'savings', 'Fidelity Bank Plc', 'deposit-proof/nCNS2zw9PPkuzxVDYlmhm0W7q7GOVncndLw0ByOz.png', '2023-07-06 21:16:36', '2023-07-06 21:16:36'),
(14, 6, 1200, 1234567890, 'Ehiogu Harrison Chinedu', 'current', 'Citibank Nigeria Limited', 'deposit-proof/XaovkOpNvlyOq3rnmwtxP4mPdBxkmCrMMU65oStb.png', '2023-07-06 21:19:12', '2023-07-06 21:19:12'),
(15, 6, 1200, 1234567890, 'Jon Snow', 'savings', 'Ecobank Nigeria', 'deposit-proof/puY1Qt6zyyDU1zdLPszMWVTFHOAa7ExButOWd1X2.png', '2023-07-06 21:21:46', '2023-07-06 21:21:46'),
(16, 6, 1200, 1234567890, 'Jon Snow', 'current', 'Access Bank', 'deposit-proof/FbZ4IZU0my9MpuASDXlbd3snrxsoLQDySe3WWdeq.png', '2023-07-06 21:23:21', '2023-07-06 21:23:21'),
(17, 6, 1200, 1234567890, 'Ehiogu Harrison Chinedu', 'savings', 'Access Bank', 'deposit-proof/XIIbRoZpFx2BgTU00OnBPuHeonsIx7W0cL9Qt9Ua.png', '2023-07-06 21:29:54', '2023-07-06 21:29:54'),
(18, 6, 1200, 1234567890, 'Ehiogu Harrison Chinedu', 'savings', 'Ecobank Nigeria', 'deposit-proof/1fbt0H2G6O86ttFmN2jkkh93V8X7GCGTy23FaDRg.png', '2023-07-12 14:39:49', '2023-07-12 14:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'First Bank', NULL, NULL),
(2, 'United Bank of Africa', NULL, NULL),
(3, 'First City Monument Bank', NULL, NULL),
(4, 'Polaris Bank', NULL, NULL),
(5, 'Access Bank', NULL, NULL),
(6, 'Guaranty Trust Bank', NULL, NULL),
(7, 'Zenith Bank', NULL, NULL),
(8, 'Opay', NULL, NULL),
(9, 'Union Bank', NULL, NULL),
(10, 'Ecobank Nigeria', NULL, NULL),
(11, 'Fidelity Bank Plc', NULL, NULL),
(12, 'Stanbic IBTC Bank Plc', NULL, NULL),
(13, 'Citibank Nigeria Limited', NULL, NULL),
(14, 'Heritage Bank Plc', NULL, NULL),
(15, 'Optimus Bank Limited', NULL, NULL),
(16, 'Standard Chartered', NULL, NULL),
(17, 'Sterling Bank Plc', NULL, NULL),
(18, 'Titan Trust Bank', NULL, NULL),
(19, 'Unity Bank Plc', NULL, NULL),
(20, 'Wema Bank Plc', NULL, NULL),
(21, 'Globus Bank Limited', NULL, NULL),
(22, 'Parallex Bank Limited', NULL, NULL),
(23, 'PremiumTrust Bank Limited', NULL, NULL),
(24, 'Providus Bank Limited', NULL, NULL),
(25, 'Palmpay', NULL, NULL),
(26, 'Kuda Bank', NULL, NULL),
(27, 'FairMoney Microfinance Bank', NULL, NULL),
(28, 'Moniepoint Microfinance Bank', NULL, NULL),
(29, 'Hype Bank', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bank_withdrawals`
--

CREATE TABLE `bank_withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_withdrawals`
--

INSERT INTO `bank_withdrawals` (`id`, `user_id`, `amount`, `account_no`, `account_name`, `bank`, `account_type`, `created_at`, `updated_at`) VALUES
(3, 6, '1200', '1234567890', 'Ehiogu Harrison Chinedu', 'First City Monument Bank', 'savings', '2023-07-07 07:01:19', '2023-07-07 07:01:19'),
(4, 6, '30000', '1234567890', 'Ehiogu Harrison Chinedu', 'First City Monument Bank', 'savings', '2023-07-07 21:40:06', '2023-07-07 21:40:06'),
(5, 6, '1200', '1234567890', 'Ehiogu Harrison Chinedu', 'Polaris Bank', 'current', '2023-07-08 14:20:55', '2023-07-08 14:20:55'),
(6, 6, '2200', '1234567890', 'Ehiogu Harrison Chinedu', 'First City Monument Bank', 'savings', '2023-07-09 12:36:59', '2023-07-09 12:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `bitcoins`
--

CREATE TABLE `bitcoins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wallet_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bitcoins`
--

INSERT INTO `bitcoins` (`id`, `user_id`, `amount`, `wallet_address`, `wallet_name`, `proof`, `created_at`, `updated_at`) VALUES
(1, 6, '30000', 'ereeeeyuIBSJSKAIQUIksiwueeu', 'Mine Btc', 'deposit-proof/G2t9pmP6K9Ho8VbwHzEk3N2O5Jak8YXfcusreTmO.png', '2023-06-19 11:50:49', '2023-06-19 11:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `cardrequests`
--

CREATE TABLE `cardrequests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `card_pin` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cardrequests`
--

INSERT INTO `cardrequests` (`id`, `card_type`, `user_id`, `card_pin`, `created_at`, `updated_at`, `status`) VALUES
(1, 'mastercard', 6, 1234, '2023-06-22 12:38:31', '2023-06-22 12:38:31', 'approved'),
(2, 'mastercard', 6, 1234, '2023-06-26 11:38:47', '2023-06-26 11:38:47', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `card_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv` int(11) NOT NULL,
  `card_expiry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_pin` int(11) NOT NULL,
  `card_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `created_at`, `updated_at`, `user_id`, `card_number`, `cvv`, `card_expiry`, `card_pin`, `card_type`, `card_name`) VALUES
(1, '2023-06-26 17:20:55', '2023-06-26 17:20:55', 6, '2259960524', 778, '0002-06-26 18:20:55', 1234, 'mastercard', 'Harrison Ehiogu'),
(2, '2023-06-26 17:23:55', '2023-06-26 17:23:55', 6, '576048940', 851, '0002-06-26 18:23:55', 1234, 'mastercard', 'Harrison Ehiogu');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_deposit_id` int(11) DEFAULT NULL,
  `paypal_deposit_id` int(11) DEFAULT NULL,
  `bitcoin_deposit_id` int(11) DEFAULT NULL,
  `kyc_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tran_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `user_id`, `amount`, `payment_method`, `bank_deposit_id`, `paypal_deposit_id`, `bitcoin_deposit_id`, `kyc_id`, `status`, `status_2`, `tran_id`, `created_at`, `updated_at`) VALUES
(18, 6, '1200', 'Bank Transfer', 10, NULL, NULL, 1, 'pending', 'active', 1, '2023-07-03 14:36:27', '2023-07-03 14:36:27'),
(19, 6, '1200', 'Bank Transfer', 11, NULL, NULL, 1, 'pending', 'active', 5, '2023-07-06 21:13:48', '2023-07-06 21:13:48'),
(20, 6, '1200', 'Bank Transfer', 12, NULL, NULL, 1, 'pending', 'active', 6, '2023-07-06 21:15:09', '2023-07-06 21:15:09'),
(21, 6, '1200', 'Bank Transfer', 13, NULL, NULL, 1, 'pending', 'active', 7, '2023-07-06 21:16:36', '2023-07-06 21:16:36'),
(22, 6, '1200', 'Bank Transfer', 14, NULL, NULL, 1, 'pending', 'active', 8, '2023-07-06 21:19:12', '2023-07-06 21:19:12'),
(23, 6, '1200', 'Bank Transfer', 15, NULL, NULL, 1, 'approved', 'active', 9, '2023-07-06 21:21:47', '2023-07-11 11:12:27'),
(27, 6, '1200', 'Bank Transfer', 18, NULL, NULL, 4, 'pending', NULL, 23, '2023-07-12 14:39:49', '2023-07-12 14:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kycs`
--

CREATE TABLE `kycs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `id_front` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_back` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kycs`
--

INSERT INTO `kycs` (`id`, `user_id`, `first_name`, `last_name`, `email`, `phone`, `dob`, `address1`, `address2`, `city`, `state`, `nationality`, `zipcode`, `id_front`, `id_back`, `id_type`, `status`, `created_at`, `updated_at`) VALUES
(4, 6, 'Harrison', 'Ehiogu', 'harry@gmail.com', '+234 906 714 2735', '06/09/2020', 'Isieke Ibeku', NULL, 'Umuahia', 'Abia', 'Nigerian', 666666666, 'Proof/eSJTJgRQfNdMzZB8RdrGmswvCdnseFXwefjpV3Jp.png', 'Proof/iNTB68BKVQ2pxwdRO5aDvWDgjowT2Rg0OVwn5ck9.png', 'passport', 'approved', '2023-07-06 20:47:58', '2023-07-11 12:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `loan_packages`
--

CREATE TABLE `loan_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_interest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emi_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_rates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loan_packages`
--

INSERT INTO `loan_packages` (`id`, `name`, `monthly_interest`, `amount`, `max_amount`, `min_amount`, `emi_type`, `tenure`, `interest_rates`, `created_at`, `updated_at`) VALUES
(1, 'standard', '2.25', '10000', '20000', '10000', 'monthly', '3', '<h1 style=\"color: red;\">Ok dear </h1>', NULL, NULL),
(2, 'pro', '2.43', '20000', '50000', '20000', 'monthly', '2', 'competitive', NULL, NULL),
(3, 'plantium', '0.45', '30000', '20000', '30000', 'monthly', '4', 'competitive', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loan_requests`
--

CREATE TABLE `loan_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `loan_package_id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_income` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_package` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loan_requests`
--

INSERT INTO `loan_requests` (`id`, `user_id`, `loan_package_id`, `full_name`, `dob`, `location`, `city`, `country`, `phone`, `email`, `occupation`, `loan_type`, `monthly_income`, `loan_amount`, `loan_package`, `account_no`, `account_name`, `bank`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'Harrison Ehiogu', '06/09/2020', 'Isieke Ibeku', 'Umuahia', 'nigeria', '+234 906 714 2735', 'harry@gmail.com', 'Student', 'appartment', 'less than 10000', '10000', 'standard', '7778896013', 'Harrison Ehiogu', 'Hype Bank', 'pending', '2023-07-12 14:17:24', '2023-07-12 14:17:24'),
(2, 6, 1, 'Harrison Ehiogu', '06/09/2020', 'Isieke Ibeku', 'Umuahia', 'nigeria', '+234 906 714 2735', 'harry@gmail.com', 'Student', 'appartment', 'less than 10000', '10000', 'standard', '7778896013', 'Harrison Ehiogu', 'Hype Bank', 'approved', '2023-07-12 14:32:43', '2023-07-14 14:25:13'),
(4, 6, 1, 'Harrison Ehiogu', '06/09/2020', 'Isieke Ibeku', 'Umuahia', 'nigeria', '+234 906 714 2735', 'harry@gmail.com', 'Student', 'appartment', 'less than 10000', '10000', 'standard', '7778896013', 'Harrison Ehiogu', 'Hype Bank', 'approved', '2023-07-13 09:46:52', '2023-07-14 10:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_13_163337_create_kycs_table', 2),
(7, '2023_06_14_135050_create_deposits_table', 3),
(8, '2023_06_14_215741_create_deposits_table', 4),
(9, '2023_06_15_191717_create_bank-deposits_table', 5),
(10, '2023_06_15_202654_create_banks_table', 6),
(11, '2023_06_15_191717_create_bankdeposits_table', 7),
(12, '2023_06_18_124400_create_paypals_table', 8),
(13, '2023_06_19_123559_create_bitcoins_table', 9),
(14, '2023_06_22_132217_create_cardrequests_table', 10),
(15, '2023_06_22_134214_create_cards_table', 11),
(16, '2023_06_22_134259_create_modify-card-requests_table', 12),
(17, '2023_06_26_174349_create_settings_table', 13),
(18, '2023_06_26_175350_create_modify-cards_table', 14),
(19, '2023_07_03_113102_create_transfers_table', 15),
(20, '2023_07_03_114918_create_modify-transfers_table', 16),
(21, '2023_07_03_150628_create_transactions_table', 17),
(22, '2023_07_07_063350_create_withdrawals_table', 18),
(23, '2023_07_07_064717_create_bankwithdrawals_table', 19),
(24, '2023_07_07_075906_create_bank_withdrawals_table', 20),
(25, '2023_07_07_141543_create_paypal_methods_table', 21),
(26, '2023_07_07_142902_create_paypal_withdrawals_table', 22),
(27, '2023_07_11_135339_create_loan_requests_table', 23),
(28, '2023_07_11_142527_create_loan_packages_table', 24),
(29, '2023_07_13_102830_create_active_loans_table', 25),
(30, '2023_07_14_131539_create_notifications_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('92568fc0-3dfb-4946-a933-b97075b75014', 'App\\Notifications\\DepositApproval', 'App\\Models\\User', 6, '{\"message\":\"Your deposit have been approved\"}', NULL, '2023-07-14 12:26:27', '2023-07-14 12:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paypals`
--

CREATE TABLE `paypals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `paypal_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypal_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paypals`
--

INSERT INTO `paypals` (`id`, `user_id`, `paypal_id`, `paypal_name`, `amount`, `proof`, `created_at`, `updated_at`) VALUES
(5, 6, 'ehiogu@gmail.com', 'Ehiogu Harrison', '1200', 'deposit-proof/9kMAkxR40HsCNvGA1Qb9sbcXu8rDXtTfHGBK7aev.png', '2023-06-18 12:12:48', '2023-06-18 12:12:48'),
(6, 6, 'ehiogu@gmail.com', 'Ehiogu Harrison', '1200', 'deposit-proof/7lvEkRKwBcVE46AFZL1IsPZioEFnVFAibHvuqP3n.png', '2023-06-18 12:13:18', '2023-06-18 12:13:18'),
(31, 6, 'ehiogu@gmail.com', 'Ehiogu Harrison', '120009', 'deposit-proof/KloXZyMSjMu3DxeZqMbWIEbtifP7QMe095EEz0Yo.png', '2023-06-18 12:39:06', '2023-06-18 12:39:06'),
(32, 6, 'ehiogu@gmail.com', 'Ehiogu Harrison', '20000', 'deposit-proof/rMIff0au2bRBJYckjimYbABqPk0aXk69iucOyuyq.png', '2023-06-19 10:46:35', '2023-06-19 10:46:35'),
(33, 6, 'ehiogu@gmail.com', 'Ehiogu Harrison', '20000', 'deposit-proof/oEMLWPwPuJrbE2kNOlQwNh3QB8mvAyoHVq8U2u4D.png', '2023-06-19 12:04:42', '2023-06-19 12:04:42'),
(34, 6, 'ehiogu@gmail.com', 'Ehiogu Harrison', '1200', 'deposit-proof/hthXFOa8CaRY34kQ2ZwwUMWIvx3UI11BLX2A72zL.png', '2023-07-06 21:32:31', '2023-07-06 21:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `paypal_methods`
--

CREATE TABLE `paypal_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypal_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypal_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paypal_withdrawals`
--

CREATE TABLE `paypal_withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypal_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypal_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paypal_withdrawals`
--

INSERT INTO `paypal_withdrawals` (`id`, `user_id`, `amount`, `paypal_id`, `paypal_username`, `created_at`, `updated_at`) VALUES
(1, 6, '1200', 'ehiogu@gmail.com', 'Harrison Ehiogu', '2023-07-07 13:30:42', '2023-07-07 13:30:42'),
(2, 6, '1200', 'ehiogu@gmail.com', 'Harrison Ehiogu', '2023-07-09 12:16:40', '2023-07-09 12:16:40'),
(3, 6, '7886', 'ehiogu@gmail.com', 'Harrison Ehiogu', '2023-07-09 12:42:19', '2023-07-09 12:42:19'),
(4, 6, '1200', 'ehiogu@gmail.com', 'Harrison Ehiogu', '2023-07-09 12:51:03', '2023-07-09 12:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `amount`, `transaction_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, '1200', 'Deposit', NULL, '2023-07-03 14:36:27', '2023-07-03 14:36:27'),
(2, NULL, '1200', 'Transfer', NULL, '2023-07-04 16:25:12', '2023-07-04 16:25:12'),
(3, 6, '20000', 'Transfer', NULL, '2023-07-04 16:27:11', '2023-07-04 16:27:11'),
(4, 6, '1200', 'Transfer', NULL, '2023-07-04 16:36:41', '2023-07-04 16:36:41'),
(5, 6, '1200', 'Deposit', NULL, '2023-07-06 21:13:48', '2023-07-06 21:13:48'),
(6, 6, '1200', 'Deposit', NULL, '2023-07-06 21:15:08', '2023-07-06 21:15:08'),
(7, 6, '1200', 'Deposit', NULL, '2023-07-06 21:16:36', '2023-07-06 21:16:36'),
(8, 6, '1200', 'Deposit', NULL, '2023-07-06 21:19:12', '2023-07-06 21:19:12'),
(9, 6, '1200', 'Deposit', 'approved', '2023-07-06 21:21:47', '2023-07-11 11:12:27'),
(10, 6, '1200', 'Deposit', 'approved', '2023-07-06 21:23:22', '2023-07-10 18:36:13'),
(11, 6, '1200', 'Deposit', 'approved', '2023-07-06 21:29:54', '2023-07-08 19:36:23'),
(15, 6, '1200', 'Withdrawal', 'approved', '2023-07-07 07:01:19', '2023-07-08 14:12:03'),
(18, 6, '1200', 'Withdrawal', 'approved', '2023-07-08 14:20:55', '2023-07-08 14:23:19'),
(19, 6, '1200', 'Withdrawal', 'approved', '2023-07-09 12:16:40', '2023-07-09 12:23:19'),
(21, 6, '7886', 'Withdrawal', 'approved', '2023-07-09 12:42:19', '2023-07-09 12:42:37'),
(22, 6, '1200', 'Withdrawal', 'approved', '2023-07-09 12:51:04', '2023-07-09 13:33:10'),
(23, 6, '1200', 'Deposit', 'pending', '2023-07-12 14:39:49', '2023-07-12 14:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rec_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rec_account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rec_account_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tran_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`id`, `user_id`, `amount`, `rec_bank`, `created_at`, `updated_at`, `rec_account_number`, `rec_account_name`, `tran_id`) VALUES
(1, 6, '1200', 'Ecobank Nigeria', '2023-07-03 11:17:10', '2023-07-03 11:17:10', '22222222222', 'Ehiogu Harrison Chinedu', NULL),
(2, 6, '1200', 'Citibank Nigeria Limited', '2023-07-03 14:09:20', '2023-07-03 14:09:20', '27377777333', 'Jon Snow', NULL),
(3, 6, '1200', 'Ecobank Nigeria', '2023-07-04 16:25:12', '2023-07-04 16:25:12', '123456789', 'Ehiogu Harrison Chinedu', NULL),
(4, 6, '20000', 'Ecobank Nigeria', '2023-07-04 16:27:11', '2023-07-04 16:27:11', '1234567890', 'Jon Snow', NULL),
(5, 6, '1200', 'FairMoney Microfinance Bank', '2023-07-04 16:36:41', '2023-07-04 16:36:41', '3333333333', 'kuki', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `setup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_pin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `user_profile`, `account_type`, `account_no`, `balance`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `setup`, `transaction_pin`) VALUES
(6, 'Harrison Ehiogu', 'harry@gmail.com', 'admin', NULL, 'current', '7778896016', '240114', '2023-06-14 16:23:18', '$2y$10$Gjxbm5vnSvXmb/FmkZkBY.fgTcQLd7fPrbCn8m8Jx1AYq8KiscOWG', 'Ehnv3SqlBM1plw9LB7rQb8OjeGcLPNCas7xgbJP3jsa7nR4W9h7q5z3kVPf5', '2023-06-14 15:42:08', '2023-07-14 14:25:13', 'true', 4444),
(16, 'Jonathan Happiness', 'happy@gmail.com', 'user', NULL, 'savings', '6667398736', '30000', NULL, '2222222222', NULL, NULL, NULL, 'true', 1234),
(17, 'Destiny Awurika', 'destiny@gmail.com', 'user', NULL, 'saving', '9847389490', '40000', NULL, NULL, NULL, NULL, NULL, 'true', 4566),
(18, 'James Kinton', 'james@gmail.com', 'user', NULL, 'current', '3483868398', '3000', NULL, NULL, NULL, NULL, NULL, NULL, 4444);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tran_id` int(11) NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `withdrawal_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_withdraw_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_withdraw_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_withdraw_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kyc_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `user_id`, `tran_id`, `amount`, `withdrawal_method`, `bank_withdraw_id`, `card_withdraw_id`, `paypal_withdraw_id`, `status`, `status_2`, `kyc_id`, `created_at`, `updated_at`) VALUES
(4, 6, 18, '1200', 'bank transfer', '5', NULL, NULL, 'approved', 'active', '4', '2023-07-08 14:20:55', '2023-07-10 18:58:30'),
(7, 6, 21, '7886', 'paypal', NULL, NULL, '3', 'approved', 'active', '4', '2023-07-09 12:42:19', '2023-07-10 18:58:24'),
(8, 6, 22, '1200', 'paypal', NULL, NULL, '4', 'approved', 'active', '4', '2023-07-09 12:51:04', '2023-07-09 13:33:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_loans`
--
ALTER TABLE `active_loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bankdeposits`
--
ALTER TABLE `bankdeposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_withdrawals`
--
ALTER TABLE `bank_withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bitcoins`
--
ALTER TABLE `bitcoins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardrequests`
--
ALTER TABLE `cardrequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kycs`
--
ALTER TABLE `kycs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_packages`
--
ALTER TABLE `loan_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_requests`
--
ALTER TABLE `loan_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `paypals`
--
ALTER TABLE `paypals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paypal_methods`
--
ALTER TABLE `paypal_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paypal_withdrawals`
--
ALTER TABLE `paypal_withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_key_index` (`key`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_loans`
--
ALTER TABLE `active_loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bankdeposits`
--
ALTER TABLE `bankdeposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `bank_withdrawals`
--
ALTER TABLE `bank_withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bitcoins`
--
ALTER TABLE `bitcoins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cardrequests`
--
ALTER TABLE `cardrequests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kycs`
--
ALTER TABLE `kycs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loan_packages`
--
ALTER TABLE `loan_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loan_requests`
--
ALTER TABLE `loan_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `paypals`
--
ALTER TABLE `paypals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `paypal_methods`
--
ALTER TABLE `paypal_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paypal_withdrawals`
--
ALTER TABLE `paypal_withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
