CREATE TABLE IF NOT EXISTS Transactions(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `AccountSrc` INT NOT NULL,
    `AccountDest` INT NOT NULL,
    `BalanceChange` DECIMAL(12,2) DEFAULT 0,
    `TransactionType` VARCHAR(100) NOT NULL,
    `Memo` VARCHAR(100) NOT NULL,
    `ExpectedTotal` DECIMAL(12,2) DEFAULT 0,
    `Created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `Modified` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (AccountSrc) REFERENCES Accounts(id),
    FOREIGN KEY (AccountDest) REFERENCES Accounts(id),
    constraint ZeroTransfers CHECK(BalanceChange != 0)
)
