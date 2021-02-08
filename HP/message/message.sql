CREATE TABLE message(
    num INTEGER AUTO_INCREMENT,
    send_id VARCHAR(15) NOT NULL,
    rv_id VARCHAR(15) NOT NULL,
    subject VARCHAR(20) NOT NULL,
    content TEXT,
    regist_day VARCHAR(20),
    PRIMARY KEY(num),
    -- INDEX(send_id),
    -- INDEX(send_id),
    FOREIGN KEY(send_id) REFERENCES user(id),
    FOREIGN KEY(rv_id) REFERENCES user(id)
);