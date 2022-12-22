ALTER TABLE Users ADD COLUMN private TINYINT
default 0
COMMENT 'private account';