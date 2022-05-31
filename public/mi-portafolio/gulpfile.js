var gulp        = require('gulp');
let plumber       = require("gulp-plumber");
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass')(require('sass'));

var onError = function(err){
  console.log("Se ha producido un error: ", err.message);
  this.emit("end");
}

// Compile sass into CSS & auto-inject into browsers
function sassTask(cb) {
   gulp.src("./assets/sass/**/*.sass")
      .pipe(plumber({errorHandler:onError}))
      .pipe(sass())
      .pipe(gulp.dest("assets/css"))
      .pipe(browserSync.stream())
    cb();
};


// Static Server + watching scss/html files
function serveTask(){

    browserSync.init({
        server: "./"
    });

    gulp.watch("./assets/sass/**/*.sass", gulp.series(sassTask) );
    gulp.watch("./**/*.html").on('change', browserSync.reload);

};


exports.sassTask = sassTask;
exports.default = gulp.parallel(sassTask, serveTask);

