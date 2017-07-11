## Function fn_get_logo_simple() for CS-Cart
A more simplistic way to get CS-Cart logos. This avoids the messy overkill that `fn_get_logos()` invokes and allows one to actually force a `$company_id` and desired logo type without worrying about runtime or image pairing messing it up.

Useage: `fn_get_logo_simple($company_id = 0, $type = 'theme')` where `$type` has 4 choices theme, mail, favicon, and gift_cert.

Returns an array containing the following items:

    array(
        [image_id] => 28634
        [image_path] => https://www.example.com/images/logos/28/logo.png?t=1493234337
        [alt] => I am an alt
        [image_x] => 266
        [image_y] => 100
        [absolute_path] => /home/account/public_html/images/logos/28/logo.png
        [https_image_path] => https://www.example.com/images/logos/28/logo.png?t=1493234337
        [http_image_path] => http://www.example.com/images/logos/28/logo.png?t=1493234337
        [relative_path] => logos/28/logo.png
    )
