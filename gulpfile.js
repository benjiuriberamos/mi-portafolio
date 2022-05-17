let gulp          = require('gulp');
let plumber       = require("gulp-plumber");
let sass          = require('gulp-sass')(require('sass'));
let prefix        = require("gulp-autoprefixer");
let concat        = require('gulp-concat');
//let sourcemaps    = require("gulp-sourcemaps");
let notify        = require("gulp-notify");
var serve         = require('gulp-serve');
var refresh         = require('gulp-refresh');

var onError = function(err){
  console.log("Se ha producido un error: ", err.message);
  this.emit("end");
}

gulp.task("sass", function(){
  return gulp.src(['assets/sass/*.sass'])
  .pipe(plumber({errorHandler:onError}))
  .pipe(sass({outputStyle: 'expanded'}))
  .pipe(prefix("last 2 versions"))
  .pipe(gulp.dest('assets/css'))
  //.pipe(refresh())
  //.pipe(notify({message: "SASS tarea finalizada 💯"}))
});


gulp.task('serve', serve(['./']));
gulp.task('serve-build', serve(['public', 'build']));
gulp.task('serve-prod', serve({
  root: ['public', 'build'],
  port: 8081,
  middleware: function(req, res) {
    // custom optional middleware
  }
}));

// ---------------------------------------
// TAREA WATCH
// ---------------------------------------
gulp.task("watch", function(){
   gulp.watch('./assets/sass/**/*.sass', gulp.series('sass'));
});

gulp.task('default', gulp.parallel('sass', 'serve', 'watch'));