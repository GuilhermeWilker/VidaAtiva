<?php require __DIR__ . '/partials/head.php'; ?>

<main class="">
    <header>
        <div>
            <h3 class="font-medium text-2xl">Olá, Guilherme Wilker</h3>
            <p class="text-sm text-zinc-400">Como você está se sentindo hoje?</p>
        </div>
    </header>

    <!-- Adicionar medicamento -->
    <a href="/create/medicamento" class="my-9 bg-green-200 rounded-2xl p-4 w-full text-black block hover:bg-green-300 ease-out duration-300 block">
        <span class="block p-1 px-4 w-fit rounded-full text-sm bg-zinc-900 text-white">
            Adicionar Medicamento
        </span>

        <div class="flex justify-between">

            <div class="w-[60%]">
                <h3 class="text-3xl font-black my-1 mt-3">
                    Que tal uma foto do medicamento?
                </h3>

                <p class="text-sm">
                    Vamos facilitar e ajuda-lo(a) a identificar o medicamento correto e a hora certa de tomá-lo!
                </p>
            </div>

            <img src="/assets/img/camera.png" class="h-28 mt-auto" alt="">

        </div>
    </a>

    <!-- Lista de medicamentos -->
    <div class="my-9 bg-blue-200 rounded-2xl p-4 w-full text-black block hover:bg-blue-300 ease-out duration-300">

        <div class="flex justify-between">

            <div class="w-[60%]">
                <h3 class="text-3xl font-black my-1 mt-3">
                    Ver todos os meus medicamentos.
                </h3>
            </div>

            <img src="/assets/img/pilulas.png" class="w-24 mt-auto" alt="">

        </div>
    </div>

</main>

<?php require __DIR__ . '/partials/foot.php'; ?>