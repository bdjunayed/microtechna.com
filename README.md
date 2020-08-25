# Laravel-boilerplate 7
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
+ contribution document
+ read me document
 
## Instructions
### Step 1
Install a fresh Laravel.
### Step 2
Clone this repo, copy everything and paste inside the laravel project folder.
### Step 3
Follow the files prefixed with "add"
### Step 4
Edit the readme, npm, webpack, deployment, contribution files
### Step 5 (File permissions)
https://laracasts.com/discuss/channels/general-discussion/laravel-framework-file-permission-security
```bash
chgrp -R www-data storage bootstrap/cache
chmod -R ug+rwx storage bootstrap/cache
```
### Step 6 (Database)
+ Database 
* create DB*
* update .env*
```bash
php artisan migrate
(or) php artisan migrate --seed
(or) php artisan migrate:fresh --seed
```

## Getting start the Laravel project
```bash
composer install
php artisan key:generate
cp .env.example .env 
npm install

//If node is not installed in your system, read this
//https://docs.npmjs.com/cli/uninstall


// make this available in your system (optional)
npm install --global cross-env
npm install -g browser-sync
npm install --global yarn
```

## Running the Laravel project
### Run the following command
``` bash
php artisan serve

npm run dev
// or
npm run watch
```

### Contributing
Please feel free to make any pull requests.

### License
[http://microtechna.com](http:/microtechna.com)

#Thank you!
[@bdjunayed](https://twitter.com/bdjunayed)

## URL Processing(dell all)
```javascript
    .sass('resources/assets/sass/main-style.scss', 'public/css')
          .options({
              processCssUrls: false
    });
```

```css
background: url(/images/example.png?d41d8cd98f00b204e9800998ecf8427e);
```

## sourceMaps +
```javascript
mix.js('resources/assets/js/app.js', 'public/js')
   .sourceMaps();
```

## Vendor Extraction +
```javascript
mix.js('resources/assets/js/app.js', 'public/js')
   .extract(['vue'])
```

The extract method accepts an array of all libraries or modules that you wish to extract into a  vendor.js file.   
To avoid JavaScript errors, be sure to load these files in the proper order:
```html
*See Versioning:
<script src="/js/manifest.js"></script>*
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
```

## Versioning / Cache Busting +
```javascript
mix.js('resources/assets/js/app.js', 'public/js');

if (mix.inProduction()) {
    mix.version();
}
```

```html
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">

<script src="{{mix('js/manifest.js')}}"></script>
<script src="{{mix('js/vendor.js')}}"></script>
<script src="{{mix('js/app.js')}}"></script>
```

## Browsersync Reloading +
```javascript
mix.browserSync('http://localhost:8000');+

// Or...

// https://browsersync.io/docs/options
mix.browserSync({
    proxy: 'my-domain.dev'
});
```

