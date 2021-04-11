<?php
// Rule: function/variable_website_page

// ========== ONE FOR ALL ==========

// === CONNECT DATABASE ===

// define('DB_HOST', '127.0.0.1');
// define('DB_PORT', '3306');
// define('DB_DATABASE', 'nvhai');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');

// === LANGUAGE ===

// define('DEFAULT_LANGUAGE', 'en');

// === Enable ===

define('UNENABLE', false);
define('ENABLE', true);

// ========== ERROR ==========

// === Auth ===
define('WRONG_USERNAME', 'Tên đăng nhập sai');
define('WRONG_PASSWORD', 'Mật khẩu sau');
define('USERNAME_IS_NOT_EXIST', 'Tên đăng nhập sai');





// ========== ADMIN ==========

// === User's Type ===

define('TYPE_MEMBER', 'member');
define('TYPE_EDITOR', 'editor');
define('TYPE_ADMIN', 'admin');

// === Paginate ===

define('ITEM_PER_PAGE', 20);

// === Category ===

define('NO_CATEGORY', 1);
define('WEBSITE_POST', 2);
define('GAME_POST', 3);
define('ANIME_POST', 4);
define('THU_THUAT_IT_POST', 5);


// === Hidden Post ===

define('HIDDEN_POST', 0);
define('APPEAR_POST', 1);

// === Update Post ===

define('UPDATE_POST', 1);

// === title ===

define('TITLE_ADMIN_DASHBOARD', 'DASHBOARD KINGDOM NVHAI');
define('TITLE_ADMIN_POST'     , 'POST MANAGEMENT KINGDOM NVHAI');
define('TITLE_ADMIN_SITE'     , 'SITE MANAGEMENT KINGDOM NVHAI');

define('TITLE_FRONTEND_INDEX', 'NEWS KINGDOM NVHAI');
define('TITLE_FRONTEND_ABOUT', 'ABOUT KINGDOM NVHAI');

// === paginate ===

define('PAGINATE_POST_INDEX', '30');
define('PAGINATE_POST_DELETE', '30');

define('PAGINATE_SITE_INDEX', '15');


// ========== NEWS ==========

// === all ===

define('HOME_POSTS', '5');
define('MOST_VIEW_HOME_POSTS', '4');
define('UPDATE_HOME_POSTS', '4');
define('RECENT_HOME_POSTS', '4');
define('NEWEST_HOME_POSTS', '4');

// === header ===

define('HEADER_NONE', '0');
define('HEADER_TOP_LEFT', '1');
define('HEADER_BOTTOM_LEFT', '2');
define('HEADER_TOP_RIGHT', '3');
define('HEADER_BOTTOM_RIGHT', '4');

// === list post ===

define('POST_PER_CATEGORY', '20');

// === involve posts ===

define('INVOLVE_POST', '4');
