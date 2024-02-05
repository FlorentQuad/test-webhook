<html>

<head>
    <title>Demo Pipeline</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        button {
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(239, 239, 239);
            background-color: rgb(2, 2, 2);
            border: none;
            min-width: min(16rem, 80%);
            max-width: 100%;
            aspect-ratio: 1/1;

            font-size: 3rem;
            font-family: monospace;

            padding: 2rem;
            border-radius: 100%;
            transition: 0.3s all;

            cursor: pointer;
        }

        button:hover {
            transform: scale(1.2);
            border-radius: 1rem;          
        }
    </style>
</head>

<body>
    <button onclick='alert("Hello Word!")'>Boring!</button>
</body>

</html>
