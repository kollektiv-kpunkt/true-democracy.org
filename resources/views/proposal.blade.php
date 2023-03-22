<?php
use Illuminate\Support\Str;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proposal: Let's build true democracy</title>
    @vite(["resources/css/app.scss"])
</head>
<body>

    <div class="mx-auto max-w-2xl px-3 pt-6 md:pt-12 pb-24">
        <h2 class="opacity-50 text-xl md:text-3xl italic mb-2">Draft:</h2>
        <h1 class="font-black text-3xl md:text-5xl"><span class="text-white px-2 py-1 box-decoration-clone bg-gradient-to-r from-indigo-700 to-pink-600 leading-loose md:leading-relaxed">Proposal<br>true-democracy.org</span></h1>
        <p class="text-xl md:text-2xl text-gray-700 mt-2 mb-9 underline">Let's build true democracy</p>
        <?php
        $content = file_get_contents(resource_path('docs/proposal.md'));
        $content = Str::of($content)->markdown();
        echo $content;
        ?>
    </div>

    @vite("resources/js/app.js")
</body>
</html>
