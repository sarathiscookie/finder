const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/pace.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

mix.styles('resources/css/laraspace.css', 'public/css/laraspace.css');

mix.combine([
    // ** Required Plugins **
    'resources/js/plugins/bootstrap/tether.js',
    'resources/js/plugins/customScrollBar/customScrollBar.js',

    // ** Additional Plugins **
    'resources/js/plugins/ladda/spin.js',
    'resources/js/plugins/ladda/ladda.js',
    'resources/js/plugins/toastr/toastr.js',
    'resources/js/plugins/notie/notie.js',
    'resources/js/plugins/jquery-validate/jquery.validate.js',
    'resources/js/plugins/jquery-validate/additional-methods.js',
    'resources/js/plugins/clockpicker/bootstrap-clockpicker.js',
    'resources/js/plugins/switchery/switchery.js',
    'resources/js/plugins/select2/select2.js',
    'resources/js/plugins/datatables/dataTables.min.js',
    'resources/js/plugins/datatables/dataTables.bootstrap.js',
    'resources/js/plugins/multiselect/jquery.multi-select.js',
    'resources/js/plugins/bootstrapSelect/bootstrap-select.js',
    'resources/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js',
    'resources/js/plugins/timepicker/jquery.timepicker.js',
    'resources/js/plugins/summernote/summernote.js',
    'resources/js/plugins/simplemde/simplemde.min.js',
    'resources/js/plugins/prism/prism.js',
    'resources/js/plugins/charts/sparkline/jquery.sparkline.js',
    'resources/js/plugins/charts/amcharts/amcharts.js',
    'resources/js/plugins/charts/amcharts/serial.js',
    'resources/js/plugins/charts/amcharts/amstock.js',
    'resources/js/plugins/charts/amcharts/xy.js',
    'resources/js/plugins/charts/amcharts/ammap.js',
    'resources/js/plugins/charts/amcharts/worldLow.js',
    'resources/js/plugins/charts/amcharts/pie.js',
    'resources/js/plugins/charts/amcharts/animate.js',
    'resources/js/plugins/charts/amcharts/export.js',
    'resources/js/plugins/charts/amcharts/radar.js',
    'resources/js/plugins/charts/amcharts/polarScatter.js',
    'resources/js/plugins/charts/amcharts/light.js',
    'resources/js/plugins/charts/morris/raphael.js',
    'resources/js/plugins/charts/morris/morris.js',
    'resources/js/plugins/charts/gauges/gauge.js',
    'resources/js/plugins/alertify/alertify.js',
    'resources/js/plugins/easypiecharts/jquery.easypiechart.js',
    'resources/js/plugins/metisMenu/metisMenu.js',
    'resources/js/plugins/form-wizard/jquery.steps.js',
    'resources/js/plugins/bar-rating/jquery.barrating.js',
    'resources/js/plugins/nestable/nestable.js',
    'resources/js/plugins/jstree/jstree.js',
    'resources/js/plugins/gallery/image/photoswipe.js',
    'resources/js/plugins/gallery/image/photoswipe-ui-default.js',
    'resources/js/plugins/gallery/image/mp.mansory.js',
    'resources/js/plugins/gallery/video/videobox.js',
    'resources/js/plugins/rating/jquery.raty.js',
    'resources/js/plugins/zoom/transition.js',
    'resources/js/plugins/zoom/zoom.js',
    'resources/js/plugins/calendar/moment.js',
    'resources/js/plugins/calendar/fullcalendar.js',
    'resources/js/plugins/imageCropper/cropper.js',
    'resources/js/plugins/ace-editor/ace.js',
    'resources/js/plugins/icons/evil.js',
    'resources/js/plugins/ace-editor/twilight.js',

    // ** Laraspace Inits **
    'resources/js/plugins/laraspace/laraspace-layout.js',
    'resources/js/plugins/laraspace/laraspace-notifs.js',
    'resources/js/plugins/laraspace/laraspace-forms.js'

], 'public/js/plugins.js');

if (mix.inProduction()) {
    mix.version();
}
