<?php require base_path('views/partials/head.view.php') ?>
<?php require base_path('views/partials/nav.view.php') ?>


<section class="text-gray-600 body-font h-full ">
    <div class=" container px-5 py-16 mx-auto grid justify-items-center">
        <div href="#" class="flex flex-col p-4 md:w-1/2 w-full">
            <form method="POST" class="flex flex-col gap-y-5" action="/notes">
                <a href="/notes" class="flex flew-row w-full items-center gap-x-3 hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:rotate-180">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>
                    <p class="">Go Back</p>
                </a>

                <div class="w-full">
                    <textarea id="body" name="body" class="block w-full h-32 px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg md:h-56  focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Write something"><?= $_POST['body'] ?? '' ?></textarea>
                    <?php if (isset($errors['body'])) : ?>
                        <p class="text-red-500 italic mt-1"><?= $errors['body'] ?></p>
                    <?php endif; ?>
                </div>
                <button type="submit" class="w-full px-6 py-3 mt-4 text-sm font-medium tracking-wide text-white capitalize bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">Add Note</button>

            </form>
        </div>
    </div>
</section>



<?php require base_path('views/partials/footer.view.php') ?>