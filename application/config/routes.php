<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = 'copennews';
$route['home'] = 'copennews/home';
$route['international'] = 'copennews/international';
$route['article'] = 'copennews/article';
$route['article_1'] = 'copennews/article_1';
$route['article_2'] = 'copennews/article_2';
$route['article_3'] = 'copennews/article_3';
$route['article_4'] = 'copennews/article_4';
$route['voting'] = 'copennews/cast_vote';
$route['location'] = 'copennews/location';
$route['user/account'] = 'copennews/account';
$route['user/login'] = 'copennews/login';
$route['user/registration'] = 'copennews/registration';

$route['verify/(:any)'] = "copennews/verify/$1";

$route['user/logout'] = 'copennews/logout';
$route['user/emailChecking'] = 'copennews/email_check';
$route['article/page1'] = 'copennews/article_page';

$route['upload/image'] = 'upload';

$route['404_override'] = 'error';


/*********** ROUTES FOR ADMIN PANEL *******************/

$route['admin'] = 'login';

$route['loginMe'] = 'login/loginMe';
$route['dashboard'] = 'user';
$route['logout'] = 'user/logout';

$route['postListing'] = 'user/postListing';
$route['addNewPost'] = "user/addNewPost";
$route['addNewP'] = "user/addNewP";

//$route['postListing'] = 'post/postListing';
$route['postListing/(:num)'] = "user/postListing/$1";
//$route['addNewP'] = "post/addNewP";
//$route['addNewPost'] = "post/addNewPost";
$route['editOldP'] = "user/editOldP";
$route['editOldP/(:num)'] = "user/editOldP/$1";
$route['editPost'] = "user/editPost";
$route['deletePost'] = "user/deletePost";

$route['userListing'] = 'user/userListing';
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";
$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";

$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";

$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";

//$route['articleListing'] = 'user/articleListing';


/* End of file routes.php */
/* Location: ./application/config/routes.php */