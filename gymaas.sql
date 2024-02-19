-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2024 a las 22:35:42
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gymaas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `body_parts`
--

CREATE TABLE `body_parts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(70) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `body_parts`
--

INSERT INTO `body_parts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'back', '2024-02-15 17:54:18', '2024-02-15 17:54:18'),
(2, 'cardio', '2024-02-15 17:54:18', '2024-02-15 17:54:18'),
(3, 'chest', '2024-02-15 17:54:18', '2024-02-15 17:54:18'),
(4, 'lower arms', '2024-02-15 17:54:18', '2024-02-15 17:54:18'),
(5, 'lower legs', '2024-02-15 17:54:18', '2024-02-15 17:54:18'),
(6, 'neck', '2024-02-15 17:54:18', '2024-02-15 17:54:18'),
(7, 'shoulders', '2024-02-15 17:54:18', '2024-02-15 17:54:18'),
(8, 'upper arms', '2024-02-15 17:54:18', '2024-02-15 17:54:18'),
(9, 'upper legs', '2024-02-15 17:54:18', '2024-02-15 17:54:18'),
(10, 'waist', '2024-02-15 17:54:18', '2024-02-15 17:54:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipments`
--

CREATE TABLE `equipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(70) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `equipments`
--

INSERT INTO `equipments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'assisted', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(2, 'band', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(3, 'barbell', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(4, 'body weight', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(5, 'bosu ball', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(6, 'cable', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(7, 'dumbbell', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(8, 'elliptical machine', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(9, 'ez barbell', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(10, 'hammer', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(11, 'kettlebell', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(12, 'leverage machine', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(13, 'medicine ball', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(14, 'olympic barbell', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(15, 'resistance band', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(16, 'roller', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(17, 'rope', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(18, 'skierg machine', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(19, 'sled machine', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(20, 'smith machine', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(21, 'stability ball', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(22, 'stationary bike', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(23, 'stepmill machine', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(24, 'tire', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(25, 'trap bar', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(26, 'upper body ergometer', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(27, 'weighted', '2024-02-15 17:54:19', '2024-02-15 17:54:19'),
(28, 'wheel roller', '2024-02-15 17:54:19', '2024-02-15 17:54:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exercises`
--

CREATE TABLE `exercises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(120) NOT NULL,
  `gif` varchar(100) NOT NULL,
  `secondary_muscles` varchar(190) NOT NULL,
  `instructions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`instructions`)),
  `lang` varchar(3) NOT NULL,
  `body_part_id` bigint(20) UNSIGNED NOT NULL,
  `equipment_id` bigint(20) UNSIGNED NOT NULL,
  `target_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `exercise_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `exercises`
--

INSERT INTO `exercises` (`id`, `name`, `gif`, `secondary_muscles`, `instructions`, `lang`, `body_part_id`, `equipment_id`, `target_id`, `created_at`, `updated_at`, `exercise_id`) VALUES
(1, '3/4 sit-up', '1.gif', 'hip flexors,lower back', '[\"Lie flat on your back with your knees bent and feet flat on the ground.\",\"Place your hands behind your head with your elbows pointing outwards.\",\"Engaging your abs, slowly lift your upper body off the ground, curling forward until your torso is at a 45-degree angle.\",\"Pause for a moment at the top, then slowly lower your upper body back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 10, 4, 2, '2024-02-15 17:54:21', '2024-02-15 17:54:22', 1),
(2, '45° side bend', '2.gif', 'obliques', '[\"Stand with your feet shoulder-width apart and your arms extended straight down by your sides.\",\"Keeping your back straight and your core engaged, slowly bend your torso to one side, lowering your hand towards your knee.\",\"Pause for a moment at the bottom, then slowly return to the starting position.\",\"Repeat on the other side.\",\"Continue alternating sides for the desired number of repetitions.\"]', 'en', 10, 4, 2, '2024-02-15 17:54:22', '2024-02-15 17:54:23', 2),
(3, 'air bike', '3.gif', 'hip flexors', '[\"Lie flat on your back with your hands placed behind your head.\",\"Lift your legs off the ground and bend your knees at a 90-degree angle.\",\"Bring your right elbow towards your left knee while simultaneously straightening your right leg.\",\"Return to the starting position and repeat the movement on the opposite side, bringing your left elbow towards your right knee while straightening your left leg.\",\"Continue alternating sides in a pedaling motion for the desired number of repetitions.\"]', 'en', 10, 4, 2, '2024-02-15 17:54:23', '2024-02-15 17:54:24', 3),
(4, 'all fours squad stretch', '4.gif', 'hamstrings,glutes', '[\"Start on all fours with your hands directly under your shoulders and your knees directly under your hips.\",\"Extend one leg straight back, keeping your knee bent and your foot flexed.\",\"Slowly lower your hips towards the ground, feeling a stretch in your quads.\",\"Hold this position for 20-30 seconds.\",\"Switch legs and repeat the stretch on the other side.\"]', 'en', 9, 4, 14, '2024-02-15 17:54:24', '2024-02-15 17:54:25', 4),
(5, 'alternate heel touchers', '5.gif', 'obliques', '[\"Lie flat on your back with your knees bent and feet flat on the ground.\",\"Extend your arms straight out to the sides, parallel to the ground.\",\"Engaging your abs, lift your shoulders off the ground and reach your right hand towards your right heel.\",\"Return to the starting position and repeat on the left side, reaching your left hand towards your left heel.\",\"Continue alternating sides for the desired number of repetitions.\"]', 'en', 10, 4, 2, '2024-02-15 17:54:25', '2024-02-15 17:54:26', 5),
(6, 'alternate lateral pulldown', '6.gif', 'biceps,rhomboids', '[\"Sit on the cable machine with your back straight and feet flat on the ground.\",\"Grasp the handles with an overhand grip, slightly wider than shoulder-width apart.\",\"Lean back slightly and pull the handles towards your chest, squeezing your shoulder blades together.\",\"Pause for a moment at the peak of the movement, then slowly release the handles back to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 1, 6, 11, '2024-02-15 17:54:26', '2024-02-15 17:54:28', 6),
(7, 'ankle circles', '7.gif', 'ankle stabilizers', '[\"Sit on the ground with your legs extended in front of you.\",\"Lift one leg off the ground and rotate your ankle in a circular motion.\",\"Perform the desired number of circles in one direction, then switch to the other direction.\",\"Repeat with the other leg.\"]', 'en', 5, 4, 5, '2024-02-15 17:54:28', '2024-02-15 17:54:29', 7),
(8, 'archer pull up', '8.gif', 'biceps,forearms', '[\"Start by hanging from a pull-up bar with an overhand grip, slightly wider than shoulder-width apart.\",\"Engage your core and pull your shoulder blades down and back.\",\"As you pull yourself up, bend one arm and bring your elbow towards your side, while keeping the other arm straight.\",\"Continue pulling until your chin is above the bar and your bent arm is fully flexed.\",\"Lower yourself back down with control, straightening the bent arm and repeating the movement on the other side.\",\"Alternate sides with each repetition.\"]', 'en', 1, 4, 11, '2024-02-15 17:54:29', '2024-02-15 17:54:30', 8),
(9, 'archer push up', '9.gif', 'triceps,shoulders,core', '[\"Start in a push-up position with your hands slightly wider than shoulder-width apart.\",\"Extend one arm straight out to the side, parallel to the ground.\",\"Lower your body by bending your elbows, keeping your back straight and core engaged.\",\"Push back up to the starting position.\",\"Repeat on the other side, extending the opposite arm out to the side.\",\"Continue alternating sides for the desired number of repetitions.\"]', 'en', 3, 4, 13, '2024-02-15 17:54:30', '2024-02-15 17:54:31', 9),
(10, 'arm slingers hanging bent knee legs', '10.gif', 'shoulders,back', '[\"Hang from a pull-up bar with your arms fully extended and your knees bent at a 90-degree angle.\",\"Engage your core and lift your knees towards your chest, bringing them as close to your elbows as possible.\",\"Slowly lower your legs back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 10, 4, 2, '2024-02-15 17:54:31', '2024-02-15 17:54:32', 10),
(11, 'arm slingers hanging straight legs', '11.gif', 'shoulders,back', '[\"Hang from a pull-up bar with your arms fully extended and your legs straight down.\",\"Engage your core and lift your legs up in front of you until they are parallel to the ground.\",\"Hold for a moment at the top, then slowly lower your legs back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 10, 4, 2, '2024-02-15 17:54:32', '2024-02-15 17:54:33', 11),
(12, 'arms apart circular toe touch (male)', '12.gif', 'hamstrings,quadriceps,calves', '[\"Stand with your feet shoulder-width apart and arms extended to the sides.\",\"Keeping your legs straight, bend forward at the waist and reach down towards your toes with your right hand.\",\"As you reach down, simultaneously lift your left leg straight up behind you, maintaining balance.\",\"Return to the starting position and repeat the movement with your left hand reaching towards your toes and your right leg lifting up behind you.\",\"Continue alternating sides for the desired number of repetitions.\"]', 'en', 9, 4, 9, '2024-02-15 17:54:33', '2024-02-15 17:54:34', 12),
(13, 'arms overhead full sit-up (male)', '13.gif', 'hip flexors,lower back', '[\"Lie flat on your back with your knees bent and feet flat on the ground.\",\"Extend your arms overhead, keeping them straight.\",\"Engaging your abs, slowly lift your upper body off the ground, curling forward until your torso is upright.\",\"Pause for a moment at the top, then slowly lower your upper body back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 10, 4, 2, '2024-02-15 17:54:34', '2024-02-15 17:54:35', 13),
(14, 'assisted chest dip (kneeling)', '14.gif', 'triceps,shoulders', '[\"Adjust the machine to your desired height and secure your knees on the pad.\",\"Grasp the handles with your palms facing down and your arms fully extended.\",\"Lower your body by bending your elbows until your upper arms are parallel to the floor.\",\"Pause for a moment, then push yourself back up to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 3, 12, 13, '2024-02-15 17:54:35', '2024-02-15 17:54:36', 14),
(15, 'assisted hanging knee raise', '15.gif', 'hip flexors', '[\"Hang from a pull-up bar with your arms fully extended and your palms facing away from you.\",\"Engage your core muscles and lift your knees towards your chest, bending at the hips and knees.\",\"Pause for a moment at the top of the movement, squeezing your abs.\",\"Slowly lower your legs back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 10, 1, 2, '2024-02-15 17:54:36', '2024-02-15 17:54:37', 15),
(16, 'assisted hanging knee raise with throw down', '16.gif', 'hip flexors,lower back', '[\"Hang from a pull-up bar with your arms fully extended and your palms facing away from you.\",\"Engage your core and lift your knees towards your chest, keeping your legs together.\",\"Once your knees are at chest level, explosively throw your legs down towards the ground, extending them fully.\",\"Allow your legs to swing back up and repeat the movement for the desired number of repetitions.\"]', 'en', 10, 1, 2, '2024-02-15 17:54:37', '2024-02-15 17:54:38', 16),
(17, 'assisted lying calves stretch', '17.gif', 'hamstrings', '[\"Lie on your back with your legs extended.\",\"Bend one knee and place your foot flat on the ground.\",\"Using your hands or a towel, gently pull your toes towards your body, feeling a stretch in your calf.\",\"Hold the stretch for 20-30 seconds.\",\"Release the stretch and repeat on the other leg.\"]', 'en', 5, 1, 5, '2024-02-15 17:54:38', '2024-02-15 17:54:39', 17),
(18, 'assisted lying glutes stretch', '18.gif', 'hamstrings', '[\"Lie on your back with your legs extended.\",\"Bend your right knee and place your right ankle on your left thigh, just above the knee.\",\"Grasp your left thigh with both hands and gently pull it towards your chest.\",\"Hold the stretch for 20-30 seconds.\",\"Release and repeat on the other side.\"]', 'en', 9, 1, 9, '2024-02-15 17:54:39', '2024-02-15 17:54:40', 18),
(19, 'assisted lying gluteus and piriformis stretch', '19.gif', 'hamstrings', '[\"Lie on your back with your legs extended.\",\"Bend your right knee and place your right ankle on your left thigh, just above the knee.\",\"Grasp your left thigh with both hands and gently pull it towards your chest.\",\"Hold the stretch for 20-30 seconds.\",\"Release the stretch and repeat on the other side.\"]', 'en', 9, 1, 9, '2024-02-15 17:54:40', '2024-02-15 17:54:41', 19),
(20, 'assisted lying leg raise with lateral throw down', '20.gif', 'hip flexors,obliques', '[\"Lie flat on your back with your legs extended and your arms by your sides.\",\"Place your hands under your glutes for support.\",\"Engage your abs and lift your legs off the ground, keeping them straight.\",\"While keeping your legs together, lower them to one side until they are a few inches above the ground.\",\"Pause for a moment, then lift your legs back to the starting position.\",\"Repeat the movement to the other side.\",\"Continue alternating sides for the desired number of repetitions.\"]', 'en', 10, 1, 2, '2024-02-15 17:54:41', '2024-02-15 17:54:42', 20),
(21, 'assisted lying leg raise with throw down', '21.gif', 'hip flexors,quadriceps', '[\"Lie flat on your back with your legs extended and your arms by your sides.\",\"Place your hands under your glutes for support.\",\"Engage your core and lift your legs off the ground, keeping them straight.\",\"Raise your legs until they are perpendicular to the ground.\",\"Lower your legs back down to the starting position.\",\"Simultaneously, throw your legs down towards the ground, keeping them straight.\",\"Raise your legs back up to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 10, 1, 2, '2024-02-15 17:54:42', '2024-02-15 17:54:43', 21),
(22, 'assisted motion russian twist', '22.gif', 'obliques,lower back', '[\"Sit on the ground with your knees bent and feet flat on the floor.\",\"Hold the medicine ball with both hands in front of your chest.\",\"Lean back slightly, engaging your abs and keeping your back straight.\",\"Slowly twist your torso to the right, bringing the medicine ball towards the right side of your body.\",\"Pause for a moment, then twist your torso to the left, bringing the medicine ball towards the left side of your body.\",\"Continue alternating sides for the desired number of repetitions.\"]', 'en', 10, 13, 2, '2024-02-15 17:54:43', '2024-02-15 17:54:45', 22),
(23, 'assisted parallel close grip pull-up', '23.gif', 'biceps,forearms', '[\"Adjust the machine to your desired weight and height.\",\"Place your hands on the parallel bars with a close grip, palms facing each other.\",\"Hang from the bars with your arms fully extended and your feet off the ground.\",\"Engage your back muscles and pull your body up towards the bars, keeping your elbows close to your body.\",\"Continue pulling until your chin is above the bars.\",\"Pause for a moment at the top, then slowly lower your body back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 1, 12, 11, '2024-02-15 17:54:45', '2024-02-15 17:54:45', 23),
(24, 'assisted prone hamstring', '24.gif', 'glutes,lower back', '[\"Lie face down on a mat or bench with your legs fully extended.\",\"Have a partner or use a resistance band to secure your ankles.\",\"Engage your hamstrings and lift your legs towards your glutes, keeping your knees straight.\",\"Pause for a moment at the top, then slowly lower your legs back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 9, 1, 10, '2024-02-15 17:54:45', '2024-02-15 17:54:46', 24),
(25, 'assisted prone lying quads stretch', '25.gif', 'hamstrings,glutes', '[\"Lie face down on the ground with your legs extended.\",\"Bend your left knee and reach back with your left hand to grab your left foot or ankle.\",\"Gently pull your left foot towards your glutes, feeling a stretch in your left quad.\",\"Hold the stretch for 20-30 seconds, then release.\",\"Repeat with your right leg.\"]', 'en', 9, 1, 14, '2024-02-15 17:54:46', '2024-02-15 17:54:48', 25),
(26, 'assisted prone rectus femoris stretch', '26.gif', 'quadriceps', '[\"Lie face down on the ground with your legs straight.\",\"Bend your right knee and reach back with your right hand to grab your right foot or ankle.\",\"Gently pull your right foot or ankle towards your glutes, feeling a stretch in the front of your right thigh.\",\"Hold the stretch for 20-30 seconds.\",\"Release and repeat on the other side.\"]', 'en', 10, 1, 2, '2024-02-15 17:54:48', '2024-02-15 17:54:49', 26),
(27, 'assisted pull-up', '27.gif', 'biceps,forearms', '[\"Adjust the machine to your desired weight and height settings.\",\"Grasp the handles with an overhand grip, slightly wider than shoulder-width apart.\",\"Hang with your arms fully extended and your feet off the ground.\",\"Engage your back muscles and pull your body up towards the handles, keeping your elbows close to your body.\",\"Continue pulling until your chin is above the handles.\",\"Pause for a moment at the top, then slowly lower your body back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 1, 12, 11, '2024-02-15 17:54:49', '2024-02-15 17:54:50', 27),
(28, 'assisted seated pectoralis major stretch with stability ball', '28.gif', 'shoulders,triceps', '[\"Sit on a stability ball with your feet flat on the ground and your back straight.\",\"Hold a stability ball with both hands and extend your arms straight out in front of you.\",\"Slowly lower the stability ball towards your chest, feeling a stretch in your pectoral muscles.\",\"Hold the stretch for a few seconds, then slowly return to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 3, 1, 13, '2024-02-15 17:54:50', '2024-02-15 17:54:51', 28),
(29, 'assisted side lying adductor stretch', '29.gif', 'hamstrings,glutes', '[\"Lie on your side with your legs straight and stacked on top of each other.\",\"Bend your bottom leg slightly for stability.\",\"Place your top foot on a stable surface, such as a bench or step.\",\"Keeping your top leg straight, slowly lower it towards the ground, feeling a stretch in your inner thigh.\",\"Hold the stretch for 20-30 seconds.\",\"Return to the starting position and repeat on the other side.\"]', 'en', 9, 1, 3, '2024-02-15 17:54:51', '2024-02-15 17:54:53', 29),
(30, 'assisted sit-up', '30.gif', 'hip flexors', '[\"Sit on the edge of a bench or have someone hold your feet down.\",\"Lie flat on your back with your knees bent and feet flat on the ground.\",\"Place your hands behind your head with your elbows pointing outwards.\",\"Engaging your abs, slowly lift your upper body off the ground, curling forward until your torso is at a 45-degree angle.\",\"Pause for a moment at the top, then slowly lower your upper body back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 10, 1, 2, '2024-02-15 17:54:53', '2024-02-15 17:54:54', 30),
(31, 'assisted standing chin-up', '31.gif', 'biceps,forearms', '[\"Adjust the machine to your desired assistance level.\",\"Stand on the foot platform and grip the handles with an overhand grip, slightly wider than shoulder-width apart.\",\"Keep your chest up and shoulders back, engage your core, and slightly bend your knees.\",\"Pull your body up by flexing your elbows and driving your elbows down towards your sides.\",\"Continue pulling until your chin is above the bar.\",\"Pause for a moment at the top, then slowly lower your body back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 1, 12, 11, '2024-02-15 17:54:54', '2024-02-15 17:54:55', 31),
(32, 'assisted standing pull-up', '32.gif', 'biceps,forearms', '[\"Adjust the machine to your desired weight and height settings.\",\"Stand facing the machine with your feet shoulder-width apart.\",\"Grasp the handles with an overhand grip, slightly wider than shoulder-width apart.\",\"Engage your lats and biceps, and pull yourself up towards the handles.\",\"Pause for a moment at the top, squeezing your back muscles.\",\"Slowly lower yourself back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 1, 12, 11, '2024-02-15 17:54:55', '2024-02-15 17:54:56', 32),
(33, 'assisted standing triceps extension (with towel)', '33.gif', 'shoulders', '[\"Stand with your feet shoulder-width apart and hold a towel with both hands behind your head.\",\"Keep your elbows close to your ears and your upper arms stationary.\",\"Slowly extend your forearms upward, squeezing your triceps at the top.\",\"Pause for a moment, then slowly lower the towel back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 8, 1, 18, '2024-02-15 17:54:56', '2024-02-15 17:54:57', 33),
(34, 'assisted triceps dip (kneeling)', '34.gif', 'chest,shoulders', '[\"Adjust the machine to your desired weight and height.\",\"Kneel down on the pad facing the machine, with your hands gripping the handles.\",\"Lower your body by bending your elbows, keeping your back straight and close to the machine.\",\"Pause for a moment at the bottom, then push yourself back up to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 8, 12, 18, '2024-02-15 17:54:57', '2024-02-15 17:54:59', 34),
(35, 'assisted wide-grip chest dip (kneeling)', '35.gif', 'triceps,shoulders', '[\"Adjust the machine to your desired height and secure your knees on the pad.\",\"Grasp the handles with a wide grip and keep your elbows slightly bent.\",\"Lower your body by bending your elbows until your upper arms are parallel to the floor.\",\"Push yourself back up to the starting position by extending your arms.\",\"Repeat for the desired number of repetitions.\"]', 'en', 3, 12, 13, '2024-02-15 17:54:59', '2024-02-15 17:55:00', 35),
(36, 'astride jumps (male)', '36.gif', 'quadriceps,hamstrings,calves', '[\"Stand with your feet shoulder-width apart.\",\"Bend your knees and lower your body into a squat position.\",\"Jump explosively upwards, extending your legs and arms.\",\"While in the air, spread your legs apart and bring your arms out to the sides.\",\"Land softly with your feet shoulder-width apart, bending your knees to absorb the impact.\",\"Repeat for the desired number of repetitions.\"]', 'en', 2, 4, 6, '2024-02-15 17:55:00', '2024-02-15 17:55:01', 36),
(37, 'back and forth step', '37.gif', 'quadriceps,hamstrings,glutes,calves', '[\"Stand with your feet shoulder-width apart.\",\"Step forward with your right foot, bending your knee and lowering your body into a lunge position.\",\"Push off with your right foot and step back to the starting position.\",\"Repeat the movement with your left foot, alternating legs with each step.\",\"Continue stepping back and forth, maintaining a steady pace.\",\"Repeat for the desired duration or number of repetitions.\"]', 'en', 2, 4, 6, '2024-02-15 17:55:01', '2024-02-15 17:55:03', 37),
(38, 'back extension on exercise ball', '38.gif', 'glutes,hamstrings', '[\"Place the stability ball on the ground and lie face down on top of it, with your hips resting on the ball and your feet against a wall or other stable surface.\",\"Position your hands behind your head or crossed over your chest.\",\"Engage your core and slowly lift your upper body off the ball, extending your back until your body forms a straight line from your head to your heels.\",\"Pause for a moment at the top, then slowly lower your upper body back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 1, 21, 16, '2024-02-15 17:55:03', '2024-02-15 17:56:05', 38),
(39, 'back lever', '39.gif', 'biceps,forearms,core', '[\"Start by hanging from a pull-up bar with an overhand grip, hands slightly wider than shoulder-width apart.\",\"Engage your core and pull your shoulder blades down and back.\",\"Bend your knees and tuck them towards your chest.\",\"Slowly lift your legs up, keeping them straight, until your body is parallel to the ground.\",\"Hold this position for a few seconds, then slowly lower your legs back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 1, 4, 19, '2024-02-15 17:56:05', '2024-02-15 17:56:06', 39),
(40, 'back pec stretch', '40.gif', 'shoulders,chest', '[\"Stand tall with your feet shoulder-width apart.\",\"Extend your arms straight out in front of you, parallel to the ground.\",\"Cross your arms in front of your body, with your right arm over your left arm.\",\"Interlock your fingers and rotate your palms away from your body.\",\"Slowly raise your arms up and away from your body, feeling a stretch in your back and chest.\",\"Hold the stretch for 15-30 seconds, then release.\",\"Repeat on the opposite side.\"]', 'en', 1, 4, 11, '2024-02-15 17:56:06', '2024-02-15 17:56:07', 40),
(41, 'backward jump', '41.gif', 'hamstrings,glutes,calves', '[\"Stand with your feet shoulder-width apart.\",\"Bend your knees slightly and jump backwards, pushing off with both feet.\",\"Land softly on the balls of your feet, bending your knees to absorb the impact.\",\"Repeat for the desired number of repetitions.\"]', 'en', 9, 4, 14, '2024-02-15 17:56:07', '2024-02-15 17:56:08', 41),
(42, 'balance board', '42.gif', 'calves,hamstrings,glutes', '[\"Place the balance board on a flat surface.\",\"Step onto the balance board with one foot, ensuring it is centered.\",\"Slowly shift your weight onto the foot on the balance board, keeping your core engaged.\",\"Maintain your balance and stability as you hold the position for a desired amount of time.\",\"Repeat the exercise with the other foot.\"]', 'en', 9, 4, 14, '2024-02-15 17:56:08', '2024-02-15 17:56:09', 42),
(43, 'band alternating biceps curl', '43.gif', 'forearms', '[\"Stand with your feet shoulder-width apart and hold the band with an underhand grip, palms facing up.\",\"Keep your elbows close to your sides and slowly curl one arm up towards your shoulder, squeezing your biceps at the top.\",\"Lower the arm back down to the starting position and repeat with the other arm.\",\"Continue alternating arms for the desired number of repetitions.\"]', 'en', 8, 2, 4, '2024-02-15 17:56:09', '2024-02-15 17:56:10', 43),
(44, 'band alternating v-up', '44.gif', 'hip flexors', '[\"Lie flat on your back with your legs straight and your arms extended overhead, holding the band.\",\"Engage your abs and lift your legs and upper body off the ground simultaneously, reaching your hands towards your toes.\",\"As you lower your legs and upper body back down, switch the position of your legs, crossing one over the other.\",\"Repeat the movement, alternating the position of your legs with each repetition.\",\"Continue for the desired number of repetitions.\"]', 'en', 10, 2, 2, '2024-02-15 17:56:10', '2024-02-15 17:56:11', 44),
(45, 'band assisted pull-up', '45.gif', 'biceps,forearms', '[\"Attach the band to a pull-up bar or sturdy anchor point.\",\"Step onto the band and grip the bar with your palms facing away from you, hands slightly wider than shoulder-width apart.\",\"Hang with your arms fully extended, keeping your core engaged and your shoulders down and back.\",\"Pull your body up towards the bar by squeezing your shoulder blades together and driving your elbows down towards your hips.\",\"Continue pulling until your chin is above the bar, then slowly lower yourself back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 1, 2, 11, '2024-02-15 17:56:11', '2024-02-15 17:56:12', 45),
(46, 'band assisted wheel rollerout', '46.gif', 'lower back', '[\"Kneel on the floor and hold the handles of the band with both hands, palms facing down.\",\"Place the band on the ground in front of you and position your hands shoulder-width apart.\",\"Engage your core and slowly roll the wheel forward, extending your body as far as you can while maintaining control.\",\"Pause for a moment at the furthest point, then slowly roll the wheel back towards your knees to return to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 10, 2, 2, '2024-02-15 17:56:12', '2024-02-15 17:56:13', 46),
(47, 'band bench press', '47.gif', 'triceps,shoulders', '[\"Lie flat on a bench with your feet flat on the ground and your back pressed against the bench.\",\"Grasp the band handles with an overhand grip, slightly wider than shoulder-width apart.\",\"Extend your arms fully, pushing the bands away from your chest.\",\"Slowly lower the bands back down to your chest, keeping your elbows at a 90-degree angle.\",\"Repeat for the desired number of repetitions.\"]', 'en', 3, 2, 13, '2024-02-15 17:56:13', '2024-02-15 17:56:14', 47),
(48, 'band bent-over hip extension', '48.gif', 'hamstrings,lower back', '[\"Attach the band to a sturdy anchor point at ankle height.\",\"Stand facing away from the anchor point with your feet shoulder-width apart.\",\"Step back to create tension in the band, keeping your knees slightly bent.\",\"Hinge at the hips and lean forward, maintaining a neutral spine.\",\"Extend your right leg straight back, squeezing your glutes at the top.\",\"Lower your right leg back down and repeat with the left leg.\",\"Continue alternating legs for the desired number of repetitions.\"]', 'en', 9, 2, 9, '2024-02-15 17:56:14', '2024-02-15 17:56:15', 48),
(49, 'band bicycle crunch', '49.gif', 'hip flexors,obliques', '[\"Lie flat on your back with your hands behind your head and your knees bent.\",\"Lift your feet off the ground and bring your right knee towards your chest while simultaneously twisting your torso to bring your left elbow towards your right knee.\",\"Straighten your right leg while bringing your left knee towards your chest and twisting your torso to bring your right elbow towards your left knee.\",\"Continue alternating the twisting motion, as if you are pedaling a bicycle, while keeping your core engaged throughout the movement.\",\"Repeat for the desired number of repetitions.\"]', 'en', 10, 2, 2, '2024-02-15 17:56:15', '2024-02-15 17:56:15', 49),
(50, 'band close-grip pulldown', '50.gif', 'biceps,forearms', '[\"Attach the band to a high anchor point, such as a pull-up bar or sturdy beam.\",\"Stand facing the anchor point and grab the band with an underhand grip, hands shoulder-width apart.\",\"Step back to create tension in the band, keeping your feet hip-width apart.\",\"Engage your core and keep your back straight as you pull the band down towards your chest, squeezing your shoulder blades together.\",\"Pause for a moment at the bottom of the movement, then slowly release the band back to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 1, 2, 11, '2024-02-15 17:56:15', '2024-02-15 17:56:17', 50),
(51, '3/4 sit-up', '51.gif', 'hip flexors,lower back', '[\"Lie flat on your back with your knees bent and feet flat on the ground.\",\"Place your hands behind your head with your elbows pointing outwards.\",\"Engaging your abs, slowly lift your upper body off the ground, curling forward until your torso is at a 45-degree angle.\",\"Pause for a moment at the top, then slowly lower your upper body back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 10, 4, 2, '2024-02-15 17:56:17', '2024-02-15 17:56:18', 51),
(52, '45° side bend', '52.gif', 'obliques', '[\"Stand with your feet shoulder-width apart and your arms extended straight down by your sides.\",\"Keeping your back straight and your core engaged, slowly bend your torso to one side, lowering your hand towards your knee.\",\"Pause for a moment at the bottom, then slowly return to the starting position.\",\"Repeat on the other side.\",\"Continue alternating sides for the desired number of repetitions.\"]', 'en', 10, 4, 2, '2024-02-15 17:56:18', '2024-02-15 17:56:19', 52),
(53, 'air bike', '53.gif', 'hip flexors', '[\"Lie flat on your back with your hands placed behind your head.\",\"Lift your legs off the ground and bend your knees at a 90-degree angle.\",\"Bring your right elbow towards your left knee while simultaneously straightening your right leg.\",\"Return to the starting position and repeat the movement on the opposite side, bringing your left elbow towards your right knee while straightening your left leg.\",\"Continue alternating sides in a pedaling motion for the desired number of repetitions.\"]', 'en', 10, 4, 2, '2024-02-15 17:56:19', '2024-02-15 17:56:20', 53),
(54, 'all fours squad stretch', '54.gif', 'hamstrings,glutes', '[\"Start on all fours with your hands directly under your shoulders and your knees directly under your hips.\",\"Extend one leg straight back, keeping your knee bent and your foot flexed.\",\"Slowly lower your hips towards the ground, feeling a stretch in your quads.\",\"Hold this position for 20-30 seconds.\",\"Switch legs and repeat the stretch on the other side.\"]', 'en', 9, 4, 14, '2024-02-15 17:56:20', '2024-02-15 17:56:21', 54),
(55, 'alternate heel touchers', '55.gif', 'obliques', '[\"Lie flat on your back with your knees bent and feet flat on the ground.\",\"Extend your arms straight out to the sides, parallel to the ground.\",\"Engaging your abs, lift your shoulders off the ground and reach your right hand towards your right heel.\",\"Return to the starting position and repeat on the left side, reaching your left hand towards your left heel.\",\"Continue alternating sides for the desired number of repetitions.\"]', 'en', 10, 4, 2, '2024-02-15 17:56:21', '2024-02-15 17:56:22', 55),
(56, 'alternate lateral pulldown', '56.gif', 'biceps,rhomboids', '[\"Sit on the cable machine with your back straight and feet flat on the ground.\",\"Grasp the handles with an overhand grip, slightly wider than shoulder-width apart.\",\"Lean back slightly and pull the handles towards your chest, squeezing your shoulder blades together.\",\"Pause for a moment at the peak of the movement, then slowly release the handles back to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 1, 6, 11, '2024-02-15 17:56:22', '2024-02-15 17:56:23', 56),
(57, 'ankle circles', '57.gif', 'ankle stabilizers', '[\"Sit on the ground with your legs extended in front of you.\",\"Lift one leg off the ground and rotate your ankle in a circular motion.\",\"Perform the desired number of circles in one direction, then switch to the other direction.\",\"Repeat with the other leg.\"]', 'en', 5, 4, 5, '2024-02-15 17:56:23', '2024-02-15 17:56:24', 57),
(58, 'archer pull up', '58.gif', 'biceps,forearms', '[\"Start by hanging from a pull-up bar with an overhand grip, slightly wider than shoulder-width apart.\",\"Engage your core and pull your shoulder blades down and back.\",\"As you pull yourself up, bend one arm and bring your elbow towards your side, while keeping the other arm straight.\",\"Continue pulling until your chin is above the bar and your bent arm is fully flexed.\",\"Lower yourself back down with control, straightening the bent arm and repeating the movement on the other side.\",\"Alternate sides with each repetition.\"]', 'en', 1, 4, 11, '2024-02-15 17:56:24', '2024-02-15 17:56:25', 58),
(59, 'archer push up', '59.gif', 'triceps,shoulders,core', '[\"Start in a push-up position with your hands slightly wider than shoulder-width apart.\",\"Extend one arm straight out to the side, parallel to the ground.\",\"Lower your body by bending your elbows, keeping your back straight and core engaged.\",\"Push back up to the starting position.\",\"Repeat on the other side, extending the opposite arm out to the side.\",\"Continue alternating sides for the desired number of repetitions.\"]', 'en', 3, 4, 13, '2024-02-15 17:56:25', '2024-02-15 17:56:27', 59),
(60, 'arm slingers hanging bent knee legs', '60.gif', 'shoulders,back', '[\"Hang from a pull-up bar with your arms fully extended and your knees bent at a 90-degree angle.\",\"Engage your core and lift your knees towards your chest, bringing them as close to your elbows as possible.\",\"Slowly lower your legs back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 10, 4, 2, '2024-02-15 17:56:27', '2024-02-15 17:56:28', 60),
(61, 'arm slingers hanging straight legs', '61.gif', 'shoulders,back', '[\"Hang from a pull-up bar with your arms fully extended and your legs straight down.\",\"Engage your core and lift your legs up in front of you until they are parallel to the ground.\",\"Hold for a moment at the top, then slowly lower your legs back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 10, 4, 2, '2024-02-15 17:56:28', '2024-02-15 17:56:29', 61),
(62, 'arms apart circular toe touch (male)', '62.gif', 'hamstrings,quadriceps,calves', '[\"Stand with your feet shoulder-width apart and arms extended to the sides.\",\"Keeping your legs straight, bend forward at the waist and reach down towards your toes with your right hand.\",\"As you reach down, simultaneously lift your left leg straight up behind you, maintaining balance.\",\"Return to the starting position and repeat the movement with your left hand reaching towards your toes and your right leg lifting up behind you.\",\"Continue alternating sides for the desired number of repetitions.\"]', 'en', 9, 4, 9, '2024-02-15 17:56:29', '2024-02-15 17:56:30', 62),
(63, 'arms overhead full sit-up (male)', '63.gif', 'hip flexors,lower back', '[\"Lie flat on your back with your knees bent and feet flat on the ground.\",\"Extend your arms overhead, keeping them straight.\",\"Engaging your abs, slowly lift your upper body off the ground, curling forward until your torso is upright.\",\"Pause for a moment at the top, then slowly lower your upper body back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 10, 4, 2, '2024-02-15 17:56:30', '2024-02-15 17:56:32', 63),
(64, 'assisted chest dip (kneeling)', '64.gif', 'triceps,shoulders', '[\"Adjust the machine to your desired height and secure your knees on the pad.\",\"Grasp the handles with your palms facing down and your arms fully extended.\",\"Lower your body by bending your elbows until your upper arms are parallel to the floor.\",\"Pause for a moment, then push yourself back up to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 3, 12, 13, '2024-02-15 17:56:32', '2024-02-15 17:56:33', 64),
(65, 'assisted hanging knee raise', '65.gif', 'hip flexors', '[\"Hang from a pull-up bar with your arms fully extended and your palms facing away from you.\",\"Engage your core muscles and lift your knees towards your chest, bending at the hips and knees.\",\"Pause for a moment at the top of the movement, squeezing your abs.\",\"Slowly lower your legs back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 10, 1, 2, '2024-02-15 17:56:33', '2024-02-15 17:56:34', 65),
(66, 'assisted hanging knee raise with throw down', '66.gif', 'hip flexors,lower back', '[\"Hang from a pull-up bar with your arms fully extended and your palms facing away from you.\",\"Engage your core and lift your knees towards your chest, keeping your legs together.\",\"Once your knees are at chest level, explosively throw your legs down towards the ground, extending them fully.\",\"Allow your legs to swing back up and repeat the movement for the desired number of repetitions.\"]', 'en', 10, 1, 2, '2024-02-15 17:56:34', '2024-02-15 17:56:35', 66),
(67, 'assisted lying calves stretch', '67.gif', 'hamstrings', '[\"Lie on your back with your legs extended.\",\"Bend one knee and place your foot flat on the ground.\",\"Using your hands or a towel, gently pull your toes towards your body, feeling a stretch in your calf.\",\"Hold the stretch for 20-30 seconds.\",\"Release the stretch and repeat on the other leg.\"]', 'en', 5, 1, 5, '2024-02-15 17:56:35', '2024-02-15 17:56:36', 67),
(68, 'assisted lying glutes stretch', '68.gif', 'hamstrings', '[\"Lie on your back with your legs extended.\",\"Bend your right knee and place your right ankle on your left thigh, just above the knee.\",\"Grasp your left thigh with both hands and gently pull it towards your chest.\",\"Hold the stretch for 20-30 seconds.\",\"Release and repeat on the other side.\"]', 'en', 9, 1, 9, '2024-02-15 17:56:36', '2024-02-15 17:56:38', 68),
(69, 'assisted lying gluteus and piriformis stretch', '69.gif', 'hamstrings', '[\"Lie on your back with your legs extended.\",\"Bend your right knee and place your right ankle on your left thigh, just above the knee.\",\"Grasp your left thigh with both hands and gently pull it towards your chest.\",\"Hold the stretch for 20-30 seconds.\",\"Release the stretch and repeat on the other side.\"]', 'en', 9, 1, 9, '2024-02-15 17:56:38', '2024-02-15 17:56:39', 69),
(70, 'assisted lying leg raise with lateral throw down', '70.gif', 'hip flexors,obliques', '[\"Lie flat on your back with your legs extended and your arms by your sides.\",\"Place your hands under your glutes for support.\",\"Engage your abs and lift your legs off the ground, keeping them straight.\",\"While keeping your legs together, lower them to one side until they are a few inches above the ground.\",\"Pause for a moment, then lift your legs back to the starting position.\",\"Repeat the movement to the other side.\",\"Continue alternating sides for the desired number of repetitions.\"]', 'en', 10, 1, 2, '2024-02-15 17:56:39', '2024-02-15 17:56:40', 70),
(71, 'assisted lying leg raise with throw down', '71.gif', 'hip flexors,quadriceps', '[\"Lie flat on your back with your legs extended and your arms by your sides.\",\"Place your hands under your glutes for support.\",\"Engage your core and lift your legs off the ground, keeping them straight.\",\"Raise your legs until they are perpendicular to the ground.\",\"Lower your legs back down to the starting position.\",\"Simultaneously, throw your legs down towards the ground, keeping them straight.\",\"Raise your legs back up to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 10, 1, 2, '2024-02-15 17:56:40', '2024-02-15 17:56:41', 71),
(72, 'assisted motion russian twist', '72.gif', 'obliques,lower back', '[\"Sit on the ground with your knees bent and feet flat on the floor.\",\"Hold the medicine ball with both hands in front of your chest.\",\"Lean back slightly, engaging your abs and keeping your back straight.\",\"Slowly twist your torso to the right, bringing the medicine ball towards the right side of your body.\",\"Pause for a moment, then twist your torso to the left, bringing the medicine ball towards the left side of your body.\",\"Continue alternating sides for the desired number of repetitions.\"]', 'en', 10, 13, 2, '2024-02-15 17:56:41', '2024-02-15 17:56:42', 72),
(73, 'assisted parallel close grip pull-up', '73.gif', 'biceps,forearms', '[\"Adjust the machine to your desired weight and height.\",\"Place your hands on the parallel bars with a close grip, palms facing each other.\",\"Hang from the bars with your arms fully extended and your feet off the ground.\",\"Engage your back muscles and pull your body up towards the bars, keeping your elbows close to your body.\",\"Continue pulling until your chin is above the bars.\",\"Pause for a moment at the top, then slowly lower your body back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 1, 12, 11, '2024-02-15 17:56:42', '2024-02-15 17:56:43', 73),
(74, 'assisted prone hamstring', '74.gif', 'glutes,lower back', '[\"Lie face down on a mat or bench with your legs fully extended.\",\"Have a partner or use a resistance band to secure your ankles.\",\"Engage your hamstrings and lift your legs towards your glutes, keeping your knees straight.\",\"Pause for a moment at the top, then slowly lower your legs back down to the starting position.\",\"Repeat for the desired number of repetitions.\"]', 'en', 9, 1, 10, '2024-02-15 17:56:43', '2024-02-15 17:56:44', 74),
(75, 'assisted prone lying quads stretch', '75.gif', 'hamstrings,glutes', '[\"Lie face down on the ground with your legs extended.\",\"Bend your left knee and reach back with your left hand to grab your left foot or ankle.\",\"Gently pull your left foot towards your glutes, feeling a stretch in your left quad.\",\"Hold the stretch for 20-30 seconds, then release.\",\"Repeat with your right leg.\"]', 'en', 9, 1, 14, '2024-02-15 17:56:44', '2024-02-15 17:56:46', 75),
(76, 'assisted prone rectus femoris stretch', '', 'quadriceps', '[\"Lie face down on the ground with your legs straight.\",\"Bend your right knee and reach back with your right hand to grab your right foot or ankle.\",\"Gently pull your right foot or ankle towards your glutes, feeling a stretch in the front of your right thigh.\",\"Hold the stretch for 20-30 seconds.\",\"Release and repeat on the other side.\"]', 'en', 10, 1, 2, '2024-02-15 17:56:46', '2024-02-15 17:56:46', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2024_02_08_205501_create_body_parts_table', 1),
(14, '2024_02_08_205548_create_equipments_table', 1),
(15, '2024_02_08_205618_create_targets_table', 1),
(16, '2024_02_08_205657_create_exercises_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `targets`
--

CREATE TABLE `targets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(70) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `targets`
--

INSERT INTO `targets` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'abductors', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(2, 'abs', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(3, 'adductors', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(4, 'biceps', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(5, 'calves', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(6, 'cardiovascular system', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(7, 'delts', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(8, 'forearms', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(9, 'glutes', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(10, 'hamstrings', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(11, 'lats', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(12, 'levator scapulae', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(13, 'pectorals', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(14, 'quads', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(15, 'serratus anterior', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(16, 'spine', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(17, 'traps', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(18, 'triceps', '2024-02-15 17:54:20', '2024-02-15 17:54:20'),
(19, 'upper back', '2024-02-15 17:54:20', '2024-02-15 17:54:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `body_parts`
--
ALTER TABLE `body_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `targets`
--
ALTER TABLE `targets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `body_parts`
--
ALTER TABLE `body_parts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `targets`
--
ALTER TABLE `targets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
