<?php
function wikiplus_custom_login_style() { ?>
    <style type="text/css">
        body.login.login-action-login {
            background: linear-gradient(112.36deg, #324C54 0.76%, #171E20 36.31%, #171E20 53.27%, #41293A 99.38%);
        }
        form#loginform {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
        }
        .login form .input, 
        .login form input[type=checkbox], 
        .login input[type=text] {
            background: #171E20 !important;
        }
        .login label {
            color: #fff;
        }
        span.dashicons.dashicons-visibility {
            color: #fff;
        }
        input#wp-submit {
            background: #ED0080;
            border: 1px solid #ED0080;
            box-shadow: 0px 0px 20px rgba(237, 0, 128, 0.5);
            border-radius: 15px;
            padding: 5px 32px;
            color: #fff;
        }
        .login #backtoblog a, 
        .login #nav a {
            color: #fff !important;
        }
        .login #backtoblog a:hover, 
        .login #nav a:hover, 
        .login h1 a:hover {
            color: #ED0080 !important;
        }
        .login h1 a {
            background-image: none !important;
            font-size: 0 !important;
            width: unset !important;
            text-indent: unset !important;
            height: unset !important;
            position: relative;
            overflow: unset !important;
        }
        .login h1 a:after {
            content: 'Powered by Wordpress';
            color: #ED0080;
            font-size: 34px;
            font-family: monospace;
            font-weight: 700;
        }
        .login h1 a:before {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            width: 100%;
            height: 30px;
            background: rgba(237, 0, 128, 0.3);
            filter: blur(30px);
            border-radius: 50px 50px 0 0;
        }
        .wp-core-ui select {
            background: #171E20 !important;
            color: #fff !important;
            border-radius: 10px !important;
        }
        form#language-switcher input.button {
            background: #ED0080;
            color: #fff;
            border: 1px solid #ED0080;
            border-radius: 10px;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'wikiplus_custom_login_style');