var gulp = require('gulp');  
var browserify = require('gulp-browserify');  
var concat = require('gulp-concat');  
var jshint = require('gulp-jshint');
var jsdoc = require('gulp-jsdoc');
var uglify = require('gulp-uglify');
var jasmine = require('gulp-jasmine');

//TODO: figure out if there's any value to this
//var refresh = require('gulp-livereload');  
//var lr = require('tiny-lr');  
//var server = lr();

gulp.task('scripts', function() {  
    gulp.src(['src/index.js'])
        .pipe(browserify({ standalone:'ausglobe' }))
        .pipe(concat('ausglobe.js'))
        .pipe(gulp.dest('src/build'));
        
    gulp.src(['src/build/ausglobe.js'])
        .pipe(uglify())
        .pipe(concat('ausglobe.min.js'))
        .pipe(gulp.dest('src/build'));

    gulp.src(['src/copyrightHeader.js', 'src/build/ausglobe.js'])
        .pipe(concat('ausglobe.js'))
        .pipe(gulp.dest('public'));
        
    gulp.src(['src/copyrightHeader.js', 'src/build/ausglobe.min.js'])
        .pipe(concat('ausglobe.min.js'))
        .pipe(gulp.dest('public'));
        
//        .pipe(refresh(server))
})

gulp.task('lint', function(){
    gulp.src('src/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

gulp.task('docs', function(){
    gulp.src('src/*.js')
        .pipe(jsdoc('./public/doc'));
});

gulp.task('test', function () {
    return gulp.src('public/specs/*.js')
        .pipe(jasmine());
});

/*
gulp.task('lr-server', function() {  
    server.listen(35729, function(err) {
        if(err) return console.log(err);
    });
})
*/

gulp.task('default', function() {  
    gulp.run('scripts', 'docs');

    gulp.watch('src/*.js', function(event) {
        gulp.run('scripts');
    })
})
