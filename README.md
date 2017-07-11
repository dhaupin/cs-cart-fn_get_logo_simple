## Function fn_get_logo_simple() for CS-Cart
A more simplistic way to get CS-Cart logos. This avoids the messy overkill that `fn_get_logos()` invokes and allows one to actually force a company_id and logo type without relying on runtime.

Useage: `fn_get_logo_simple($company_id = 0, $type = 'theme')` where `$type` has 4 choices theme, mail, favicon, and gift_certificate.
