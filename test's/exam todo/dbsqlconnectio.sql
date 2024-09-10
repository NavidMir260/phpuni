CREATE TABLE todolist (
    id INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(200) NOT NULL,
    time_of_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    is_completed BOOLEAN DEFAULT FALSE,
    is_archived BOOLEAN DEFAULT FALSE
);