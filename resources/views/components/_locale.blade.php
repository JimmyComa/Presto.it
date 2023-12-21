<form class="d-inline" action="{{ route('set_locale', $lang) }}" method="POST">
    @csrf
    <button class="btn btnFooter border-0" type="submit">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" class="textBlur" width="32" height="32" alt="flag">
    </button>
</form>
