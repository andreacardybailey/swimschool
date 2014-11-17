/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    // Task configuration.
    jshint: {
      options: {
        curly: true,
        eqeqeq: true,
        immed: true,
        latedef: true,
        newcap: true,
        noarg: true,
        sub: true,
        undef: true,
        unused: true,
        boss: true,
        eqnull: true,
        globals: {}
      },
      gruntfile: {
        src: 'Gruntfile.js'
      }
    },
    sass: {
      options: {
        sourcemap: 'none',
        require: 'susy'
      },
      dist: {
        // files: [{
        //   expand: true,
        //   cwd: 'assets/styles/sass',
        //   src: ['*.scss'],
        //   dest: 'assets/styles/production',
        //   ext: '.css'
        // }]
        files: {
          'assets/styles/production/swimschool.css': 'assets/styles/sass/swimschool.scss',
          'assets/styles/production/swimschool-ie.css': 'assets/styles/sass/swimschool-ie.scss'
        }
      }
    },
    watch: {
      gruntfile: {
        files: '<%= jshint.gruntfile.src %>',
        tasks: ['jshint:gruntfile']
      },
			css: {
				files: '**/*.scss',
				tasks: ['sass']
			}
    }
  });



  // These plugins provide necessary tasks.
  // grunt.loadNpmTasks('grunt-contrib-nodeunit');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Default task.
  grunt.registerTask('default', ['jshint', 'sass']);
  grunt.registerTask('default',['watch']);

};
