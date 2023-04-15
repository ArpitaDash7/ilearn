<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a course</title>
    <style>
        body {
            background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-2044837-jpeg.jpg") center center no-repeat;
            background-size: cover;
            width: 100vw;
            height: 100vh;
            display: grid;
            align-items: center;
            justify-items: center;
            font-size: 12pt;
            color: #2A293E;
            font-family: 'Courier New', Courier, monospace;
        }

        * {
            margin: 0;
            padding: 0;
        }


        .course {
            background: #f8f4e5;
            padding: 50px 100px;
            border-top: 10px solid #f45702;
        }

        label,
        input,
        textarea {
            display: block;
            width: 100%;
            font-size: 12pt;
            line-height: 24pt;

        }

        input,
        textarea {
            border: none;
            border: 1px solid rgba(0, 0, 0, .1);
            border-radius: 2px;
            background: #f8f4e5;
            padding-left: 5px;
            outline: none;
        }

        input:focus,
        textarea:focus {
            border: 1px solid #6bd4b1;
        }

        textarea {
            resize: none
        }

        select {
            border: none;
            border: 1px solid rgba(0, 0, 0, .1);
            border-radius: 2px;
            background: #f8f4e5;
            padding-left: 5px;
            outline: none;
            width: 25%;
            height: 5%;
        }

        input[type="Submit"] {
            background-color: #000000;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;


        }

        input[type="Submit"]:hover {
            background-color: #45a049;
        }

        input[type="file"] {
            height: 5%;
            width: 100%;
            background: #f8f4e5;
            border: none;
            border: 1px solid rgba(0, 0, 0, .1);
            border-radius: 2px;
        }
    </style>


</head>

<body>
    <div class="course">
        <form method="POST" action="addcourse1.php">
            <label for="name">Course Name</label>
            <input type="text" name="course_name" required>
            <br>
            <label for="description">Description</label>
            <textarea name="description" required></textarea>
            <br>
            <label for="duration">Duration (mins)</label>
            <input type="text" name="duration" required>
            <br>
            <label for="access">Access</label>
            <select name="access">
                <option value="free">Free</option>
                <option value="paid">Paid</option>
            </select><br>
            <label for="Price1">Original Price</label>
            <input type="text" name="price1" required>
            <br>
            <label for="Price2">Selling Price</label>
            <input type="text" name="price2" required>
            <br><label for="image">Image</label>
            <input type="file" name="image1"><br>
            <input type="submit" value="Add Course" name="submitbtn">
            <!--<?php if(isset($msg)){ echo $msg;} ?>-->
        </form>
    </div>
</body>