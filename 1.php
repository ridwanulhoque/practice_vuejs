<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
</head>
<body>
    <div id="app">
        <p>{{ title }}</p>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                title: 'Hello World!'
            },
            methods: {
            
            }
        });
    </script>
</body>
</html>
