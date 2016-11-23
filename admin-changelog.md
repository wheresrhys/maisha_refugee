 - Disable comments plugin - set to 'Everything'
 - Disable emoji plugin
 - Disable sidebar plugin
 - Disable soliloquy and soliloquy instagram plugins
 - Added lazyload responsive plugin (need to disable for first image)
 - add on line 110     
    if (isset($attr['data-no-lazyload'])) {
        return $attr;
    }
 - w3 total cache
TODO
- responsive images on pages
- no icon font
- reimplement nav etc without jq
- rewrite styles
- svg logo
