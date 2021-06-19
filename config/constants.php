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
define('WRONG_PASSWORD', 'Mật khẩu sai');
define('USERNAME_IS_NOT_EXIST', 'Tên đăng nhập không tồn tại');
define('EMAIL_IS_NOT_EXIST', 'Email không tồn tại');
define('EMAIL_IS_SENT', 'Email đã được gửi');





// ========== ADMIN ==========

// === User's Role ===

define('ROLE_NAME_ADMIN', 'admin');
define('ROLE_NAME_EDITOR', 'editor');
define('ROLE_NAME_MEMBER', 'user');

define('ROLE_ID_ADMIN', 1);
define('ROLE_ID_EDITOR', 2);
define('ROLE_ID_MEMBER', 3);

// === Paginate ===

define('ITEM_PER_PAGE', 20);

// === Loai phong ===

define('PHONG_DON', 'giuong-don');
define('PHONG_DOI', 'giuong-doi');
define('HAI_GIUONG_DON', '2-giuong-don');
define('HAI_GIUONG_DOI', '2-giuong-doi');

define('GIA_PHONG_DON', 200000);
define('GIA_PHONG_DOI', 300000);
define('GIA_HAI_GIUONG_DON', 400000);
define('GIA_HAI_GIUONG_DOI', 500000);

// === Hidden Post ===

define('HIDDEN_POST', 0);
define('APPEAR_POST', 1);

// === Update Post ===

define('UPDATE_POST', 1);

// === title ===

define('TITLE_ADMIN_DASHBOARD', 'DASHBOARD KINGDOM NVHAI');
define('TITLE_ADMIN_POST'     , 'POST MANAGEMENT KINGDOM NVHAI');
define('TITLE_ADMIN_SITE'     , 'SITE MANAGEMENT KINGDOM NVHAI');

define('TITLE_FRONTEND_INDEX', 'SUNLINE MOTEL ROOMS');
define('TITLE_FRONTEND_ABOUT', 'ABOUT SUNLINE');

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
