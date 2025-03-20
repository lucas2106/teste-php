CREATE DATABASE todo_list;
USE todo_list;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    status INT DEFAULT 0, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Dados de exemplo
INSERT INTO tasks (title, description, status) VALUES
('Comprar leite', 'Ir ao mercado e comprar leite', 0),
('Estudar PHP', 'Fazer exercícios de CRUD com PHP e MySQL', 0),
('Enviar relatório', 'Enviar o relatório de progresso para o chefe', 1);