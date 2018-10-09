CREATE TABLE `admin` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`email` varchar(100) NOT NULL UNIQUE,
	`password` varchar(100) NOT NULL,
	`created_at` DATE NOT NULL,
	`trash_status` int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE `User` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`email` varchar(100) NOT NULL,
	`password` varchar(100) NOT NULL,
	`status` int(11) NOT NULL DEFAULT '0',
	`created_at` DATE NOT NULL,
	`trash_status` int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE `Events` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`admin_id` int(11) NOT NULL,
	`event_name` varchar(100) NOT NULL,
	`event_details` TEXT NOT NULL,
	`event_fees` int(11) NOT NULL,
	`created_at` DATE NOT NULL,
	`trash_status` int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE `Event_register` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`event_id` int(11) NOT NULL,
	`user_id` int(11) NOT NULL,
	`created_at` DATE NOT NULL,
	`trash_status` int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE `profile` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`admin_id` int(11) NOT NULL,
	`user_id` int(11) NOT NULL,
	`first_name` varchar(100) NOT NULL,
	`last_name` varchar(100) NOT NULL,
	`surname` varchar(100) NOT NULL,
	`study_year` int(11) NOT NULL,
	`obtained_degree` varchar(100) NOT NULL,
	`further_study` TEXT NOT NULL,
	`present_occuption` TEXT NOT NULL,
	`current_position` TEXT NOT NULL,
	`office_address` TEXT NOT NULL,
	`birthdate` DATE NOT NULL,
	`gender` varchar(10) NOT NULL,
	`marital_status` varchar(20) NOT NULL,
	`residential_address` TEXT NOT NULL,
	`phone` varchar(30) NOT NULL,
	`facebook_profile` varchar(100) NOT NULL,
	`twitter_url` varchar(100) NOT NULL,
	`success_role_of_college` TEXT NOT NULL,
	`college_experience` TEXT NOT NULL,
	`created_at` DATE NOT NULL,
	`trash_status` int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE `article_category` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`cat_name` varchar(100) NOT NULL,
	`created_at` DATE NOT NULL,
	`trash_status` int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE `article_blog` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`admin_id` int(11) NOT NULL,
	`user_id` int(11) NOT NULL,
	`article_cat_id` int(11) NOT NULL,
	`article_name` varchar(100) NOT NULL,
	`article_description` TEXT NOT NULL,
	`title_images` TEXT NOT NULL,
	`content_images` TEXT NOT NULL,
	`created_at` DATE NOT NULL,
	`trash_status` int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE `job_category` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`cat_name` varchar(100) NOT NULL,
	`created_at` DATE NOT NULL,
	`trash_status` int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE `job_posting` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`admin_id` int(11) NOT NULL,
	`user_id` int(11) NOT NULL,
	`job_cat_id` int(11) NOT NULL,
	`job_name` varchar(100) NOT NULL,
	`job_description` TEXT NOT NULL,
	`created_at` DATE NOT NULL,
	`trash_status` int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE `Alumni_speak` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`admin_id` int(11) NOT NULL,
	`speaker_name` varchar(100) NOT NULL,
	`speak_title` varchar(100) NOT NULL,
	`description` TEXT NOT NULL,
	`created_at` DATE NOT NULL,
	`trash_status` int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE `fundraising_project` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`admin_id` int(11) NOT NULL,
	`project_name` varchar(100) NOT NULL,
	`description` TEXT NOT NULL,
	`target_amount` bigint NOT NULL,
	`collected_amount` bigint NOT NULL,
	`created_at` DATE NOT NULL,
	`trash_status` int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE `product_posting` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`admin_id` int(11) NOT NULL,
	`product_name` varchar(100) NOT NULL,
	`title_images` TEXT NOT NULL,
	`content_images` TEXT NOT NULL,
	`original_price` bigint NOT NULL,
	`discount_per` int(11) NOT NULL DEFAULT '0',
	`discount_price` bigint NOT NULL,
	`created_at` DATE NOT NULL,
	`trash_status` int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

ALTER TABLE `Events` ADD CONSTRAINT `Events_fk0` FOREIGN KEY (`admin_id`) REFERENCES `admin`(`id`);

ALTER TABLE `Event_register` ADD CONSTRAINT `Event_register_fk0` FOREIGN KEY (`event_id`) REFERENCES `Events`(`id`);

ALTER TABLE `Event_register` ADD CONSTRAINT `Event_register_fk1` FOREIGN KEY (`user_id`) REFERENCES `User`(`id`);

ALTER TABLE `profile` ADD CONSTRAINT `profile_fk0` FOREIGN KEY (`admin_id`) REFERENCES `admin`(`id`);

ALTER TABLE `profile` ADD CONSTRAINT `profile_fk1` FOREIGN KEY (`user_id`) REFERENCES `User`(`id`);

ALTER TABLE `article_blog` ADD CONSTRAINT `article_blog_fk0` FOREIGN KEY (`admin_id`) REFERENCES `admin`(`id`);

ALTER TABLE `article_blog` ADD CONSTRAINT `article_blog_fk1` FOREIGN KEY (`user_id`) REFERENCES `User`(`id`);

ALTER TABLE `article_blog` ADD CONSTRAINT `article_blog_fk2` FOREIGN KEY (`article_cat_id`) REFERENCES `article_category`(`id`);

ALTER TABLE `job_posting` ADD CONSTRAINT `job_posting_fk0` FOREIGN KEY (`admin_id`) REFERENCES `admin`(`id`);

ALTER TABLE `job_posting` ADD CONSTRAINT `job_posting_fk1` FOREIGN KEY (`user_id`) REFERENCES `User`(`id`);

ALTER TABLE `job_posting` ADD CONSTRAINT `job_posting_fk2` FOREIGN KEY (`job_cat_id`) REFERENCES `job_category`(`id`);

ALTER TABLE `Alumni_speak` ADD CONSTRAINT `Alumni_speak_fk0` FOREIGN KEY (`admin_id`) REFERENCES `admin`(`id`);

ALTER TABLE `fundraising_project` ADD CONSTRAINT `fundraising_project_fk0` FOREIGN KEY (`admin_id`) REFERENCES `admin`(`id`);

ALTER TABLE `product_posting` ADD CONSTRAINT `product_posting_fk0` FOREIGN KEY (`admin_id`) REFERENCES `admin`(`id`);

