const path = require("path");
const webpack = require("webpack");
const CleanWebpackPlugin = require("clean-webpack-plugin");
const ExtractTextPlugin = require("extract-text-webpack-plugin");

const pathsToClean = ["dist"];

const cleanOptions = {
    verbose: true,
    dry: false
};

module.exports = {
    entry: "./src/main.js",
    output: {
        path: path.resolve(__dirname, "dist"),
        filename: "app.js"
    },
    resolve: {
        extensions: [".js", ".vue"],
        alias: {
            vue: "vue/dist/vue.js"
        }
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                loader: "babel-loader",
                options: {
                    presets: ['env']
                },
                exclude: /node_modules/
            },
            {
                test: /\.(sass|scss)$/,
                loader: ExtractTextPlugin.extract({
                    fallback: "style-loader",
                    use: "css-loader!sass-loader"
                })
            },
            {
                test: /\.vue$/,
                loader: "vue-loader",
                options: {
                    loaders: {
                        scss: ExtractTextPlugin.extract({
                            use: "css-loader!sass-loader",
                            fallback: "vue-style-loader"
                        }),
                        sass: ExtractTextPlugin.extract({
                            use: "css-loader!sass-loader?indentedSyntax",
                            fallback: "vue-style-loader"
                        })
                    }
                }
            },
            {
                test: /\.woff(2)?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
                loader: "url-loader?limit=10000&mimetype=application/font-woff"
            },
            {
                test: /\.(ttf|eot|svg|png)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
                loader: "file-loader"
            }
        ]
    },
    plugins: [
        new CleanWebpackPlugin(pathsToClean, cleanOptions),
        new ExtractTextPlugin("./styles.css?[hash]"),
        new webpack.DefinePlugin({
            "process.env": {
                NODE_ENV: 'production'
            }
        }),
        new webpack.LoaderOptionsPlugin({
            minimize: true
        })
    ]
};
