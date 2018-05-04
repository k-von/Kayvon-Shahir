const path = require("path");
const HTMLWebpackPlugin = require("html-webpack-plugin");
const CleanWebpackPlugin = require("clean-webpack-plugin");

module.exports = {
  entry: './js/index.js',
  plugins: [
    new CleanWebpackPlugin(['dist']),
    new HTMLWebpackPlugin({
      title: 'Title',
      template: './index.template.html',
      inject: 'head',
      filename: '../index.html'
    })

  ],
  output: {
    filename: '[name].bundle.js',
    chunkFilename: '[name].bundle.js',
    path: path.resolve(__dirname, './dist')
  },
  module: {
    rules: [{
      test: /\.(scss)$/,
      use: [{
          loader: 'style-loader'
        }, {
          loader: 'css-loader'
        }, {
          loader: 'postcss-loader',
          options: {
            plugins: function() {
              return [require('precss'), require('autoprefixer')];
            }
          }
        },
        {
          loader: 'sass-loader'
        }
      ]
    }]


  }

}