CREATE TABLE %s (
    meta_id bigint(20) NOT NULL AUTO_INCREMENT ,
    %s_id bigint(20),
	meta_key varchar(255),
	meta_value longtext,
    PRIMARY KEY (meta_id)
)
