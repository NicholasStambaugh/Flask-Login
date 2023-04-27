SELECT * FROM users;


SELECT COUNT(*) FROM users;


SELECT username, email FROM users WHERE role = 'admin';


SELECT username, MAX(login_date) FROM logins WHERE login_date >= DATE_SUB(NOW(), INTERVAL 30 DAY) GROUP BY username;


SELECT username, COUNT(*) FROM logins WHERE login_date >= DATE_SUB(NOW(), INTERVAL 7 DAY) GROUP BY username;
