<h1>Welcome home page</h1>
<p>
    Olá {{ $name }}
</p>
<p>
    Seus habitos são
</p>
<u>
    @foreach($habits as $habit)
    <li>
        {{ $habit }}
    </li>
    @endforeach
</u>
