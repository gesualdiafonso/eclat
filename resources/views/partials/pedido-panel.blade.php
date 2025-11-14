<div id="pedido-panel" class="p-4 border rounded bg-white">
    <h4>Tu Selección</h4>
    <div id="pedido-modelos-list"></div>
    <div id="pedido-servicos-list"></div>

    <form id="finalize-form" method="POST" action="{{ route('pedido.finalize') }}">
        @csrf
        <textarea name="notes" placeholder="Notas (opcional)"></textarea>
        <button type="submit" id="btn-finalize">Confirmar Contratación</button>
    </form>
</div>
