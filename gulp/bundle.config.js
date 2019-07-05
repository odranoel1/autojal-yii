// bundle.config.js
module.exports = {
  bundle: {
    vendor: {
      scripts: [
        // './vendor/bower-asset/jquery/dist/jquery.js',
        // './vendor/bower-asset/bootstrap/dist/js/bootstrap.js',
        './vendor/bower-asset/jquery-sidebar/src/jquery.sidebar.js',
        './vendor/bower-asset/matchHeight/dist/jquery.matchHeight.js',
        './vendor/bower-asset/owl.carousel/dist/owl.carousel.js',
        // './vendor/bower-asset/sticky.js/dist/sticky.js',
        // './vendor/bower-asset/enquire/dist/enquire.js',
        // './vendor/bower-asset/elevatezoom/jquery.elevateZoom-2.2.3.js',
        './vendor/bower-asset/nano/nano.js',
        './vendor/bower-asset/numeral/numeral.js',
        './vendor/bower-asset/numeral/locales.js',
        './vendor/bower-asset/slider-pro/dist/js/jquery.sliderPro.js',
        './vendor/bower-asset/magnify/dist/js/jquery.magnify.js',
        // './vendor/bower-asset/pnotify/dist/pnotify.js',
        // './vendor/bower-asset/iCheck/icheck.js'
      ],
      styles: [
        './vendor/bower-asset/bootstrap/dist/css/bootstrap.css',
        './vendor/bower-asset/slider-pro/dist/css/slider-pro.css',
        './vendor/bower-asset/owl.carousel/dist/assets/owl.carousel.css',
        './vendor/bower-asset/owl.carousel/dist/assets/owl.theme.default.css',
        './vendor/bower-asset/magnify/dist/css/magnify.css',
        // './vendor/bower-asset/pnotify/dist/pnotify.css',
        // './vendor/bower-asset/pnotify/dist/pnotify.brighttheme.css',
        // './vendor/bower-asset/iCheck/skins/minimal/minimal.css',
        // './vendor/bower-asset/iCheck/skins/minimal/purple.css',
        // './dev/css/fa.css'
      ],
      options: {
        uglify: false,
        minCSS: false,
        rev: false
      }
    },
    main: {
      scripts: [
        './dev/js/**/*.js'
      ],
      styles: [
      	'./dev/css/style.css'
      ],
      options: {
        rev: false
      }
    }
  },
  copy: [
    {
      src: './dev/**/*.{jpg,png,gif,svg}',
      base: './dev'
    },
    {
      src: './dev/**/*.{eot,svg,ttf,woff,woff2,otf}',
      base: './dev'
    }
  ]
};
