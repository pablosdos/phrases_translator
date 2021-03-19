CREATE TABLE tx_phrasestranslator_domain_model_phrase (
	uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	phraseGerman varchar(255) DEFAULT '' NOT NULL,
	phraseSpanish varchar(255) DEFAULT '' NOT NULL,
	phraseEnglish varchar(255) DEFAULT '' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);
