const path = require("path");
const CopyWebpackPlugin = require("copy-webpack-plugin");

module.exports = {
  mode: 'development',
  entry: "./src/index.js",
  //entry 속성에 명시된 파일(./src/index.js)을 기준으로 의존성 트리 만들어 하나의 번들 파일을 만듬
  output: {
    filename: "index.js",
    path: path.resolve(__dirname, "dist"),
    //__dirname은 NodeJS에서 현재 프로젝트 디렉토리를 의미
  },
  plugins: [
    new CopyWebpackPlugin([{ from: "./src/index.html", to: "index.html" }]),
  ],
  //devServer: { contentBase: path.join(__dirname, "dist"), compress: true },
  module: {
    rules: [
       { test: /\.s?css$/, use: [ 'style-loader', 'css-loader', 'sass-loader' ] },
       {
         test: /\.js$/,
         exclude: /(node_modules|bower_components)/,
         loader: 'babel-loader',
         query: {
           presets: ['env'],
           plugins: ['transform-react-jsx', 'transform-object-rest-spread', 'transform-runtime']
         }
       }
    ]
  }

};
