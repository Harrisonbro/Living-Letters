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
        tasks: ['uglify']
      }, 
    	js: {
    		files: ['js/src/**/*.js'], 
    		tasks: ['uglify']
    	},
      css: {
        files: ['sass/**/*.scss'],
        tasks: ['sass']
      }
    }

  });

  grunt.registerTask('default', []);
  grunt.registerTask('buildcss',  ['sass', 'cssc', 'cssmin']);

};