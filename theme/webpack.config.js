//webpack.config.js
const path = require('path');
const htmlPlugin = require('html-webpack-plugin');
module.exports = {
    entry: {
      a: './src/js/statesHandler.js',
      b:'./src/js/modules/nav.js',
      c:'./src/js/modules/utm/utm.js',
      d:'./src/js/vendor/jquery/jquery-3.6.0.min.js',
    },
    output: {
      path: path.resolve(__dirname, '../public'),
      publicPath: '../public/',
      filename: '[name].[contenthash].js',
      assetModuleFilename: 'src/[name].[contenthash][ext]'
    },
module: {
    rules: [
    {
      test: /\.html$/,
      loader: "html-loader"
    }
    ]
},
plugins: [
        new htmlPlugin({
        template:path.resolve(__dirname,'index.html')

    })
]
};