<form class="md:w-1/2 space-y-5">
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />

        <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')"
            placeholder="Titulo Vacante" />

        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />

        <select name="salario" id="salario"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option value="">-- Selecciona un rol --</option>
            <option value="1">Developer - Obtener Empleo</option>
            <option value="2">Recruiter - Publicar Empleo</option>

        </select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />

        <select name="categoria" id="categoria"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option value="">-- Selecciona un rol --</option>
            <option value="1">Developer - Obtener Empleo</option>
            <option value="2">Recruiter - Publicar Empleo</option>

        </select>
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />

        <x-text-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" :value="old('empresa')"
            placeholder="Empresa" />

        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="ultimo_dia" :value="__('Último dia para postularse')" />

        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" name="ultimo_dia" :value="old('ultimo_dia')" />

        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="descripcion" :value="__('Descripcion Puesto')" />

        <textarea 
        name="descripcion"
        placeholder="Descripcion general del puesto"
        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-72"
        ></textarea>

        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />

        <x-text-input id="imagen" class="block mt-1 w-full" type="file" name="imagen"/>

        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>

    <x-primary-button>
        Crear Vacante
    </x-primary-button>
</form>
