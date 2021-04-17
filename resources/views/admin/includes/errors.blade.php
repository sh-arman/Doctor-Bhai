@if (count($errors) > 0)
  <ul class="list-group">
    @foreach($errors->all() as $error)
      <li class="list-group-item text-danger text-center">
            <strong>{{ $error }}</strong>
      </li>
    @endforeach
  </ul>
@endif
