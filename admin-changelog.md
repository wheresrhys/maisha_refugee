## RUN WEBPAGE TEST FIRST



 - Added lazyload responsive plugin (need to disable for first image)
 - add on line 110     
    if (isset($attr['data-no-lazyload'])) {
        return $attr;
    }
 - w3 total cache
 - Fast Velocity Minify
    - disable js minify
 - site name in db
 

TODO
- no icon font
- reimplement nav etc without jq
- rewrite styles
- svg logo
- video player

TESTS
before - https://www.webpagetest.org/result/161124_CG_5BF9/
after - 

STEPS

- Copy maisha_refugee DB entry
- Copy maisha_refugee theme
- Install all required plugins
 - Disable comments plugin - set to 'Everything'
 - disable WP-SpamShield plugin
 - Disable emoji plugin
 - Disable sidebar plugin
 - Disable soliloquy and soliloquy instagram plugins
 - enable theme
