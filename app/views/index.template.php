<?php require __DIR__ . '/partials/head.php'; ?>

<main class="">
    <header>
        <div>
            <h3 class="font-medium text-2xl">Olá, Guilherme Wilker</h3>
            <p class="text-sm text-zinc-400">Como você está se sentindo hoje?</p>
        </div>
    </header>

    <!-- Lembrete de Medicamentos -->
    <?php require __DIR__ . '/partials/_reminderMed.php'; ?>

    <h2 class="text-xl font-medium">O que deseja fazer?</h2>

    <div class="grid grid-cols-2 grid-rows-2 gap-3 my-4">
        <!-- Item que ocupa 4 linhas na primeira coluna -->
        <a href="/medicamentos" class="col-span-1 row-span-2 bg-violet-300 rounded-2xl p-4 w-full text-black hover:bg-violet-400 ease-out duration-300 h-fit mt-3">
            <span class="block p-1 px-4 w-fit rounded-full text-sm bg-zinc-900 text-white">
                Medicamentos
            </span>

            <h3 class="text-2xl font-black my-1 mt-3">
                Adicione seus medicamentos
            </h3>

            <p class="text-sm font-medium text-zinc-600">
                Crie lembretes para seus medicamentos e nós sempre iremos notificá-lo(a).
            </p>

            <img src="/assets/img/pilulas.png" class="w-20 block ml-auto my-2" />
        </a>

        <!-- Primeiro item que ocupa 2 linhas na segunda coluna -->
        <div class="col-span-1 row-span-1 bg-blue-200 rounded-2xl p-4 w-full text-black hover:bg-blue-300 ease-out duration-300">

            <h3 class="text-2xl font-black my-1 mt-3">
                Atendimento Online
            </h3>

            <div class="flex justify-between">
                <p class="text-sm font-medium text-zinc-600">
                    Sua consulta em minutos!
                </p>

                <img src="/assets/img/equipe-medica.png" class="w-14" />
            </div>

        </div>

        <!-- Segundo item que ocupa 2 linhas na segunda coluna -->
        <div class="col-span-1 row-span-1 bg-green-200 rounded-2xl p-4 w-full text-black hover:bg-green-300 ease-out duration-300 h-fit">

            <h3 class="text-2xl font-black my-1 mt-3">
                Atividade Física
            </h3>

            <div class="flex justify-between">
                <p class="text-sm font-medium text-zinc-600">
                    Que tal alguns exercícios rápidos?
                </p>

                <img src="/assets/img/atividade-fisica.png" class="w-14" />
            </div>

        </div>
    </div>

    <div class="my-1 bg-white rounded-2xl p-4 w-full text-black">
        <h3 class="text-2xl font-black my-1 mt-3">
            🚨🚨🚨🚨 EMERGENCIA! 🚨🚨🚨🚨
        </h3>
    </div>
</main>

<?php require __DIR__ . '/partials/foot.php'; ?>