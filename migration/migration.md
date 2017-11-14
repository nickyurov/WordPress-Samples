# WordPress migration
Simple SQL queries for migration WordPress site to the new server.
## Exporting and importing database
### Create dump
```
mysqldump -u USER -pPASSWORD DATABASE > dump.sql
```
### Import dump
```
mysql -u USER_NAME -p DB_NAME < dump.sql
```
## Replacing URLs
### WP-CLI
```
wp search-replace 'example.dev' 'example.com' --skip-columns=guid
```
### SQL
```
/* Update options table */
UPDATE wp_options SET option_value = REPLACE(
    option_value,
    'http://old.com',
    'http://new.com'
)
WHERE option_name = 'home'
OR option_name = 'siteurl';

/* Update post content */
UPDATE wp_posts SET post_content = REPLACE(
    post_content,
    'http://old.com',
    'http://new.com'
);

/* Update term descriptions */
UPDATE wp_term_taxonomy SET description = REPLACE(
    description,
    'http://old.com',
    'http://new.com'
);

/* Update comments */
UPDATE wp_comments SET comment_content = REPLACE(
    comment_content,
    'http://old.com',
    'https://new.com
);
UPDATE wp_comments SET comment_author_url = REPLACE(
    comment_author_url,
    'http://old.com',
    'https://new.com'
);

/* Delete transients */
DELETE FROM wp_options WHERE option_name LIKE ('_transient_%');
DELETE FROM wp_options WHERE option_name LIKE ('_site_transient_%');
```