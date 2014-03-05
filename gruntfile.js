module.exports = function(grunt){

	require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'), 

    uglify: {
      options: {
        beautify: false
      }, 
    	build: {
    		files: {
    			'js/build/main.js': [
            'js/src/consolefix.js',
            'js/src/vendor/jquery.min.js',
            'js/src/vendor/jquery.smartresize.js',
            'js/src/main.js',
            'js/src/vendor/jquery.fitvids.js',
            'js/src/vendor/jquery.modal.js',
          ]
    		}
    	}
    }, 

    cssc: {
      build: {
        options: {
          consolidateViaDeclarations: true,
          consolidateViaSelectors:    true,
          consolidateMediaQueries:    true
        },
        files: {
          'css/all.css': 'css/all.css',
          'css/all-lte-ie8.css': 'css/all-lte-ie8.css'
        }
      }
    },

    cssmin: {
      build: {
        files: {
          'css/all.css': 'css/all.css',
          'css/all-lte-ie8.css': 'css/all-lte-ie8.css',
        }
      }
    },

    sass: {
      build: {
        options: {
          style: 'expanded',
          compass: true,
          lineNumbers: true
        },
        files: {
          'css/all.css': 'sass/all.scss',
          'css/all-lte-ie8.css': 'sass/all-lte-ie8.scss',
        }
      }
    },

    watch: {
      config: {
        files: ['gruntfile.js'], 
        tasks: ['uglify'],
        options: {
          spawn: false,
          interrupt: true
        }
      }, 
    	js: {
    		files: ['js/src/**/*.js'], 
    		tasks: ['uglify'],
        options: {
          spawn: false,
          interrupt: true
        }
    	},
      css: {
        files: ['sass/**/*.scss'],
        tasks: ['sass'],
        options: {
          livereload: 1337,
          spawn: false,
          interrupt: true
        }
      }
    }

  });

  grunt.registerTask('default', []);
  grunt.registerTask('buildcss',  ['sass', 'cssc', 'cssmin']);

};