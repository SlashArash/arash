module.exports = {
  plugins: [
    require('postcss-import')({
      path: ['styles/'],
    }),
    require('postcss-cssnext')({
      	features: {
	      	browsers: ['last 2 versions', 'IE >= 10']
	    }
    }),
    require('cssnano')({
        preset: ['default', {
                discardComments: {
                    removeAll: true,
                },
            }]
    })
  ]
};