<!DOCTYPE html>
<html>
    <head>
        <title>Encoding</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/tool.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <content>
            <form>
                <div class="field">
                    <label><span>Input text which you want to encode</span>
                        <textarea placeholder="Type ..." id="text-for-encode" autofocus></textarea>
                    </label>
                </div>
                <div class="field">
                    <label><span>Choice Algorithm</span></label>
                    <label>
                        1: 
                        <input type="radio" checked name="algorithm">
                    </label>
                    <label>
                        2: 
                        <input type="radio" name="algorithm">
                    </label>
                    <label>
                        3: 
                        <input type="radio" name="algorithm">
                    </label>
                </div>
                <div class="field">
                    <button id="encode">Encode</button>
                </div>
            </form>
            <div id="error">
            </div>
            <div id="encoded_text">
                    jSBfjDf sdf shdf sdfhvsbdfvd vjiasdbv asbdv iasdfv jsdvsd vhsdvbhsd v
            </div>
        </content>
        <script src="js/tool.js"></script>
    </body>
</html>