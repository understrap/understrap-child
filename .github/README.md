# understrap-child
Basic Child Theme for Understrap Theme Framework: https://github.com/understrap/understrap

## How it works
Understrap Child Theme shares with the parent theme all PHP files and adds its own functions.php on top of the Understrap parent theme's functions.php.

**IT DOES NOT LOAD THE PARENT THEMES CSS FILE(S)!** Instead it uses the Understrap Parent Theme as a dependency via npm and compiles its own CSS file from it.

Understrap Child Theme uses the Enqueue method to load and sort the CSS file the right way instead of the old @import method.

## Installation
1. Install the parent theme Understrap first: `https://github.com/understrap/understrap` or `https://wordpress.org/themes/understrap/`
   - IMPORTANT: If you download Understrap from GitHub make sure you rename the "understrap-master.zip" file to "understrap.zip" or you might have problems using this child theme!
1. Upload the understrap-child folder to your wp-content/themes directory
1. Go into your WP admin backend 
1. Go to "Appearance -> Themes"
1. Activate the Understrap Child theme

## Editing
Add your own CSS styles to `/src/sass/theme/_child_theme.scss`
or import you own files into `/src/sass/theme/understrap-child.scss`

To overwrite Bootstrap's or Understrap's base variables just add your own value to:
`/src/sass/theme/_child_theme_variables.scss`

For example, the "$primary" variable is used by both Bootstrap and Understrap.

Add your own color like: `$primary: #ff6600;` in `/src/sass/theme/_child_theme_variables.scss` to overwrite it. This change will automatically apply to all elements that use the $brand-primary variable.

It will be outputted into:
`/css/understrap-child.min.css` and `/css/understrap-child.css`

So you have one clean CSS file at the end and just one request.

Add your own JS to `/src/js/custom-javascript.js` to have it bundled into `/js/child-theme.js` and `/js/child-theme.min.js`. If you'd like to add additional files, you'll need to add the filenames to the Rollup.js config file: `/src/build/rollup.config.js`.

## Developing With NPM, postCSS, Rollup, SASS and BrowserSync

This theme uses [sass](https://www.npmjs.com/package/sass) and [postCSS](https://postcss.org) to handle compiling all of the styles into one style sheet. The theme also includes [rollup.js](https://www.rollupjs.org/) to handle javascript compilation and minification. These choices are based on the same libraries and npm commands used in Bootstrap. In addition, it comes with [BrowserSync](http://browsersync.io) to handle live reloading while you develop.

### Confused by All the CSS, SCSS, and SASS Files?

Some basics about the files that come with Understrap:
- The theme itself uses the `/style.css` file only to identify the theme inside of WordPress. The file is not loaded by the theme and does not include any styles.
- The `/css/child-theme.css` and its minified little brother `/css/child-theme.min.css` file(s) provides all styles. It is composed of different SCSS sets and one variable file, all imported at `/src/sass/child-theme.scss`
- Your design goes into: `/src/sass/child-theme`.
  - Override Bootstrap by adding your variables to the `/src/sass/theme/_child_theme_variables.scss`
  - Add your custom styles to the `/src/sass/theme/_child_theme.scss` file
  - Or add other .scss files into it and `@import` it into `/src/sass/theme/_child_theme.scss`.

The same goes for Javascript. Just add your javascript to `/src/js/custom-javascript.js` and let rollup.js handle the rest.

### Installing Dependencies
- Make sure you have installed Node.js and BrowserSync on your computer globally
- Open your terminal and browse to the location of your Understrap copy
- Run: `$ npm install`

### Running
To work and compile your Sass files on the fly start:

```bash
npm run watch
```

Or, to run with BrowserSync:

First change the browser-sync options to reflect your environment in the file `/build/browser-sync.config.js` in the beginning of the file:
```javascript
module.exports = {
	"proxy": "localhost/",
	"notify": false,
	"files": ["./css/*.min.css", "./js/*.min.js", "./**/*.php"]
};
```

then run: 

```bash
npm run watch-bs
```


## Bootstrap 4 Support

This child theme uses Bootstrap 5 and requires Understrap Parent Theme 1.1 or greater for best functionality. It does not create JS or CSS files that work with Bootstrap 4 markup. In fact, in the `functions.php` file, this child theme overrides the parent theme's customizer settings.

If you want to build a child theme with Bootstrap 4, please use [the 1.0.1 child theme release](https://github.com/understrap/understrap-child/releases/tag/v1.0.1) as it was the last version built to support Bootstrap 4.
