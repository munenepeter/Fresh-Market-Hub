<?php require 'partials/head.php'; ?>
<div class="container mt-8 mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <?php foreach ($users as $user) : ?>
            <div class="card m-2 cursor-pointer border border-gray-400 rounded-lg hover:shadow-md hover:border-opacity-0 transform hover:-translate-y-1 transition-all duration-200">
                <div class="m-3">
                    <div class="items-center justify-center mb-2">
                        <h2 class="text-lg text-center text-blue-600 font-bold  mb-2">User</h2>
                    </div>
                    <div class="divide-x divide-green-500 border border-gray-100 bg-gray-200 rounded-full py-3 px-6 flex items-center justify-between leading-none md:p-4">
                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                            <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                            <p class="ml-2 font-light capitalize font-mono text-sm text-gray-700 hover:text-gray-900 transition-all duration-200">
                                <?= $user->username; ?>
                            </p>
                        </a>
                        <span class="text-sm text-blue-800 font-mono bg-blue-100 inline rounded-full px-3 py-2 align-top float-right ">
                            <?= $user->email; ?></span>
                    </div>


                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require 'partials/footer.php'; ?>