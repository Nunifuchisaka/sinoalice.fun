var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    compass = require('gulp-compass'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps');


gulp.task('default', ['watch']);



/*
## StyleSheet
*/

gulp.task('compass_compile', function(){
  gulp.src('src/scss/**/*.scss')
    .pipe(plumber())
    .pipe(compass({
      config_file: 'src/config.rb',
      style: 'compressed',
      comments : false,
      css : 'www/wp_htdocs/wp4grandma/wp-content/themes/grandma/assets/css',
      sass: 'src/scss',
      sourcemap: false
    }));
});



/*
## JavaScript
*/

gulp.task('js_common_compile', function(){
  gulp.src([
      'src/js/common/110_header.js',
      'src/js/common/310_SmoothScroll.js',
      'src/js/common/800_app.js',
      'src/js/common/990_footer.js'
    ])
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(concat('common.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('www/wp_htdocs/wp4grandma/wp-content/themes/grandma/assets/js'));
});



/*
## watch
*/

gulp.task('watch', function(){
  
  gulp.watch('src/scss/**/*.scss', ['compass_compile']);
  
  gulp.watch('src/js/common/**/*.js', ['js_common_compile']);
  
});
