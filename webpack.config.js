module.exports = [

    {
        entry: {
            "dashboard-widgets": "./app/components/dashboard-widgets.js"
        },
        output: {
            filename: "./app/bundle/[name].js",
        },
        module: {
            loaders: [
                { test: /\.vue$/, loader: "vue" }
            ]
        }
    }

];