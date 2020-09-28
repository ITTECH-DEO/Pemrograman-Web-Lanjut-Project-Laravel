<html>
<h1>Tampilkan Data dari DataBase</h1>
<h1>DEO FAHMAWAN MI 2E 1931710126</h1>
<table border="1">
    <tr>
    <th>id</th>
    <th>Title</th>
    <th>Content</th>
    <th>Image</th>
    </tr>
	<tr>
    <td>{{$article->id}}</td>
    <td>{{$article->title}}</td>
    <td>{{$article->content}}</td>
    <td>{{$article->featured_image}}</td>
    </tr>
</table>
</html>