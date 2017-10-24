<h1>Found broken links</h1>

@foreach($urlsGroupedByStatusCode as $statusCode => $urls)

    Crawled {{ count($urls) }} link(s) with status code {{ $statusCode }}:

    <ul>
    
        @foreach($urls as $url)
            <li>
                <a href="{{ $url->scheme.'://'.$url->host.''.$url->path }}">
                    {{ $url->host.''.$url->path }}
                </a>
            </li>
        @endforeach
        
    </ul>
    
@endforeach
