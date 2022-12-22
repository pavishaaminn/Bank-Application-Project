ALTER TABLE Users ADD COLUMN public TINYINT
default 1
COMMENT 'public account';