<div class="col-md-3">
    <div class="panel panel-default panel-flush">
        <div class="panel-heading">
            Sidebar
        </div>

        <div class="panel-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin') }}">
                        Dashboard
                    </a>
                </li>
                <li role="presentation">
                    {{ link_to_route('news.index', 'News') }}
                </li>
                <li role="presentation">
                    {{ link_to_route('posts.index', 'Posts') }}
                </li>
            </ul>
        </div>
    </div>
</div>
