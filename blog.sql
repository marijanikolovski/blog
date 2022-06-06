CREATE TABLE posts (
    id int(11) AUTO_INCREMENT,
    title varchar(255) NOT NULL,
    body text NOT NULL,
    author varchar(255) NOT NULL,
    created_at date NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO posts (
Title, Body, Author, Created_at) 
VALUES (
'Sample blog post', 'This blog post shows a few different types of content thats supported and styled with Bootstrap. Basic typography, images, and code are all supported. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.', 'Mark', '2014-01-22');

INSERT INTO posts (
Title, Body, Author, Created_at) 
VALUES (
'Another blog post', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum. Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Jacob', '2013-12-23');

INSERT INTO posts (
Title, Body, Author, Created_at) 
VALUES (
'New feature', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.', 'Chris', '2013-12-14');