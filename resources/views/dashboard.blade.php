<h5>Hi: {{ Auth::user()->name }}</h5>
<ul>
    <li><a href="#">Messager</a></li>
    <li><a href="#">Slack</a></li>
    <li><a href="#">Chatwork</a></li>
    <li><a href="{{ route('logout') }}">Logout</a></li>
</ul>
