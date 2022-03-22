<form method="POST" action="{{ route('plusses.destroy', $plussId) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Törlés</button>
</form>

