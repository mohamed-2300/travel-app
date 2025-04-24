<div class="space-y-4">
  <div>
    <label class="block mb-1 font-medium">Titre</label>
    <input type="text" name="title" value="{{ old('title', $product->title ?? '') }}" class="w-full border border-gray-300 rounded p-2" required>
  </div>

  <div>
    <label class="block mb-1 font-medium">Type</label>
    <select name="type" class="w-full border border-gray-300 rounded p-2" required>
      <option value="Omra" @if(old('type', $product->type ?? '') === 'Omra') selected @endif>Omra</option>
      <option value="Hajj" @if(old('type', $product->type ?? '') === 'Hajj') selected @endif>Hajj</option>
    </select>
  </div>

  <div>
    <label class="block mb-1 font-medium">Durée</label>
    <input type="text" name="duration" value="{{ old('duration', $product->duration ?? '') }}" class="w-full border border-gray-300 rounded p-2" required>
  </div>

  <div>
    <label class="block mb-1 font-medium">Prix (€)</label>
    <input type="number" name="price" value="{{ old('price', $product->price ?? '') }}" class="w-full border border-gray-300 rounded p-2" required>
  </div>

  <div>
    <label class="block mb-1 font-medium">Ville de départ</label>
    <input type="text" name="departure" value="{{ old('departure', $product->departure ?? '') }}" class="w-full border border-gray-300 rounded p-2" required>
  </div>

  <div>
    <label class="block mb-1 font-medium">Date de début</label>
    <input type="date" name="start_date" value="{{ old('start_date', isset($product->start_date) ? \Illuminate\Support\Str::limit($product->start_date, 10, '') : '') }}" class="w-full border border-gray-300 rounded p-2">
  </div>

  <div>
    <label class="block mb-1 font-medium">Date de fin</label>
    <input type="date" name="end_date" value="{{ old('end_date', isset($product->end_date) ? \Illuminate\Support\Str::limit($product->end_date, 10, '') : '') }}" class="w-full border border-gray-300 rounded p-2">
  </div>
</div>
