<?php require __DIR__ . '/../partials/head.php'; ?>

<form action="/medicamento" method="post" class="p-8 mx-auto rounded-lg border border-white w-fit" enctype="multipart/form-data">

    <div class="w-full mx-auto">
        <label for="medicamento-nome" class="block text-lg font-medium">Nome do Medicamento</label>
        <input type="text" id="medicamento-nome" name="medicamento-nome" class="text-black p-1 px-4 w-full rounded-md my-2" placeholder="Paracetamol 1g" required>
    </div>

    <div class="w-full mx-auto">
        <label for="medicamento-horario" class="block text-lg font-medium">Horário do Medicamento</label>
        <input type="time" id="medicamento-horario" name="medicamento-horario" class="text-black p-1 px-4 w-full rounded-md my-2" required>
    </div>

    <div class="w-full mx-auto">
        <label for="medicamento-dose" class="block text-lg font-medium">Intervalo entre Doses (em horas)</label>
        <select name="medicamento-dose" id="medicamento-dose" class="text-black p-1 px-4 w-full rounded-md my-2" required>
            <?php for ($i = 2; $i <= 12; $i++) { ?>
                <option value="A cada <?= $i ?> horas">
                    A cada <?= $i ?> horas
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="w-full mx-auto">
        <label for="medicamento-foto" class="block text-lg font-medium">Foto do Medicamento</label>
        <img id="foto-preview" class="my-2 w-[18em]" style="max-width: 100%; display: none;" alt="Pré-visualização da Foto">
        <button class="p-2 text-black border border-black rounded-sm bg-gray-200" type="button" onclick="tirarFoto()">Tirar Foto</button>
        <input type="file" id="medicamento-foto" name="medicamento-foto" class="my-2" accept="image/*" capture="camera" style="display: none;" required>
    </div>

    <div class="w-full mx-auto">
        <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded-md mt-4 hover:bg-blue-600">
            Salvar Medicamento
        </button>
    </div>

</form>

<script>
    function tirarFoto() {
        const fotoInput = document.getElementById('medicamento-foto');
        fotoInput.click();

        fotoInput.addEventListener('change', () => {
            const file = fotoInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    const preview = document.getElementById('foto-preview');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    }
</script>

<?php require __DIR__ . '/../partials/foot.php'; ?>