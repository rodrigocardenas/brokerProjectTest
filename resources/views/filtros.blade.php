<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
<div class="p-6 shadow-md rounded-md text-left" >
    <form class="block">
      <input class="form-input  w-5/6" value="{{ request()->nombre }}" name="search" placeholder="Buscar por Propiedad, Vendedor, Direccion">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
    </form>
</div>

