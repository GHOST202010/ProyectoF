<x-template titulo="Editar facturas">
    <h1 class="text-center">Edición de facturas</h1>
    <form action="/invoice/{{ $invoice->id }}" method="post" class="container">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="supplier_id" class="form-label">Nombre del proveedor:</label>
            <select name="supplier_id" class="form-select">
                @foreach ($supplier as $single)
                    <option value="{{ $single->id }}" @if ($invoice->supplier->id == $single->id) selected @endif>
                        {{ $single->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="status" class="form-label">Estado de la factura:</label>
            <input type="text" name="status" class="form-control" value="{{ old('status') ?? $invoice->status }}"
                placeholder="Pagado, no pagado">
        </div>
        <div class="form-group">
            <label for="price" class="form-label">Total a pagar:</label>
            <input type="number" name="price" class="form-control" value="{{ old('price') ?? $invoice->price }}"
                placeholder="Cantidad de dinero">
        </div>
        <div class="form-group" class="form-label">
            <label for="date">Fecha de la factura:</label>
            <input type="date" name="date" class="form-control" value="{{ old('date') ?? $invoice->date }}">
        </div>
        <div class="text-center" class="form-label">
            <button type="submit" class="btn btn-primary mt-1 justify-content-center">Guardar</button>
        </div>
    </form>
</x-template>
