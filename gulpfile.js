var gulp = require('gulp');

//include plugins
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var minifycss = require('gulp-minify-css');
var livereload = require('gulp-livereload');
var clean = require('gulp-clean');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var pngcrush = require('imagemin-pngcrush');
var htmlmin = require('gulp-htmlmin');
var uncss = require('gulp-uncss');

// Styles
gulp.task('sass', function() {
   gulp.src(['./src/sass/*.scss'])
  .pipe(sass({
    errLogToConsole: true,
    style: 'expanded',
    sourceComments: 'normal'
  }))
  .pipe(autoprefixer(["last 3 versions", "> 0.5%", "ie 8", "ie 7", "Android 2"]))
  .pipe(minifycss())//estaba pesando 309KB
  .pipe(uncss({
            html: ['./src/index.html']
        }))//lo dejó pesando 72KB (WOW)
  .pipe(gulp.dest('./build/css'))
  .pipe(livereload());
});

// JavaScript
gulp.task('scripts', function() {
    gulp.src([
      'src/js/src/*.js'
    ]).pipe(concat('scripts.js'))
      .pipe(uglify())
      .pipe(gulp.dest('./build/js'));

    gulp.src([
      'src/js/vendor/html5.js',
      'src/js/vendor/modernizr.custom.97074.js',
      'src/js/vendor/jquery.js',
      'src/js/vendor/jquery.plugin.js',
      'src/js/vendor/bootstrap.js',
      'src/js/vendor/jquery.bxslider.js',
      'src/js/vendor/jquery.hoverdir.js',
      'src/js/vendor/jquery.prettyPhoto.js'

    ]).pipe(concat('libs.js'))
      .pipe(uglify())
      .pipe(gulp.dest('./build/js'));
});

// las imagenes
gulp.task('imagenes', function () {
    return gulp.src('./src/images/**/*.*')
        .pipe(imagemin({
            progressive: true/*,
            use: [pngcrush()]*/
        }))
        .pipe(gulp.dest('./build/images'));
});

//el HTML

gulp.task('html', function() {
  //gulp.src('./src/*.html')
  gulp.src('./src/index.html')
    .pipe(htmlmin({
    	//opciones: https://github.com/kangax/html-minifier
    	collapseWhitespace: true,
    	removeComments:true
    }))
    .pipe(gulp.dest('./build'));
});

gulp.task('watch', function() {

  gulp.watch('./src/sass/**/*.scss', ['sass']);
  gulp.watch(['./src/js/vendor/*.js','./src/js/src/*.js'], ['scripts']);
  gulp.watch('./src/images/**/*.*', ['imagenes']);
  gulp.watch('./src/*.html', ['html']);

});