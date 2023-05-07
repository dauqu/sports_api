<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row">
           
            <div class="h-80vh">
                <p class="py-6">Returns list of supported competitions included in your current subscription plan</p>
                <?php
                $url = 'https://apiv2.allsportsapi.com/football/?met=Livescore&APIkey=05d00d373a157a4366900c7f3f16cb227f3f39bec7c48616ba6d24f1db1d12d3';
                $response = file_get_contents($url);
                $data = json_decode($response, true);

                echo "<pre>";
                print_r($data);
                echo "</pre>";
                ?>
            </div>
        </div>
    </div>
</body>

</html>