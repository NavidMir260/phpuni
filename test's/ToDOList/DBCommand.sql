CREATE TABLE todos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(300) NOT NULL,
    time_of_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    is_completed BOOLEAN DEFAULT FALSE,
    is_archived BOOLEAN DEFAULT FALSE
)