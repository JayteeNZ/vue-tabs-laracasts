<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabs</title>
</head>
<body>
    
    <div id="app">
        <tabs>
            <tab name="About Us" :selected="true">
                <h1>Here is the content for the about us tab.</h1>
            </tab>

            <tab name="About Our Culture">
                <h1>Here is the content for the about our culture tab.</h1>
            </tab>

            <tab name="About Our Vision">
                <h1>Here is the content for the about our vision tab.</h1>
            </tab>
        </tabs>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>