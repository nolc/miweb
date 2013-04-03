// Originaly CodeIgniter i18n library by Jérôme Jaglale
// http://maestric.com/en/doc/php/codeigniter_i18n
//modification by Yeb Reitsma

/*
CODEIGNITER 2.0 i18n LIBRARY
*/

fixed a few bugs and cleaned up some code or changed it in a way it is makes more sence to me

Both these files go into the applications/core folder.

add these lines to your application/config/routes.php file with your languages:

// URI like '/en/about' -> use controller 'about'
$route['^(nl|de|en|fr)/(.+)$'] = "$2";

// '/en' and '/fr' URIs -> use default controller
$route['^(nl|de|en|fr)$'] = $route['default_controller'];



If you use it in combination with the HMVC modular extention class you can simply oncomment the top lines and remove the others.
If you run into any trouble the best place to find help are te url on top of this file and de codeignier forum

Good luck


