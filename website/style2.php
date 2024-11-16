<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            font-family: 'Muli', sans-serif;
            box-sizing: border-box;
        }

        body {
            background: url('images/bgg.jpg') center/cover no-repeat fixed;
        }

        .card {
            margin-top: 100px; /* Adjust the margin as needed */
            background: rgba(255, 255, 255, 0.8); /* Add a transparent white background to the card */
            padding: 20px;
            border-radius: 10px;
        }

        .divider-text {
            position: relative;
            text-align: center;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .divider-text span {
            padding: 7px;
            font-size: 12px;
            position: relative;
            z-index: 2;
        }

        .divider-text:after {
            content: "";
            position: absolute;
            width: 100%;
            border-bottom: 1px solid #ddd;
            top: 55%;
            left: 0;
            z-index: 1;
        }

        .btn-facebook {
            background-color: #405D9D !important;
            color: #fff !important;
        }

        .btn-gmail {
            background-color: #ea4335 !important;
            color: #fff !important;
        }
    </style>
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
</head>

<body>
