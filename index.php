<?php 
session_start();
$generatedPass = implode("",array_map(create_function('$s','return substr($s,mt_rand(0,strlen($s)),1);'),array_fill(0,16,"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789")));
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passable</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
    <div class="header">
        <h1>Passable</h1>
        <p>A simple no-fuss selfhostable password generator.</p>
    </div>    
    <div class="passarea">
        <div class="passbox" id="passbox"><?php echo $generatedPass; ?></div>
        <button class="passareabtn copybtn" onclick="copyClip('#passbox')"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
        </svg></button>
        <button class="passareabtn genbtn" onclick="window.location.reload();"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
        </svg></button>
    </div>
    <div class="footer">
        Github | Credits
    </div>
    <script src="assets/js/main.js" defer></script>
</body>
</html>