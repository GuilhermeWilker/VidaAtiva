<?php require __DIR__ . '/../partials/head.php'; ?>

<section class="flex gap-2 justify-center flex-wrap h-[80vh] overflow-y-scroll p-1">

    <?php if (!$medicamentos) { ?>
        <p>Você ainda não possui medicamentos registrados..</p>
    <?php } ?>

    <?php foreach ($medicamentos as $med) { ?>
        <div class="bg-blue-300 rounded-2xl p-4 text-black hover:bg-blue-400 ease-out duration-300 w-[13rem] h-[20rem] flex flex-col justify-between">

            <h1 class="text-2xl font-black mt-3">
                <?= $med->medicamento ?>
            </h1>

            <img src="/storage/<?= $med->imagem ?>" class="w-full h-fit" alt="imagem medicamento">

            <p class="text-sm font-medium">
                <?= $med->dose ?>
            </p>

            <div class="rounded-full border border-white w-12 h-12 p-1 flex items-center justify-center my-2 ml-auto transition ease-in-out hover:-rotate-45 hover:bg-blue-400">
                >
            </div>
        </div>
    <?php } ?>

</section>
<?php require __DIR__ . '/../partials/foot.php'; ?>