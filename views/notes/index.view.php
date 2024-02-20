<?php require base_path('views/partials/head.view.php') ?>
<?php require base_path('views/partials/nav.view.php') ?>


    <div class=" container px-5 py-16 mx-auto grid justify-items-center">
        <div class="grid justify-items-center flex-col justify-items-center   sticky top-0 w-full bg-white p-5 mb-5">
            <form action="/notes/create">
                <button @click="isOpen = true"
                        class="p-8 flex w-[500px] justify-between border cursor-pointer rounded-xl hover:border-transparent hover:bg-gray-100 my-5">
                    <p class="leading-relaxed">Click to add notes</p>
                </button>
            </form>
            <span class="inline-block h-0.5 w-9/12 rounded bg-gray-300 mt-3"></span>
        </div>


        <div class="flex flex-wrap -m-4">
            <?php foreach ($notes as $note) : ?>
                <a href="/note?id=<?= $note["id"] ?>">
                    <div href="#" class="p-4 md:w-1/2 w-full ">
                        <div class="h-full p-8 flex flex-col justify-between border cursor-pointer rounded-xl hover:border-transparent hover:bg-gray-100">
                            <p class="text-left leading-relaxed"><?= htmlspecialchars($note["body"]) ?></p>
                            <div class="flex flex-end mt-5">
                                <a href="#" class="text-gray-500 hover:text-yellow-500 focus:outline-none pr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                                    </svg>
                                </a>
                                <form method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="id" value="<?= $note['id'] ?>">
                                    <Button class="text-gray-500  hover:text-red-500 focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5"
                                             stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                                        </svg>
                                    </Button>
                                </form>
                            </div>
                        </div>
                    </div>
                </a>

            <?php endforeach; ?>
        </div>


    </div>


<?php require base_path('views/partials/footer.view.php') ?>