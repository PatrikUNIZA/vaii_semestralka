CREATE TABLE `courses`
(
    `id`          INT AUTO_INCREMENT PRIMARY KEY,
    `name`        VARCHAR(255) NOT NULL,
    `code`        VARCHAR(20)  NOT NULL,
    `description` TEXT         NULL,
    `capacity`    INT          NOT NULL
);

INSERT INTO `courses` (`name`, `code`, `description`, `capacity`)
VALUES ('Predmet 1', 'P1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 120),
       ('Vývoj webových aplikácií', 'VAII', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 90),
       ('Matematická analýza 1', 'MatA1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 150);
