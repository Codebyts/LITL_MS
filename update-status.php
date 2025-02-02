<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .form-container {
            max-width: 100%;
            height: 300px;
            padding: 50px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        .form-container input[type="text"],
        .form-container textarea {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container .radio-container {
            text-align: center;
            margin-bottom: 50px;
        }
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: orange;
            color: var(--white);
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: lightsalmon;
        }
        .message{
            text-align: center;
            font-weight: bold;
            color: orange;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>UPDATE MEMBERSHIP STATUS</h2>
        <form action="update-status-action.php" method="post">
            <label for="studentnumber">Student Number:</label>
            <input type="text" id="studentnumber" name="studentnumber" required>

            <div class="radio-container"> 
                <input type="radio" id="paid" name="mem_fee_status" value="paid">
                <label for="paid" style="display: inline;"> Paid </label>
                <input type="radio" id="unpaid" name="mem_fee_status" value="unpaid">
                <label for="unpaid" style="display: inline;"> Unpaid </label>
            </div>
            <input type="submit" value="SUBMIT">
        </form>
</body>
</html>