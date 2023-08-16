<!DOCTYPE html>  
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>To do app</title>
        <meta name="description" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="heading"><h1>To Do List</h1></div>
        <div class="wrapper">
            <form class="form">
                <div class="inputBox">
                    <input type="text" id="text" placeholder="Enter your task" required>
                    <button id="btn"><i class="fa fa-plus"></i></button>
                </div>
            </form>
            <ul id="data">

            </ul>
            <div class="footer">
                <p id="total_task">Total Task </p>
                <button id="clear">clear</button>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>