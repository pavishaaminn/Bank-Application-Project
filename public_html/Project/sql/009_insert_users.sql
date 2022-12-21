INSERT INTO Users (id, email, username, password)
VALUES (-1, "", "system", "") ON DUPLICATE KEY UPDATE modified = CURRENT_TIMESTAMP();