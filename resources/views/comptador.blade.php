<div>
    <h1>Comptador: {{ $comptador }}</h1>
    <form action="/incrementar" method="POST">
        @csrf
        <button type="submit">Incrementar (+)</button>
    </form>
    <form action="/deccrementar" method="POST">
        @csrf
        <button type="submit">Deccrementar (-)</button>
    </form>
    <form action="/reset" method="POST">
        @csrf
        <button type="submit">Reset (=0)</button>
    </form>
</div>
