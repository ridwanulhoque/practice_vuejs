<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <style>
        .blue{
            background-color: blue; width: 200px; height: 200px;
        }

        .red{
            background-color: red; width: 200px; height: 200px;
        }
    </style>
</head>
<body>
    <div id="app">
        <input type="text" v-on:input="cssClass = $event.target.value">
        <p>Class {{ cssClass }}</p>
        <div v-bind:class="cssClass"></div>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                cssClass: ''
            }
        });
    </script>
</body>
</html>