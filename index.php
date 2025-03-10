<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-shirt Sizing Planner</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 90vh;
        }
        .button-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            position: sticky;
            top: 0;
            background: white;
            padding-bottom: 10px;
            width: 100%;
        }
        .button-container button {
            margin: 5px;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            color: white;
        }
        .xs { background-color: #3498db; }
        .s { background-color: #2ecc71; }
        .m { background-color: #f1c40f; }
        .l { background-color: #e67e22; }
        .xl { background-color: #e74c3c; }
        .execute { background-color: #8e44ad; margin-top: 10px; }
        .task-list-container {
            width: 100%;
            max-height: 250px;
            overflow-y: auto;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px;
            background: #f9f9f9;
        }
        ul { list-style-type: none; padding: 0; margin: 0; }
        li {
            padding: 5px;
            font-size: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #fff;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .remove-btn {
            background: none;
            border: none;
            color: red;
            font-size: 18px;
            cursor: pointer;
        }
        .result {
            margin-top: 15px;
            padding: 10px;
            font-size: 20px;
            font-weight: bold;
            color: #2c3e50;
            background: #ecf0f1;
            border-radius: 5px;
            display: none;
            width: 100%;
        }
    </style>
    <script type="text/javascript" src="mfaiz.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>T-shirt Sizing Planner</h2>
        <div class="button-container">
            <button class="xs" onclick="addTask('XS')">Add XS</button>
            <button class="s" onclick="addTask('S')">Add S</button>
            <button class="m" onclick="addTask('M')">Add M</button>
            <button class="l" onclick="addTask('L')">Add L</button>
            <button class="xl" onclick="addTask('XL')">Add XL</button>
        </div>
        <div class="task-list-container">
            <ul id="task-list"></ul>
        </div>
        <button class="execute" onclick="execute()">Execute</button>
        <div id="result" class="result"></div>
    </div>

</body>
</html>
