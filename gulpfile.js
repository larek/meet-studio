const gulp = require('gulp');
const concat = require('gulp-concat');
const minify = require('gulp-minify');
const babel = require('gulp-babel');
const eslint = require('gulp-eslint');
const cleanCSS = require('gulp-clean-css');



gulp.task('scripts', ['babel'], () => {
  return gulp.src([
      'bower_components/jquery/dist/jquery.min.js',
      'bower_components/fotorama/fotorama.js',
      'bower_components/bootstrap/dist/js/bootstrap.min.js',
      'src/js/js-babeled/*.js',
    ])
    .pipe(gulp.dest('public/js'))
    .pipe(concat('all.js'))
    .pipe(minify())
    .pipe(gulp.dest('public/js'));
})

gulp.task('babel', () => {
  return gulp.src(['./src/js/*.js'])
    .pipe(babel({
      presets: ['es2015']
    }))
    .pipe(gulp.dest('./src/js/js-babeled'));
});

gulp.task('minify-css', () => {
  return gulp.src([
      'src/css/*.css'
    ])
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(gulp.dest('public/css/'));
});

gulp.task('concat-css', () => {
  return gulp.src([
      'bower_components/bootstrap/dist/css/bootstrap.min.css',
      'public/css/site.css'
    ])
    .pipe(concat('all.min.css'))
    .pipe(gulp.dest('public/css'));
});

gulp.task('css', ['minify-css', 'concat-css']);

gulp.task('lint', () => {
  return gulp.src('src/js/*.js')
    .pipe(eslint({
      globals: [
        "$"
      ]
    }))
    .pipe(eslint.format())
    .pipe(eslint.failAfterError());
});

gulp.task('default', ['scripts','css'])
