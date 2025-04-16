<h1>Chào bạn <?=Auth::user()->name?>!</h1>
<p>Đây là trang download, chỉ khi đăng nhập mới vào được</p>
<p>
    <a href="{{route('index')}}">Quản trị tin</a>
    <a href="{{route('login')}}">dashboard</a>
</p>