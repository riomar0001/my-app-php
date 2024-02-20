<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="">
    <div class="flex min-h-screen justify-center items-center bg-gray-100 ">
        <div class="min-w-[900px] shadow-lg bg-white p-10 rounded-2xl m-20">
            <div class="px-4 sm:px-0">
                <h1 class="text-4xl font-semibold leading-7 text-gray-900">Dump and Die</h1>
            </div>
            <div class="mt-6 border-t border-gray-100">
                <dl class="divide-y divide-gray-200">
                    <?php if (!is_array($value)) : ?>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><?= $value ?></dd>
                    <?php else : ?>
                        <?php foreach ($value as $key => $value) : ?>
                            <?php if (is_array($value)) : ?>
                                <?php foreach ($value as $innerKey => $innerVal) : ?>
                                    <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                        <dt class="text-sm font-medium leading-6 text-gray-900"><?= $innerKey ?></dt>
                                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><?= $innerVal ?></dd>
                                    </div>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900"><?= $key ?></dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><?= $value ?></dd>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </dl>
            </div>
        </div>
    </div>
</body>

</html>