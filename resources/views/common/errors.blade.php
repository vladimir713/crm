<!-- resources/views/common/errors.blade.php -->

@if (count($errors) > 0)
  
  <div class="alert alert-danger">
    <strong>Упс! Ошибка ввода...</strong>

    <br><br>

    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif