# understrap-child
Basic Child Theme for UnderStrap Theme Framework: https://github.com/holger1411/understrap

# How it works
It shares with the parent theme all PHP files and adds its own functions.php on top of the UnderStrap parent themes functions.php.

IT DIT NOT LOAD THE PARENT THEMES CSS FILE(S)!
Instead it uses the UnderStrap Parent Theme as dependency via Bower and compiles its own CSS file from it.

Uses the Enqueue method the load and sort the CSS file the right way instead of the old @import methode

# Installation
1. Install the parent theme UnderStrap first: https://github.com/holger1411/understrap
2. Just upload the understrap-child folder to your wp-content/themes directory
3. Go into your WP admin backend 
4. Go to "Appearance -> Themes"
5. Activate the UnderStrap Child theme

# Editing
Add your own CSS styles to /sass/theme/_child_theme.scss
ot import you own files into /sass/theme/understrap-child.scss

To overwrite Bootstrap or UnderStraps base variables just add your own value to:
/sass/theme/_child_theme_variables.scss

For example:
the "$brand-primary" variable is used by both, Bootstrap and UnderStrap.
Add your own color like:
$brand-primary: #ff6600;
in /sass/theme/_child_theme_variables.scss to overwrite it.
That will change automatically all elements who use this variable.
It will be outputted into:
/css/understrap-child.min.css
and
/css/understrap-child.css

So you have one clean CSS file at the end and just one request.