# PayTabs Egypt 's Assignment
PayTabs Egypt Team
Thank you for informing ,me that my resume has been shortlisted in the screening process .
Job Applicant : Abdallah Ashraf Mohamed
Table design in the database for all categories and subs
CREATE TABLE `category` (
       `id` int(11) NOT NULL AUTO_INCREMENT,
        `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
        `value` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
        `subCategoryId` int(11) DEFAULT NULL,
        `level` int(11) NOT NULL,
        PRIMARY KEY (`id`)
       )
