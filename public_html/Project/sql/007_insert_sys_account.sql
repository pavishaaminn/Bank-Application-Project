INSERT INTO Accounts (id, account_number, user_id, account_type)
VALUES(-1, "000000000000", -1, "world") ON DUPLICATE KEY UPDATE modified = CURRENT_TIMESTAMP();