# Setup WPH for local development

# Install wordpress

Downalod WP from https://wordpress.org/download/

- Install wordpress into a directory like `/usr/local/wph/html`.

# Clone the WPH github

Clone the WPH github repo into the Wordpress `wp-content/themes` directory.

```
cd /usr/local/wph/html/wp-content/themes
git clone git@github.com:daniel-watts/wph.git
```

# Setup a DDEV localhost

Go to the wordpress root directory and run `ddev config`.

```
cd /usr/local/wph/html
ddev config

Project name (html): wph
Docroot Location (current directory):
Project Type: wordpress

ddev start
```

# setup Wordpress

Install and setup Wordpress in the browser:

- Go to http://wph.ddev.site

Run through the Wordpress installation and then login:

```
- Site Title: WPH Dev
- Username: Daniel
- Password: a69LK2SAkG8SB47&DU
- Your Email: mrwattz@gmail.com
```

- Login to wordpress.
- Goto `Appearance` > `Themes`
- Activate the WordPress Helper Theme
- Delete any other available Wordpress themes.

