# Laravel-boilerplate 5.5
Boilerplates for new laravel project.
##Features
+ Meta, Analytics, 404 & 503
+ favicon 
+ htaccess
+ Button components, Typo, my_variables & svg
+ core js / components / add app.js
+ Susy, Bootstraps, Bulma
+ package.json
+ git-ignore
+ env
+ webpack

+ editorconfig
 
## Instructions
### Step 1
+ Install the (latest) Laravel
+ Download this Repo into a separate folder.

### Step 2
+ Copy the public and resource folders into your laravel project folder.
+ Copy the add line .env.example file contents into your Laravel .env file. same to all add line files.

### Step 3
Run this command
```bash
composer install
npm install

cp .env.example .env 
php artisan key:generate

php artisan serve
```

### Step 4
If you have database then 
*create DB*
*update .env*

```bash
php artisan migrate
```
that’s all.


## Running the Laravel project
### Fixing the Apache http.conf
+ In http.conf file, copy everything between <Directory C:/xampp/htdocs"> and </Directory> and paste it immediately below with C:/xampp/htdocs replaced with your desired directory (in this case C:/Projects) to give your server the correct permissions for the new directory.
+ Find the <IfModule alias_module></IfModule> section (~line 300) and add
Alias /transitCalculator "C:/Projects/transitCalculator/trunk"

### Run the following command
``` bash
npm run dev
npm run watch
```

### Contributing
Please feel free to make any pull requests, or e-mail me a feature request you would like to see in the future to bdjunayed@gmail.com.
N.B: Please see the [contribution text file] (https://github.com/bdjunayed/Laravel-Gulp-Boilerplate/blob/master/CONTRIBUTING.md).

### Donations
If you would like to help the continued efforts of this project, any size [donations](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=JJWUZ4E9S9SFG&lc=US&item_name=Laravel%205%20Boilerplate&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted) are welcomed and highly appreciated.

### License
MIT: [http://microtechna.com](http:/microtechna.com)

#Thank you!
[@bdjunayed](https://twitter.com/bdjunayed)
