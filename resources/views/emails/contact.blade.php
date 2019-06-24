<p>内容は以下のとおりです。</p>
<h4>Name</h4>
<p>{{ $request_params->name }}</p>
<h4>Email</h4>
<p>{{ $request_params->email }}</p>
<h4>Content</h4>
<p>{!! nl2br(htmlspecialchars($request_params->content)) !!}</p>
